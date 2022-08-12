@extends('siswa.layout')

@section('content')

<div class="container">
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 22rem">
            <div class="card-header">
                Edit
            </div>
            <div class="card-body">
                <form action="{{ route('pegawai.store')}}" method="POST">
                    @csrf
                <div class="form-group">
                    <label for="nip">NIP</label>
                    <input type="text" name="nip" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nip">NIK</label>
                    <input type="text" name="nik" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nip">NAMA</label>
                    <input type="text" name="nama" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nip">PANGGILAN</label>
                    <input type="text" name="panggilan" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nip">GELAR AKHIR</label>
                    <input type="text" name="gelarakhir" id="" class="form-control">
                </div>
                <br>
                <button class="btn btn-success" type="submit">Simpan</button>
            </form>
            </div>
            
        
        </div>

    </div>

</div>
    
@endsection