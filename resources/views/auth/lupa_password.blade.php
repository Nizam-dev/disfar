<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DISFAR PETERNAK</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="{{asset('public/template-admin/assets/css/styles.min.css')}}" />
  <link rel="stylesheet" href="{{asset('public/toastr/toastr.min.css')}}">
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="../assets/images/logos/dark-logo.svg" width="180" alt="">
                </a>
                <p class="text-center">LUPA PASSWORD - DISFAR</p>

                @if(session()->has('message'))

                <div class="toastrDefaultSuccess" role="alert" id="notif">
 
                </div>
                @endif
                @if(session()->has('error'))
                <div class="alert alert-danger alert-dismissible fade show col-md-12" role="alert">

                    <span data-notify="icon" class="fa fa-bell"></span>
                    <span data-notify="title">Gagal</span> <br>
                    <span data-notify="message">{{session()->get('error')}}</span>
                </div>
                @endif

                @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show col-md-12" role="alert">
                    <strong>Gagal !</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif

                <div class="card-body login-card-body">

                    <p class="login-box-msg">Anda lupa password? disini anda dapat membuat password baru.</p>

                    <form action="{{url('lupa_password')}}" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" name="email" value="{{ old('email')}}" id="email" placeholder="Email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-block">Minta Password Baru</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>


                    <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">Belum punya akun?</p>
                    <a class="text-primary fw-bold ms-2" href="{{url('register')}}">Buat Akun</a>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="{{asset('public/template-admin/assets/libs/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('public/template-admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('public/toastr/toastr.min.js')}}"></script>
		<script>
			$(function() {

				$('.toastrDefaultSuccess').addClass(function() {

					toastr.success('Berhasil')
				});

			});
		</script>
</body>

</html>