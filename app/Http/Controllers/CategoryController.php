<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         // memanggil view tambah
         return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ctg = new Category;
        $ctg->nama_kategori = $request->get('nama');
        $ctg->save();
        
        return redirect('categories')->with('success', 'Kategori baru telah ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_kategori)
    {
        $category = Category::where('id_kategori',$id_kategori)->get();
        return view('categories.show', ['category' => $category]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_kategori)
    {
        // mengambil data user berdasarkan id yang dipilih
       $category = Category::where('id_kategori',$id_kategori)->get();
       // passing data user yang didapat ke view edit.blade.php
       return view('categories.edit',['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_kategori)
    {
        $category = Category::findOrFail($id_kategori);
        $category->nama_kategori = $request->nama_kategori;
        $category->save();

         // alihkan halaman ke halaman Index
         if($request->old_name == $request->nama_kategori){
            return redirect('/categories')->with(['error' => 'Gagal Edit! Data masih sama!']);
        }else{
            return redirect('/categories')->with(['success' => 'Berhasil! mengubah '.$request->old_name.' menjadi '.$request->nama_kategori]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id_kategori)
    {
        Category::destroy($id_kategori);
        $nama = $request->name;
        return redirect('categories')->with(['success' => 'Berhasil! Data '.$nama.' berhasil dihapus.']);
    }
}
