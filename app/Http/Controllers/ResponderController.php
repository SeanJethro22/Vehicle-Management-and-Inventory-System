<?php

namespace App\Http\Controllers;

use App\Models\Responder;
use App\Http\Requests\StoreResponderRequest;
use App\Http\Requests\UpdateResponderRequest;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ResponderController extends Controller
{
    
    public function __construct()
    {
       $this->middleware('auth');
       $this->middleware('permission:create-responder|edit-responder|delete-responder', ['only' => ['index','show']]);
       $this->middleware('permission:create-responder', ['only' => ['create','store']]);
       $this->middleware('permission:edit-responder', ['only' => ['edit','update']]);
       $this->middleware('permission:delete-responder', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('responders.index', [
            'responders' => Responder::latest()->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('responders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreResponderRequest $request): RedirectResponse
    {
        Responder::create($request->all());
        return redirect()->route('responders.index')
                ->withSuccess('New Responder is added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Responder $responder): View
    {
        return view('responders.show', [
            'responder' => $responder
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Responder $responder): View
    {
        return view('responders.edit', [
            'responder' => $responder
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateResponderRequest $request, Responder $responder): RedirectResponse
    {
        $responder->update($request->all());
        return redirect()->back()
                ->withSuccess('Responder is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Responder $responder): RedirectResponse
    {
        $responder->delete();
        return redirect()->route('responders.index')
                ->withSuccess('Responder is deleted successfully.');
    }
}