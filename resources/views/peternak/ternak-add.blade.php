@extends('admin.template.master')

@section('content')

<h5 class="fw-semibold">
<a href="{{url('peternak/ternak')}}"><i class="ti ti-arrow-left bg-danger rounded-circle text-white"></i></a>
Tambah Ternak</h5>

<div class="card">
    <div class="card-body">
        <form action="{{url('peternak/ternak/tambah')}}" method="post">
            @csrf

            <div class="form-group">
                <label for="" class="form-label">Jenis Kambing</label>
                <input type="text" class="form-control @error('jenis_kambing') is-invalid @enderror" name="jenis_kambing">
            </div>
            <div class="form-group">
                <label for="" class="form-label">Umur</label>
                <input type="text" class="form-control @error('umur') is-invalid @enderror" name="umur">
            </div>
            <div class="form-group">
                <label for="" class="form-label">Kesehatan</label>
                <input type="text" class="form-control @error('kesehatan') is-invalid @enderror" name="kesehatan">
            </div>

            <button type="submit" class="btn btn-primary float-end mt-3">Tambah</button>

        </form>
    </div>
</div>

@endsection

@push('js')

@endpush