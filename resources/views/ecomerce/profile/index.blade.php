@extends('layouts.Ecomerce.frontend')

@section('content')

<!-- page title area start -->
<section class="page__title p-relative d-flex align-items-center" data-background="{{asset('icommerce/assets')}}/img/page-title/page-title-1.jpg">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="page__title-inner text-center">
					<h1>Profile</h1>
					<div class="page__title-breadcrumb">                                 
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb justify-content-center">
								<li class="breadcrumb-item"><a href="/ecomerce">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page"> Profile</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- page title area end -->

<!-- blog area start -->
<section class="blog__area pt-100 pb-100">
	<div class="container">
		<div class="row">
			<div class="col-xl-8 col-lg-8 offset-xl-2 offset-lg-2">
				<div class="blog__wrapper">
					<div class="blog__item blog__border-bottom mb-60 pb-60">
						<div class="blog__thumb fix">
							<a href="blog-details.html" class="w-img"><img src="{{$pembeli->getAvatar()}}" alt=""></a>
						</div>
						<div class="blog__content">
							<h4 class="blog__title"><a href="blog-details.html">Anteposuerit litterarum formas.</a></h4>
							<div class="blog__meta">
								<span>By <a href="#">Shahnewaz Sakil</a></span>
								<span>/ September 14, 2017</span>
							</div>
							<p>A Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the [...]</p>
							<a href="blog-details.html" class="os-btn">read more</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- blog area end -->

@endsection