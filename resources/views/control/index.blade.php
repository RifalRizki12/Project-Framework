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
                            <h3 class="panel-title">Data Admin</h3>
                            <form class="navbar-form navbar-left" method="GET" action="/control">
                                <div class="input-group">
                                    <input name="cari" type="text" value="" class="form-control" placeholder="Cari Akun Admin">
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
                                    <tr>
                                        <th>Nama Depan</th>
                                        <th>Nama Belakang</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Agama</th>
                                        <th>No Telepon</th>
                                        <th>Email</th>
                                        <th>Alamat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data_control as $control)
                                    {{-- @if ($control->user->role == 'pembeli') --}}
                                    <tr>
                                        <td>{{$control->nama_depan}}</td>
                                        <td>{{$control->nama_belakang}}</td>
                                        <td>{{$control->jenis_kelamin}}</td>
                                        <td>{{$control->agama}}</td>
                                        <td>{{$control->nohp}}</td>
                                        <td>{{$control->user->email}}</td>
                                        <td>{{$control->alamat}}</td>
                                        <td >
                                            <a href="/control/{{$control->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="/control/{{$control->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin')">Delete</a>
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
        <form action="/control/create" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="">Nama Depan</label>
                <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" 
                aria-describedby="emailHelp" value="{{old('nama_depan')}}" required>
            </div>
            <div class="form-group" >
                <label for="">Nama Belakang</label>
                <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" 
                aria-describedby="emailHelp" value="{{old('nama_belakang')}}">
            </div>

            <div class="form-group{{$errors->has('email') ? ' has-error' : ''}}" >
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" 
                aria-describedby="emailHelp" placeholder="Email" value="{{old('email')}}" required>
                    @if($errors->has('email'))
                        <span class="help-block">{{$errors->first('email')}}</span>
                    @endif
            </div>

            <div class="form-group">
                <label for="">No Telepon</label>
                  <input name="nohp" type="text" class="form-control" id="exampleInputEmail1" 
                  aria-describedby="emailHelp" value="{{old('nohp')}}">
            </div>

            {{-- <div class="form-group{{$errors->has('role') ? ' has-error' : ''}}" >
                <input name="role" type="text" class="form-control" id="exampleInputEmail1" 
                aria-describedby="emailHelp" placeholder="Role" value="{{old('role')}}">
                    @if($errors->has('role'))
                        <span class="help-block">{{$errors->first('role')}}</span>
                    @endif
            </div> --}}

            {{-- <div class="form-group" >
                <label for="exampleFormControlSelect1">Role</label>
                <select name="role" class="form-control" id="exampleFormControlSelect1">
                  <option value="admin"{{(old('role') == 'admin') ? ' selected' : ''}}>admin</option>
                  <option value="pembeli"{{(old('role') == 'pembeli') ? ' selected' : ''}}>pembeli</option>
                </select>
            </div> --}}

            <div class="form-group" >
                  <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                  <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                    <option value="Laki-Laki"{{(old('jenis_kelamin') == 'Laki-Laki') ? ' selected' : ''}}>Laki-Laki</option>
                    <option value="Perempuan"{{(old('jenis_kelamin') == 'Perempuan') ? ' selected' : ''}}>Perempuan</option>
                  </select>
            </div>

            <div class="form-group">
                <label for="">Agama</label>
                  <input name="agama" type="text" class="form-control" id="exampleInputEmail1" 
                  aria-describedby="emailHelp" value="{{old('agama')}}" required>
                    @if($errors->has('agama'))
                        <span class="help-block">{{$errors->first('agama')}}</span>
                    @endif  
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Alamat</label>
                <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3" required>{{old('alamat')}}</textarea>
            </div>
  
            <div class="form-group{{$errors->has('avatar') ? ' has-error' : ''}}" >
                <label for="exampleFormControlTextarea1">Avatar</label>
                <input type="file" name="avatar" class="form-control">
                @if($errors->has('avatar'))
                    <span class="help-block">{{$errors->first('avatar')}}</span>
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
