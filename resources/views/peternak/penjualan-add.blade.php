@extends('admin.template.master')

@section('content')

<h5 class="fw-semibold">
<a href="{{url( auth()->user()->role == 'admin' ?  'admin/penjualan' : 'peternak/penjualan')}}"><i class="ti ti-arrow-left bg-danger rounded-circle text-white"></i></a>
Tambah Penjualan</h5>

<div class="card">
    <div class="card-body">
        <form action="{{url( auth()->user()->role == 'admin' ? 'admin/penjualan/tambah' : 'peternak/penjualan/tambah')}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="" class="form-label">Jenis Kambing</label>
                <input type="text" class="form-control @error('jenis') is-invalid @enderror" name="jenis">
            </div>
            <div class="form-group">
                <label for="" class="form-label">Umur</label>
                <input type="number" class="form-control @error('umur') is-invalid @enderror" name="umur">
            </div>
            <div class="form-group">
                <label for="" class="form-label">Kelebihan Kekurangan</label>
                <input type="text" class="form-control @error('kelebihan_kekurangan') is-invalid @enderror" name="kelebihan_kekurangan">
            </div>

            <div class="form-group">
                <label for="" class="form-label">Kisaran Harga Jual</label>
                <input type="number" class="form-control @error('kisaran_harga_jual') is-invalid @enderror" name="kisaran_harga_jual">
            </div>

            <div class="form-group">
                <label for="" class="form-label">No Wa(Tanpa Angka 0)</label>
                <input type="number" class="form-control @error('no_wa') is-invalid @enderror" name="no_wa">
            </div>

            <div class="form-group">
                <label for="" class="form-label">Foto</label>
                <input type="file" class="form-control @error('lampiran_foto') is-invalid @enderror" name="lampiran_foto" accept="image/*">
            </div>

            <button type="submit" class="btn btn-primary float-end mt-3">Tambah</button>

        </form>
    </div>
</div>

@endsection

@push('js')

@endpush