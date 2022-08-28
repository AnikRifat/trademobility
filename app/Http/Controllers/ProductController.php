<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.pages.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.pages.products.add_products');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        // return view('admin.pages.products.index');
        $request->validate([
            'name' => 'required',
            'details' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2024',
            'price' => 'required',
            'unit' => 'required',
            'category_id' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $filePath = 'assets/images/product/';
            $setImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($filePath, $setImage);
            $input['image'] = $setImage;
        }
        // dd($input);
        Product::create($input);

        return redirect()->route('product.index')->with('success', 'blog uploader Scueesfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        // $product = Product::all();
        // dd($product);

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function details(Product $product)
    {
        return view('front.pages.product_details', compact('product'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.pages.products.edit_products', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        // dd($request->request->all());

        $request->validate([
            'name' => 'required',
            'details' => 'required',
            // 'image' => 'required|image|mimes:jpg,jpeg,png|max:2024',
            'price' => 'required',
            'unit' => 'required',
            'category_id' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $filePath = 'assets/images/product/';
            $setImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($filePath, $setImage);
            $input['image'] = $setImage;
        } else {
            unset($input['image']);
        }
        // dd($input);
        $product->update($input);

        return redirect()->route('product.index')->with('success', 'product uploaded Scueesfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        // dd($category->delete());
        return redirect()->route('product.index')->with('success', 'Product Deleted Scueesfully.');
    }
    /** 
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        // dd($request->input());
        // return $request->input();
        $data = Product::where('name || categories', 'like', '%' . $request->input('query') . '%')->get();
        // dd($data);

        return view('front.pages.search', compact('data'));
    }
}
