@extends('template.head')
@section('content')

<style>
    ul {
        margin-bottom: 0 !important;
    }
</style>
<link rel="stylesheet" href="{{url('template3/vendor/nucleo/css/nucleo.css')}}" type="text/css">
<link rel="stylesheet" href="{{url('template3/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
<link rel="stylesheet" href="{{url('template3/css/argon.css?v=1.1.0')}}" type="text/css">

<div class="header pb-6 d-flex align-items-center" style=" min-height: 500px; background-image: url({{url('img/theme/bg-profile.jpg')}}); background-size: cover; background-position: center top;">
    <!-- Mask -->
    <span class="mask bg-gradient-default opacity-8"></span>
    <!-- Header container -->
    <div class="container-fluid d-flex align-items-center">
      <div class="row">
        <div class="col-lg-7 col-md-10">
          <h1 class="display-2 text-white ml-4">Hello <span class="userku">{{Session::get('username')}}</span></h1>
          <p class="text-white mt-0 mb-4 ml-4">Ini adalah Halaman Profil. Anda dapat mengubah informasi data diri anda dan Mengelola Iklan yang sudah anda Post</p>
          <a href="{{url('/')}}" class="btn btn-neutral ml-4">Dashboard</a>
        </div>
      </div>
    </div>
</div>

