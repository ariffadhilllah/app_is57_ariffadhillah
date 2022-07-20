@extends('layouts.master')

@section('title', 'edit')
@section('navje', 'active')

@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div> 
<div class="container  bg-white mt-3 p-4">
    {{-- <h1>Data jenisKamar</h1> --}}
    <br>
    <br>
    <br>
    
    <div class="card">
        <div class="card-header">
            Form Edit Data jenis kamar
        </div>
        <div class="card-body">
            <form method="post" action="/jeniskamar/{{$jeniskamar->id}}">
                @csrf
                @method ('PUT')
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kd Jenis</label>
                    <input type="text" value="{{$jeniskamar->kd_jenis}}" name="kd_jenis" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jenis Kamar</label>
                    <input type="text" value="{{$jeniskamar->nm_jenis}}" name="nm_jenis" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">max anak</label>
                  <input type="text" name="max_anak" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">max dewasa</label>
                <input type="text" name="max_dewasa" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Harga</label>
                    <input type="text" value="{{$jeniskamar->harga}}" name="harga" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

               
                <button type="submit" class=" btn btn-success btn-sm" >Edit Data</button>
                <a href="/jeniskamar" class="btn btn-warning btn-sm">Batal</a>
            </form>
        </div>
    </div>
</div>
</div>
@endsection