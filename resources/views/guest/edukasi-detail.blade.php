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
    <div class="container mt-5 mb-5">
        <div class="row d-flex">
            <div class="col-md-6 d-flex">
                <div class="img d-flex align-self-stretch"
                    style="background-image:url({{asset('public/images/kambing/'.$data->foto_edukasi)}});background-size: 100% ;background-repeat: no-repeat;">
                </div>
            </div>
            <div class="col-md-6 pl-md-5 py-5">
                <div class="row justify-content-start py-5">
                    <div class="col-md-12 heading-section ftco-animate fadeInUp ftco-animated">
                        <h2 class="mb-2">{{$data->jenis_edukasi}}</h2>

                        <p>
                            {{$data->isi_edukasi}}
                        </p>                   

                    </div>


                </div>
            </div>
        </div>
    </div>
</section>



@endsection