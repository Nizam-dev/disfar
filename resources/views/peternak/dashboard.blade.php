@extends('admin.template.master')
@push('css')
    <style>
       .row .ti{
            font-size : 2.7rem;
            color:white;
        }
    </style>
@endpush
@section('content')

<h5 class="fw-semibold">Dashboard</h5>

<div class="alert alert-secondary text-center" role="alert">
    Welcome {{auth()->user()->nama}} 
</div>


<div class="row">

    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card bg-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                            Ternak</div>
                        <div class="h5 mb-0 font-weight-bold text-white">{{$data['ternak']}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="ti ti-crown"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card bg-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                            Penjualan</div>
                        <div class="h5 mb-0 font-weight-bold text-white">{{$data['penjualan']}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="ti ti-shopping-cart"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

@endsection