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
<a href="{{url('peternak/ternak')}}"><i class="ti ti-arrow-left bg-danger rounded-circle text-white"></i></a>
Riwayat Reproduksi Kambing</h5>

<div class="card">
    <div class="row">
        <div class="col-12" id="data-riwayat">
            <h1 class="px-3 py-3">
                <button onClick="opsi_tambah()" class="btn btn-sm btn-primary float-end">Tambah</button>
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
                                    <h6 class="fw-semibold mb-0">Melahirkan</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Sehat Aman</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Kawin Ternak</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Tanggal Kawin</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Tanggal Melahirkan</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Opsi</h6>
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($data as $no=>$riwayat)
                            <tr>
                                <td>{{$no+1}}</td>
                                <td>{{$riwayat->melahirkan}}</td>
                                <td>{{$riwayat->sehat_aman}}</td>
                                <td>{{$riwayat->kawin_ternak}}</td>
                                <td>{{$riwayat->tanggal_kawin}}</td>
                                <td>{{$riwayat->tanggal_melahirkan}}</td>
                                <td>
                                    <a  class="btn btn-sm btn-warning" onClick="opsi_edit(this,{{$riwayat}})">
                                        <i class="ti ti-pencil"></i>
                                    </a>
                                    <a  class="btn btn-sm btn-danger" onClick="opsi_hapus('{{$riwayat->id}}')">
                                        <i class="ti ti-trash"></i>
                                    </a>
                                </td>
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
                        <label for="" class="">Melahirkan</label>
                        <select name="melahirkan" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="" class="">Sehat Aman</label>
                        <select name="sehat_aman" class="form-control">
                            <option value="ya">ya</option>
                            <option value="tidak">tidak</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="" class="">Kawin Ternak</label>
                        <select name="kawin_ternak" class="form-control">
                            <option value="alamai">alamai</option>
                            <option value="buatan">buatan</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="" class="">Tgl Kawin</label>
                        <input type="date" class="form-control" name='tanggal_kawin' required>
                    </div>
                    <div class="form-group">
                        <label for="" class="">Tgl Melahirkan</label>
                        <input type="date" class="form-control" name='tanggal_melahirkan' required>
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
            $("[name='melahirkan']").focus()
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
        $("[name='melahirkan']").val('1')
        $("[name='sehat_aman']").val('ya')
        $("[name='kawin_ternak']").val('alamai')
        $("[name='tanggal_kawin']").val('')
        $("[name='tanggal_melahirkan']").val('')
        $("#add-riwayat h5").html("Tambah Riwayat")
        $("#add-riwayat form").attr("action", "{{url('peternak/ternak/riwayat-reproduksi/'.$id)}}")
    }

    let opsi_edit = (el,data)=>{
        if (!opsi_cek('edit')) {
            return false
        }
        $("[name='melahirkan']").val(data.melahirkan)
        $("[name='sehat_aman']").val(data.sehat_aman)
        $("[name='kawin_ternak']").val(data.kawin_ternak)
        $("[name='tanggal_kawin']").val(data.tanggal_kawin)
        $("[name='tanggal_melahirkan']").val(data.tanggal_melahirkan)
        $(el).parent().parent().addClass('selection')
        $("#add-riwayat h5").html("Edit Riwayat")
        $("#add-riwayat form").attr("action", `{{url('peternak/ternak/edit-riwayat-reproduksi')}}/${data.id}`)
    }

    let opsi_hapus = (id)=>{
        $("#hapus_data").modal("show")
        $("#hapus_data #linkhapus").attr('href',`{{url('peternak/ternak/hapus-riwayat-reproduksi')}}/${id}`)
    }
</script>
@endpush