@extends('layouts.Ecomerce.frontend')

@section('content')

        <!-- page title area start -->
        <section class="page__title p-relative d-flex align-items-center" data-background="{{asset('icommerce/assets')}}/img/page-title/page-title-1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page__title-inner text-center">
                            <h1>Your Cart</h1>
                            <div class="page__title-breadcrumb">                                 
                                <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="icomerce">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"> Cart</li>
                                </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page title area end -->

                <!-- Cart Area Strat-->
        <section class="cart-area pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        {{-- <form action="#"> --}}
                            <div class="table-content table-responsive">
                                @if(!empty($pesanan))
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="product-thumbnail">Gambar</th>
                                            <th class="cart-product-name">Barang</th>
                                            <th class="product-price">Harga /Unit</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Total</th>
                                            <th class="product-remove">Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pesanan_details as $pesanan_detail)
                                        
                                        <tr>
                                            <td class="product-thumbnail"><a href="product-details.html"><img src="{{url('images')}}/{{$pesanan_detail->barang->gambar}}" alt=""></a></td>
                                            <td class="product-name"><a href="product-details.html">{{$pesanan_detail->barang->nama_barang}}</a></td>
                                            <td class="product-price"><span class="amount">Rp {{ number_format($pesanan_detail->barang->harga) }}</span></td>
                                            <td class="product-quantity">
                                                {{$pesanan_detail->jumlah}}
                                            </td>
                                            <td class="product-subtotal"><span class="amount">Rp {{ number_format($pesanan_detail->jumlah_harga) }}</span></td>
                                            <td>
                                                <form action="{{url('check-out')}}/{{$pesanan_detail->id}}" method="POST">
                                                    {{ csrf_field() }}
                                                    {{method_field('DELETE')}}
                                                    <button type="submit"><i class="fa fa-trash" onclick="return confirm('Anda Yakin Ingin Menghapus Data')"></i></button>
                                                </form>
                                                {{-- <a type="submit" href="{{url('check-out')}}"><i class="fa fa-times"></i></a> --}}
                                            </td>
                                        </tr>

                                        @endforeach
                                        
                                    </tbody>
                                </table>

                                @else
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="product-thumbnail">Gambar</th>
                                            <th class="cart-product-name">Barang</th>
                                            <th class="product-price">Harga /Unit</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Total</th>
                                            <th class="product-remove">Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Kosong</td>
                                            <td>kosong</td>
                                            <td>kosong</td>
                                            <td>kosong</td>
                                            <td>kosong</td>
                                            <td>kosong</td>
                                        </tr>
                                    </tbody>
                                </table>
                                @endif
                            </div>
                            {{-- <div class="row">
                                <div class="col-10">
                                    <div class="coupon-all">
                                        <div class="coupon">
                                            <input id="coupon_code" class="input-text" name="coupon_code" value=""
                                                placeholder="Coupon code" type="text">
                                            <button class="os-btn os-btn-black" name="apply_coupon" type="submit">Apply
                                                coupon</button>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="row">
                                <div class="col-md-5 ml-auto">
                                    <div class="cart-page-total">
                                        @if (!empty($pesanan_detail))
                                        <h2>Cart totals</h2>
                                            
                                        <p>Tanggal Pesan : {{$pesanan->tanggal}}</p>
                                        <ul class="mb-20">
                                            <li>Total <span>Rp {{ number_format($pesanan->jumlah_harga) }}</span></li>
                                        </ul>
                                        <a class="os-btn" href="{{url('konfirmasi-check-out')}}" onclick="return confirm('Anda Yakin Ingin check out')">Proceed to checkout</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        {{-- </form> --}}
                    </div>
                </div>
            </div>
        </section>
        <!-- Cart Area End-->

@endsection