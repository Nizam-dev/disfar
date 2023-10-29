@extends('admin.template.master')

@section('content')

<h5 class="fw-semibold">
    <a href="{{url( auth()->user()->role == 'admin' ? 'admin/ternak' : 'peternak/ternak')}}"><i class="ti ti-arrow-left bg-danger rounded-circle text-white"></i></a>
    Edit Ternak
</h5>

<div class="card">
    <div class="card-body">
        <form action="{{url(  auth()->user()->role == 'admin' ? 'admin/ternak/edit/'.$data->id : 'peternak/ternak/edit/'.$data->id)}}" method="post">
            @csrf


            <div class="form-group">
                <label for="" class="form-label">Nomor Ternak</label>
                <input type="text" class="form-control @error('nomor_ternak') is-invalid @enderror" name="nomor_ternak" value="{{$data->nomor_ternak}}">
            </div>
            <div class="form-group">
                <label for="" class="form-label">Jenis Kelamin Ternak</label>
                <select name="jenis_kelamin_ternak" value="{{$data->jenis_kelamin_ternak}}" class="form-control @error('jenis_kelamin_ternak') is-invalid @enderror">
                    <option value="alami" {{ $data->jenis_kelamin_ternak == 'alami' ? 'selected' : '' }}>alami</option>
                    <option value="buatan" {{ $data->jenis_kelamin_ternak == 'buatan' ? 'selected' : '' }}>buatan</option>
                </select>

            </div>
            <div class="form-group">
                <label for="" class="form-label">Jenis Ternak</label>
                <select name="jenis_ternak" class="form-control @error('jenis_ternak') is-invalid @enderror">
                    <option value="penggemukan" {{ $data->jenis_ternak == 'penggemukan' ? 'selected' : '' }}>penggemukan</option>
                    <option value="pemerahan(susu)" {{ $data->jenis_ternak == 'pemerahan(susu)' ? 'selected' : '' }}>pemerahan(susu)</option>
                    <option value="jual_beli(cempe)" {{ $data->jenis_ternak == 'jual_beli(cempe)' ? 'selected' : '' }}>jual beli(cempe)</option>
                </select>
            </div>


            <div class="form-group">
                <label for="" class="form-label">Jumlah Ternak</label>
                <input type="text" class="form-control @error('jumlah_ternak') is-invalid @enderror" name="jumlah_ternak" value="{{$data->jumlah_ternak}}">
            </div>

            <div class="form-group">
                <label for="" class="form-label">Jenis Kambing</label>
                <input type="text" class="form-control @error('jenis_kambing') is-invalid @enderror" name="jenis_kambing" value="{{$data->jenis_kambing}}">
            </div>
            <div class="form-group">
                <label for="" class="form-label">Umur</label>
                <input type="number" class="form-control @error('umur') is-invalid @enderror" name="umur" value="{{$data->umur}}">
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