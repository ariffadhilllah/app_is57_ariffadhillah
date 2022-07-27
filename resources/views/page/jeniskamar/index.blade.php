@extends('layouts.master')

@section('title', 'Datajeniskamar')
@section('navje', 'active')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data jeniskamar</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data jenisKamar</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div> 

    <div class="container  bg-white mt-3 p-4">
    {{-- <h1>Data Kamar</h1> --}}
   
    <a href="/jeniskamar/form" class="btn btn-primary">Tambah</a>
   
    <div class="card">
        <div class="card-header">
            Data jenis Kamar
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">kd jenis</th>
                    <th scope="col">Nama Jenis</th>
                    <th scope="col">max anak</th>
                    <th scope="col">max dewasa</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($jeniskamar as $item)
                        <tr>
                            <th scope="row">{{$nomor++}}</th>
                            <td>{{$item->kd_jenis}}</td>
                            <td>{{$item->nm_jenis}}</td>
                            <td>{{$item->max_anak}}</td>
                            <td>{{$item->max_dewasa}}</td>
                            <td>{{$item->harga}}</td>
                            <td>

                            

                                <a href="/jeniskamar/edit/{{$item->id}}" class="btn btn-success btn-sm">edit</a>
                              <!-- Button trigger modal -->
<button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{$item->id}}">HAPUS</button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">info</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            yakin kamar {{$item->nm_jenis}} ingin dihapus?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-warning btn-sm" data-bs-dismiss="modal">Batal</button>
            <form method="POST" action="/jeniskamar/{{$item->id}}">
            @csrf
            @method ('DELETE')

        <button type="submit" class="btn btn-danger btn-sm ">Hapus</button>
            </form>
        </div>
      </div>
    </div>
  </div>
  

                                </td>
                            </tr>
                        
                            @empty
                        <tr>
                            <td colspan="8">Belum Ada Data</td>
                        </tr>
                    @endforelse
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection