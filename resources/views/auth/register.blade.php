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
                <p class="text-center">REGISTER - DISFAR</p>
               
						@if(session()->has('message'))

                        <div class="toastrDefaultSuccess" role="alert" id="notif">

                        </div>
                        @endif

                        @if(session()->has('error'))
                        <div class="alert alert-danger" role="alert" id="notif">

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
                           
                        </div>
                        @endif
                <form action="{{url('postregister')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                    <label for="exampleInput" class="form-label">Nama</label>
                    <input type="nama" class="form-control" id="nama" name="nama">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInput" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInput" class="form-label">Nomor HP</label>
                    <input type="nohp" class="form-control" id="nohp" name="nohp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInput" class="form-label">Dusun</label>
                    <!-- <input type="dusun" class="form-control" id="dusun" name="dusun"> -->
                    <select name="dusun" class="form-control @error('dusun') is-invalid @enderror">
                            <option value="Dusun Watugepeng">Dusun Watugepeng</option>
                            <option value="Dusun Telemungsari">Dusun Telemungsari</option>
                            <option value="Dusun Wonosuko">Dusun Wonosuko</option>
                            <option value="Dusun Krajan">Dusun Krajan</option>
                            <option value="Dusun Gedor">Dusun Gedor</option>
      
                        </select>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInput" class="form-label">Alamat</label>
                    <input type="dusun" class="form-control" id="alamat" name="alamat">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInput" class="form-label">Username</label>
                    <input type="username" class="form-control" id="username" name="username">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInput" class="form-label">Password</label>
                    <input type="password" class="form-control" id="Password" name="password">
                  </div>

                  <div class="mb-4">
                    <label for="exampleInput" class="form-label">Konfirmasi Password</label>
                    <input type="password" class="form-control" id="Pk_assword" name="kpassword">
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-4">
                  <a class="text-primary fw-bold" href="{{url('lupa-password')}}">Lupa Password ?</a>
                  </div>
                  <button type="submit"  class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Daftar </button>
             
                  
                </form>
                <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">Sudah punya akun?</p>
                    <a class="text-primary fw-bold ms-2" href="{{url('login')}}">Masuk</a>
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

					toastr.success('Berhasil Mendaftar. Silahkan Tunggu Konfirmasi Admin')
				});

			});
		</script>
</body>

</html>