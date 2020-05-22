@extends('template.head')
@section('content')

<!-- Page info -->
<div class="page-top-info">
    <div class="container">
        <h4>Ubah Iklan Sewa Barang</h4>
        <div class="site-pagination">
            <a href="">Ubah Iklan</a> /
            <a href="">Sewa</a>
        </div>
    </div>
</div>
<!-- Page info end -->

	<!-- checkout section  -->
	<section class="checkout-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 order-2 order-lg-1">
                    <form class="checkout-form" id="ubahin" method="POST" action="{{url('sewa/update')}}">
                        {{ csrf_field() }}
                        <input type="hidden" value="" name="tipe">
                        <div class="cf-title" style="margin-bottom:30px;">Tentang Iklan</div>
                        <div class="row contact-form">
							<div class="col-md-12">
								<input type="text" name="judul" placeholder="Judul Iklan">
								<textarea name="desc" placeholder="Deskripsi Iklan">{{$iklan->desc_barang}}</textarea>
							</div>
							<div class="row address-inputs" style="margin-bottom: 10px !important;">
                                <div class="col-md-4">
                                    <label for="">Tipe Barang</label>
                                    <select name="tipe" id="tipe" class="selectkun">
                                        <option value=""> ~ Pilih Tipe ~ </option>
                                        <option value="Properti">Properti</option>
                                        <option value="Kendaraan">Kendaraan</option>
                                        <option value="Barang">Barang</option>
                                    </select>
                                </div>
                                <div class="col-md-4" id="pilihKate">
                                    <label for="">Kategori</label>
                                    <select class="selectkun" name="kategori" id="kategori">
                                        @include("list.optionsewa")
                                        
                                    </select>
                                </div>
    
                                <div class="col-md-4" id="pilihSubKate">
                                    <label for="">Sub-Kategori</label>
                                    <select class="selectkun" name="subkate" id="subkate">
                                        @include("list.optionsewa2")
                                    </select>
                                </div>
                            </div>
						</div>
                        
                        {{-- DETAIL BARANG --}}
                        <div class="cf-title" style="margin-bottom:30px;">Detail Sewa</div>
                        <div class="row" style="padding-left: 18px; padding-right: 15px;">

                            <div class="row" style="width: 100%;">
                                <div class="col-md-12">
                                    <label for="">Fasilitas Sewa</label>
                                    <textarea name="fasilitas" class="ketersediaan" placeholder="Fasilitas Sewa">{{$iklan->fasilitas_sewa}}</textarea>
                                </div>
                            </div>

                            <div class="row" style="width: 100%;">
                                <div class="col-md-12">
                                    <label for="">Syarat Sewa</label>
                                    <textarea name="syarat" class="ketersediaan" placeholder="Syarat Sewa">{{$iklan->syarat_sewa}}</textarea>
                                </div>
                            </div>



                            <div class="row" style="width: 100%">
                                <div class="col-md-12">
                                    <label for="">Paket Harga</label>
                                </div>
                                <div class="hargakun">
                                    <button class="buttonhargakun" disabled>RP</button>
                                    <input type="text" value="{{$paketFirst->harga_paket}}" name="paket[{{$totalll}}][harga]" class="inputhargakun numHarga">
                                </div>
                                <div class="hargakun" style="float: right">
                                    <button class="spanhargakun" disabled>Per</button>
                                    <input type="number" class="inputhargakun2" name="paket[{{$totalll}}][num]" min="1" value="{{$waktuPertamax}}"> 
                                    <select class="buttonhargakun2" name="paket[{{$totalll}}][per]" id="">
                                        <option value="Jam">Jam</option>
                                        <option value="Hari">Hari</option>
                                        <option value="Minggu">Minggu</option>
                                        <option value="Bulan">Bulan</option>
                                        <option value="Tahun">Tahun</option>
                                        <option value="Tiket">Tiket</option>
                                    </select>
                                </div>
                            </div>

                            <input type="hidden" value="{{$totalll}}" name="totot">

                            <div id="addNew">

                            </div>


                            <button class="site-btn submit-order-btn" type="button" id="tambahPaket" style="margin-top:20px; margin-bottom:32px; width:30%;">Tambah Paket Harga</button>

                            <div class="row" style="width: 100%;">
                                <div class="col-md-12">
                                    <label for="">Informasi Ketersediaan Barang</label>
                                    <textarea name="ketersediaan" class="ketersediaan" placeholder="Informasi Ketersediaan">{{$paketFirst->ketersediaan_paket}}</textarea>
                                </div>
                            </div>
                        </div>
                        
                        

						<div class="cf-title" style="margin-bottom:30px;">Lokasi Iklan</div>
						<div class="row address-inputs">
							<div class="col-md-12">
								<select class="selectkun" name="provinsi" id="provinsi">
                                        <option select="all">Pilih Provinsi</option>
                                        @foreach ($pro as $d)
                                            <option value="{{$d->id}}">{{$d->name}}</option>
                                        @endforeach
                                  </select>
                            </div>

                            <div class="col-md-12 tiada" id="pilihKabu">
								<select class="selectkun" name="kabupaten" id="kabupaten">
                                    <option value="all">~ Pilih Kabupaten ~</option>
                                    @foreach ($kabu as $d)
                                            <option value="{{$d->id}}">{{$d->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-12 tiada" id="pilihKeca">
								<select class="selectkun" name="kecamatan" id="kecamatan">
                                    <option value="all">~ Pilih Kecamatan ~</option>
                                    @foreach ($keca as $d)
                                        <option value="{{$d->id}}">{{$d->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                        </div>
                        
						
                        <button type="submit" class="site-btn submit-order-btn" id="simpanData">Simpan</button>
					</form>
                </div>
                <div class="col-lg-4 order-1 order-lg-2">
					<div class="checkout-cart">
						<h3>Upload Gambar</h3>
						<form method="post" enctype="multipart/form-data"
                            class="dropzone" id="dropzone">
                            @csrf
                        </form>
					</div>
				</div>
                
			</div>
		</div>
	</section>
	<!-- checkout section end -->

    @include('template.footer')

    <script type="text/javascript">

        var $dropZone = $("#dropzone").dropzone(
            {
                url: "{{url('sewa/upload')}}",
                maxFilesize: 12,
                renameFile: function (file) {
                    var dt = new Date();
                    var time = dt.getTime();
                    return time + file.name;
                },
                autoProcessQueue: false,
                parallelUploads: 10,
                acceptedFiles: ".jpeg,.jpg,.png,.gif",
                addRemoveLinks: true,
                timeout: 50000,
                init: function(){
                    var myDropzone = this;
                    var id = "{{$iklan->id_barang}}";
                    $.ajax({
                        type: "GET",
                        url: "{{ url('sewa/getUploaded') }}/"+id,
                        dataType: "JSON",
                        success: function(data){
                            
                            jQuery.each(data, function(index, item) {
                                var mockFile = { name: item.name, size: item.size };
                                
                                myDropzone.options.addedfile.call(myDropzone, mockFile);
                
                                myDropzone.options.thumbnail.call(myDropzone, mockFile, "{{url('img/single-product')}}/"+item.name);
                            });                                     
                        },error: function(){
                            console.log('error');
                        }
                    });
                },
                removedfile: function (file) {
                    var imgName = file.name;
                    $.ajax({
                        type: 'POST',
                        url: '{{ url("sewa/deleteUp") }}',
                        data: {
                            "_token": "{{ csrf_token() }}",
                            filename: imgName,
                            id: "{{$iklan->id_barang}}"},
                        success: function (data) {
                            console.log("File has been successfully removed!!");
                        },
                        error: function (e) {
                            console.log(e);
                        }
                    });
                    var fileRef;
                    return (fileRef = file.previewElement) != null ?
                        fileRef.parentNode.removeChild(file.previewElement) : void 0;
                },
                success: function (file, response) {
                    console.log(response);
                },
                error: function (file, response) {
                    return false;
                }
        });

        
        $(document).ready(function() {
            
            getPaket();
            setData();

            function setData(){
                var tipe = "{{$iklan->tipe_barang}}";
                $("input[name='judul']").val("{{$iklan->nama_barang}}");
                $("input[name='tipe']").val("{{$iklan->tipe_barang}}");

                $("select[name='tipe']").val("{{$iklan->tipe_sewa}}");
                $("select[name='kategori']").val("{{$iklan->kategori_sewa}}");
                $("select[name='subkate']").val("{{$iklan->subkategori_sewa}}");

                $("#pilihKabu").removeClass('tiada');
                $("#pilihKabu").addClass('ada');  
                $("#pilihKeca").removeClass('tiada');
                $("#pilihKeca").addClass('ada');  
                $("#pilihMerk").removeClass('tiada');
                $("#pilihMerk").addClass('ada');  

                $("select[name='provinsi']").val("{{$lokasi->id_provinsi}}");
                $("select[name='kabupaten']").val("{{$lokasi->id_kabupaten}}");
                $("select[name='kecamatan']").val("{{$lokasi->id_kecamatan}}");

                
            }

            $("#tipe").on('change', function(){
                var val = $(this).val(); 
                $.ajax({
                    type: "GET",
                    url: "{{ url('sewa/getKategori') }}/"+val,
                    success: function(data){
                        // alert(data); 
                        $('#kategori').html(data);  
                        $('#kategori').val("all");                                               
                    },error: function(){
                        console.log('error');
                    }
                }); 
            });

            $("#kategori").on('change', function(){
                var val = $(this).val(); 
                $.ajax({
                    type: "GET",
                    url: "{{ url('sewa/getKategori2') }}/"+val,
                    success: function(data){
                        // alert(data); 
                        $('#subkate').html(data); 
                        $('#subkate').val("all");                                              
                    },error: function(){
                        console.log('error');
                    }
                }); 
            });
        

            function getPaket(){
                $("select[name='paket[0][per]']").val("{{$satuanPertamax}}");
                var idsewa = "{{$iklan->id_sewa}}";
                var paketNum = "{{$paket_num}}";
                
                
                $.ajax({
                        type: "GET",
                        url: "{{ url('sewa/getPaket') }}/"+idsewa,
                        success: function(data){
                            
                            $('#addNew').append(data);
                            $("input[name='totot']").val(paketNum-1); 
    
                        },error: function(){
                            console.log('error');
                        }
                    }); 


                
                    
            }

            $(document).on('click', '.hapusPaket', function(){
                var z = $(this).parent().parent().parent().addClass('tiada');
            });

            $("#tambahPaket").on('click',function(e){
                e.preventDefault();
                var tot = parseInt($("input[name='totot']").val(), 10);
                tot++;
                $.ajax({
                    type: "GET",
                    url: "{{ url('sewa/addNew') }}/"+tot,
                    success: function(data){
                        $('#addNew').append(data);

                    },error: function(){
                        console.log('error');
                    }
                });      
                
                $("input[name='totot']").val(tot);       
            }); 

            

            $("#ubahin").submit(function(e){
                e.preventDefault();
                var id = "{{$iklan->id_barang}}";
                var req = new FormData(this);
                $.ajax({
                    url: "{{ url('sewa/update') }}/"+id,
                    method: "POST",
                    data: req,
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data){
                        if(data == "sukses"){
                            console.log(data);
                            $dropZone[0].dropzone.processQueue();
                                swal.fire('Berhasil Ubah Iklan!',
                                            'Data iklan telah diubah',
                                            'success').then(function(){ 
                                                     location.reload();
                                            });

                            
                        }else {
                            console.log(data);
                          swal.fire('Gagal Ubah Iklan !', 'Terjadi Error', 'error');
                        }
                    }
                });
              

          });

            $("#provinsi").change(function(){
                var id = $(this).val(); 
                $.ajax({
                    type: "GET",
                    url: "{{ url('getKabu') }}/"+id,
                    success: function(data){
                        $("#pilihKabu").removeClass('tiada');
                        $("#pilihKabu").addClass('ada');  
                        $("#pilihKeca").removeClass('ada');
                        $("#pilihKeca").addClass('tiada');  
                        // alert(data); 
                        $('#kabupaten').html(data); 
                        $('#kabupaten').val("all");                                              
                    },error: function(){
                        console.log('error');
                    }
                });                    
            });  

            $("#kabupaten").change(function(){
                var id = $(this).val(); 
                $.ajax({
                    type: "GET",
                    url: "{{ url('getKeca') }}/"+id,
                    success: function(data){
                        $("#pilihKeca").removeClass('tiada');
                        $("#pilihKeca").addClass('ada');  
                        // alert(data); 
                        $('#kecamatan').html(data); 
                        $('#kecamatan').val("all");                                                 
                    },error: function(){
                        console.log('error');
                    }
                });                    
            });  

            $(document).on('keyup', '.numHarga',function(event) {

                // skip for arrow keys
                if(event.which >= 37 && event.which <= 40) return;

                // format number
                $(this).val(function(index, value) {
                return value
                .replace(/\D/g, "")
                .replace(/\B(?=(\d{3})+(?!\d))/g, ".")
                ;
                });
            });


            $("#jenis").change(function(){
                var id = $(this).val(); 
                $.ajax({
                    type: "GET",
                    url: "{{ url('jual/getJenis') }}/"+id,
                    success: function(data){
                        $("#pilihMerk").removeClass('tiada');
                        $("#pilihMerk").addClass('ada');  
                        // alert(data); 
                        $('#pilihMerk').html(data);   
                                                               
                    },error: function(){
                        console.log('error');
                    }
                });                    
            }); 

            

        });

        
    </script>
    
    
    @endsection