<div class="container-fluid mt--6">
    <div class="row">
      <div class="col-xl-4 order-xl-2">

        <div class="card card-profile">
            <img src="{{url('img/theme/img-1-1000x600.jpg')}}" alt="Image placeholder" class="card-img-top">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                 
                    <img src="{{url('img/user/cropped/'.$user->gambar_profile)}}" class="rounded-circle">
                  
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
              <div class="d-flex justify-content-between">
                <button type="button" data-toggle="modal" data-target="#modalCrop" class="btn btn-sm btn-info mr-4">Ubah Profil</button>
                <a href="{{url('logout')}}" class="btn btn-sm btn-default float-right">Logout</a>
              </div>
            </div>
            <div class="card-body pt-0">
              <div class="row">
                <div class="col">
                  <div class="card-profile-stats d-flex justify-content-center">
                    <div>
                      <span class="heading">{{$count_jual}}</span>
                      <span class="description">Produk Dijual</span>
                    </div>
                    <div>
                      <span class="heading">{{$count_sewa}}</span>
                      <span class="description">Produk Disewakan</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center">
                <h5 class="h3">
                  {{$user->username}}<span class="font-weight-light"></span>
                </h5>
                <h5 class="h3">
                    <span class="font-weight-light">{{$user->no_telp}}</span>
                  </h5>
                <div class="h5 font-weight-300">
                  <i class="ni location_pin mr-2"></i>{{$user->email}}
                </div>
                <div class="h5 mt-4">
                <?php
					$tgl = $user->tgl_daftar;
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
                  <i class="ni business_briefcase-24 mr-2"></i>Bergabung Sejak {{$b." ".$t}}
                </div>
                <div>
                  <i class="ni education_hat mr-2"></i>{{$user->alamat}}
                </div>
              </div>
            </div>
          </div>

        <!-- Ubah Pass track -->
        <div class="card">
          <!-- Card header -->
          <div class="card-header">
            <!-- Title -->
            <div class="row align-items-center">
              <div class="col-8">
                <h5 class="h3 mb-0">Ubah Password</h5>
              </div>
              <div class="col-4 text-right">
                <a href="#" id="ubahPass" class="btn btn-sm btn-danger">Simpan</a>
              </div>
            </div>
            
          </div>
          <!-- Card body -->
          <div class="card-body">
            <!-- List group -->
            <form>
              <!-- Address -->
              {{-- <h6 class="heading-small text-muted mb-4">Ubah Password</h6> --}}
              <div class="pl-lg-12">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label class="form-control-label" for="input-city">Password Lama</label>
                      <input type="password" id="passLama" class="form-control" placeholder="Password Lama">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label class="form-control-label" for="input-country">Password Baru</label>
                      <input type="password" id="passBaru" class="form-control" placeholder="Password Baru">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label class="form-control-label" for="input-country">Konfirmasi Password Baru</label>
                      <input type="password" id="conPassBaru" class="form-control" placeholder="Konfirmasi Password Baru">
                    </div>
                  </div>
                </div>
              </div>
              <hr class="my-4" />
              
            </form>
          </div>
        </div>
       
      </div>
      <div class="col-xl-8 order-xl-1">
        <div class="card">
          <div class="card-header">
            <div class="row align-items-center">
              <div class="col-8">
                <h3 class="mb-0">Edit profile </h3>
              </div>
              <div class="col-4 text-right">
                <a href="#" id="ubahin" class="btn btn-sm btn-danger">Simpan</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <form>
                <input type="hidden" id="idUser" value="{{Session::get('user')}}">
              <h6 class="heading-small text-muted mb-4">User information</h6>
              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label class="form-control-label" for="input-username">Username</label>
                      <input type="text" id="username" class="form-control" placeholder="Username" value="{{$user->username}}">
                    </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="form-group">
                       <label class="form-control-label" for="input-last-name">No Telp</label>
                       <input type="text" id="telp" class="form-control" placeholder="No Telp" value="{{$user->no_telp}}">
                     </div>
                   </div>
                   <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-last-name">Email</label>
                      <input type="email" id="email" class="form-control" placeholder="Email" value="{{$user->email}}">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label class="form-control-label" for="input-first-name">Alamat</label>
                      {{-- <input type="text" id="alamat" class="form-control" placeholder="Alamat" value="Lucky"> --}}
                      <textarea rows="4" id="alamat" class="form-control" placeholder="Alamat">{{$user->alamat}}</textarea>
                    </div>
                  </div>
                </div>
              </div>
              <hr class="my-4" />
              
            </form>
          </div>
        </div>

        <div class="card" id="kelolakun">
         <div class="card-header">
           <div class="row align-items-center">
             <div class="col-8">
               <h3 class="mb-0">Kelola Iklan </h3>
             </div>
           </div>
         </div>
         <div class="card-body">
           <form>
             <!-- Address -->
             {{-- <h6 class="heading-small text-muted mb-4">Ubah Password</h6> --}}
             <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">Nama Iklan</th>
                    <th scope="col" class="sort" data-sort="budget">Harga</th>
                    <th scope="col" class="sort" data-sort="status">Tipe Iklan</th>
                    <th scope="col" class="sort" data-sort="tgl">Tanggal Post</th>
                    <th scope="col" class="sort" data-sort="completion">Keaktifan Iklan</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody class="list">
                  @foreach ($barang as $d)
                    <tr>
                      <th scope="row">
                        <div class="media align-items-center">
                          <a href="#" class="avatar rounded-circle mr-3">
                            <img alt="Image placeholder" src="{{url('img/single-product/cropped/'.$gambar[$d->id_barang])}}">
                          </a>
                          <div class="media-body">
                            <span class="name mb-0 text-sm span-limited">{{$d->nama_barang}}</span>
                          </div>
                        </div>
                      </th>
                      <td class="budget">
                        Rp {{$harga[$d->id_barang]}}
                      </td>
                      <td class="status">
                        @if ($d->status_barang == 0)
                        <span class="badge badge-dot mr-4">
                          <i class="bg-success"></i>
                          <span class="status">
                            Dijual
                          </span>
                        </span>
                        @else
                        <span class="badge badge-dot mr-4">
                          <i class="bg-danger"></i>
                          <span class="status">
                            Disewakan
                          </span>
                        </span>
                        @endif
                        
                      </td>
                      <td class="tgl">
                        {{$d->tgl_post_barang}}
                      </td>
                      <td>
                        <label class="custom-toggle">
                          @if ($status[$d->id_barang] == 0)
                            <input name="stat" type="checkbox" data="{{$d->id_barang}}" checked>
                          @else
                            <input name="stat" type="checkbox" data="{{$d->id_barang}}">
                          @endif
                          
                          <span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes"></span>
                        </label>
                      </td>
                      <td class="text-right">
                        <div class="dropdown">
                          <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <a class="dropdown-item" href="{{url('product/'.$d->id_barang)}}">Lihat Iklan</a>
                            @if ($d->status_barang == 0)
                            <a class="dropdown-item" href="{{url('jual/ubah/'.$d->tipe_barang."/".$d->id_barang)}}">Ubah</a>
                            <div id="hapuskun">
                              <a class="dropdown-item" id="hapuskun" data="{{$d->id_barang}}"  data2="{{$d->status_barang}}" data3="{{$d->tipe_barang}}" href="#">Hapus</a>
                            </div>
                            @else
                            <a class="dropdown-item" href="{{url('sewa/ubah/'.$d->id_barang)}}">Ubah</a>
                            <div id="hapuskun">
                              <a class="dropdown-item" id="hapuskun" data="{{$d->id_barang}}"  data2="{{$d->status_barang}}" href="#">Hapus</a>
                            </div>
                            @endif
                           
                          </div>
                        </div>
                      </td>
                    </tr>
                      
                  @endforeach

                </tbody>
              </table>
            </div>
             <hr class="my-4" />
             
           </form>
         </div>
       </div>
      </div>
    </div>
