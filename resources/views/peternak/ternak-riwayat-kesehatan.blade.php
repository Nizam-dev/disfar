@extends('admin.template.master')

@push('css')
    <style>
        .selection{
            background-color : #ffae1f24 !important;
        }
        .ti-arrow-left{
            cursor: pointer;
        }
    </style>
@endpush

@section('content')

<h5 class="fw-semibold">
<a href="{{ url( auth()->user()->role == 'admin' ?  'admin/ternak' : 'peternak/ternak')}}"><i class="ti ti-arrow-left bg-danger rounded-circle text-white"></i></a>
Riwayat Kesehatan Kambing</h5>

<div class="card">
    <div class="row">
        <div class="col-12" id="data-riwayat">
            <h1 class="px-3 py-3">
            @if(auth()->user()->id == $user_id)
                <button onClick="opsi_tambah()" class="btn btn-sm btn-primary float-end">Tambah</button>
            @endif
            </h1>
            <div class="card-body">


                <div class="table-responsive">
                    <table id="example" class="table text-nowrap mb-0 align-middle">
                        <thead class="text-dark fs-4">
                            <tr>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">No</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Penyakit Sering</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Obat</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Penyakit Pernah Diderita</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Sakit</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Penanganan</h6>
                                </th>
                                @if(auth()->user()->id == $user_id)
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Opsi</h6>
                                </th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($data as $no=>$riwayat)
                            <tr>
                                <td>{{$no+1}}</td>
                                <td>{{$riwayat->penyakit_sering_diderita}}</td>
                                <td>{{$riwayat->obat_digunakan}}</td>
                                <td>{{$riwayat->penyakit_pernah_diderita}}</td>
                                <td>{{$riwayat->sering_sakit}}</td>
                                <td>{{$riwayat->penanganan}}</td>
                                @if(auth()->user()->id == $user_id)
                                <td>
                                    <a  class="btn btn-sm btn-warning" onClick="opsi_edit(this,{{$riwayat}})">
                                        <i class="ti ti-pencil"></i>
                                    </a>
                                    <a  class="btn btn-sm btn-danger" onClick="opsi_hapus('{{$riwayat->id}}')">
                                        <i class="ti ti-trash"></i>
                                    </a>
                                </td>
                                @endif
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <div class="border-start  col-4 d-none" id="add-riwayat">
            <div class="">
                <form action="" method="post" class="border py-3 px-2">
                    @csrf
                    <i class="ti ti-arrow-left bg-danger rounded-circle text-white" onClick="opsi_close()"></i>
                    <h5 class="badge bg-black w-100">Tambah</h5>
                    <div class="form-group">
                        <label for="" class="">Penyakit Sering DIderita</label>
                        <input type="text" class="form-control" name='penyakit_sering_diderita' required>
                    </div>

                    <div class="form-group">
                        <label for="" class="">Obat Digunakan</label>
                        <input type="text" class="form-control" name='obat_digunakan' required>
                    </div>

                    <div class="form-group">
                        <label for="" class="">Penyakit Pernah Diderita</label>
                        <input type="text" class="form-control" name='penyakit_pernah_diderita' required>
                    </div>
                    

                    <div class="form-group">
                        <label for="" class="">Sering Sakit</label>
                        <select name="sering_sakit" class="form-control">
                            <option value="sering">sering</option>
                            <option value="jarang">jarang</option>
                            <option value="tidak_pernah">tidak_pernah</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="" class="">Penanganan</label>
                        <select name="penanganan" class="form-control">
                            <option value="panggil_drh">panggil_drh</option>
                            <option value="panggil_mantri">panggil_mantri</option>
                            <option value="diobati_sendiri">diobati_sendiri</option>
                        </select>
                    </div>

                    <button class="btn btn-sm btn-primary float-end mt-2 mb-3">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="hapus_data" tabindex="-1" aria-labelledby="hapus_dataLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center d-block w-100" id="hapus_dataLabel">Mau Menghapus Riwayat</h5>
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

    let opsi = 'none'

    let opsi_cek = (ops) => {
        $("table tbody .selection").removeClass('selection')
        if (opsi == ops && ops != 'edit') {
            opsi_close()
            return false;
        } else {
            opsi = ops
            $("#add-riwayat").removeClass('d-none')
            $("#data-riwayat").removeClass('col-12').addClass('col-8')
            $(".table-responsive").animate({scrollLeft: 1000}, 100);
            $("[name='penyakit_sering_diderita']").focus()
            return true;
        }
    }

    let opsi_close = ()=>{
            opsi = 'none'
            $("table tbody .selection").removeClass('selection')
            $("#add-riwayat").addClass('d-none')
            $("#data-riwayat").removeClass('col-8').addClass('col-12')
    }


    let opsi_tambah = () => {
        if (!opsi_cek('tambah')) {
            return false
        }
        $("[name='penyakit_sering_diderita']").val('')
        $("[name='obat_digunakan']").val('')
        $("[name='penyakit_pernah_diderita']").val('')
        $("[name='sering_sakit']").val('sering')
        $("[name='penanganan']").val('panggil_drh')

        $("#add-riwayat h5").html("Tambah Riwayat")
        $("#add-riwayat form").attr("action", "{{url( auth()->user()->role == 'admin' ? 'admin/ternak/riwayat-kesehatan/'.$id : 'peternak/ternak/riwayat-kesehatan/'.$id)}}")
    }

    let opsi_edit = (el,data)=>{
        if (!opsi_cek('edit')) {
            return false
        }
        $("[name='penyakit_sering_diderita']").val(data.penyakit_sering_diderita)
        $("[name='obat_digunakan']").val(data.obat_digunakan)
        $("[name='penyakit_pernah_diderita']").val(data.penyakit_pernah_diderita)
        $("[name='sering_sakit']").val(data.sering_sakit)
        $("[name='penanganan']").val(data.penanganan)
        $(el).parent().parent().addClass('selection')
        $("#add-riwayat h5").html("Edit Riwayat")
        $("#add-riwayat form").attr("action", `{{url(  auth()->user()->role == 'admin' ? 'admin/ternak/edit-riwayat-kesehatan' : 'peternak/ternak/edit-riwayat-kesehatan')}}/${data.id}`)
    }

    let opsi_hapus = (id)=>{
        $("#hapus_data").modal("show")
        $("#hapus_data #linkhapus").attr('href',`{{url(  auth()->user()->role == 'admin' ? 'admin/ternak/hapus-riwayat-kesehatan' : 'peternak/ternak/hapus-riwayat-kesehatan')}}/${id}`)
    }
</script>
@endpush