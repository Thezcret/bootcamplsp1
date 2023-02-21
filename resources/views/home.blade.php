@extends('layouts.main')
@section('container')
<div class="row">
    <div class="col-12 mb-4">
        <img src="{{ asset('img/benner.png') }}" class="d-block rounded-3" height="600" width="100%"
                  alt="...">
    </div>
    <div class="col-12">
            <Article>
                <h1 class="fw-bold mb-2"><font color="red">Pengaduan Siswa</font></h1>
                 <h3 > Ada keluhan? langsung saja sampaikan saja dengan klik tombol yg di bawah ini</h3>
            </Article>
      
    </div>
    <div class="col-12">
        <a href="/aspirasi" class="btn btn-danger fw-bold">Yuk Ajukan Aspirasi</a>
    </div>
</div>
@endsection
