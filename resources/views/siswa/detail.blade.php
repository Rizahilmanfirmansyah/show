@extends('siswa.layout')

@section('content')


    <div class="container">
        <div class="d-flex justify-content-center">
        <div class="card" style="width: 30rem;">
        <div class="card-header">
            Detail Siswa
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <td>NIS</td>
                        <td>:</td>
                        <td>{{$siswa->nis}}</td>
                    </tr>
                    <tr>
                        <td>NAMA</td>
                        <td>:</td>
                        <td>{{$siswa->nama}}</td>
                    </tr>
                    <tr>
                        <td>AKTIF</td>
                        <td>:</td>
                        <td>{{$siswa->aktif}}</td>
                    </tr>
                    <tr>
                        <td class="col-5">TAHUN MASUK</td>
                        <td>:</td>
                        <td>{{$siswa->tahunmasuk}}</td>
                    </tr>
                    <tr>
                        <td>KELAS</td>
                        <td>:</td>
                        <td>{{$siswa->kelas}}</td>
                    </tr>
                </thead>
            </table>
            <br>
                {{-- <p>NIS           &nbsp; : {{$siswa->nis}}</p>
                <p>NAMA          &nbsp;: {{$siswa->nama}}</p>
                <p>AKTIF         &nbsp;: {{$siswa->aktif}}</p>
                <p>TAHUN MASUK   &nbsp;: {{$siswa->tahunmasuk}}</p>
                <br><br> --}}
                <a class="btn btn-success" href="{{ route('siswasip.index')}}">Kembali</a>
            </div>
        </div>
        </div>
    </div>
    </div>



    
@endsection