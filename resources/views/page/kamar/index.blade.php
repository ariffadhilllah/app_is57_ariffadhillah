@extends('layouts.master')

@section('title', 'Data kamar')
@section('navkam', 'active')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Kamar</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Kamar</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div> 

    <div class="container  bg-white mt-3 p-4">
    {{-- <h1>Data Kamar</h1> --}}
   @can('create', App\kamar::class)
   
   <a href="/kamar/form" class="btn btn-primary">Tambah Kamar</a>
   @endcan
   
    <div class="card">
        <div class="card-header">
            Data Kamar
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">No Kamar</th>
                    <th scope="col">Jenis Kamar</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Max.Dewasa</th>
                    <th scope="col">Max.Anak-Anak</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($kamar as $item)
                        <tr>
                            <th scope="row">{{$nomor++}}</th>
                            <td>{{$item->no_kamar}}</td>
                            <td>{{$item->jeniskamars->nm_jenis}}</td>
                            <td>{{$item->jeniskamars->harga}}</td>
                            <td>{{$item->jeniskamars->max_dewasa}}</td>
                            <td>{{$item->jeniskamars->max_anak}}</td>
                            <td>
@can('create', App\kamar::class)
    

                            <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#foto{{$item->id}}">
                                    foto
                                </button>
                                <!-- Modal Foto -->
                                <div class="modal fade" id="foto{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Foto {{$item->no_kamar}}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        <img src='{{ asset("fotokamar/".$item->foto) }}' width="100%">
                                        </div>
                                    </div>
                                    </div>
                                </div> 

                                <a href="/kamar/edit/{{$item->id}}" class="btn btn-success btn-sm">edit</a>
                                 <!-- Button trigger modal -->
<button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{$item->id}}">HAPUS</button>
@endcan
<!-- Modal -->
<div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          yakin kamar {{$item->jenis_kamar}} ingin dihapus?
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-warning btn-sm" data-bs-dismiss="modal">Batal</button>
          <form method="POST" action="/kamar/{{$item->id}}">
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