<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Hello Mate ~ Project SIA</title>
  <!-- Favicon -->
  <link rel="icon" href="{{ url('template3/img/brand/favicon.png') }}" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{url('template3/vendor/nucleo/css/nucleo.css')}}" type="text/css">
  <link rel="stylesheet" href="{{url('template3/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
  <!-- Page plugins -->

  {{-- DataTable --}}
  <link rel="stylesheet" href="{{ url('template3/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ url('template3/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ url('template3/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css') }}">

  {{-- Form --}}
  <link rel="stylesheet" href="{{url('template3/vendor/select2/dist/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{url('template3/vendor/quill/dist/quill.core.css')}}">

  {{-- Sweet Alert --}}
  <link rel="stylesheet" href="{{ url('template3/vendor/sweetalert2/dist/sweetalert2.min.css') }}">


  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{url('template3/css/argon.css?v=1.1.0')}}" type="text/css">
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header d-flex align-items-center">
        <a class="navbar-brand" href="{{url('/')}}">
          <img src="{{url('img/theme/logo.png')}}" class="navbar-brand-img" alt="...">
        </a>
        <div class="ml-auto">
          <!-- Sidenav toggler -->
          <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link " href="{{url('admin/kelolaUser')}}">
                <i class="ni ni-folder-17 text-blue"></i> 
                <span class="nav-link-text">Kelola User</span>
              </a>
            </li>
            
           
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          
        </div>
      </div>
    </div>
  </nav>
  
