@extends('layouts.fronsite')

@section('content')
<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Pendaftaran
                </h1>
                <p class="text-white link-nav"><a href="index-2.html">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="about.html"> Pendaftaran</a></p>
            </div>
        </div>
    </div>
</section>

<section class="search-course-area relative" style="background: unset;">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-3 col-md-6 search-course-left">
                <h1 >
                    Pendaftaran Online <br>
                    Bergabunglah Bersama Kami!
                </h1>
                <p>
                    Dengan kurikulum yang update dengan kebutuhan pasar, kami menjamin lulusan akan mudah terserap di dunia kerja
                </p>
            </div>

            <div class="col-lg-45 col-md-6 search-course-right section-gap">
                {{ Form::open(array('url' => '/postregister','class' => 'form-wrap')) }}
                    <h4 class=" pb-20 text-center mb-30">Formulir Pendaftaran</h4>
                    
                    <div class="form-group{{$errors->has('nama_depan') ? ' has-error' : ''}}">
                            {!!Form::text('nama_depan','',['name' => 'nama_depan','class' => 'form-control','placeholder' => 'Nama Depan','required'])!!}

                            @if($errors->has('nama_depan'))
                                <span class="help-block">{{$errors->first('nama_depan')}}</span>
                            @endif
                    
                    </div>


                    {!!Form::text('nama_belakang','',['class' => 'form-control','placeholder' => 'Nama Belakang','required'])!!}
                    
                    {!!Form::text('agama','',['class' => 'form-control','placeholder' => 'Agama','required'])!!}
                    
                    {!!Form::textarea('alamat','',['class' => 'form-control','placeholder' => 'Alamat'])!!}
                    
                    <div class="form-select" id="service-select">
                        {!!Form::select('jenis_kelamin', ['Laki-Laki' => 'Laki-Laki', 'Perempuan' => 'Perempuan'])!!}
                    </div>

                    <div class="form-group{{$errors->has('email') ? ' has-error' : ''}}">
                        {!!Form::email('email','',['name' => 'email' ,'class' => 'form-control','placeholder' => 'Email','required'])!!}

                        @if($errors->has('email'))
                        <span class="help-block">{{$errors->first('email')}}</span>
                        @endif

                    </div>

                    
                    {!!Form::password('password',['class' => 'form-control','placeholder' => 'Password','required'])!!}

                    <input type="submit" class="primary-btn text-uppercase" value="Kirim" style="text-align: center;">
                {{ Form::close() }}
            </div>
        </div>
    </div>
</section>
@endsection