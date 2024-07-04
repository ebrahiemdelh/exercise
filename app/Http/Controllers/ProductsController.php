<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;
use App\Models\Categories;
use App\Models\Prod_Colors;
use App\Models\Prod_Images;
use App\Models\Prod_Sizes;
use App\Models\Projects;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\CodeCoverage\Report\Html\Colors;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

use function Laravel\Prompts\table;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::all();
        return view('Products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categories::all();
        $colors = Prod_Colors::all();
        $sizes = Prod_Sizes::all();
        return view('Products.create', compact('categories', 'colors', 'sizes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductsRequest $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/products/' . $request->name);
            $image->move($destinationPath, $image_name);
        } else {
            $image_name = "none";
        }
        Products::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'category_id' => $request->category_id,
        ]);
        Prod_Images::create([
            'image' => $image_name,
            'title' => $request->name,
        ]);
        DB::table('product_image_link')->insert([
            'image_id' => Prod_Images::latest()->first()->id,
            'product_id' => Products::latest()->first()->id
        ]);
        // dd(Products::latest()->first()->id);
        dd($request->id);
        DB::table('product_color_link')->insert([
            'color_id' => DB::table('prod_colors')->where('color', $request->color)->first()->id,
            'product_id' => Products::latest()->first()->id
        ]);
        return redirect()->route('products.index')->with('success', 'Product created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Products::find($id);
        return view('Products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Products::find($id);
        $categories = Categories::all();
        $projects = Projects::all();
        return view('Products.edit', compact('product', 'categories', 'projects'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductsRequest $request,  $id)
    {
        Products::where('id', $id)->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        return redirect()->route('products.index')->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Products::where('id', $id)->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully');
    }
}
