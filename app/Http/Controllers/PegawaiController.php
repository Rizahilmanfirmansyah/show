<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pegawai;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawai = pegawai::all();
        return view('pegawais.pegawai', compact('pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pegawais = pegawai::all();
        return view('pegawais.tpegawai', compact('pegawais'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nip'=>'required',
            'nik'=>'required',
            'nama'=>'required',
            'panggilan'=>'required',
            'gelarakhir'=>'required'

        ]);

        $pegawais = pegawai::create([
            'nip'=>$request->nip,
            'nik'=>$request->nik,
            'nama'=>$request->nama,
            'panggilan'=>$request->panggilan,
            'gelarakhir'=>$request->gelarakhir
        ]);

        return redirect()->route('pegawai.index')
        ->with('success', 'Pegawai Berhasil di Tambahkan'); 

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
    public function edit($nip)
    {
        $pegawai = pegawai::where('nip', $nip)->first();
        return view('pegawais.edit', compact('pegawai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nip)
    {
        $this->validate($request,[
            'nip'=>'required',
            'nik'=>'required',
            'nama'=>'required',
            'panggilan'=>'required',
            'gelarakhir'=>'required'
        ]);

        $pegawai = pegawai::where('nip', $request->nip);

        $pegawai->update($request->except('_token','_method'));

        return redirect()->route('pegawai.index')
        ->with('success', 'Pegawai Berhasil Di Edit');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nip)
    {
        $pegawai = pegawai::where('nip', $nip);
        $pegawai->delete();
        return redirect()->route('pegawai.index')
        ->with('success', 'Delete');
    }
}
