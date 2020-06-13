<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use DataTables;
use Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $products = Product::all();
        // $categories = Category::all();
        // $products = Product::with('category')->get();
        // return view('product.index', compact('products'));

        if($request->ajax()){
            $data = Product::latest()->get();
            return DataTables::of($data)->addIndexColumn()
                ->editColumn('nama_kategori', function($data){
                    return $data->category->nama_kategori;})
                ->addColumn('action', function($data){ $c = csrf_field();
                    return '
                    <form action="'.route('product.destroy', $data->id_barang).'" method="post" id="data'. $data->id_barang.'">
                    '.$c.'
                        <input type="hidden" name="_method" value="DELETE">
                    </form>
                        <a href="'.route('product.show', $data->id_barang) .'" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i><span>&nbsp;Show</span></a>
                        <a href="'.route('product.edit', $data->id_barang).'" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i><span>&nbsp;Edit</span></a>
                        <button onclick="deleteData('. $data->id_barang .')" class="btn btn-primary btn-sm"><i class="fa fa-trash"></i>&nbsp;Delete</button>';
                })
            ->RawColumns(['action'])
            ->make(true);
        }
        return view('product.index');
        
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
        $validatedData = $request->validate([
            'harga' => 'required|integer',
            'qty' => 'required|integer',
            'img' => 'required|image|mimes:jpeg,jpg,png,gif',
            'document' => 'required|mimes:pdf',
        ]);

        $product = new Product();
        $product->id_kategori = $request->input('id_kategori');
        $product->nama_barang = $request->input('nama');
        $product->harga = $request->input('harga');
        $product->spesifikasi = $request->input('spesifikasi');
        $product->qty = $request->input('qty');
        $product->img = $request->file('img')->store('products');
        $product->document = $request->file('document')->store('document-products');
        $product->save();
        
        return redirect('product')->with('success', 'Product baru telah ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::where('id_barang',$id)->get();
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
        // mengambil data Produk berdasarkan id yang dipilih
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
    public function update(Request $request, $id_barang)
    {
        $validatedData = $request->validate([
            'harga' => 'required|integer',
            'qty' => 'required|integer',
            'img' => 'required|image|mimes:jpeg,jpg,png,gif',
            'document' => 'required|mimes:pdf',
        ]);
        
        $product = Product::findOrFail($id_barang);
        $product->nama_barang = $request->nama_barang;
        $product->id_kategori = $request->id_kategori;
        $product->harga = $request->harga;
        $product->spesifikasi = $request->spesifikasi;
        $product->qty = $request->qty;

        if($product->img){
            Storage::delete($product->img);
        }
        $product->img = $request->file('img')->store('products');

        if($product->document){
            Storage::delete($product->document);
        }
        $product->document = $request->file('document')->store('document-products');

        $product->save();

        return redirect('/product')->with(['success' => 'Berhasil! diubah']);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id_barang)
    {
        $product = Product::findOrFail($id_barang);

        if($product->img){
            Storage::delete($product->img);
        }

        Product::destroy($id_barang);
        
        $nama_barang = $request->nama_barang;
        return redirect('/product')->with(['success' => 'Berhasil! '.$nama_barang.' berhasil dihapus.']);
    }
}
