<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subcategories = subcategory::with('category')->paginate(10);
        return view('subcategories.index')->with('subcategories', $subcategories);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = category::pluck('name', 'id');
        return view('subcategories.create')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     */ 
    public function store(Request $request)
    {
        $subcategory = subcategory::create($request->all());
        return redirect()->route('subcategories.show', $subcategory)->with('success', 'SubCategory created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(subcategory $subcategory)
    {
        return view('subcategories.show')->with('subcategory', $subcategory);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(subcategory $subcategory)
    {
        $c = category::pluck("name","id");
        return view('subcategories.edit')->with('categories', $c)->with('subcategory', $subcategory);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, subcategory $subcategory)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required|exists:categories,id'
        ]);
        $subcategory->update($request->all());
        return redirect()->route('subcategories.index')->with('success', 'SubCategory updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(subcategory $subcategory)
    {
        SubCategory::destroy($subcategory->id);
        return redirect()->route('subcategories.index')->with('success', 'SubCategory deleted successfully.');
    }





    

    public function getSubcat($id){
        $subcategories = subcategory::where('category_id', $id)->pluck('name','id');
        return response()->json($subcategories);
    }
}
