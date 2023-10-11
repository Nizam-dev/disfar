@extends('guest.template.master')

@push('css')
<style>
    @media (max-width: 767.98px) {
        .ats {
            display: none;
        }
    }
</style>
@endpush
@section('content')



<div class="bg-dark w-100 ats" style="height:90px;"></div>

<section class="ftco-counter img" id="section-counter">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 d-flex">
                <div class="img d-flex align-self-stretch"
                    style="background-image:url({{asset('public/images/kambing/kambing1.jpeg')}});background-size: 100% ;background-repeat: no-repeat;">
                </div>
            </div>
            <div class="col-md-6 pl-md-5 py-5">
                <div class="row justify-content-start pb-3">
                    <div class="col-md-12 heading-section ftco-animate fadeInUp ftco-animated">
                        <h2 class="mb-2">Kambing Gibas</h2>
                        <h5 class="mt-0 text-primary font-weight-bold">Rp 3.500.000</h5>

                        <ul>
                            <li>asdas</li>
                        </ul>

                       <p>
                        asda
                       </p>
                       <p>Riwayat Kesehatan</p>
                       <p>Riwayat rEPRODUSKI</p>

                    </div>


                </div>




                <a href="https://api.whatsapp.com/send?phone=6285107017089&amp;text=_Halo Driver Bali Tour_%0aSaya nak pesan *PAKEJ BALI 3D2N*%0a%0a_https://www.driverbalitour.com/details/PAKEJ-BALI-3D2N/11_%0a"
                    class="float-right btn btn-success"> <i class="fa-brands fa-whatsapp"></i> Pesan Sekarang</a>
            </div>
        </div>
    </div>
</section>



@endsection