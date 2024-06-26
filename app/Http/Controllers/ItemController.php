<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;

class ItemController extends Controller
{
    
    public function __construct()
    {
       $this->middleware('auth');
       $this->middleware('permission:create-item|edit-item|delete-item', ['only' => ['index','show']]);
       $this->middleware('permission:create-item', ['only' => ['create','store']]);
       $this->middleware('permission:edit-item', ['only' => ['edit','update']]);
       $this->middleware('permission:delete-item', ['only' => ['destroy']]);
    }
    public function index(): View
    {
        $items = Item::latest()->paginate(5);

        return view('items.index',compact('items'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreItemRequest $request): RedirectResponse
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

        Item::create($input);
       
        return redirect()->route('items.index')
                ->withSuccess('New Item is added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item): View
    {
        return view('items.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item): View
    {
        return view('items.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateItemRequest $request, Item $item): RedirectResponse
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

        $item->update($input);
      
        return redirect()->route('items.index')
                        ->withSuccess('Item is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item): RedirectResponse
    {
        $item->delete();
        return redirect()->route('items.index')
                ->withSuccess('Item is deleted successfully.');
    }
}
