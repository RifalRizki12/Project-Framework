@extends('layouts.master')
@section('content')

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                @if (session('sukses'))
                <div class="alert alert-success" role="alert">
                    {{session('sukses')}}
                </div>
                @endif
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data Barang</h3>
                            <form class="navbar-form navbar-left" method="GET" action="/postsBarang">
                                <div class="input-group">
                                    <input name="cari" type="text" value="" class="form-control" placeholder="Cari Data Barang">
                                </div>
                            </form>
                            <div class="right">
                                <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal">
                                    <i class="lnr lnr-plus-circle"></i>
                                </button>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr style="text-align: center">
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Nama Produk</th>
                                        <th>Gambar</th>
                                        <th>Deskripsi</th>
                                        <th>Harga</th>
                                        <th>Stok</th>
                                        <th>Tanggal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data_barang as $barang)
                                    {{-- @if ($barang->user->role == 'pembeli') --}}
                                    <tr>
                                        <td>{{$barang->id}}</td>
                                        <td>{{$barang->user->name}}</td>
                                        <td>{{ $barang->nama_barang }}</td>
                                        @if ($barang->gambar == NULL)
                                            <td>Kosong</td>
                                        @else
                                            <td><img src="{{url('images')}}/{{$barang->gambar}}" alt="product-img" style="max-height: 50px"></td>
                                        @endif
                                        <td>{{ str_limit($barang->keterangan, 40) }}</td>
                                        <td>Rp {{ number_format($barang->harga) }}</td>
                                        <td>{{ $barang->stok }}</td>
                                        <td>{{ $barang->created_at->format('d-m-Y') }}</td>
                                        <td >
                                            <a href="/postsBarang/{{$barang->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="/postsBarang/{{$barang->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin')">Delete</a>
                                        </td>
                                    </tr>
                                    {{-- @endif --}}
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/postsBarang/create" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="">Nama Barang</label>
                <input name="nama_barang" type="text" class="form-control" id="exampleInputEmail1" 
                aria-describedby="emailHelp" value="{{old('nama_barang')}}" required>
            </div>

            <div class="form-group">
                <label for="">Harga</label>
                <input name="harga" type="text" class="form-control" id="exampleInputEmail1" 
                aria-describedby="emailHelp" value="{{old('harga')}}" required>
            </div>

            <div class="form-group">
                <label for="">Stok</label>
                <input name="stok" type="text" class="form-control" id="exampleInputEmail1" 
                aria-describedby="emailHelp" value="{{old('stok')}}" required>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Keterangan</label>
                <textarea name="keterangan" class="form-control" id="exampleFormControlTextarea1" rows="3" required>{{old('keterangan')}}</textarea>
            </div>

            <div class="form-group{{$errors->has('gambar') ? ' has-error' : ''}}" >
                <label for="exampleFormControlTextarea1">Gambar</label>
                <input type="file" name="gambar" class="form-control" required>
                @if($errors->has('gambar'))
                    <span class="help-block">{{$errors->first('gambar')}}</span>
                @endif  
            </div>
        
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
    </div>
    </div>
  </div>

@endsection
