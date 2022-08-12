@extends('siswa.layout')

@section('content')

<div class="container">
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 22rem">
            <div class="card-header">
                Edit
            </div>
            <div class="card-body">
                <form action="{{ route('pegawai.update', $pegawai->nip)}}" method="post" id="myform">
                    @csrf
                    @method('PUT')
                <div class="form-group">
                    <label for="nip">NIP</label>
                    <input type="text" name="nip" id="" class="form-control" value="{{$pegawai->nip}}">
                </div>
                <div class="form-group">
                    <label for="nip">NIK</label>
                    <input type="text" name="nik" id="" class="form-control" value="{{$pegawai->nik}}">
                </div>
                <div class="form-group">
                    <label for="nip">NAMA</label>
                    <input type="text" name="nama" id="" class="form-control" value="{{$pegawai->nama}}">
                </div>
                <div class="form-group">
                    <label for="nip">PANGGILAN</label>
                    <input type="text" name="panggilan" id="" class="form-control" value="{{$pegawai->panggilan}}">
                </div>
                <div class="form-group">
                    <label for="nip">GELAR AKHIR</label>
                    <input type="text" name="gelarakhir" id="" class="form-control" value="{{$pegawai->gelarakhir}}">
                </div>
                <button class="btn btn-success" type="submit">Simpan</button> &nbsp;
                <a class="btn btn-primary" href="{{route('pegawai.index')}}">Kembali</a>
            </form>
            </div>

            
        
        </div>

    </div>

</div>
    
@endsection