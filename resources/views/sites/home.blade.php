@extends('layouts.fronsite')

@section('content')
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row fullscreen d-flex align-items-center justify-content-between">
            <div class="banner-content col-lg-9 col-md-12">
                <h1 class="text-uppercase">
                    {{config('text.welcome_message')}}
                </h1>
                <p class="pt-10 pb-10">
                    {{config('text.sub_welcome_message')}}
                </p>
                <a href="#" class="primary-btn text-uppercase">{{config('text.welcome_message_button_text')}}</a>
            </div>
        </div>
    </div>
</section>


<section class="feature-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="single-feature">
                    <div class="title">
                        <h4>{{config('text.home_feature_column_1_title')}}</h4>
                    </div>
                    <div class="desc-wrap">
                        <p>
                            {{config('text.home_feature_column_1_content')}}
                        </p>
                        <a href="#">{{config('text.home_feature_column_1_link_text')}}</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-feature">
                    <div class="title">
                        <h4>{{config('text.home_feature_column_2_title')}}</h4>
                    </div>
                    <div class="desc-wrap">
                        <p>
                            {{config('text.home_feature_column_2_content')}}
                        </p>
                        <a href="#">{{config('text.home_feature_column_2_link_text')}}</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-feature">
                    <div class="title">
                        <h4>{{config('text.home_feature_column_3_title')}}</h4>
                    </div>
                    <div class="desc-wrap">
                        <p>
                            {{config('text.home_feature_column_3_content')}}
                        </p>
                        <a href="#">{{config('text.home_feature_column_1_link_text')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection