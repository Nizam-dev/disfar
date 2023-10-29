@extends('admin.template.master')

@section('content')

<h5 class="fw-semibold">Ternak</h5>

<div class="card">
    <div class="card-body p-4">
        <h5 class="card-title fw-semibold mb-4 mb-5">
            <a href="{{ auth()->user()->role == 'admin' ? url('admin/ternak/tambah') : url('peternak/ternak/tambah') }}"
                class="btn btn-sm btn-primary float-end">Tambah</a>
        </h5>
        <div class="table-responsive">
            <table id="example" class="table text-nowrap mb-0 align-middle">
                <thead class="text-dark fs-4">
                    <tr>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">No</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Jenis</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Umur</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Kesehatan</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Riwayat</h6>
                        </th>
                     
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Detail</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Opsi</h6>
                        </th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($data as $no=>$kambing)
                    <tr>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">{{$no+1}}</h6>
                        </td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1">{{$kambing->jenis_kambing}}</h6>
                        </td>
                        <td class="border-bottom-0">
                            <p class="mb-0 fw-normal">{{$kambing->umur}}</p>
                        </td>

                        <td class="border-bottom-0">
                            <p class="mb-0 fw-normal">{{$kambing->kesehatan}}</p>
                        </td>
                        <td class="border-bottom-0">
                            <div class="d-flex align-items-center gap-2">
                                <a
                                    href="{{url( auth()->user()->role == 'admin' ? 'admin/ternak/riwayat-reproduksi/'.$kambing->id : 'peternak/ternak/riwayat-reproduksi/'.$kambing->id)}}"><span
                                        class="badge bg-primary rounded-3 fw-semibold">Reproduksi</span></a>
                                <a
                                    href="{{url( auth()->user()->role == 'admin' ? 'admin/ternak/riwayat-kesehatan/'.$kambing->id : 'peternak/ternak/riwayat-kesehatan/'.$kambing->id)}}"><span
                                        class="badge bg-success rounded-3 fw-semibold">Kesehatan</span></a>
                            </div>
                        </td>
                        <td>
                            <a class="btn btn-sm btn-info" href="{{url( auth()->user()->role == 'admin' ? 'admin/ternak/detail/'.$kambing->id : 'peternak/ternak/detail/'.$kambing->id )}}">
                                <i class="ti ti-eye"></i>
                            </a>
                        </td>
                        <td>
                            @if(auth()->user()->role == 'admin')
                            <span class="badge bg-primary rounded-3 ">
                                {{$kambing->user->nama}}
                            </span>
                            <a href="{{url( auth()->user()->role == 'admin' ?  'admin/ternak/edit/'.$kambing->id : 'peternak/ternak/edit/'.$kambing->id)}}"
                                class="btn btn-sm btn-warning">
                                <i class="ti ti-pencil"></i>
                            </a>
                            <a class="btn btn-sm btn-danger" onClick="opsi_hapus('{{$kambing->id}}')">
                                <i class="ti ti-trash"></i>
                            </a>
                            @else
                            <a href="{{url( auth()->user()->role == 'admin' ?  'admin/ternak/edit/'.$kambing->id : 'peternak/ternak/edit/'.$kambing->id)}}"
                                class="btn btn-sm btn-warning">
                                <i class="ti ti-pencil"></i>
                            </a>
                            <a class="btn btn-sm btn-danger" onClick="opsi_hapus('{{$kambing->id}}')">
                                <i class="ti ti-trash"></i>
                            </a>

                            @endif
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="hapus_data" tabindex="-1" aria-labelledby="hapus_dataLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center d-block w-100" id="hapus_dataLabel">Mau Menghapus Data Ternak</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <a class="btn btn-danger" id="linkhapus">Hapus</a>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')
<script>
    new DataTable('#example');

    let opsi_hapus = (id) => {
        $("#hapus_data").modal("show")
        $("#hapus_data #linkhapus").attr('href',
            `{{url( auth()->user()->role == 'admin' ? 'admin/ternak/hapus' : 'peternak/ternak/hapus')}}/${id}`)
    }
</script>
@endpush