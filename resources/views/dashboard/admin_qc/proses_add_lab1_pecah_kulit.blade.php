@extends('dashboard.admin_qc.layout.main')
@section('title')
SURYA PANGAN SEMESTA
@endsection
@section('content')
@include('sweetalert::alert')
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
    <!-- begin:: Subheader -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    PT. SURYA PANGAN SEMESTA
                </h3>
                <span class="btn-outline btn-sm btn-info mr-3">NGAWI</span>
                <span class="kt-subheader__separator kt-hidden"></span>
                <div class="kt-subheader__breadcrumbs">
                    <a href="#" onclick="return false" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-fast-next"></i></a>
                    <span class="kt-subheader__breadcrumbs-separator"></span>
                    <a href="#" onclick="return false" class="kt-subheader__breadcrumbs-link">
                        Proses Lab Incoming
                    </a>
                    <a href="#" onclick="return false" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-fast-next"></i></a>
                    <span class="kt-subheader__breadcrumbs-separator"></span>
                    <a href="#" onclick="return false" class="kt-subheader__breadcrumbs-link">
                        Input Lab Incoming
                    </a>
                    <a href="#" onclick="return false" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-fast-next"></i></a>
                    <span class="kt-subheader__breadcrumbs-separator"></span>
                    <a href="#" onclick="return false" class="kt-subheader__breadcrumbs-link">
                        Beras Pecah Kulit
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="col-xl-12 col-lg-12 col-md-12 order-lg-1 order-xl-1">
            <div class="kt-portlet kt-portlet--mobile">
                <div class="kt-portlet__head kt-portlet__head--lg">
                    <div class="kt-portlet__head-label">
                        <span class="kt-portlet__head-icon">
                            <i class="kt-menu__link-icon   flaticon2-laptop kt-font-success"></i>
                        </span>
                        <h3 class="kt-portlet__head-title">
                            Lab 1 Beras Pecah Kulit
                        </h3>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 order-lg-1 order-xl-1">
                        </div>
                        <div class="col-xl-6 col-lg-6 order-lg-1 order-xl-1">
                            <form id="formantrianpecah_kulit_qc" class="m-form m-form--fit m-form--label-align-right" method="post" action="{{ route('qc.lab.save_proseslab1_pecah_kulit') }}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" id="lab1_id_data_po_pk" name="lab1_id_data_po_pk" value="{{$data->penerimaan_id_data_po}}">
                                <input type="hidden" id="lab1_id_penerimaan_po_pk" name="lab1_id_penerimaan_po_pk" value="{{$data->id_penerimaan_po}}">
                                <input type="hidden" id="lab1_id_bid_user_pk" name="lab1_id_bid_user_pk" value="{{$data->penerimaan_id_bid_user}}">
                                <input type="hidden" id="tanggal_po_pk" name="tanggal_po_pk" value="{{$data->tanggal_po}}">
                                <input type="hidden" id="waktu_penerimaan_pk" name="waktu_penerimaan_pk" value="{{$data->waktu_penerimaan}}">
                                <input type="hidden" id="date_bid_pk" name="date_bid_pk" value="{{$data->date_bid}}">


                                <div class="form-group">
                                    <div class="">
                                        <label>Kode PO</label>
                                        <input type="text" id="lab1_kode_po_pk" name="lab1_kode_po_pk" class="form-control m-input" readonly value="{{$data->penerimaan_kode_po}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="">
                                        <label>Nopol</label>
                                        <input type="text" id="lab1_plat_pk" readonly name="lab1_plat_pk" class="form-control m-input" value="{{$data->plat_kendaraan}}">
                                    </div>
                                </div>

                                {{-- edit form --}}
                                <div class="m-form__group form-group">
                                    <label for="">KA (%)</label>
                                    <input type="text" step="any" required name="ka_pk" id="ka_pk" class="form-control m-input" value="">
                                </div>
                                <div class="m-form__group form-group">
                                    <label for="">PK</label>
                                    <input type="text" step="any" required name="pk_pk" id="pk_pk" class="form-control m-input" value="">
                                </div>
                                <div class="m-form__group form-group">
                                    <label for="">PK Bersih</label>
                                    <input type="text" step="any" required name="pk_bersih_pk" id="pk_bersih_pk" class="form-control m-input" value="">
                                </div>
                                <div class="m-form__group form-group">
                                    <label for="">Beras</label>
                                    <input type="text" step="any" required name="beras_pk" id="beras_pk" class="form-control m-input" value="">
                                </div>
                                <div class="m-form__group form-group">
                                    <label for="">Butir Patah</label>
                                    <input type="text" step="any" required name="butir_patah_pk" id="butir_patah_pk" class="form-control m-input" value="">
                                </div>
                                <div class="m-form__group form-group">
                                    <label for="">Hampa</label>
                                    <input type="text" step="any" required name="hampa_pk" id="hampa_pk" class="form-control m-input" value="">
                                </div>
                                <div class="m-form__group form-group">
                                    <label for="">Katul</label>
                                    <input type="text" step="any" required name="katul_pk" id="katul_pk" class="form-control m-input" value="">
                                </div>
                                <div class="m-form__group form-group">
                                    <label for="">WH (%)</label>
                                    <input type="text" step="any" required name="wh_pk" id="wh_pk" class="form-control m-input" value="">
                                </div>
                                <div class="m-form__group form-group">
                                    <label for="">TR (%)</label>
                                    <input type="text" step="any" required name="tr_pk" id="tr_pk" class="form-control m-input" value="">
                                </div>
                                <div class="m-form__group form-group">
                                    <label for="">MD</label>
                                    <input type="text" step="any" required name="md_pk" id="md_pk" class="form-control m-input" value="">
                                </div>
                                <div class="m-form__group form-group">
                                    <label for="">Status Lab</label>
                                    <select class="form-select form-control m-input" id="keterangan_lab_1_pk" required name="output_lab_pk" aria-label="Default select example">
                                        <option value="">--Hasil Lab 1--</option>
                                        <option name="output_lab_pk" value="Unload">Bongkar</option>
                                        <option name="output_lab_pk" value="Reject">Tolak</option>
                                    </select>
                                </div>
                                <div class="m-form__group form-group">
                                    <label for="">Keterangan</label>
                                    <input type="text" step="any" required name="keterangan_lab_pk" id="keterangan_lab_pk" class="form-control m-input">
                                </div>
                                <div class="m-form__group form-group">
                                    <label for="">Plan Harga (Kg)</label>
                                    <input type="text" step="any" required name="harga_akhir_pk" id="harga_akhir_pk" class="form-control m-input">
                                </div>
                                <div class="text-center">
                                    <button id="btn_save" class="btn btn-sm btn-success m-btn">Simpan</button>
                                    <a href="{{route('qc.lab.proses_lab1_pecah_kulit')}}" type="button" class="btn btn-sm btn-danger m-btn">Kembali</a>
                                </div>
                            </form>
                        </div>
                        <div class="col-xl-3 col-lg-3 order-lg-1 order-xl-1">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end:: Content -->
