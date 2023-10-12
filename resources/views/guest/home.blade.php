@extends('guest.template.master')

@section('content')

<div class="hero-wrap js-fullheight"
    style="background-image: url( {{asset('public/images/bg1.jpg')}} );"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
            data-scrollax-parent="true">
            <div class="col-md-9 text text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            
                <p class="caps" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                    Penjualan Kambing Bagus Dan Terpercaya
                </p>
                <h1 data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                    Cari Kambing Impianmu Disini
                </h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-no-pb ftco-no-pt">
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="search-wrap-1 ftco-animate p-4">
                    <form action="#" class="search-property-1">
                        <div class="row">
                            <div class="col-lg align-items-end">
                                <div class="form-group">
                                    <label for="#">Cari</label>
                                    <div class="form-field">
                                        <div class="icon"><span class="ion-ios-search"></span></div>
                                        <input type="text" class="form-control" placeholder="Cari Kambing">
                                    </div>
                                </div>
                            </div>
       
                            <div class="col-lg align-self-end">
                                <div class="form-group">
                                    <div class="form-field">
                                        <input type="submit" value="Search" class="form-control btn btn-primary">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section ftco-no-pt mt-5">
    <div class="container">
        <div class="row justify-content-center pb-4">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h2 class="mb-4">Marketplace Kambing</h2>
            </div>
        </div>
        <div class="row">
            @foreach($penjualan_ternak as $p)

            <div class="col-md-4 ftco-animate">
                <div class="project-wrap">
                    <a href="#" class="img" style="background-image: url({{$p->lampiran_foto}});">
                </a>
                    <div class="text p-4">
                        <!-- <span class="price">Rp. {{$p->kisaran_harga_jual}}</span> -->
                        <span class="price">Rp. {{ number_format($p->kisaran_harga_jual, 0, ',', '.') }}</span>

                        <span class="days">Umur {{$p->umur}} Tahun</span>
                        <h3><a href="#">{{$p->jenis}}</a></h3>
                        <a href="https://api.whatsapp.com/send={{$p->no_wa}}" class="btn btn-sm float-right btn-success ml-2">
                        <i class="fab fa-whatsapp"></i>
                        </a>

                        <a class="btn btn-sm float-right btn-primary">Lihat</a>
                        <p class="location"><span class="ion-ios-map"></span>  Indonesia</p>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- <div class="col-md-4 ftco-animate">
                <div class="project-wrap">
                    <a href="#" class="img" style="background-image: url({{asset('public/images/kambing/kambing2.jpeg')}});"></a>
                    <div class="text p-4">
                        <span class="price">Rp. 3.500.000</span>
                        <span class="days">Umur 2 Tahun</span>
                        <h3><a href="#">Kambing Gibas</a></h3>
                        <a class="btn btn-sm float-right btn-primary">Lihat</a>
                        <p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 ftco-animate">
                <div class="project-wrap">
                    <a href="#" class="img" style="background-image: url({{asset('public/images/kambing/kambing3.jpeg')}});"></a>
                    <div class="text p-4">
                        <span class="price">Rp. 3.500.000</span>
                        <span class="days">Umur 2 Tahun</span>
                        <h3><a href="#">Kambing Gibas</a></h3>
                        <a class="btn btn-sm float-right btn-primary">Lihat</a>
                        <p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 ftco-animate">
                <div class="project-wrap">
                    <a href="#" class="img" style="background-image: url({{asset('public/images/kambing/kambing4.jpeg')}});"></a>
                    <div class="text p-4">
                        <span class="price">Rp. 3.500.000</span>
                        <span class="days">Umur 2 Tahun</span>
                        <h3><a href="#">Kambing Gibas</a></h3>
                        <a class="btn btn-sm float-right btn-primary">Lihat</a>
                        <p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
                    </div>
                </div>
            </div> -->
   
        </div>
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li class="{{ $penjualan_ternak->currentPage() == 1 ? 'active' :'' }}">
                    @if($penjualan_ternak->currentPage() == 1)
                    <span>&lt;</span>
                    @else
                    <a href="{{  url('/?page='.$penjualan_ternak->currentPage() - 1 ) }}">&lt;</a>
                    @endif
                </li>

                @for($i=1;$i<=$penjualan_ternak->lastPage();$i++)
                @if($penjualan_ternak->currentPage() == $i)
                <li class="active"><span>{{$i}}</span></li>
                @else
                <li><a href="{{url('/?page='.$i)}}">{{$i}}</a></li>
                @endif
                @endfor
                <li class="{{ $penjualan_ternak->currentPage() == $penjualan_ternak->lastPage() ? 'active' :'' }}">
                    @if($penjualan_ternak->currentPage() == $penjualan_ternak->lastPage())
                    <span>&gt;</span>
                    @else
                    <a href="{{  url('/?page='.$penjualan_ternak->currentPage() + 1 ) }}">&gt;</a>
                    @endif
                </li>
              </ul>
            </div>
          </div>
        </div>
    </div>
</section>



@endsection