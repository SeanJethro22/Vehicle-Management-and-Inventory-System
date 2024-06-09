<?php

namespace App\Http\Controllers;

use App\Models\Other;
use App\Http\Requests\StoreOtherRequest;
use App\Http\Requests\UpdateOtherRequest;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;

class OtherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
       $this->middleware('auth');
       $this->middleware('permission:create-other|edit-other|delete-other', ['only' => ['index','show']]);
       $this->middleware('permission:create-other', ['only' => ['create','store']]);
       $this->middleware('permission:edit-other', ['only' => ['edit','update']]);
       $this->middleware('permission:delete-other', ['only' => ['destroy']]);
    }

    public function index(): View
    {
        $others = Other::latest()->paginate(5);

        return view('others.index',compact('others'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('others.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOtherRequest $request) : RedirectResponse
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

        Other::create($input);
       
        return redirect()->route('others.index')
                ->withSuccess('New Other Inventory is added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Other $other) : View
    {
        return view('others.show', compact('other'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Other $other) : View
    {
        return view('others.edit', compact('other'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOtherRequest $request, Other $other) : RedirectResponse
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

        $other->update($input);
      
        return redirect()->route('others.index')
                        ->withSuccess('Other Inventory is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Other $other) : RedirectResponse
    {
        $other->delete();
        return redirect()->route('other.index')
                ->withSuccess('Other Inventory is deleted successfully.');
    }
}
