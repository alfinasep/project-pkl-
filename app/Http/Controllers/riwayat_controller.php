<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\riwayat;

class riwayat_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $biong=riwayat::all();
        return view('riwayat',compact('biong'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambih');
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
            'nama'  => 'required|max:20',
            'tempat' => 'required|max:30',
            'tanggal_lahir' => 'required|date',
            'hoby' => 'string|max:20',
        ]);
        $riwayat = new riwayat;
        $riwayat->nama= $request->nama;
        $riwayat->tempat = $request->tempat;
        $riwayat->tanggal_lahir = $request->tanggal_lahir;
        $riwayat->hoby = $request->hoby;
        $riwayat->file = $request->file;
        if($request->hasFile('foto'))
        {
            $uploaded_cover = $request->file('foto');
            $extension = $uploaded_cover->getClientOriginalExtension();
            $filename = md5(time()).'.'.$extension;
            $destinationPath = public_path().DIRECTORY_SEPARATOR.'img';
            $uploaded_cover->move($destinationPath, $filename);
            $riwayat->foto= $filename;
        }
        if($request->hasFile('file'))
        {
            $uploaded_cover = $request->file('file');
            $extension = $uploaded_cover->getClientOriginalExtension();
            $filename = md5(time()).'.'.$extension;
            $destinationPath = public_path().DIRECTORY_SEPARATOR.'file';
            $uploaded_cover->move($destinationPath, $filename);
            $riwayat->file= $filename;
        }
        $riwayat->save();
        return redirect('/riwayat');
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
        $value=riwayat::find($id);
        return view('editing',compact('value'));
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
        $riwayat = riwayat::find($request->id);
        $riwayat->nama= $request->nama;
        $riwayat->tempat = $request->tempat;
        $riwayat->tanggal_lahir = $request->tanggal_lahir;
        $riwayat->hoby = $request->hoby;
        if($request->hasFile('foto'))
        {
            $uploaded_cover = $request->file('foto');
            $extension = $uploaded_cover->getClientOriginalExtension();
            $filename = md5(time()).'.'.$extension;
            $destinationPath = public_path().DIRECTORY_SEPARATOR.'img';
            $uploaded_cover->move($destinationPath, $filename);
            $riwayat->foto= $filename;
        }
        if($request->hasFile('file'))
        {
            $uploaded_cover = $request->file('file');
            $extension = $uploaded_cover->getClientOriginalExtension();
            $filename = md5(time()).'.'.$extension;
            $destinationPath = public_path().DIRECTORY_SEPARATOR.'file';
            $uploaded_cover->move($destinationPath, $filename);
            $riwayat->file= $filename;
        }
        $riwayat->save();
        return redirect('/riwayat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $riwayat = riwayat::find($id);
        $riwayat->delete();
        return redirect('riwayat');
    }
}
