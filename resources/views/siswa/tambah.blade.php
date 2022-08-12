@extends('siswa.layout')

@section('content')

<div class=" d-flex justify-content-center">
    <div class="d-flex card " style="width: 25rem">
        <div class="card-header">
            Tambah data siswa
        </div>
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Waduh!</strong>Kesalahan input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('siswasip.store')}}" id="myform">
            @csrf
            <div class="form-group">
                <label for="nama">NIS</label>
                <input type="text" name="nis" id="nis" class="form-control">
            </div>
            <div class="form-group">
                <label for="nama">NAMA</label>
                <input type="text" name="nama" id="nama" class="form-control">
            </div>
            <div class="form-group">
                <label for="tahunmasuk">TAHUN MASUK</label>
                <input type="text" name="tahunmasuk" class="form-control">
            </div>
            <br>
            <button class="btn btn-success" type="submit">Tambah</button>
        </form>
        </div>
    </div>
</div>


    
@endsection

