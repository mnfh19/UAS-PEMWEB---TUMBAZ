
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Tumbaz | Tempat Jual dan Sewa Barang Bekas</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	{{-- <link rel="icon" type="image/png" href="{{url('template2/images/icons/favicon.ico')}}"/> --}}
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('template2/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('template2/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('template2/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('template2/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{url('template2/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('template2/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('template2/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('template2/css/main.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" href="{{url('css/style.css')}}"/>
	
    <link href="{{url('img/theme/logo.png')}}" rel="shortcut icon"/>
	
	<link rel="stylesheet" href="{{url('css/slicknav.min.css')}}"/>
    <link rel="stylesheet" href="{{url('css/flaticon.css')}}"/>
	<link rel="stylesheet" href="{{url('css/jquery-ui.min.css')}}"/>
	<link rel="stylesheet" href="{{url('vendor/sweetalert2/dist/sweetalert2.min.css')}}">

</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
				<form class="login100-form validate-form" method="POST" action="{{url('user/login')}}">
					{{ csrf_field() }}
					<span class="login100-form-title p-b-55">
						Login
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-envelope"></span>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-lock"></span>
						</span>
					</div>

					<div class="contact100-form-checkbox m-l-4">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>
					
					<div class="container-login100-form-btn p-t-25">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center w-full p-t-42 p-b-22">
						<span class="txt1">
							Or login with
						</span>
					</div>

					<a href="#" class="btn-face m-b-10">
						<i class="fa fa-facebook-official"></i>
						Facebook
					</a>

					<a href="#" class="btn-google m-b-10">
						<img src="{{url('template2/images/icons/icon-google.png')}}" alt="GOOGLE">
						Google
					</a>

					<div class="text-center w-full p-t-115">
						<span class="txt1">
							Belum Punya Akun ?
						</span>

						<a class="txt1 bo1 hov1" href="{{url('register')}}">
							Daftar Sekarang						
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="{{url('template2/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{url('template2/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{url('template2/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{url('template2/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{url('template2/js/main.js')}}"></script>
    @include('sweetalert::alert')
    <script src="{{url('vendor/sweetalert2/dist/sweetalert2.min.js')}}"></script>
	

</body>
</html>