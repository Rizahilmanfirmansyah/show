@extends('siswa.layout')

@section('content')
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>  

<body>
    <div class="container">
        <h1 class="text-center">DATA SISWA</h1>
       <a class="btn btn-success" href="{{ route('siswasip.create')}}">Tambah</a>
        <br><br>
        <div>
            @if ($message = Session::get('success'))
            <div class="alert alert-success " role="alert">
                <div class="row">
                <strong><p>{{ $message }}</p></strong>
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">  </button>
                </div>
              </div>
            @endif
        </div>
        <table id="datasiswa" class="table table-striped table-bordered text-center">
            <thead>
                <tr>
                    {{-- <th>NO</th> --}}
                    <th>NIS</th>
                    <th>NAMA</th>
                    <th>AKTIF</th>
                    <th>TAHUN MASUK</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            @foreach ($siswaya as $key => $siswa)
            <tr>
                {{-- <td>{{$key++}}</td> --}}
                <td>{{$siswa->nis}}</td>
                <td>{{$siswa->nama}}</td>
                <td>{{$siswa->aktif}}</td>
                <td>{{$siswa->tahunmasuk}}</td>
                <td class="">
                     <form action="{{ route('siswasip.destroy', $siswa->nis)}}" method="POST">
 
                         <a class="btn btn-success bi bi-pencil-fill" href="{{ route('siswasip.edit',$siswa->nis)}}"></a>
 
                         @csrf
                         @method('DELETE')
 
                         <button class="btn btn-danger bi bi-trash-fill" type="submit"></button>
                     
                     </form>
                 </td>
            </tr>
            @endforeach
        </table>
    </div> 
</body>
<script>
    $(document).ready(function () {
    $('#datasiswa').DataTable();
});
</script>
</html>
<br><br>
@endsection