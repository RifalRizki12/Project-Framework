@extends('layouts.Ecomerce.frontend')

@section('content')

<!-- page title area start -->
<section class="page__title p-relative d-flex align-items-center" data-background="{{asset('icommerce/assets')}}/img/page-title/page-title-1.jpg">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="page__title-inner text-center">
					<h1>Product Details</h1>
					<div class="page__title-breadcrumb">                                 
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb justify-content-center">
								<li class="breadcrumb-item"><a href="/ecomerce">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page"> Product details</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- page title area end -->

<!-- shop details area start -->
<section class="shop__area pb-65">
	<div class="shop__top grey-bg-6 pt-100 pb-90">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-6">
					<div class="product__modal-box d-flex">
						<div class="product__modal-nav mr-20">
							<nav>
								<div class="nav nav-tabs" id="product-details" role="tablist">
									<a class="nav-item nav-link active" id="pro-one-tab" data-toggle="tab" href="#pro-one" role="tab" aria-controls="pro-one" aria-selected="true">
										<div class="product__nav-img w-img">
											<img src="{{url('images')}}/{{$barang->gambar}}" alt="">
										</div>
									</a>
								</div>
							</nav>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6">
					<div class="product__modal-content product__modal-content-2">
						<h4><a href="#">{{$barang->nama_barang}}</a></h4>
						<div class="rating rating-shop mb-15">
							<ul>
								<li><span><i class="fas fa-star"></i></span></li>
								<li><span><i class="fas fa-star"></i></span></li>
								<li><span><i class="fas fa-star"></i></span></li>
								<li><span><i class="fas fa-star"></i></span></li>
								<li><span><i class="fal fa-star"></i></span></li>
							</ul>
							<span class="rating-no ml-10 rating-left">
								3 rating(s)
							</span>
							<span class="review rating-left"><a href="#">Add your Review</a></span>
						</div>
						<div class="product__price-2 mb-25">
							<span>Rp {{number_format($barang->harga)}}</span><br>
							<span>Stok : {{$barang->stok}}</span>
							{{-- <span class="old-price">$96.00</span> --}}
						</div>
						<div class="product__price-2 mb-25">
							<span>{{$barang->keterangan}}</span>
						</div>
						<div class="product__modal-form mb-30">
							<form action="{{url('detail')}}/{{$barang->id}}" method="POST">
								{{ csrf_field() }}
								{{-- <div class="product__modal-input color mb-20">
									<label>Color <i class="fas fa-star-of-life"></i></label>
									<select>
										<option>- Please select -</option>
										<option> Black</option>
										<option> Yellow</option>
										<option> Blue</option>
										<option> White</option>
										<option> Ocean Blue</option>
									</select>
								</div> --}}
								<div class="product__modal-required mb-5">
									<span >Repuired Fiields *</span>
								</div>
								<div class="pro-quan-area d-sm-flex align-items-center">
									<div class="product-quantity-title">
										<label>Quantity</label>
									</div>
									<div class="product-quantity mr-20 mb-20">
										<div class="cart-plus-minus"><input type="text" name="jumlah_pesan" value="1" required/></div>
									</div>
									<div class="pro-cart-btn">
										<button type="submit" class="add-cart-btn mb-20">+ Add to Cart</button>
										{{-- <a type="submit" class="add-cart-btn mb-20">+ Add to Cart</a> --}}
									</div>
								</div>
							</form>
						</div>
						<div class="product__tag mb-25">
							<span>Category:</span>
							<span><a href="#">Accessories,</a></span>
							<span><a href="#">Gaming,</a></span>
							<span><a href="#">PC Computers,</a></span>                                    
							<span><a href="#">Ultrabooks</a></span>
						</div>
						<div class="product__share">
							<span>Share :</span>
							<ul>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-behance"></i></a></li>
								<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
								<li><a href="#"><i class="fab fa-youtube"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="shop__bottom">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="product__details-tab">
						<div class="product__details-tab-nav text-center mb-45">
							<nav>
								<div class="nav nav-tabs justify-content-start justify-content-sm-center" id="pro-details" role="tablist">
									<a class="nav-item nav-link active" id="des-tab" data-toggle="tab" href="#des" role="tab" aria-controls="des" aria-selected="true">Description</a>
									<a class="nav-item nav-link" id="add-tab" data-toggle="tab" href="#add" role="tab" aria-controls="add" aria-selected="false">Additional Information</a>
									<a class="nav-item nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Reviews (4)</a>
								</div>
							</nav>
						</div>
						<div class="tab-content" id="pro-detailsContent">
							<div class="tab-pane fade show active" id="des" role="tabpanel">
								<div class="product__details-des">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when anunknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>

									<div class="product__details-des-list mb-20">
										<ul>
											<li><span>Claritas est etiam processus dynamicus.</span></li>
											<li><span>Qui sequitur mutationem consuetudium lectorum.</span></li>
											<li><span>Claritas est etiam processus dynamicus.</span></li>
											<li><span>Qui sequitur mutationem consuetudium lectorum.</span></li>
											<li><span>Claritas est etiam processus dynamicus.</span></li>
											<li><span>Qui sequitur mutationem consuetudium lectorum.</span></li>
										</ul>
									</div>
									<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release.</p>
								</div>
							</div>
							<div class="tab-pane fade" id="add" role="tabpanel">
								<div class="product__details-add">
									<ul>
										<li><span>Weight</span></li>
										<li><span>.25 KG</span></li>
										<li><span>Dimention</span></li>
										<li><span>62 × 56 × 12 cm</span></li>
										<li><span>Size</span></li>
										<li><span>XL, XXL, LG, SM, MD</span></li>
									</ul>
								</div>
							</div>
							<div class="tab-pane fade" id="review" role="tabpanel">
								<div class="product__details-review">
									<div class="postbox__comments">
										<div class="postbox__comment-title mb-30">
											<h3>Reviews (32)</h3>
										</div>
										<div class="latest-comments mb-30">
											<ul>
												<li>
													<div class="comments-box">
														<div class="comments-avatar">
															<img src="assets/img/blog/comments/avater-1.png" alt="">
														</div>
														<div class="comments-text">
															<div class="avatar-name">
																<h5>Siarhei Dzenisenka</h5>
																<span> - 3 months ago </span>
																<a class="reply" href="#">Leave Reply</a>
															</div>
															<div class="user-rating">
																<ul>
																	<li><a href="#"><i class="fas fa-star"></i></a></li>
																	<li><a href="#"><i class="fas fa-star"></i></a></li>
																	<li><a href="#"><i class="fas fa-star"></i></a></li>
																	<li><a href="#"><i class="fas fa-star"></i></a></li>
																	<li><a href="#"><i class="fal fa-star"></i></a></li>
																</ul>
															</div>
															<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for <span>“lorem ipsum”</span> will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose.</p>
														</div>
													</div>
												</li>
												<li class="children">
													<div class="comments-box">
														<div class="comments-avatar">
															<img src="assets/img/blog/comments/avater-2.png" alt="">
														</div>
														<div class="comments-text">
															<div class="avatar-name">
																<h5>Julias Roy</h5>
																<span> - 6 months ago </span>
																<a class="reply" href="#">Leave Reply</a>
															</div>
															<div class="user-rating">
																<ul>
																	<li><a href="#"><i class="fas fa-star"></i></a></li>
																	<li><a href="#"><i class="fas fa-star"></i></a></li>
																	<li><a href="#"><i class="fas fa-star"></i></a></li>
																	<li><a href="#"><i class="fas fa-star"></i></a></li>
																	<li><a href="#"><i class="fal fa-star"></i></a></li>
																</ul>
															</div>
															<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for <span>“lorem ipsum”</span> will uncover many web sites still in their infancy. </p>
														</div>
													</div>
												</li>
												<li>
													<div class="comments-box">
														<div class="comments-avatar">
															<img src="assets/img/blog/comments/avater-3.png" alt="">       
														</div>
														<div class="comments-text">
															<div class="avatar-name">
																<h5>Arista Williamson</h5>
																<span> - 6 months ago </span>
																<a class="reply" href="#">Leave Reply</a>
															</div>
															<div class="user-rating">
																<ul>
																	<li><a href="#"><i class="fas fa-star"></i></a></li>
																	<li><a href="#"><i class="fas fa-star"></i></a></li>
																	<li><a href="#"><i class="fas fa-star"></i></a></li>
																	<li><a href="#"><i class="fas fa-star"></i></a></li>
																	<li><a href="#"><i class="fal fa-star"></i></a></li>
																</ul>
															</div>
															<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for <span>“lorem ipsum”</span> will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose.</p>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
									<div class="post-comments-form mb-100">
										<div class="post-comments-title mb-30">
											<h3>Your Review</h3>
										</div>
										<form id="contacts-form" class="conatct-post-form" action="#">
											<div class="row">
												<div class="col-xl-6 col-lg-6 col-md-6">
													<div class="contact-icon p-relative contacts-name">
														<input type="text" placeholder="Name">
													</div>
												</div>
												<div class="col-xl-6 col-lg-6 col-md-6">
													<div class="contact-icon p-relative contacts-name">
														<input type="email" placeholder="Email">
													</div>
												</div>
												<div class="col-xl-12">
													<div class="contact-icon p-relative contacts-email">
														<input type="text" placeholder="Subject">
													</div>
												</div>
												<div class="col-xl-12">
													<div class="contact-icon p-relative contacts-message">
														<textarea name="comments" id="comments" cols="30" rows="10"
														placeholder="Comments"></textarea>
													</div>
												</div>
												<div class="col-xl-12">
													<button class="os-btn os-btn-black" type="submit">Post comment</button>
												</div>
											</div>
										</form>
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
<!-- shop details area end -->

@endsection