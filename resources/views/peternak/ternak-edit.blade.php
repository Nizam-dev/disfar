@extends('admin.template.master')

@section('content')

<h5 class="fw-semibold">
<a href="{{url( auth()->user()->role == 'admin' ? 'admin/ternak' : 'peternak/ternak')}}"><i class="ti ti-arrow-left bg-danger rounded-circle text-white"></i></a>
Edit Ternak</h5>

<div class="card">
    <div class="card-body">
        <form action="{{url(  auth()->user()->role == 'admin' ? 'admin/ternak/edit/'.$data->id : 'peternak/ternak/edit/'.$data->id)}}" method="post">
            @csrf

            <div class="form-group">
                <label for="" class="form-label">Jenis Kambing</label>
                <input type="text" class="form-control @error('jenis_kambing') is-invalid @enderror" name="jenis_kambing" value="{{$data->jenis_kambing}}">
            </div>
            <div class="form-group">
                <label for="" class="form-label">Umur</label>
                <input type="text" class="form-control @error('umur') is-invalid @enderror" name="umur" value="{{$data->umur}}">
            </div>
            <div class="form-group">
                <label for="" class="form-label">Kesehatan</label>
                <input type="text" class="form-control @error('kesehatan') is-invalid @enderror" name="kesehatan" value="{{$data->kesehatan}}">
            </div>

            <button type="submit" class="btn btn-primary float-end mt-3">Simpan</button>

        </form>
    </div>
</div>

@endsection

@push('js')

@endpush