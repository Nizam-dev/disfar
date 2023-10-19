@extends('admin.template.master')

@section('content')

<h5 class="fw-semibold">
<a href="{{url( auth()->user()->role == 'admin' ?  'admin/kelolaedukasi' : 'peternak/kelolaedukasi')}}"><i class="ti ti-arrow-left bg-danger rounded-circle text-white"></i></a>
Tambah Edukasi Ternak</h5>

<div class="card">
    <div class="card-body">
        <form action="{{url( auth()->user()->role == 'admin' ? 'admin/kelolaedukasi/tambah' : 'peternak/kelolaedukasi/tambah')}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="" class="form-label">Jenis Edukasi</label>
                <input type="text" class="form-control @error('jenis_edukasi') is-invalid @enderror" name="jenis_edukasi">
            </div>
            <div class="form-group">
                <label for="" class="form-label">Isi Edukasi</label>
                <textarea type="text" class="form-control @error('isi_edukasi') is-invalid @enderror" name="isi_edukasi"></textarea>
            </div>
            

            <div class="form-group">
                <label for="" class="form-label">Foto</label>
                <input type="file" class="form-control @error('foto_edukasi') is-invalid @enderror" name="foto_edukasi" accept="image/*">
            </div>

            <button type="submit" class="btn btn-primary float-end mt-3">Tambah</button>

        </form>
    </div>
</div>

@endsection

@push('js')

@endpush