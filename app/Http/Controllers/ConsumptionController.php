<?php

namespace App\Http\Controllers;

use App\Models\Consumption;
use App\Http\Requests\StoreConsumptionRequest;
use App\Http\Requests\UpdateConsumptionRequest;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

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
        return view('consumptions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreConsumptionRequest $request): RedirectResponse
    {
        Consumption::create($request->all());
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
            'consumption' => $consumption
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
    
    public function calculateDistance(Request $request)
{
    // Validate (ensure km_start and km_end are provided)
    $request->validate([
        'dist_trav' => 'required|numeric',
        'km_start' => 'required|numeric',
        'km_end' => 'required|numeric',
    ]);

    // Flash all input values to the session (including dist_trav)
    $request->flash(); 

    // ... Your other logic (e.g., saving to the database) ...
    
    // Return the flashed input values (old() data)
    return response()->json(['old' => $request->old()]); 
}
}