<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Cviebrock\EloquentSluggable\Services\SlugService;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.product.index', [
            'title' => 'product',
            'products' => Product::latest()->get(),
        ]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.product.create', [

            'categories' => Category::all(),

        ]);
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //


        $validated = $request->validate([
            'nama' => 'required|max:255',
            'stok' => 'required|numeric|min:0',
            'berat' => 'required',
            'ukuran' => 'required',
            'harga' => 'required|numeric|min:0',
            'image' => 'image|file|max:2048',
            'category_id' => 'required',
            'deskripsi' => 'required'
        ]);

        if ($request->file('image')) {
            $validated['image'] = $request->file('image')->store('img/produk');
        }

        // $validated['slug'] = Str::slug($request->nama, '-');

        Product::create($validated);

        return redirect('/dashboard/product')->with('success', 'Produk berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('dashboard.product.show', [
            'product' => $product
        ]);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('dashboard.product.edit', [
            'product' => $product,
            'categories' => Category::all(),
        ]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
        $validated = [
            'nama' => 'required|max:255',
            'stok' => 'required|numeric|min:0',
            'berat' => 'required',
            'ukuran' => 'required',
            'harga' => 'required|numeric|min:0',
            'image' => 'image|file|max:2048',
            'category_id' => 'required',
            'deskripsi' => 'required'
        ];

        if ($request->nama != $product->nama) {

            $validated['slug'] = 'required|unique:products';
        }



        $validatedData = $request->validate($validated);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('img/produk');
        }


        Product::where('id', $product->id)
            ->update($validatedData);

        return redirect('/dashboard/product')->with('success', 'Product berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if ($product->image) {
            Storage::delete($product->image);
        }
        Product::destroy($product->id);


        return redirect('/dashboard/product')->with('success', 'Product berhasil dihapus');
    }
}
