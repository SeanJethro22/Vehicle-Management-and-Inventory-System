<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Http\Requests\StorePatientRequest;
use App\Http\Requests\UpdatePatientRequest;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\Vehicle;
use App\Models\Driver;
use App\Models\Responder;

class PatientController extends Controller
{
    /**
     * Instantiate a new ProductController instance.
     */
    public function __construct()
    {
       $this->middleware('auth');
       $this->middleware('permission:create-patient|edit-patient|delete-patient', ['only' => ['index','show']]);
       $this->middleware('permission:create-patient', ['only' => ['create','store']]);
       $this->middleware('permission:edit-patient', ['only' => ['edit','update']]);
       $this->middleware('permission:delete-patient', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('patients.index', [
            'patients' => Patient::latest()->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('patients.create', [
            'vehicles' => Vehicle::pluck('vehicleName')->all(),
            'drivers' => Driver::all()->mapWithKeys(function ($driver) {
                return [$driver->id => trim("{$driver->driverFN} {$driver->driverMN} {$driver->driverLN}")];
                })->all(),
            'responders' => Responder::all()->mapWithKeys(function ($responder) {
                return [$responder->id => trim("{$responder->responderFN} {$responder->responderMN} {$responder->responderLN}")];
                })->all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePatientRequest $request): RedirectResponse
    {
        Patient::create($request->all());
        
        return redirect()->route('patients.index')
                ->with('message','A new patient request is added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Patient $patient): View
    {
        return view('patients.show', [
            'patient' => $patient
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Patient $patient): View
    {
        return view('patients.edit', [
            'patient' => $patient,
            'vehicles' => Vehicle::pluck('vehicleName')->all(),
            'drivers' => Driver::all()->mapWithKeys(function ($driver) {
                return [$driver->id => trim("{$driver->driverFN} {$driver->driverMN} {$driver->driverLN}")];
                })->all(),
            'responders' => Responder::all()->mapWithKeys(function ($responder) {
                return [$responder->id => trim("{$responder->responderFN} {$responder->responderMN} {$responder->responderLN}")];
                })->all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePatientRequest $request, Patient $patient): RedirectResponse
    {
        $patient->update($request->all());
        return redirect()->back()
                ->with('message','The patient request has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient): RedirectResponse
    {
        $patient->delete();
        return redirect()->route('patients.index')
                ->with('message','A patient request has been deleted successfully.');
    }
}