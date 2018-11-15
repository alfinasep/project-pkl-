<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\daftar;

class daftar_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $bk=daftar::all();
        return view('daftar',compact('bk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $daftar = new daftar;
        $daftar->judul_buku= $request->judul_buku;
        $daftar->pengarang = $request->pengarang;
        $daftar->penerbit = $request->penerbit;
        $daftar->tahun_penerbit = $request->tahun_penerbit;
        $daftar->save();
        return redirect('/perpustakaan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $value=daftar::find($id);
        return view('setting',compact('value'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $daftar = daftar::find($request->id);
        $daftar->judul_buku = $request->judul_buku;
        $daftar->pengarang = $request->pengarang;
        $daftar->penerbit = $request->penerbit;
        $daftar->tahun_penerbit = $request->tahun_penerbit;
        $daftar->save();
        return redirect('perpustakaan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $daftar = daftar::find($id);
        $daftar->delete();
        return redirect('perpustakaan');
    }
}
