<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
      return view('products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
$request->validate([
    "name"=>"required",
    "price"=>"required",
    "image"=>"required"
]);
$path =  null;
if($request->file("image")) {
    $path = $request->file("image")->store("storage","public");
}

Product::create([
    "name"=>$request->name,
    "price"=>$request->price,
    "image"=>$path
]);
return redirect("products")->with("success","Created");
       }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view("products.show",compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            "name"=>"required",
            "price"=>"required",
            "image"=>"required"
        ]);
        $product->name = $request->name;
        $product->price = $request->price;
        if($request->hasFile("image")) {

            Storage::disk('public')->delete($product->image);
            $product->image = $request->file("image")->store("storage","public");
        }

        $product->update();
        
        // Product::update([
        //     "name"=>$request->name,
        //     "price"=>$request->price,
        //     "image"=>$product->image
        // ]);
        return redirect("products")->with("success","Updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect("products")->with("success","Deleted");
    }
}
