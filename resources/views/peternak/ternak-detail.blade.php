@extends('admin.template.master')

@section('content')

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
            <a href="{{url( auth()->user()->role == 'admin' ? 'admin/ternak' : 'peternak/ternak')}}"><i class="ti ti-arrow-left bg-danger rounded-circle text-white"></i></a>    
            Detail Ternak</h4>
            <a href="{{ url(auth()->user()->role == 'admin' ? 'admin/ternak/edit/'.$data->id : 'peternak/ternak/edit/'.$data->id) }}">
        <button class="btn btn-sm btn-warning">Edit</button>
    </a>

            <table class="table table-bordered">
               <tbody>
                    <tr>
                        <td width="30%">Nomor Ternak</td>
                        <td>{{$data->nomor_ternak}}</td>
                    </tr>
                    <tr>
                        <td>Jenis Kambing</td>
                        <td>{{$data->jenis_kambing}}</td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>{{$data->jenis_kelamin_ternak}}</td>
                    </tr>
                    <tr>
                        <td>Jenis Ternak</td>
                        <td>{{$data->jenis_ternak}}</td>
                    </tr>
                    <tr>
                        <td>Jumlah Ternak</td>
                        <td>{{$data->jumlah_ternak}}</td>
                    </tr>
                    <tr>
                        <td>Umur</td>
                        <td>{{$data->umur}}</td>
                    </tr>
                    <tr>
                        <td>Kesehatan</td>
                        <td>{{$data->kesehatan}}</td>
                    </tr>
               </tbody>

            </table>

        </div>
    </div>

<div class="card">
    <div class="card-body">
    <h4 style="display: flex; justify-content: space-between;">Riwayat Reproduksi
    <a href="{{ url(auth()->user()->role == 'admin' ? 'admin/ternak/riwayat-reproduksi/'.$data->id : 'peternak/ternak/riwayat-reproduksi/'.$data->id) }}">
        <button class="btn btn-sm btn-warning">Edit</button>
    </a>
</h4>

            <!-- <h6 class="card-title">Riwayat Reproduksi</h6> -->
            <table class="table table-bordered">
                <thead class="bg-warning text-white">
                    <th>No</th>
                    <th>Melahirkan</th>
                    <th>Sehat Aman</th>
                    <th>Kawin Ternak</th>
                    <th>Tanggal Kawin</th>
                    <th>Tanggal Melahirkan</th>
                </thead>
                <tbody>
                    @forelse($data->riwayat_reproduksi as $no=>$reproduksi)
                        <tr>
                            <td>{{$no+1}}</td>
                            <td>{{$reproduksi->melahirkan}}</td>
                            <td>{{$reproduksi->sehat_aman}}</td>
                            <td>{{$reproduksi->kawin_ternak}}</td>
                            <td>{{$reproduksi->tanggal_kawin}}</td>
                            <td>{{$reproduksi->tanggal_melahirkan}}</td>
                        </tr>
                    @empty
                    <tr>
                        <td colspan='6'  class="text-center">Tidak Ada Riwayat</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
    </div>
</div>

<div class="card">
    <div class="card-body">
            <!-- <h6 class="card-title">Riwayat Kesehatan</h6> -->
            <h4 style="display: flex; justify-content: space-between;">Riwayat Kesehatan
    <a href="{{ url(auth()->user()->role == 'admin' ? 'admin/ternak/riwayat-kesehatan/'.$data->id : 'peternak/ternak/riwayat-kesehatan/'.$data->id) }}">
        <button class="btn btn-sm btn-warning">Edit</button>
    </a>
</h4>

       
            <table class="table table-bordered">
                <thead class="bg-warning text-white">
                    <th>No</th>
                    <th>Penyakit Sering Diderita</th>
                    <th>Obat digunakan</th>
                    <th>Penyakit Pernah Diderita</th>
                    <th>Sering Sakit</th>
                    <th>Penanganan</th>
                </thead>
                <tbody>
                    @forelse($data->riwayat_kesehatan as $n=>$kesehatan)
                        <tr>
                            <td>{{$n+1}}</td>
                            <td>{{$kesehatan->penyakit_sering_diderita}}</td>
                            <td>{{$kesehatan->obat_digunakan}}</td>
                            <td>{{$kesehatan->penyakit_pernah_diderita}}</td>
                            <td>{{$kesehatan->sering_sakit}}</td>
                            <td>{{$kesehatan->penanganan}}</td>
                        </tr>
                    @empty
                    <tr>
                        <td colspan='6'  class="text-center">Tidak Ada Riwayat</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
    </div>
</div>



@endsection