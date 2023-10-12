@extends('admin.template.master')

@section('content')

<h5 class="fw-semibold">
    <a href="{{url('admin/verifikasi_akun')}}"><i class="ti ti-arrow-left bg-danger rounded-circle text-white"></i></a>
    Edit Verifikasi Akun
</h5>

<div class="card">
    <div class="card-body">
        <form action="{{url('admin/update-verifikasi_akun/'.$akun->id)}}" method="post">
            @csrf

            <div class="form-group">
                <label for="" class="form-label">Nama </label>
                <input disabled type="text" class="form-control @error('') is-invalid @enderror" value="{{$akun->nama}}">
            </div>
            <div class="form-group">
                <label for="" class="form-label">Username</label>
                <input disabled type="text" class="form-control @error('') is-invalid @enderror" value="{{$akun->username}}">
            </div>
            <div class="form-group">
                <label for="" class="form-label">Email</label>
                <input disabled type="text" class="form-control @error('') is-invalid @enderror" value="{{$akun->email}}">
            </div>
            <div class="form-group">
                <label for="" class="form-label">NO HP</label>
                <input disabled type="text" class="form-control @error('') is-invalid @enderror" value="{{$akun->nohp}}">
            </div>
            <div class="form-group">
                <label for="" class="form-label">Dusun</label>
                <input disabled type="text" class="form-control @error('') is-invalid @enderror" value="{{$akun->dusun}}">
            </div>

            <div class="form-group">
                <label for="" class="form-label">Status Akun</label>
                <select name="status_akun" class="form-control">
                    <option value="0">Belum Verifikasi</option>
                    <option value="1">Sudah Verifikasi</option>
                </select>
            </div>


            <button type="submit" class="btn btn-primary float-end mt-3">Simpan</button>

        </form>
    </div>
</div>

@endsection

@push('js')

@endpush