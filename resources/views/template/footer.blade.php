
	<!-- Footer section -->
	<section class="footer-section">
		<div class="container">
			<div class="footer-logo text-center">
				<a href="index.html"><img src="{{url('img/theme/logo.png')}}" alt=""></a>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>About</h2>
						<p>Donec vitae purus nunc. Morbi faucibus erat sit amet congue mattis. Nullam frin-gilla faucibus urna, id dapibus erat iaculis ut. Integer ac sem.</p>
						<img src="{{url('img/cards.png')}}" alt="">
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>Questions</h2>
						<ul>
							<li><a href="">About Us</a></li>
							<li><a href="">Track Orders</a></li>
							<li><a href="">Returns</a></li>
							<li><a href="">Jobs</a></li>
							<li><a href="">Shipping</a></li>
							<li><a href="">Blog</a></li>
						</ul>
						<ul>
							<li><a href="">Partners</a></li>
							<li><a href="">Bloggers</a></li>
							<li><a href="">Support</a></li>
							<li><a href="">Terms of Use</a></li>
							<li><a href="">Press</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>Questions</h2>
						<div class="fw-latest-post-widget">
							<div class="lp-item">
								<div class="lp-thumb set-bg" data-setbg="{{url('img/blog-thumbs/1.jpg')}}"></div>
								<div class="lp-content">
									<h6>what shoes to wear</h6>
									<span>Oct 21, 2018</span>
									<a href="#" class="readmore">Read More</a>
								</div>
							</div>
							<div class="lp-item">
								<div class="lp-thumb set-bg" data-setbg="{{url('img/blog-thumbs/2.jpg')}}"></div>
								<div class="lp-content">
									<h6>trends this year</h6>
									<span>Oct 21, 2018</span>
									<a href="#" class="readmore">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget contact-widget">
						<h2>Questions</h2>
						<div class="con-info">
							<span>C.</span>
							<p>Your Company Ltd </p>
						</div>
						<div class="con-info">
							<span>B.</span>
							<p>1481 Creekside Lane  Avila Beach, CA 93424, P.O. BOX 68 </p>
						</div>
						<div class="con-info">
							<span>T.</span>
							<p>+53 345 7953 32453</p>
						</div>
						<div class="con-info">
							<span>E.</span>
							<p>office@youremail.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="social-links-warp">
			<div class="container">
				<div class="social-links">
					<a href="" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
					<a href="" class="google-plus"><i class="fa fa-google-plus"></i><span>g+plus</span></a>
					<a href="" class="pinterest"><i class="fa fa-pinterest"></i><span>pinterest</span></a>
					<a href="" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
					<a href="" class="twitter"><i class="fa fa-twitter"></i><span>twitter</span></a>
					<a href="" class="youtube"><i class="fa fa-youtube"></i><span>youtube</span></a>
					<a href="" class="tumblr"><i class="fa fa-tumblr-square"></i><span>tumblr</span></a>
				</div>

<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> 
<p class="text-white text-center mt-5">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

			</div>
		</div>
	</section>
	<!-- Footer section end -->

	<!--====== Javascripts & Jquery ======-->
	<script src="{{url('js/jquery-3.2.1.min.js')}}"></script>
	{{-- <script src="{{url('js/bootstrap.min.js')}}"></script> --}}
	<script src="{{url('template3/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{url('js/jquery.slicknav.min.js')}}"></script>
	<script src="{{url('js/owl.carousel.min.js')}}"></script>
	<script src="{{url('js/jquery.nicescroll.min.js')}}"></script>
	<script src="{{url('js/jquery.zoom.min.js')}}"></script>
	<script src="{{url('js/jquery-ui.min.js')}}"></script>
	<script src="{{url('js/dropzone.js')}}"></script>
	<script src="{{url('vendor/select2/dist/js/select2.min.js')}}"></script>   
  	<script src="{{url('vendor/select2/dist/js/i18n/id.js')}}"></script>  
	<script src="{{url('js/main.js')}}"></script>
	<script src="{{url('vendor/croppie/croppie.js')}}"></script>
	<script src="{{url('js/jquery.cookie.js')}}"></script>
	{{-- <script src="{{url('template3/vendor/js-cookie/js.cookie.js')}}"></script> --}}


	{{-- Sweet ALert --}}
	<script src="{{url('vendor/sweetalert2/dist/sweetalert2.min.js')}}"></script>
	@include('sweetalert::alert')


	<script>
		$(document).ready(function(){
			$("#tambahIklanKun a").on('click', function(e){
				e.preventDefault();

				const swalWithBootstrapButtons = Swal.mixin({
				customClass: {
					confirmButton: 'btn btn-success',
					cancelButton: 'btn btn-danger'
				},
				buttonsStyling: false
				});

				swalWithBootstrapButtons.fire({
					title: 'Tipe Iklan',
					text: "Iklan Tipe Apa yang anda Ingin Tambahkan ?",
					icon: 'question',
					showCancelButton: true,
					confirmButtonText: 'Jual Barang',
					cancelButtonText: 'Sewa Barang',
					reverseButtons: true
				}).then((result) => {
				if (result.value) {
					pindahin();
				} else if (
					/* Read more about handling dismissals below */
					result.dismiss === Swal.DismissReason.cancel
				) {
					window.location.href = "{{url('sewa')}}";
				}
				})

			});

			function pindahin() {
				Swal.fire({
					title: 'Silahkan Pilih Kategori',
					input: 'select',
					inputOptions: {
						'Mobil': 'Mobil',
						'Elektronik': 'Elektronik',
						'Motor': 'Motor'
					},
					inputPlaceholder: '~ Pilih Kategori ~',
					showCancelButton: true,
					inputValidator: function (value) {
						return new Promise(function (resolve, reject) {
						if (value !== '') {
							resolve();
						} else {
							resolve('Kamu Harus Pilih Kategori');
						}
						});
					}
					}).then(function (result) {
					if (result.value) {
						window.location.href = "{{url('jual')}}/"+result.value;
					}
					});
			}

			var scroll = $.cookie('scroll');
			if(scroll){
				scrollToID(scroll, 1000);
				$.removeCookie('scroll');
			}

			$('.sub-menu a').click(function (e) {
				e.preventDefault();
				var id = $(this).data('id');
				var href = $(this).attr('href');
				if(href === '#'){
					scrollToID(id, 1000);
				}else{
					$.cookie('scroll', id);
					window.location.href = href;
				}
			});

			function scrollToID(id, speed) {
				var offSet = 70;
				var obj = $('#' + id);
				if(obj.length){
					var offs = obj.offset();
					var targetOffset = offs.top - offSet;
					$('html,body').animate({ scrollTop: targetOffset }, speed);
				}
			}
			

		});
	</script>

	</body>
</html>
