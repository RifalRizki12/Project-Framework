@extends('layouts.Ecomerce.frontend')

@section('content')

<!-- page title area start -->
<section class="page__title p-relative d-flex align-items-center" data-background="{{asset('/icommerce/assets')}}/img/page-title/page-title-1.jpg">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="page__title-inner text-center">
					<h1>Shop</h1>
					<div class="page__title-breadcrumb">                                 
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb justify-content-center">
								<li class="breadcrumb-item"><a href="/ecomerce">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page"> Shop</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- page title area end -->

<!-- shop area start -->
<section class="shop__area pt-100 pb-100">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="shop__content-area">
					<div class="shop__header d-sm-flex justify-content-between align-items-center mb-40">
						<div class="shop__header-left">
							<div class="show-text">
								<span>Showing 1–12 of 20 results</span>
							</div>
						</div>
						<div class="shop__header-right d-flex align-items-center justify-content-between justify-content-sm-end">
							<div class="sort-wrapper mr-30 pr-25 p-relative">
								<select >
									<option value="1">Default Sorting</option>
									<option value="2">Type 1</option>
									<option value="3">Type 2</option>
									<option value="4">Type 3</option>
									<option value="5">Type 4</option>
								</select>
							</div>
							<ul class="nav nav-pills" id="pills-tab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="pills-grid-tab" data-toggle="pill" href="#pills-grid" role="tab" aria-controls="pills-grid" aria-selected="true"><i class="fas fa-th"></i></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="pills-list-tab" data-toggle="pill" href="#pills-list" role="tab" aria-controls="pills-list" aria-selected="false"><i class="fas fa-list-ul"></i></a>
								</li>
							</ul>
						</div>
					</div>
					<div class="tab-content" id="pills-tabContent">
						<div class="tab-pane fade show active" id="pills-grid" role="tabpanel" aria-labelledby="pills-grid-tab">
							<div class="row custom-row-10">
								@foreach ($barangs as $barang)
								<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 custom-col-10">
									<div class="product__wrapper mb-60">
										<div class="product__thumb">
											<a href="/detail/{{$barang->id}}" class="w-img" style="max-height: 200px">
												<img src="{{url('images')}}/{{$barang->gambar}}" alt="product-img">
												<img class="product__thumb-2" src="{{url('images')}}/{{$barang->gambar}}" alt="product-img">
											</a>
											<div class="product__action transition-3">
												<a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
													<i class="fal fa-heart"></i>
												</a>
												<a href="#" data-toggle="tooltip" data-placement="top" title="Compare">
													<i class="fal fa-sliders-h"></i>
												</a>
												<!-- Button trigger modal -->
												<a href="#" data-toggle="modal" data-target="#productModalId">
													<i class="fal fa-search"></i>
												</a>

											</div>
											<div class="product__sale">
												<span class="new">new</span>
												<span class="percent">-16%</span>
											</div>
										</div>
										<div class="product__content p-relative">
											<div class="product__content-inner">
												<h4><a href="/detail/{{$barang->id}}">{{$barang->nama_barang}}</a></h4>
												<div class="product__price transition-3">
													<span>Rp {{number_format($barang->harga)}}</span>
													{{-- <span class="old-price">Rp {{number_format($barang->harga)}}</span> --}}
												</div>
												<h4><a href="/detail/{{$barang->id}}">Stock : {{$barang->stok}}</a></h4>
											</div>
											<div class="add-cart p-absolute transition-3">
												<a href="#">+ Add to Cart</a>
											</div>
										</div>
										
									</div>
								</div>
								@endforeach
							</div>
						</div>
						<div class="tab-pane fade" id="pills-list" role="tabpanel" aria-labelledby="pills-list-tab">
							<div class="product__wrapper mb-40">
								<div class="row">
									<div class="col-xl-4 col-lg-4">
										<div class="product__thumb">
											<a href="product-details.html" class="w-img">
												<img src="{{asset('/icommerce/assets')}}/img/shop/product/product-1.jpg" alt="product-img">
												<img class="product__thumb-2" src="{{asset('/icommerce/assets')}}/img/shop/product/product-10.jpg" alt="product-img">
											</a>
											<div class="product__sale ">
												<span class="new">new</span>
												<span class="percent">-16%</span>
											</div>
										</div>
									</div>
									<div class="col-xl-8 col-lg-8">
										<div class="product__content p-relative">
											<div class="product__content-inner list">
												<h4><a href="product-details.html">Wooden container Bowl</a></h4>
												<div class="product__price-2 mb-10">
													<span>$96.00</span>
													<span class="old-price">$96.00</span>
												</div>
												<p>Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus.</p>
												<div class="product__list mb-30">
													<ul>
														<li><span>Light green crewneck sweatshirt.</span></li>
														<li><span>Hand pockets.</span></li>
														<li><span>Relaxed fit.</span></li>
													</ul>
												</div>
											</div>
											<div class="add-cart-list d-sm-flex align-items-center">
												<a href="#" class="add-cart-btn mr-10">+ Add to Cart</a>
												<div class="product__action-2 transition-3 mr-20">
													<a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
														<i class="fal fa-heart"></i>
													</a>
													<a href="#" data-toggle="tooltip" data-placement="top" title="Compare">
														<i class="fal fa-sliders-h"></i>
													</a>
													<!-- Button trigger modal -->
													<a href="#"   data-toggle="modal" data-target="#productModalId">
														<i class="fal fa-search"></i>
													</a>

												</div>
											</div>
											<!-- shop modal start -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row mt-40">
						<div class="col-xl-12">
							<div class="shop-pagination-wrapper d-md-flex justify-content-between align-items-center">
								<div class="basic-pagination">
									<ul>
										<li><a href="#"><i class="fal fa-angle-left"></i></a></li>
										<li><a href="#">01</a></li>
										<li class="active"><a href="#">02</a></li>
										<li><a href="#">03</a></li>
										<li><a href="#"><i class="fas fa-ellipsis-h"></i></a></li>
										<li><a href="#"><i class="fal fa-angle-right"></i></a></li>
									</ul>
								</div>
								<div class="shop__header-left">
									<div class="show-text bottom">
										<span>Showing 1–12 of 20 results</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- shop area end -->

@endsection