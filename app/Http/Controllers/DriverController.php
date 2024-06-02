<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Http\Requests\StoreDriverRequest;
use App\Http\Requests\UpdateDriverRequest;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class DriverController extends Controller
{
    /**
     * Instantiate a new ProductController instance.
     */
    public function __construct()
    {
       $this->middleware('auth');
       $this->middleware('permission:create-driver|edit-driver|delete-driver', ['only' => ['index','show']]);
       $this->middleware('permission:create-driver', ['only' => ['create','store']]);
       $this->middleware('permission:edit-driver', ['only' => ['edit','update']]);
       $this->middleware('permission:delete-driver', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('drivers.index', [
            'drivers' => Driver::latest()->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('drivers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDriverRequest $request): RedirectResponse
    {
        Driver::create($request->all());
        return redirect()->route('drivers.index')
                ->withSuccess('New Driver is added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Driver $driver): View
    {
        return view('drivers.show', [
            'driver' => $driver
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Driver $driver): View
    {
        return view('drivers.edit', [
            'driver' => $driver
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDriverRequest $request, Driver $driver): RedirectResponse
    {
        $driver->update($request->all());
        return redirect()->back()
                ->withSuccess('Driver is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Driver $driver): RedirectResponse
    {
        $driver->delete();
        return redirect()->route('drivers.index')
                ->withSuccess('Driver is deleted successfully.');
    }
}