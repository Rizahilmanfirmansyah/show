@extends('siswa.layout')

@section('content')

<div class="container">
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 22rem">
            <div class="card-header">
                Edit
            </div>
            <div class="card-body">
                <form action="{{ route('siswasip.update', $siswa->nis)}}" method="post" id="myform">
                    @csrf
                    @method('PUT')
                <div class="form-group">
                    <label for="nip">NIS</label>
                    <input type="text" name="nis" id="" class="form-control" value="{{$siswa->nis}}">
                </div>
                <div class="form-group">
                    <label for="nip">NAMA</label>
                    <input type="text" name="nama" id="" class="form-control" value="{{$siswa->nama}}">
                </div>
                <div class="form-group">
                    <label for="nip">TAHUNMASUK</label>
                    <input type="text" name="tahunmasuk" id="" class="form-control" value="{{$siswa->tahunmasuk}}">
                </div>
                <button class="btn btn-success" type="submit">Simpan</button>
                &nbsp;
                <a class="btn btn-info" href="{{ route('siswasip.index')}}">Kembali</a>
            </form>
            </div>

            
        
        </div>

    </div>

</div>
    
@endsection