<?php

namespace App\Http\Controllers;

use App\Models\Part;
use App\Http\Requests\StorePartRequest;
use App\Http\Requests\UpdatePartRequest;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class PartController extends Controller
{
    /**
     * Instantiate a new ProductController instance.
     */
    public function __construct()
    {
       $this->middleware('auth');
       $this->middleware('permission:create-part|edit-part|delete-part', ['only' => ['index','show']]);
       $this->middleware('permission:create-part', ['only' => ['create','store']]);
       $this->middleware('permission:edit-part', ['only' => ['edit','update']]);
       $this->middleware('permission:delete-part', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('parts.index', [
            'parts' => Part::latest()->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('parts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePartRequest $request): RedirectResponse
    {
        Part::create($request->all());
        return redirect()->route('parts.index')
                ->withSuccess('New Part is added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Part $part): View
    {
        return view('parts.show', [
            'part' => $part
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Part $part): View
    {
        return view('parts.edit', [
            'part' => $part
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePartRequest $request, Part $product): RedirectResponse
    {
        $part->update($request->all());
        return redirect()->back()
                ->withSuccess('Part is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Part $part): RedirectResponse
    {
        $part->delete();
        return redirect()->route('part.index')
                ->withSuccess('Part is deleted successfully.');
    }
}