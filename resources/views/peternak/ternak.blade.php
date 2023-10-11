@extends('admin.template.master')

@section('content')

<h5 class="fw-semibold">Ternak</h5>

<div class="card">
    <div class="card-body p-4">
        <h5 class="card-title fw-semibold mb-4">
            <button class="btn btn-sm btn-primary float-end">Tambah</button>
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
                            <h6 class="fw-semibold mb-0">Opsi</h6>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">1</h6>
                        </td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1">Sunil Joshi</h6>
                        </td>
                        <td class="border-bottom-0">
                            <p class="mb-0 fw-normal">21 Tahun</p>
                        </td>
                   
                        <td class="border-bottom-0">
                            <p class="mb-0 fw-normal">Baik</p>
                        </td>
                        <td class="border-bottom-0">
                            <div class="d-flex align-items-center gap-2">
                                <a href=""><span class="badge bg-primary rounded-3 fw-semibold">Reproduksi</span></a>
                                <a href=""><span class="badge bg-success rounded-3 fw-semibold">Kesehatan</span></a>
                            </div>
                        </td>
                        <td>
                            <a href="" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@push('js')
<script>
    new DataTable('#example');
</script>
@endpush