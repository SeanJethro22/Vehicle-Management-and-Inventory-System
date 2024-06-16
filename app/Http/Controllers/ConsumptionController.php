<?php

namespace App\Http\Controllers;

use App\Models\Consumption;
use App\Http\Requests\StoreConsumptionRequest;
use App\Http\Requests\UpdateConsumptionRequest;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\Vehicle;
use App\Models\Driver;
use App\Models\Passenger;

class ConsumptionController extends Controller
{
    /**
     * Instantiate a new ProductController instance.
     */
    public function __construct()
    {
       $this->middleware('auth');
       $this->middleware('permission:create-consumption|edit-consumption|delete-consumption', ['only' => ['index','show']]);
       $this->middleware('permission:create-consumption', ['only' => ['create','store']]);
       $this->middleware('permission:edit-consumption', ['only' => ['edit','update']]);
       $this->middleware('permission:delete-consumption', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('consumptions.index', [
            'consumptions' => Consumption::latest()->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('consumptions.create', [
            'vehicles' => Vehicle::pluck('plateNumber')->all(),
            'drivers' => Driver::pluck('driverName')->all(),
            'passengers' => Passenger::pluck('passengerName')->all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreConsumptionRequest $request): RedirectResponse
    {
        $data = $request->all();
        $data['dist_trav'] = $request->km_end - $request->km_start;
        $data['bal_end'] = $data['total'] - $data['fuel_cons'];

        Consumption::create($data);
        return redirect()->route('consumptions.index')
                ->withSuccess('New Consumption is added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Consumption $consumption): View
    {
        return view('consumptions.show', [
            'consumption' => $consumption
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Consumption $consumption): View
    {
        return view('consumptions.edit', [
            'consumption' => $consumption, 
            'vehicles' => Vehicle::pluck('plateNumber')->all(),
            'drivers' => Driver::pluck('driverName')->all(),
            'passengers' => Passenger::pluck('passengerName')->all()

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateConsumptionRequest $request, Consumption $consumption): RedirectResponse
    {
        $consumption->update($request->all());
        return redirect()->back()
                ->withSuccess('Consumption is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Consumption $consumption): RedirectResponse
    {
        $consumption->delete();
        return redirect()->route('consumptions.index')
                ->withSuccess('Consumption is deleted successfully.');
    }
}