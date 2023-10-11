<!DOCTYPE html>
<html lang="en">

<head>
    <title>DISFAR</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('guest.template.css')

</head>

<body>
    @include('guest.template.navbar')
    <!-- END nav -->

    @yield('content')

    <footer class="ftco-footer bg-bottom" style="background-image: url(images/footer-bg.jpg);">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">About</h2>
                        <p>Disfar adalah website penyedia layanan penjualan kambing.</p>
                        </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Infromation</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">Riwayat Reproduksi Kambing</a></li>
                            <li><a href="#" class="py-2 d-block">Riwayat Kesehatan Kambing</a></li>
                            <li><a href="#" class="py-2 d-block">Infromasi Kambing</a></li>
                        </ul>
                    </div>
                </div>
            
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">Banyuwangi, Indonesia</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+62 8385788141251</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span
                                            class="text">disfarkambing@gmail.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="icon-heart color-danger"
                            aria-hidden="true"></i> by <a href="{{ url('') }}" target="_blank">Disfar</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg>
    </div>


    @include('guest.template.js')

</body>

</html>