@extends('layouts.master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Edit Data</h3>
                            </div>
                            <div class="panel-body">
                                <form action="/postsBarang/{{$barang->id}}/update" method="POST" enctype="multipart/form-data" >
                                    {{ csrf_field() }}
                        
                                    <div class="form-group">
                                        <label for="">Nama Barang</label>
                                        <input name="nama_barang" type="text" class="form-control" id="exampleInputEmail1" 
                                        aria-describedby="emailHelp" value="{{$barang->nama_barang}}" required>
                                    </div>
                        
                                    <div class="form-group">
                                        <label for="">Harga</label>
                                        <input name="harga" type="text" class="form-control" id="exampleInputEmail1" 
                                        aria-describedby="emailHelp" value="{{$barang->harga}}" required>
                                    </div>
                        
                                    <div class="form-group">
                                        <label for="">Stok</label>
                                        <input name="stok" type="text" class="form-control" id="exampleInputEmail1" 
                                        aria-describedby="emailHelp" value="{{$barang->stok}}" required>
                                    </div>
                        
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Keterangan</label>
                                        <textarea name="keterangan" class="form-control" 
                                        id="exampleFormControlTextarea1" rows="3" required>{{$barang->keterangan}}</textarea>
                                    </div>
                        
                                    <div class="form-group{{$errors->has('gambar') ? ' has-error' : ''}}" >
                                        <label for="exampleFormControlTextarea1">Gambar</label>
                                        <input type="file" name="gambar" class="form-control" required>
                                        @if($errors->has('gambar'))
                                            <span class="help-block">{{$errors->first('gambar')}}</span>
                                        @endif  
                                    </div>
                        
                                    <button type="submit" class="btn btn-warning">Update</button>
                                    <a href="/postsBarang" class="btn btn-secondary ">Kembali</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection