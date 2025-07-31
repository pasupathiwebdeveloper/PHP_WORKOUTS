<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Product::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val = $request->validate([
            'name'=>"required",
            'price'=>'required'
        ]);
        $yes = Product::create($val);
        return response()->json($yes,201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $test = Product::find($id);
        if(!empty($test)) {
            return $test;
        }
        else {
            return response() -> json(["error"=>"no products"],404); 
        }
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $val = $request->validate([
            "name"=>"required",
            "price"=>"required"
        ]);
        $yes = Product::find($id);
        $yes->update($val);

        return response()->json(["message","updated"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $yes = Product::find($id);
        $yes->delete();
        return response()->json($yes,201);
    }
}
