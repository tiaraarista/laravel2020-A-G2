<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $products = Product::all();
        // $categories = Category::find($id_kategori)->categories;
        
        $products = Product::with('category')->get();
        return view('product.index', compact('products'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->id_kategori = $request->input('id_kategori');
        $product->nama_barang = $request->input('nama');
        $product->harga = $request->input('harga');
        $product->spesifikasi = $request->input('spesifikasi');
        $product->qty = $request->input('qty');
        $product->save();
        
        return redirect('product')->with('success', 'Product baru telah ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_barang)
    {
        $product = Product::where('id_barang',$id_barang)->get();
        return view('product.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_barang)
    {
        $categories = Category::all();
        // mengambil data user berdasarkan id yang dipilih
        $product = Product::where('id_barang',$id_barang)->get();
        // passing data produk yang didapat ke view edit.blade.php
        return view('product.edit',['product' => $product, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id_barang)
    {
        Product::destroy($id_barang);
        $nama = $request->name;
        return redirect('product')->with(['success' => 'Berhasil! Data '.$nama.' berhasil dihapus.']);
    }
}
