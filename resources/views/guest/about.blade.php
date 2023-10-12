@extends('guest.template.master')
@section('content')

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url( {{asset('public/images/bg1.jpg')}} );" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">About Us</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{url('')}}l">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

<section class="ftco-section services-section bg-light">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate">
                <h2 class="mb-4">DISFAR</h2>
                <p>
                Website perternakan kambing adalah platform praktis yang dirancang untuk memberikan informasi dan panduan kepada para peternak dalam mengelola usaha peternakan mereka. 
                Dengan tampilan yang user-friendly, website ini menyediakan berbagai edukasi, informasi, dan marketplace penjualan ternak kambing. 
                </p><p>
                Para pengguna website ini dapat juga berinteraksi dengan komunitas peternak lainnya melalui forum diskusi, bertukar pengalaman, serta memperoleh solusi dari para ahli dalam bidang peternakan. Dengan adanya website perternakan ini, diharapkan para peternak dapat meningkatkan produktivitas usaha mereka dan memperoleh penghasilan yang optimal.
                </p>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                        <div class="media block-6 services d-block">
                            <div class="icon"><span class="flaticon-paragliding"></span></div>
                            <div class="media-body">
                                <h3 class="heading mb-3">Peternakan</h3>
                                <p>
                                    Peternak Bisa Menyimpan data ternak untuk memudahkan kontrol pada hewan ternak.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                        <div class="media block-6 services d-block">
                            <div class="icon"><span class="flaticon-route"></span></div>
                            <div class="media-body">
                                <h3 class="heading mb-3">Penjualan</h3>
                                <p>Peternak juga bisa menawarkan hewan ternak kambing untuk di jual.</p>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</section>
@endsection