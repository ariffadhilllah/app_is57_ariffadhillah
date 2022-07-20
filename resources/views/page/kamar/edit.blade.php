@extends('layouts.master')

@section('title', 'edit')
@section('navkam', 'active')

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
    {{-- <h1>Data Kamar</h1> --}}
    <br>
    <br>
    <br>
    
    <div class="card">
        <div class="card-header">
            Form Edit Data kamar
        </div>
        <div class="card-body">
            <form method="post" action="/kamar/{{$kamar->id}}">
                @csrf
                @method ('PUT')
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">No Kamar</label>
                    <input type="text" value="{{$kamar->no_kamar}}" name="no" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jenis Kamar</label>
                    <input type="text" value="{{$kamar->jenis_kamar}}" name="jenis" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Harga/malam</label>
                    <input type="text" value="{{$kamar->harga}}" name="harga" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Max.Dewasa</label>
                    <input type="text" value="{{$kamar->max_dewasa}}" name="max_dewasa" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Max.Anak Anak</label>
                    <input type="text" value="{{$kamar->max_anak}}" name="max_anak" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Foto</label>
                    <input type="file" value="{{$kamar->foto}}" name="foto" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
               
                <button type="submit" class=" btn btn-success btn-sm" >Edit Data</button>
                <a href="/kamar" class="btn btn-warning btn-sm">Batal</a>
            </form>
        </div>
    </div>
</div>
</div>
@endsection