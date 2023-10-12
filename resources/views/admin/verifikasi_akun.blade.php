@extends('admin.template.master')

@section('content')

<h5 class="fw-semibold">Verifikasi Akun</h5>

<div class="card">
    <div class="card-body p-4">
        
        <div class="table-responsive">
            <table id="example" class="table text-nowrap mb-0 align-middle">
                <thead class="text-dark fs-4">
                    <tr>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">No</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Nama</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Username</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">No HP</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Email</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Opsi</h6>
                        </th>
                    </tr>
                </thead>
                <tbody>
                
                    @foreach($akun as $no=>$a)
                    <tr>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">{{$no+1}}</h6>
                        </td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1">{{$a->nama}}</h6>
                        </td>
                        <td class="border-bottom-0">
                            <p class="mb-0 fw-normal">{{$a->username}}</p>
                        </td>
                   
                        <td class="border-bottom-0">
                            <p class="mb-0 fw-normal">{{$a->nohp}}</p>
                        </td>
                        <td class="border-bottom-0">
                            <div class="d-flex align-items-center gap-2">
                                @if($a->status_akun=='0')
                                <a href="#" aria-disabled="true"><span class="badge bg-danger rounded-3 fw-semibold">Belum Verifikasi AKun</span></a>
                              @else
                              <a href="#"><span class="badge bg-success rounded-3 fw-semibold">Sudah Verifikasi AKun</span></a>
                              @endif
                            </div>
                        </td>
                        <td>
                        @if($a->status_akun=='1')
                        @else
                            <a href="{{url('admin/edit-verifikasi_akun/'.$a->id)}}" class="btn btn-sm btn-warning">
                                <i class="ti ti-pencil"></i>
                            </a>
                            @endif
                            <!-- <a  class="btn btn-sm btn-danger" onClick="opsi_hapus('{{$a->id}}')">
                                <i class="ti ti-trash"></i>
                            </a> -->
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

    let opsi_hapus = (id)=>{
        $("#hapus_data").modal("show")
        $("#hapus_data #linkhapus").attr('href',`{{url('admin/akun/hapus')}}/${id}`)
    }

</script>
@endpush