</div>
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
    $(function() {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })

    });
    $(document).on('keyup', '#harga_akhir_pk', function(e) {
        var data = $(this).val();
        var hasil = formatRupiah(data, "Rp. ");
        $(this).val(hasil);
    });

    function formatRupiah(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            rupiah = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? '' + rupiah : '');
    }

    function replace_titik(x) {
        return ((x.replace('.', '')).replace('.', '')).replace('.', '');
    }
</script>
<script type="text/javascript">
    $(function() {
        $(document).on('keypress', '#ka_pk', function(e) {
            var val = $(this).val();
            var regex = /^(\+|-)?(\d*\.?\d*)$/;
            if (regex.test(val + String.fromCharCode(e.charCode))) {
                return true;
            }
            return false;
        });
        $(document).on('keypress', '#pk_pk', function(e) {
            var val = $(this).val();
            var regex = /^(\+|-)?(\d*\.?\d*)$/;
            if (regex.test(val + String.fromCharCode(e.charCode))) {
                return true;
            }
            return false;
        });
        $(document).on('keypress', '#pk_bersih_pk', function(e) {
            var val = $(this).val();
            var regex = /^(\+|-)?(\d*\.?\d*)$/;
            if (regex.test(val + String.fromCharCode(e.charCode))) {
                return true;
            }
            return false;
        });
        $(document).on('keypress', '#beras_pk', function(e) {
            var val = $(this).val();
            var regex = /^(\+|-)?(\d*\.?\d*)$/;
            if (regex.test(val + String.fromCharCode(e.charCode))) {
                return true;
            }
            return false;
        });
        $(document).on('keypress', '#butir_patah', function(e) {
            var val = $(this).val();
            var regex = /^(\+|-)?(\d*\.?\d*)$/;
            if (regex.test(val + String.fromCharCode(e.charCode))) {
                return true;
            }
            return false;
        });
        $(document).on('keypress', '#wh_pk', function(e) {
            var val = $(this).val();
            var regex = /^(\+|-)?(\d*\.?\d*)$/;
            if (regex.test(val + String.fromCharCode(e.charCode))) {
                return true;
            }
            return false;
        });
        $(document).on('keypress', '#tr_pk', function(e) {
            var val = $(this).val();
            var regex = /^(\+|-)?(\d*\.?\d*)$/;
            if (regex.test(val + String.fromCharCode(e.charCode))) {
                return true;
            }
            return false;
        });
        $(document).on('keypress', '#md_pk', function(e) {
            var val = $(this).val();
            var regex = /^(\+|-)?(\d*\.?\d*)$/;
            if (regex.test(val + String.fromCharCode(e.charCode))) {
                return true;
            }
            return false;
        });

    });
