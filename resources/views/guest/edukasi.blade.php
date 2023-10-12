@extends('guest.template.master')
@section('content')

<section class="hero-wrap hero-wrap-2 js-fullheight"
    style="background-image: url( {{asset('public/images/bg1.jpg')}} );" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-3 bread">Edukasi</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="{{url('')}}l">Home <i
                                class="ion-ios-arrow-forward"></i></a></span> <span>Edukasi <i
                            class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-4">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h2 class="mb-4">Edukasi Peternakan</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 ftco-animate">
                <div class="project-destination">
                    <a href="#" class="img" style="background-image: url( {{url('public/images/kambing/kambing1.jpeg')}} );">
                        <div class="text">
                            <h3>Jenis Edukasi</h3>
                            <span>Lihat</span>
                        </div>
                    </a>
                </div>
            </div>
         
        </div>
    </div>
</section>
@endsection