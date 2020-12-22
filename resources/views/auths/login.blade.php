@extends('layouts.fronsite')

@section('content')
<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Login
                </h1>
                <p class="text-white link-nav"><a href="index-2.html">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="about.html"> Login</a></p>
            </div>
        </div>
    </div>
</section>

<section class="search-course-area relative" style="background: unset;">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-3 col-md-6 search-course-left">
                <h1 >
                    LOGIN <br>
                    Bergabunglah Bersama Kami!
                </h1>
                <p>
                    Dengan kurikulum yang update dengan kebutuhan pasar, kami menjamin lulusan akan mudah terserap di dunia kerja
                </p>
            </div>

            <div class="col-lg-45 col-md-6 search-course-right section-gap">
                {{ Form::open(array('url' => '/postlogin','class' => 'form-wrap')) }}
                    <h4 class=" pb-20 text-center mb-30">LOGIN</h4>
                    @if (session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{session('error')}}
                    </div>
                    @endif
                    {!!Form::email('email','',['class' => 'form-control','placeholder' => 'Email','required'])!!}
                    {!!Form::password('password',['class' => 'form-control','placeholder' => 'Password','required'])!!}

                    <input type="submit" class="primary-btn text-uppercase" value="Login" style="text-align: center;">
                {{ Form::close() }}
            </div>
        </div>
    </div>
</section>
@endsection