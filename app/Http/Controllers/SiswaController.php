<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;
use App\Models\pegawai;
use App\Models\vsiswa;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswaya = siswa::all();
       
        return view('siswa.index', compact('siswaya'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswaya = siswa::all();
        return view('siswa.tambah', compact('siswaya'));
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
            'nama'=>'required',
            'nis'=>'required',
            'tahunmasuk'=>'required',
            
        ]);
        
        $siswa = siswa::create([
            'nama'=>$request->nama,
            'nis'=>$request->nis,
            'tahunmasuk'=>$request->tahunmasuk,
            

        ]);

        return redirect()->route('siswasip.index')
        ->with('success', 'Siswa Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nis)
    {
        $siswa = siswa::where('nis',$nis)->first();
        return view('siswa.detail', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($nis)
    {
        $siswa = siswa::where('nis', $nis)->first();
        return view('siswa.edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nis)
    {
        $this->validate($request,[
            'nama'=>'required',
            'nis'=>'required',
            'tahunmasuk'=>'required',

        ]);

        $siswa = siswa::where('nis',$request->nis);
        

        $siswa->update($request->except('_token','_method'));
        return redirect()->route('siswasip.index')
        ->with('success', 'Siswa Berhasil Di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nis)
    {
        $siswa = siswa::where('nis', $nis);
        $siswa->delete();
        return redirect()->route('siswasip.index')
        ->with('success', 'Delete Berhasil');
    }
    public function dashboard()
    {
        $siswa = siswa::count();
        $pegawai = pegawai::count();
        return view('siswa.dashboard', compact('siswa', 'pegawai'));

    }
}