</script>
<script type="text/javascript">
    $(function() {
        var id = '{{$data->id_penerimaan_po}}';
        var vendor = '{{$data->nama_vendor}}';
        var item = '{{$data->name_bid}}';
        var tanggal_po = '{{$data->tanggal_bongkar}}';
        var url2 = "{{route('qc.lab.get_plan_hpp_gabah_basah') }}" + "/" + tanggal_po + "/" + item;
        var url3 = "{{route('get_price_top_gabah_basah') }}" + "/" + id;
        var url4 = "{{route('get_buttom_price_gabah_basah') }}" + "/" + id;
        $('#result_harga_akhir').show();
        $('#result_hasil_lab').hide();
        $('#select_keterangan_lab_1_gb').hide();
        $('#btn_tutup_hasil').hide();
        $('#btn_ubah_hasil').hide();
        $(document).on('change', '#select_keterangan_lab_1_gb', function() {
            var this_id = $(this).val();
            $('#keterangan_lab_1_gb').val(this_id);
            if (this_id == 'Unload') {
                $('#keterangan_lab_1_gb').val('Unload');
            } else if (this_id == 'Pending') {
                $('#keterangan_lab_1_gb').val('Pending');
            } else {
                $('#keterangan_lab_1_gb').val('Reject');
            }
            // console.log(this_id);
        });


        $(document).on('click', '#btn_save', function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Konfirmasi',
                icon: 'warning',
                text: "Apakah data yang kamu input sudah benar ?",
                showCancelButton: true,
                inputValue: 0,
                confirmButtonText: 'Yes',
            }).then(function(result) {
                if (result.value) {
                    if ($('#ka_pk').val() == '' | $('#pk_pk').val() == '' | $('#pk_bersih_pk').val() == '' | $('#beras_pk').val() == '' | $('#butir_patah').val() == '' | $('#wh_pk').val() == '' | $('#tr_pk').val() == '' | $('#md_pk').val() == '' | $('#keterangan_lab_1_pk').find(":selected").val() == '') {
                        Swal.fire('Gagal!', 'Data Harus Diisi.', 'error')
                    } else if ($('#harga_akhir_pk').val() == '' | $('#harga_akhir_pk').val() == '0') {
                        Swal.fire('Mohon Dicek!', 'Harga Atas, Parameter LAB PK Tidak Boleh Kosong', 'warning')
                    } else {
                        $('#formantrianpecah_kulit_qc').submit();
                        Swal.fire('Sukses!', 'Data anda berhasil di Simpan.', 'success')
                    }
                } else {
                    Swal.fire('Gagal!', 'Data anda Tidak di Simpan.', 'error')

                }
            });
        });

    });
</script>

@endsection