</div>


{{-- MODAL Image--}}
<div class="modal fade" id="modalCrop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <div class="col-md-4">
        <div id="upload-image"></div>
      </div>
      <div class="col-md-4">
        <form id="uploadUser" type="POST" enctype="multipart/form-data">
          {{ csrf_field() }}
          <input type="hidden">
          <p>Select Image: <input type="file" name="uploadin" id="imagesin"></p>
        
      </div>			
      <div class="col-md-4">
        <div id="upload-image-i"></div>
      </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <button type="submit" id="cropkun" class="btn btn-primary">Save changes</button>
    </div>
  </form>
    </div>
  </div>
</div>

@include('template.footer')


<script src="{{url('template3/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
<script src="{{url('template3/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>
<script src="{{url('template3/js/argon.js?v=1.1.0')}}"></script>
<script>
    $(document).ready(function() {

      $image_crop = $('#upload-image').croppie({
        enableExif: true,
        viewport: {
          width: 200,
          height: 200,
          type: 'square'
        },
        boundary: {
          width: 300,
          height: 300
        }
      });

      $('#imagesin').on('change', function () { 
        var reader = new FileReader();
        reader.onload = function (e) {
          $image_crop.croppie('bind', {
            url: e.target.result
          }).then(function(){
            console.log('jQuery bind complete');
          });			
        }
        reader.readAsDataURL(this.files[0]);
      });

      $("#ubahPass").on('click', function(e){
        e.preventDefault();
        var passLama = $("#passLama").val();
        var passBaru = $("#passBaru").val();
        var conPassBaru = $("#conPassBaru").val();

        $.ajax({
              url: "{{ url('user/ubahPass') }}",
              method: "POST",
              async: false,
              data: {
                "_token": "{{ csrf_token() }}",
                  passLama: passLama,
                  passBaru: passBaru,
                  conPassBaru: conPassBaru
              },
              success: function(data){
                  if(data == "sukses"){
                    swal.fire('Sukses Ubah Password !',
                              'Password telah diubah !',
                              'success').then(function(){ 
                                       location.reload();
                              });
                  }else {
                      swal.fire("Gagal Ubah Password !", data, "error");
                  }
              }
          });
      });

      $("#uploadUser").submit(function(e){
        e.preventDefault();
        var req = new FormData(this);
        // var img = $('#imagesin').val();
        var info = $('#upload-image').croppie('get');

        var top_left_x = info.points[0];
        var top_left_y = info.points[1];
        var bottom_right_x = info.points[2];
        var bottom_right_y = info.points[3];

        var cropped_width = bottom_right_x - top_left_x;
        var cropped_height = bottom_right_y - top_left_y;

        req.append('width', cropped_width);
        req.append('height', cropped_height);
        req.append('left', top_left_x);
        req.append('right', top_left_y);
        $.ajax({
          type:'POST',				 
          data: req,
          contentType: false,
          processData: false,
          url: "{{url('user/upload/update')}}",
          success: function (data) {					
            if(data == "sukses"){
                console.log(data);
                swal.fire('Sukses Ubah Profile !',
                                            'Profile telah diubah !',
                                            'success').then(function(){ 
                                                     location.reload();
                                            });
                
            }else {
                console.log(data);
                swal.fire('Gagal Ubah Data !',
                                            'Terjadi Kesalahan !',
                                            'error').then(function(){ 
                                            });
            }
          }
        });
      });


      $("#cropkun").on('click', function(e){
        
        var info = $('#upload-image').croppie('get');

        var top_left_x = info.points[0];
        var top_left_y = info.points[1];
        var bottom_right_x = info.points[2];
        var bottom_right_y = info.points[3];

        var cropped_width = bottom_right_x - top_left_x;
        var cropped_height = bottom_right_y - top_left_y;
        
      });

      $("#ubahin").on('click', function(e){
          e.preventDefault();
          var user = $("#username").val();
          var email = $("#email").val();
          var alamat = $("#alamat").val();
          var telp = $("#telp").val();

          $.ajax({
              url: "{{ url('user/ubahProfile') }}",
              method: "POST",
              async: false,
              data: {
                "_token": "{{ csrf_token() }}",
                  user: user,
                  alamat: alamat,
                  email: email,
                  telp: telp
              },
              success: function(data){
                  if(data == "sukses"){
                    swal.fire('Sukses Ubah Profile !',
                              'Profile telah diubah !',
                              'success').then(function(){ 
                                       location.reload();
                              });
                  }else {
                      swal.fire("Gagal Ubah Profil !", data, "error");
                  }
              }
          });
      });


      $("input[name='stat']").on('click', function(){
        var stat = $(this).is(":checked");
        var id = $(this).attr('data');
        $.ajax({
            type: "GET",
            data:{
              stat:stat,
              id: id
            },
            url: "{{ url('user/ubahStat') }}",
            success: function(data){
                // if(data == "gagal"){
                //   alert("gagal Ubah");
                // }      
                console.log(data);                                       
            },error: function(){
                console.log('error');
            }
        });  
      });

      $("#hapuskun a").on('click', function (e) {
        e.preventDefault();
        var id = $(this).attr('data');
        var stat = $(this).attr('data2');
        var tipe = $(this).attr('data3');
        
        Swal.fire({
          title: 'Apakah anda yakin untuk menghapus Iklan ini ?',
          text: "Iklan yang terhapus tidak dapat dikembalikan lagi!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.value) {

            alert(stat);
            if(stat == 0){
              var url = "{{url('jual/delete')}}/"+id+"/"+tipe;
            }else {
              var url = "{{url('sewa/delete')}}/"+id;
            }

            $.ajax({
                type: "GET",
                url: url,
                success: function(data){
                  if(data == "sukses"){
                    Swal.fire(
                      'Terhapus !',
                      'Iklan telah Terhapus.',
                      'success'
                    ).then(function(){ 
                             location.reload();
                    });
                  }else{
                    Swal.fire(
                      'Gagal !',
                      'Iklan gagal dihapus.',
                      'error'
                    )  
                  }
                                            
                },error: function(){
                    console.log('error');
                }
            });   

            
          }
        })
      });



    });
</script>

@endsection