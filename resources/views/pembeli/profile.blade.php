@extends('layouts.master')
@section('content')

<!-- MAIN -->
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<div class="panel panel-profile">
				<div class="clearfix">
					<!-- center COLUMN -->
					<div class="profile-center">
						<!-- PROFILE HEADER -->
						<div class="profile-header">
							<div class="overlay"></div>
							<div class="profile-main">
								<img src="{{$pembeli->getAvatar()}}" class="img-circle" alt="Avatar" style="max-height: 100px">
								<h3 class="name">{{$pembeli->nama_depan}} {{$pembeli->nama_belakang}}</h3>
								<span class="online-status status-available">Available</span>
							</div>
							<div class="profile-stat">
								<div class="row">
									<div class="col-md-100 stat-item">
                                        No Telphone<span>{{$pembeli->nohp}}</span>
									</div>
								</div>
							</div>
						</div>
						<!-- END PROFILE HEADER -->
						<!-- PROFILE DETAIL -->
						<div class="profile-detail">
							<div class="profile-info">
								<h4 class="heading">Data Diri</h4>
								<ul class="list-unstyled list-justify">
									<li>Tanggal lahir <span>{{$pembeli->tanggal_lahir}}</span></li>
									<li>Jenis Kelamin <span>{{$pembeli->jenis_kelamin}}</span></li>
									<li>Agama <span>{{$pembeli->agama}}</span></li>
                                    <li>no Telepon <span>{{$pembeli->nohp}}</span></li>
                                    <li>email <span>{{$pembeli->user->email}}</span></li>
								</ul>
							</div>
							{{-- <div class="profile-info">
								<h4 class="heading">About</h4>
								<p>Interactively fashion excellent information after distinctive outsourcing.</p>
                            </div> --}}
                            {{-- <div class="profile-info">
								<h4 class="heading">Social</h4>
								<ul class="list-inline social-icons">
									<li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#" class="google-plus-bg"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#" class="github-bg"><i class="fa fa-github"></i></a></li>
								</ul>
							</div> --}}
							<div class="text-center"><a href="/pembeli/{{$pembeli->id}}/edit" class="btn btn-warning">Edit Profile</a></div>
						</div>
						<!-- END PROFILE DETAIL -->
					</div>
					<!-- END center COLUMN -->

				</div>
			</div>
		</div>
	</div>
	<!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->

@endsection