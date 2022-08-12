@extends('siswa.layout')

@section('content')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

    <style>
        .fixed{
            
            overflow-x: hidden;
            
        }
    </style>

<body class="">
    <div class="container">
    <h1 class="text-center">DATA PEGAWAI</h1>
    <a href="{{route('pegawai.create')}}" class="btn btn-success">Tambah</a>
    <br><br>
    <div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success " role="alert">
        <div class="row">
        <strong><p>{{ $message }}</p></strong>
        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">  </button>
        </div>
      </div>
    </div>
    @endif
    <br><br>
    <table id="datapegawai" class="table table-striped table-bordered text-center">
        <thead>
        <tr>
            <th>NIP</th>
            <th>NIK</th>
            <th>NAMA</th>
            <th>PANGGILAN</th>
            <th>GELAR AKHIR</th>
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $pegawai as $key => $item)
        <tr>
            <td>{{$item->nip}}</td>
            <td>{{$item->nik}}</td>
            <td>{{$item->nama}}</td>
            <td>{{$item->panggilan}}</td>
            <td>{{$item->gelarakhir}}</td>
            <div class="row">
             <td>
                <form action="{{route('pegawai.destroy', $item->nip)}}" method="POST">

                    <a href="{{route('pegawai.edit', $item->nip)}}" class="btn btn-success bi bi-pencil-fill"></a>

                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger bi bi-trash-fill" type="submit"></button>
                
                </form>
            </td>
        </div>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>
</body>
<br><br>

<script>
     $(document).ready(function () {
    $('#datapegawai').DataTable();
});
</script>
    
@endsection
