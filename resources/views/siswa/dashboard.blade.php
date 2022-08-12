@extends('siswa.layout')

@section('content')

<br><br><br><br>
<body class="">
    <div class="d-flex justify-content-center text-center">
    <div class="row">
    <div class="card"style="width: 18rem;">
        <div class="card-header">
            Siswa
        </div>
        <div class="card-body">
            {{$siswa}}
        </div>
    </div>
    <div class="col-mb-4 col-lg-6">
    <div class="card"style="width: 18rem;">
        <div class="card-header">
            Pegawai
        </div>
        <div class="card-body">
            {{$pegawai}}
        </div>
    </div>
</div>
</div>
</div>
</body>

    
@endsection