<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Tumbaz | Tempat Jual dan Sewa Barang Bekas</title>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="description" content=" Divisima | eCommerce Template">
	<meta name="keywords" content="divisima, eCommerce, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="{{url('img/theme/logo.png')}}" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{url('css/flaticon.css')}}"/>
	<link rel="stylesheet" href="{{url('css/slicknav.min.css')}}"/>
	<link rel="stylesheet" href="{{url('css/jquery-ui.min.css')}}"/>
	<link rel="stylesheet" href="{{url('css/owl.carousel.min.css')}}"/>
	<link rel="stylesheet" href="{{url('css/animate.css')}}"/>
	<link rel="stylesheet" href="{{url('css/style.css')}}"/>
	<link rel="stylesheet" href="{{url('css/dropzone.css')}}"/>
	<link rel="stylesheet" href="{{url('vendor/select2/dist/css/select2.min.css')}}">
	<link rel="stylesheet" href="{{url('vendor/croppie/croppie.css')}}" />
	


	{{-- Sweet Alert --}}
	<link rel="stylesheet" href="{{url('vendor/sweetalert2/dist/sweetalert2.min.css')}}">


	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 text-center text-lg-left">
						<!-- logo -->
						<a href="{{url('/')}}" class="site-logo">
							<img src="{{url('img/theme/logo.png')}}" alt="" style="max-width:65%;">
						</a>
					</div>
					<div class="col-xl-6 col-lg-5">
						<form class="header-search-form">
							<input type="text" placeholder="Cari di Tumbaz ....">
							<button><i class="flaticon-search"></i></button>
						</form>
					</div>
					<div class="col-xl-4 col-lg-5">
						<div class="user-panel">
							<div class="up-item">
								<i class="flaticon-profile"></i>
								@if (Session::has('user'))
									<a href="{{url('profile')}}">Hai {{Session::get('username')}}</a>
								@else
								<a href="{{url('login')}}">Sign</a> In or <a href="{{url('login')}}">Create Account</a>
								@endif
							</div>
							<div class="up-item" id="tambahIklanKun">
								<div class="shopping-card">
									<i class="flaticon-bag"></i>
									{{-- <span>0</span> --}}
								</div>
								<a href="#">Tambah Iklan</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="main-navbar">
			<div class="container">
				<!-- menu -->
				<ul class="main-menu">
					<li><a href="{{url('/category')}}">Semua  Katalog</a></li>
					<li><a href="#">Mobil</a></li>
					<li><a href="#">Motor</a></li>
					<li><a href="#">Properti
						<span class="new">Baru</span>
					</a></li>
					<li><a href="#">Elektronik & Gadget</a>
						<ul class="sub-menu">
							<li><a href="#">Handphone</a></li>
							<li><a href="#">Laptop</a></li>
							<li><a href="#">Games Console</a></li>
							<li><a href="#">Boots</a></li>
							<li><a href="#">Flip Flops</a></li>
						</ul>
					</li>
					
					<li><a href="#">My Account</a>
						<ul class="sub-menu">
							<li><a href="{{url('profile')}}">Ubah Profil</a></li>
							<li><a href="{{url('profile')}}" data-id="kelolakun">Kelola Iklan</a></li>
							<li><a href="{{url('logout')}}">Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
	</header>
	<!-- Header section end -->

    @yield('content')

    