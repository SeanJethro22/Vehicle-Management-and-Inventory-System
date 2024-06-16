<?php

namespace App\Http\Controllers;

use App\Models\Passenger;
use App\Http\Requests\StorePassengerRequest;
use App\Http\Requests\UpdatePassengerRequest;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class PassengerController extends Controller
{

    public function __construct()
    {
       $this->middleware('auth');
       $this->middleware('permission:create-passenger|edit-passenger|delete-passenger', ['only' => ['index','show']]);
       $this->middleware('permission:create-passenger', ['only' => ['create','store']]);
       $this->middleware('permission:edit-passenger', ['only' => ['edit','update']]);
       $this->middleware('permission:delete-passenger', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('passengers.index', [
            'passengers' => Passenger::latest()->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('passengers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePassengerRequest $request): RedirectResponse
    {
        Passenger::create($request->all());
        return redirect()->route('passengers.index')
                ->withSuccess('New Passenger is added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Passenger $passenger): View
    {
        return view('passengers.show', [
            'passenger' => $passenger
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Passenger $passenger): View
    {
        return view('passengers.edit', [
            'passenger' => $passenger
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePassengerRequest $request, Passenger $passenger): RedirectResponse
    {
        $passenger->update($request->all());
        return redirect()->back()
                ->withSuccess('Passenger is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Passenger $passenger): RedirectResponse
    {
        $passenger->delete();
        return redirect()->route('passengers.index')
                ->withSuccess('Passenger is deleted successfully.');
    }
}
