@extends('template.head')
@section('content')

	<!-- product section -->
	<section class="product-section">
		<div class="container">
			<div class="back-link">
				<a href="{{url('category')}}"> &lt;&lt; Back to Category</a>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="product-pic-zoom">
						<img class="product-big-img" src="{{url('img/single-product/'.$gambar->nama_gambar)}}" alt="">
					</div>
					<div class="product-thumbs" tabindex="1" style="overflow: hidden; outline: none;">
						<div class="product-thumbs-track">
							@foreach ($img as $d)
								<div class="pt" data-imgbigurl="{{url('img/single-product/'.$d->nama_gambar)}}"><img src="{{url('img/single-product/cropped/'.$d->nama_gambar)}}" alt=""></div>
							@endforeach
						</div>
					</div>
				</div>
				<div class="col-lg-6 product-details">
					<h2 class="p-title">{{$jual->nama_barang}}</h2>
					<h3 class="p-price">Rp {{$price}}</h3>
					<h4 class="p-stock">Ketersediaan: 
						<span>
						@if ($jual->status_barang == 0)
							Dijual
						@else
							Disewakan
						@endif
						</span></h4>
					<div class="p-review">
						<span>{{$jual->kecamatan}}, {{$jual->kabupaten}}, {{$jual->provinsi}}</span>
					</div>
					<div class="social-sharing" style="margin-bottom: 30px; padding-top:0;">
						<a href=""><i class="fa fa-google-plus"></i></a>
						<a href=""><i class="fa fa-pinterest"></i></a>
						<a href=""><i class="fa fa-facebook"></i></a>
						<a href=""><i class="fa fa-twitter"></i></a>
						<a href=""><i class="fa fa-youtube"></i></a>
					</div>
					<button class="site-btn panel-link" id="chatPenjual" data-toggle="modal" data-target="#modalChat">CHAT PENJUAL</button>
					@if ($jual->status_barang == 0)
					{{-- <a href="#" class="site-btn" data-toggle="collapse" data-target="#collapse4">CHAT PENJUAL</a> --}}
					@else
					{{-- <button class="site-btn" data-toggle="modal" data-target="#modalBook" class="site-btn">Chat  </button> --}}
					@endif
					
					<div id="accordion" class="accordion-area">
						<div class="panel">
							<div class="panel-header" id="headingOne">
								<button class="panel-link active" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">Deskripsi Barang</button>
							</div>
							<div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
								<div class="panel-body">
									<pre style="max-width: auto;">{{$jual->desc_barang}}</pre>
								</div>
							</div>
						</div>
						<div class="panel">
							<div class="panel-header" id="headingTwo">
								@if ($jual->status_barang == 0)
								<button class="panel-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">Detail Barang </button>
								@else
								<button class="panel-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">Paket Sewa </button>
								@endif
								
							</div>
							<div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
								<div class="panel-body">
									@if ($jual->status_barang == 0)
									@switch($jual->tipe_barang)
										@case("Mobil")
										<table style="margin-bottom: 20px">
											<tr>
												<th style="padding-right:50px;">Merek</th>
												<td>{{$mobil->merek_mobil}}</td>
											</tr>
											<tr>
												<th style="padding-right:50px;">Tahun</th>
												<td>{{$mobil->tahun_mobil}}</td>
											</tr>
											<tr>
												<th style="padding-right:50px;">Bahan Bakar</th>
												<td>{{$mobil->bahan_mobil}}</td>
											</tr>
											<tr>
												<th style="padding-right:50px;">Warna</th>
												<td>{{$mobil->warna_mobil}}</td>
											</tr>
											<tr>
												<th style="padding-right:50px;">Jarak Tempuh</th>
												<td>{{$mobil->jarak_mobil}} km</td>
											</tr>
											<tr>
												<th style="padding-right:50px;">Tipe Penjual</th>
												<td>{{$mobil->tipe_penjual}}</td>
											</tr>
										</table>
											@break
										@case("Motor")
										<table style="margin-bottom: 20px">
											<tr>
												<th style="padding-right:50px;">Merek</th>
												<td>{{$motor->merek_motor}}</td>
											</tr>
											<tr>
												<th style="padding-right:50px;">Tahun</th>
												<td>{{$motor->tahun_motor}}</td>
											</tr>
											<tr>
												<th style="padding-right:50px;">Warna</th>
												<td>{{$motor->warna_motor}}</td>
											</tr>
											<tr>
												<th style="padding-right:50px;">Jarak Tempuh</th>
												<td>{{$motor->jarak_motor}} km</td>
											</tr>
											<tr>
												<th style="padding-right:50px;">Tipe Penjual</th>
												<td>{{$motor->tipe_penjual}}</td>
											</tr>
										</table>
											@break
										@case("Elektronik")
										<table style="margin-bottom: 20px">
											<tr>
												<th style="padding-right:50px;">Jenis </th>
												<td>{{$elektronik->jenis_elektronik}}</td>
											</tr>

											@if ($elektronik->tipe_elektronik != null)
											<tr>
												<th style="padding-right:50px;">Tipe</th>
												<td>{{$elektronik->tipe_elektronik}}</td>
											</tr>
											@endif

											@if ($elektronik->merek_elektronik != null)
											<tr>
												<th style="padding-right:50px;">Merk</th>
												<td>{{$elektronik->merek_elektronik}}</td>
											</tr>
											@endif
											
											<tr>
												<th style="padding-right:50px;">Kondisi Barang</th>
												<td>{{$elektronik->kondisi_elektronik}}</td>
											</tr>
										</table>
											@break
										@default
											
									@endswitch
										
									@else
									<table style="margin-bottom: 20px">
										<tr>
											<td style="padding-bottom:10px;" colspan="2">Harga & Jadwal : </td>
										</tr>
										@foreach ($paketan as $d)
											<tr>
												<th>Rp {{$d->harga_paket}} </th>
												<td>{{$d->waktu_paket}}</td>
											</tr>
										@endforeach
										<tr>
											<th style="padding-top:40px;" colspan="2">Ketersediaan : </th>
										</tr>
										<tr>
											<td colspan="2"><pre style="max-width: auto;">{{$ketersediaan}}</pre></td>
										</tr>
										<tr>
											
										</tr>
									</table>
									@endif


									
								</div>
							</div>
						</div>
						@if ($jual->status_barang == 1)
						<div class="panel">
							<div class="panel-header" id="headingFour">
								<button class="panel-link" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">Fasilitas Sewa</button>
							</div>
							<div id="collapse4" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
								<div class="panel-body">
									<pre style="max-width: auto;">{{$jual->fasilitas_sewa}}</pre>
								</div>
							</div>
						</div>

						<div class="panel">
							<div class="panel-header" id="headingFive">
								<button class="panel-link" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">Syarat Sewa</button>
							</div>
							<div id="collapse5" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
								<div class="panel-body">
									<pre style="max-width: auto;">{{$jual->syarat_sewa}}</pre>
								</div>
							</div>
						</div>
						@endif


						<div class="panel">
							<div class="panel-header" id="headingThree">
								<button class="panel-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">Deskripsi Penjual</button>
							</div>
							<div id="collapse3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
								<div class="panel-body">
									<?php
										$tgl = $jual->tgl_daftar;
										$h = substr($tgl, 8, 2);
										$b = substr($tgl, 5, 2);
										$t = substr($tgl, 0, 4);

										switch ($b) {
											case '01':
												$b = "Januari";
												break;
											case '02':
												$b = "Februari";
												break;
											case '03':
												$b = "Maret";
												break;
											case '04':
												$b = "April";
												break;
											case '05':
												$b = "Mei";
												break;
											case '06':
												$b = "Juni";
												break;
											case '07':
												$b = "Juli";
												break;
											case '08':
												$b = "Agustus";
												break;
											case '09':
												$b = "September";
												break;
											case '10':
												$b = "Oktober";
												break;
											case '11':
												$b = "November";
												break;
											case '12':
												$b = "Desember";
												break;
										}
										
									
									?>
									 <div class="info-user">
										 <ul class="product-list">
											<li>
												<div class="pl-thumb"><img src="{{url('img/user/'.$jual->gambar_profile)}}" alt=""></div>
												<h6>{{$jual->username}}</h6>
												<p>User Sejak {{$b." ".$t}}</p>
												<p>Telp : {{$jual->no_telp}}</p>
											</li>
										</ul>
									 </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- product section end -->


	<!-- RELATED PRODUCTS section -->
	<section class="related-product-section" id="realtedkun">
		<div class="container">
			<div class="section-title">
				<h2>RELATED PRODUCTS</h2>
			</div>
			<div class="product-slider owl-carousel">

				@foreach ($related as $d)
				<div class="product-item">
					<div class="pi-pic">
						@if ($d->status_barang == 0)
							<div class="tag-new">Jual</div>
						@else
							<div class="tag-sale">Sewa</div>
						@endif
						<img src="{{url('img/single-product/'.$firstImg[$d->id_barang] )}}" alt="">
						<div class="pi-links">
							<a href="{{url('product/'.$d->id_barang)}}" class="add-card"><i class="flaticon-bag"></i><span>LIHAT DETAIL</span></a>
							<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
						</div>
					</div>
					<div class="pi-text">
						<h6>Rp {{$harga[$d->id_barang]}}</h6>
						<p>{{$d->nama_barang}} </p>
					</div>
				</div>
				@endforeach

			</div>
		</div>
	</section>
	<!-- RELATED PRODUCTS section end -->


	{{-- MODAL CHAT --}}
	<div class="modal fade" id="modalChat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Data Penjual</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="info-user">
					<ul class="product-list">
					   <li>
						   <div class="pl-thumb"><img src="{{url('img/user/'.$jual->gambar_profile)}}" alt=""></div>
						   <h6>{{$jual->username}}</h6>
						   <p>User Sejak {{$b." ".$t}}</p>
						   <p>Telp : {{$jual->no_telp}}</p>
					   </li>
				   </ul>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
			</div>
		</div>
	</div>

	{{-- MODAL BOOK--}}
	<div class="modal fade" id="modalBook" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				...
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
			</div>
		</div>
	</div>

    @include('template.footer')

    <script>
    $(document).ready(function(){
		$("#chatPenjual").click(function() {

			// $('html,body').animate({
			// 	scrollTop: $("#realtedkun").offset().top},
			// 	'slow');
			// });
	});
    
    </script>
    
    
    @endsection