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

               
						@if(session()->has('message'))

                        <div class="toastrDefaultSuccess" role="alert" id="notif">

                        </div>
                        @endif

        
  <script src="{{asset('public/template-admin/assets/libs/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('public/template-admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('public/toastr/toastr.min.js')}}"></script>
		<script>
			$(function() {

				$('.toastrDefaultSuccess').addClass(function() {

					toastr.success('Berhasil Masuk')
				});

			});
		</script>
</body>

</html>