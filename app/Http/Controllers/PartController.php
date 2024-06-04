<?php

namespace App\Http\Controllers;

use App\Models\Part;
use App\Http\Requests\StorePartRequest;
use App\Http\Requests\UpdatePartRequest;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
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

        $parts = Part::latest()->paginate(5);

        return view('parts.index',compact('parts'))
                ->with('i', (request()->input('page', 1) - 1) * 5);

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

        $request->validate([

            'code' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required',
            'category' => 'required',
            'quantity' => 'required',
            'unit' => 'required',
            'dop' => 'required',
            'description' => 'required',
        ]);
    
        $input = $request->all();
    
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Part::create($input);
       
        return redirect()->route('parts.index')
                ->withSuccess('New Part is added successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Part $part): View
    {
        return view('parts.show', compact('part'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Part $part): View
    {
        return view('parts.edit', compact('part'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePartRequest $request, Part $part): RedirectResponse
    {

        $request->validate([

            'code' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required',
            'category' => 'required',
            'quantity' => 'required',
            'unit' => 'required',
            'dop' => 'required',
            'description' => 'required',
        ]);
    
        $input = $request->all();
    
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }

        $part->update($input);
      
        return redirect()->route('parts.index')
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