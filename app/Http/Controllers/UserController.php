<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = User::all();
		return view('user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'name' => 'required',
			'email' => 'required|unique:suppliers',
		]);

		User::create($request->all());

		return response()->json([
			'success' => true,
			'message' => 'Suppliers Created',
		]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $id)
    {
        $user = User::findOrFail($id);
        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       // mengambil data user berdasarkan id yang dipilih
       $user = User::where('id',$id)->get();
       // passing data user yang didapat ke view edit.blade.php
       return view('user.edit',['user' => $user]);
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
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

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
    public function destroy(Request $request)
    {
        $nama = $request->name;
        return redirect('/user')->with(['success' => 'Berhasil! Data '.$nama.' berhasil dihapus.']);
    }
}