<div class="main-content" id="panel">
  <!-- Topnav -->
  <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Search form -->
        <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative input-group-merge">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <input class="form-control" placeholder="Search" type="text">
            </div>
          </div>
          <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </form>
        <!-- Navbar links -->
        <ul class="navbar-nav align-items-center ml-md-auto">
          <li class="nav-item d-xl-none">
            <!-- Sidenav toggler -->
            <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
              <div class="sidenav-toggler-inner">
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
              </div>
            </div>
          </li>
          <li class="nav-item d-sm-none">
            <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
              <i class="ni ni-zoom-split-in"></i>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="ni ni-bell-55"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right py-0 overflow-hidden">
              <!-- Dropdown header -->
              <div class="px-3 py-3">
                <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong> notifications.</h6>
              </div>
              <!-- List group -->
              
              <!-- View all -->
              <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="ni ni-ungroup"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default dropdown-menu-right">
              <div class="row shortcuts px-4">
                <a href="#!" class="col-4 shortcut-item">
                  <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                    <i class="ni ni-calendar-grid-58"></i>
                  </span>
                  <small>Calendar</small>
                </a>
                <a href="#!" class="col-4 shortcut-item">
                  <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                    <i class="ni ni-email-83"></i>
                  </span>
                  <small>Email</small>
                </a>
                <a href="#!" class="col-4 shortcut-item">
                  <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                    <i class="ni ni-credit-card"></i>
                  </span>
                  <small>Payments</small>
                </a>
                <a href="#!" class="col-4 shortcut-item">
                  <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                    <i class="ni ni-books"></i>
                  </span>
                  <small>Reports</small>
                </a>
                <a href="#!" class="col-4 shortcut-item">
                  <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                    <i class="ni ni-pin-3"></i>
                  </span>
                  <small>Maps</small>
                </a>
                <a href="#!" class="col-4 shortcut-item">
                  <span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
                    <i class="ni ni-basket"></i>
                  </span>
                  <small>Shop</small>
                </a>
              </div>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav align-items-center ml-auto ml-md-0">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="{{url('img/user/cropped/default.png')}}">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold">{{ Session::get('username')}}</span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href="#" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
              <a href="{{url('user/kelola')}}" class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
                <span>Kelola User</span>
              </a>  
              
              <div class="dropdown-divider"></div>
              <a href="{{url('logout')}}" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
    

  <!-- Header -->
  <div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">User</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#">Kelola User</a></li>
              </ol>
            </nav>
          </div>
          <div class="col-lg-6 col-5 text-right">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Page content -->
  <div class="container-fluid mt--6">
    <!-- Table -->
    <div class="row">
      <div class="col">
        <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <div class="row">
                <div class="col-6">
                  <h3 class="mb-0">Kelola User</h3>
                </div>
                <div class="col-6 text-right">
                    
                </div>
              </div>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th>Username</th>
                    <th>No Telp</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Tanggal Daftar</th>
                    <th>Status</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($user as $d)
                        <tr>
                        <td class="table-user">
                            <img src="{{url('img/user/cropped/'.$d->gambar_profile)}}" class="avatar rounded-circle mr-3">
                            <b>{{$d->username}}</b>
                        </td>
                        <td>
                            <span class="text-muted">{{$d->no_telp}}</span>
                        </td>
                        <td>
                            <span class="text-muted">{{$d->email}}</span>
                        </td>
                        <td>
                            <span class="font-weight-bold">{{$d->alamat}}</span>
                        </td>
                        <td>
                            <span class="font-weight-bold">{{$d->tgl_daftar}}</span>
                        </td>
                        @if ($d->status_user == 0)
                                <td><button type="button" data-id="{{$d->id_user}}" data-stat="{{$d->status_user}}" class="btn btn-danger stat" data="non">Nonaktif</button></td>
                            @else
                                <td><button type="button" data-id="{{$d->id_user}}" data-stat="{{$d->status_user}}" class="btn btn-success stat" data="ak">Aktif</button></td>
                            @endif
                        
                            <td class="table-actions">
                                <a href="#!" class="table-action" data-toggle="tooltip" data-original-title="Edit product">
                                <i class="fas fa-user-edit"></i>
                                </a>
                                <a href="#!" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete product">
                                <i class="fas fa-trash"></i>
                                </a>
                            </td>

                        
                        </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
        
      </div>
    </div>



    <!-- Footer -->
    <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center text-lg-left text-muted">
              &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Trio Ubur - Ubur</a>
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Trio Ubur - Ubur</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/license" class="nav-link" target="_blank">License</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{ url('template3/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ url('template3/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ url('template3/vendor/js-cookie/js.cookie.js') }}"></script>
  <script src="{{ url('template3/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
  <script src="{{ url('template3/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
  <!-- Optional JS -->
  <script src="{{ url('template3/vendor/chart.js/dist/Chart.min.js') }}"></script>
  <script src="{{ url('template3/vendor/chart.js/dist/Chart.extension.js') }}"></script>
  <script src="{{ url('template3/vendor/jvectormap-next/jquery-jvectormap.min.js') }}"></script>
  <script src="{{ url('template3/js/vendor/jvectormap/jquery-jvectormap-world-mill.js') }}"></script>
  <script src="{{ url('template3/vendor/datatables.net/js/jquery.dataTables.min.js') }}"></script>

  {{-- DataTable --}}
  <script src="{{ url('template3/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ url('template3/vendor/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
  <script src="{{ url('template3/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
  <script src="{{ url('template3/vendor/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
  <script src="{{ url('template3/vendor/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
  <script src="{{ url('template3/vendor/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
  <script src="{{ url('template3/vendor/datatables.net-select/js/dataTables.select.min.js') }}"></script>

  {{-- Form --}}
  <script src="{{ url('template3/vendor/select2/dist/js/select2.min.js') }}"></script>
  <script src="{{ url('template3/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ url('template3/vendor/nouislider/distribute/nouislider.min.js') }}"></script>
  <script src="{{ url('template3/vendor/quill/dist/quill.min.js') }}"></script>
  <script src="{{ url('template3/vendor/dropzone/dist/min/dropzone.min.js') }}"></script>
  <script src="{{ url('template3/vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>

  {{-- Sweet ALert --}}
  <script src="{{ url('template3/vendor/sweetalert2/dist/sweetalert2.min.js') }}"></script>
  {{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}
  @include('sweetalert::alert')

  {{-- Moment JS --}}
  <script src="{{ url('template3/vendor/moment/moment-indo.js') }}"></script>

  <!-- Argon JS -->
  <script src="{{ url('template3/js/argon.js?v=1.1.0') }}"></script>
  <!-- Demo JS - remove this in your project -->
  <script src="{{ url('template3/js/demo.min.js') }} "></script>
</body>

</html>
      {{-- ----------------------------------------------   SCRIPT HERE   --------------------------------------------}}
      <script>
        $(document).ready( function (e) {

          $("#modalTambah").on("hidden.bs.modal", function () {
            $("#kode").removeClass('is-invalid');
          });

          $(document).on('click', ".stat", function(e){
            e.preventDefault();
            var element = this;
            var data = $(this).attr('data');

            var id = $(this).attr('data-id');
            $.ajax({
                type: "GET",
                url: "{{ url('admin/aktivasi') }}/"+id,
                success: function(data){
                  if(data == "0"){
                      $(element).removeClass('btn-success');
                      $(element).addClass('btn-danger');
                      $(element).html('Nonaktif');

                  } else {
                    $(element).removeClass('btn-danger');
                      $(element).addClass('btn-success');
                      $(element).html('Aktif');
                  }                            
                },error: function(){
                    console.log('error');
                }
            });
          });

          


        });
      </script>
      


            