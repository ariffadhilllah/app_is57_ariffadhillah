@extends('layouts.master')


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
              <li class="breadcrumb-item active">data kamar</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div> 
  
<div class="container  bg-white mt-3 p-4">
    {{-- <h1>Data kamar</h1> --}}
    <br>
    <br>
    <br>
    
    <div class="card">
        <div class="card-header">
            Form Tambah Data kamar 
        </div>
            <div class="card-body">
            <form method="post" action="/kamar/store" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">No Kamar</label>
                    <input type="text" name="no" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                
                
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">jenis kamar</label>
                  <select name="kamar" class="form-control">
                      <option value="">-Pilih Kamar-</option>
                      @foreach ($jeniskamar as $item)
                          <option value="{{$item->id}}">{{$item->nm_jenis}}</option>  
                      @endforeach
                  </select>
              </div>
                

                
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Foto</label>
                    <input type="file" name="foto" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                
                <button type="submit" class="btn btn-primary">Tambah Kamar</button>
                <a href="/kamar" class="btn btn-warning">Batal</a>
            </form>
        </div>
    </div>
</div>
</div>
@endsection