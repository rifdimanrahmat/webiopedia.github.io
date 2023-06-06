<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_k = Categories::all();
        // return $data_k;
        return view('category-posts', ['data'=>$data_k]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category-posts');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $save = categories::create(['name'=>$request['name'],]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = categories::find($id);
        return view('edit-category',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = categories::find($id);
        return view('edit-category',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = categories::findOrfail($id);
        $save = $category->update($request->all());
        return redirect()->route('');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
