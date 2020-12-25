@extends('layouts.master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="alert alert-success" role="alert">
                        {{session('sukses')}}
                    </div>
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Ubah Email Dan Password</h3>
                            </div>
                            <div class="panel-body">
                                <form action="/control/{{$control->id}}/updatepass" method="POST" enctype="multipart/form-data" >
                                    {{ csrf_field() }}

                                    <div class="form-group" >
                                        <label for="">Email</label>
                                        <input required name="email" type="email" class="form-control" id="exampleInputEmail1" 
                                        aria-describedby="emailHelp" placeholder="Email" value="{{$control->user->email}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <input name="password" type="password" class="form-control" required>
                                    </div>
                        
                                    <button type="submit" class="btn btn-warning">Ganti Password</button>
                                    <a href="/control" class="btn btn-primary ">Kembali</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection