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
                                <form action="/pembeli/{{$pembeli->id}}/update" method="POST" enctype="multipart/form-data" >
                                    {{ csrf_field() }}
                        
                                    <div class="form-group">
                                        <label for="">Nama Depan</label>
                                        <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" 
                                        aria-describedby="emailHelp" value="{{$pembeli->nama_depan}}" required>
                                    </div>
                                    <div class="form-group" >
                                        <label for="">Nama Belakang</label>
                                        <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" 
                                        aria-describedby="emailHelp" value="{{$pembeli->nama_belakang}}">
                                    </div>

                                    <div class="form-group" >
                                        <label for="">Tanggal Lahir</label>
                                        <input name="tanggal_lahir" type="text" class="form-control" placeholder="13 Desember 1999" value="{{$pembeli->tanggal_lahir}}">
                                    </div>
                        
                                    {{-- <div class="form-group{{$errors->has('role') ? ' has-error' : ''}}" >
                                        <input name="role" type="text" class="form-control" id="exampleInputEmail1" 
                                        aria-describedby="emailHelp" placeholder="Role" value="{{old('role')}}">
                                            @if($errors->has('role'))
                                                <span class="help-block">{{$errors->first('role')}}</span>
                                            @endif
                                    </div> --}}
                        
                                    {{-- <div class="form-group">
                                        <label for="exampleFormControlSelect1">Role</label>
                                        <select name="role" class="form-control" id="exampleFormControlSelect1">
                                          <option value="admin" @if($pembeli->user->role == 'admin') selected @endif>admin</option>
                                          <option value="pembeli" @if($pembeli->user->role == 'pembeli') selected @endif>pembeli</option>
                                        </select>
                                    </div> --}}

                                    {{-- <div class="form-group">
                                        <label for="">Password</label>
                                        <input name="password" type="password" class="form-control" 
                                            id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Password" value="{{$pembeli->user->password}}" required>
                                    </div> --}}
                        
                                    <div class="form-group" >
                                          <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                                          <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                                            <option value="Laki-Laki" @if($pembeli->jenis_kelamin == 'Laki-Laki') selected @endif>Laki-Laki</option>
                                            <option value="Perempuan" @if($pembeli->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
                                          </select>
                                    </div>
                        
                                    <div class="form-group">
                                        <label for="">Agama</label>
                                          <input name="agama" type="text" class="form-control" id="exampleInputEmail1" 
                                          aria-describedby="emailHelp" value="{{$pembeli->agama}}" required>
                                            @if($errors->has('agama'))
                                                <span class="help-block">{{$errors->first('agama')}}</span>
                                            @endif  
                                    </div>

                                    <div class="form-group">
                                        <label for="">No Telepon</label>
                                          <input name="nohp" type="text" class="form-control" id="exampleInputEmail1" 
                                          aria-describedby="emailHelp" value="{{$pembeli->nohp}}" required>
                                            @if($errors->has('nohp'))
                                                <span class="help-block">{{$errors->first('nohp')}}</span>
                                            @endif  
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Alamat</label>
                                        <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3" required>{{$pembeli->alamat}}</textarea>
                                    </div>
                          
                                    <div class="form-group{{$errors->has('avatar') ? ' has-error' : ''}}">
                                        <label for="exampleFormControlTextarea1">Avatar</label>
                                        <input type="file" name="avatar" class="form-control" >
                                        @if($errors->has('avatar'))
                                            <span class="help-block">{{$errors->first('avatar')}}</span>
                                        @endif 
                                    </div>
                        
                                    <button type="submit" class="btn btn-warning">Update</button>
                                    <a href="/pembeli" class="btn btn-secondary ">Kembali</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <body>

@endsection