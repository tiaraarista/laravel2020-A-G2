<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stockin;
use App\Product;

class StockinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stockins = Stockin::with('product')->get();
        return view('stockin.index', compact('stockins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        return view('stockin.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stockin = new Stockin();
        $stockin->id_barang = $request->input('id_barang');
        $stockin->qty = $request->input('qty');
        $product = Product::findOrFail($request->id_barang);
        $product->qty += $request->qty;
        $product->save();
        $stockin->save();
        
        return redirect('stockin')->with('success', 'Stock baru telah ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_stockin)
    {
        $stockin = Stockin::where('id_stockin',$id_stockin)->get();
        return view('stockin.show', ['stockin' => $stockin]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    public function destroy($id_stockin)
    {
        Stockin::destroy($id_stockin);
        return redirect('/stockin')->with(['success' => 'Berhasil! Stok berhasil dihapus.']);
    }
}
