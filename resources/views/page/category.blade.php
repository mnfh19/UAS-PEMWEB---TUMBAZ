@extends('template.head')
@section('content')

<input type="hidden" id="terfilter" value="false" data-pilih=" ">


	<!-- Category section -->
	<section class="category-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 order-2 order-lg-1">
					<div class="filter-widget">
						<h2 class="fw-title">Categories</h2>
						<ul class="category-menu" id="pilihan">
							<li><a href="#">Kendaraan</a>
								<ul class="sub-menu">
									<li><a href="#" data="Mobil">Mobil <span>(2)</span></a></li>
									<li><a href="#"  data="Motor">Motor<span>(56)</span></a></li>
								</ul>
							</li>
							<li><a href="#">Elektronik & Gadget</a>
								<ul class="sub-menu">
									<li><a href="#">Handphone <span>(2)</span></a></li>
									<li><a href="#">Tablet<span>(56)</span></a></li>
									<li><a href="#">Games & Console<span>(36)</span></a></li>
									<li><a href="#">Komputer<span>(36)</span></a></li>
								</ul></li>
							<li><a href="#">Hobi & Olahraga</a></li>
							<li><a href="#">Dekorasi</a>
								<ul class="sub-menu">
									<li><a href="#">Furniture <span>(2)</span></a></li>
									<li><a href="#">Tenda Event<span>(56)</span></a></li>
									<li><a href="#">Stand / Booth<span>(36)</span></a></li>
								</ul></li>
							<li>
							<li><a href="#">Eyewear</a></li>
							<li><a href="#">Footwear</a></li>
						</ul>
					</div>
					
				</div>

				<div class="col-lg-9  order-1 order-lg-2 mb-5 mb-lg-0">
					<div class="row" id="listData">
						@include('list.category')
						

					</div>
							<div class="text-center w-100 pt-3" id="wholeButton">
								<button class="site-btn sb-line sb-dark" id="loadMore">LOAD MORE</button>
							</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Category section end -->

	@include('template.footer')

	<script>
	$(document).ready(function(){
		// loadData();

		$("#pilihan a").on('click', function(e){
			e.preventDefault();
			var pilihan = $(this).attr('data');
			$("#terfilter").attr('data-pilih', pilihan);
			filter(pilihan);
		});


		function filter(pilihan){
			$.ajax({
				type: "GET",
				data: {
					pilihan: pilihan
				},
				url: "{{ url('category/filtered') }}/",
                success: function(data){
					
					$("#terfilter").val('true');
					$("#listData").html(data);
                },error: function(){
                    console.log('error');
                }
            }); 
		}

		

		$("#loadMore").on('click',function(){
            var totalData = $(".product-item").length;
			var count = $("#counted").val();
			var cekfilter = $("#terfilter").val();
			var pilihan = $("#terfilter").attr('data-pilih');

			if(cekfilter == 'false'){
				var urli = "{{url('category/loadMore')}}";
				var dat = {
					skip:totalData
				}
			}else {
				var urli = "{{url('category/loadMoreFilter')}}";
				var dat = {
					skip:totalData,
					filteran: pilihan
				}
			}

            $.ajax({
                url:urli,
                type:'get',
                data:dat,
                beforeSend:function(){
                    $("#loadMore").html('Loading...');
                },
                success:function(response){
					var button = $('#wholeButton').clone(true);
					
                    $("#listData").append(response);
					
					if(totalData == count){
						swal.fire('Semua Iklan Sudah Ditampilkan !', '', 'info');
						$("#wholeButton").remove();
					}else {
						$("#wholeButton").remove();
						$("#listData").after(button);
						$("#loadMore").html('Load More');
					}

                }
            });
        });
	});
	
	</script>
	
	
	@endsection