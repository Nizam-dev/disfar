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
                    style="background-image:url({{asset('public/images/kambing/'.$data->lampiran_foto)}});background-size: 100% ;background-repeat: no-repeat;">
                </div>
            </div>
            <div class="col-md-6 pl-md-5 py-5">
                <div class="row justify-content-start py-5">
                    <div class="col-md-12 heading-section ftco-animate fadeInUp ftco-animated">
                        <h2 class="mb-2">{{$data->jenis}}</h2>
                        <h5 class="mt-0 text-primary font-weight-bold">Rp. {{ number_format($data->kisaran_harga_jual, 0, ',', '.') }}</h5>

                        <ul>
                            <li>Kelebihan/Kekurangan : {{$data->kelebihan_kekurangan}}</li>
                            <li>Umur: {{$data->umur}}</li>
                        </ul>

                   

                    </div>


                </div>




                <a href="https://api.whatsapp.com/send/?phone=%2B{{$data->no_wa}}"
                    class="float-right btn btn-success mb-5"> <i class="fa-brands fa-whatsapp"></i> Hubungi</a>
            </div>
        </div>
    </div>
</section>



@endsection