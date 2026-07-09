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
                            Lab Beras Pecah Kulit
                        </h3>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 order-lg-1 order-xl-1">
                        </div>
                        <div class="col-xl-6 col-lg-6 order-lg-1 order-xl-1">
                            <form id="formfinishing_qc" class="m-form m-form--fit m-form--label-align-right" method="post" action="{{ route('qc.lab.save_proses_lab2_pk_new') }}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="lab2_token" value="{{ csrf_token() }}">
                                <input type="hidden" id="lab1_id_data_po_pk" name="lab1_id_data_po_pk" value="{{ $data->id_data_po }}">
                                <input type="hidden" id="lab1_id_penerimaan_po_pk" name="lab1_id_penerimaan_po_pk" value="{{ $data->id_penerimaan_po }}">
                                <input type="hidden" id="lab1_id_bid_user_pk" name="lab1_id_bid_user_pk" value="{{ $data->penerimaan_id_bid_user }}">
                                <input type="hidden" id="tanggal_po_pk" name="tanggal_po_pk" value="{{ $data->tanggal_po }}">
                                <input type="hidden" id="waktu_penerimaan_pk" name="waktu_penerimaan_pk" value="{{ $data->waktu_penerimaan}}">
                                <input type="hidden" id="date_bid_pk" name="date_bid_pk" value="{{ $data->date_bid }}">

                                <div class="form-group">
                                    <div class="">
                                        <label>Kode PO</label>
                                        <input type="text" id="lab1_kode_po_pk" name="lab1_kode_po_pk" class="form-control m-input" readonly value="{{ $data->kode_po }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="">
                                        <label>Plat Kendaraan</label>
                                        <input type="text" id="lab1_plat_pk" readonly name="lab1_plat_pk" class="form-control m-input" value="{{ $data->plat_kendaraan}}">
                                    </div>
                                </div>

                                {{-- edit form --}}
                                <div class="m-form__group form-group">
                                    <label for="">Tonase Final (Kg)</label>
                                    <input type="text" step="any" required name="tonase_pk" id="tonase_pk" value="" class="form-control m-input">
                                </div>
                                <div class="m-form__group form-group">
                                    <label for="">Harga Lab Final (Kg)</label>
                                    <input type="text" step="any" required name="harga_bongkaran_pk" id="harga_bongkaran_pk" value="" class="form-control m-input">
                                </div>
                                <div class="m-form__group form-group">
                                    <label for="">Aksi Harga</label>
                                    <input type="text" readonly name="aksi_harga_pk" id="aksi_harga_pk" value="ON PROCESS" class="form-control m-input">

                                </div>
                                <div class="m-form__group form-group">
                                    <label for="">Lokasi Bongkar</label>
                                    <input type="hidden" name="lokasi_bongkar_pk" id="lokasi_bongkar_pk" class="form-control m-input" value="WHNGWHUA">
                                    <input type="text" name="lokasi_bongkar_preview" id="lokasi_bongkar_preview" readonly class="form-control m-input" value="HUSKING UNIT AREA NGAWI">
                                </div>
                                <div class="m-form__group form-group">
                                    <label for="">DTM</label>
                                    <input type="text" required name="no_dtm_pk" id="no_dtm_pk" required class="form-control m-input">
                                </div>
                                <div class="text-center">
                                    <button id="btn_save" class="btn btn-sm btn-success m-btn">Simpan & Ajukan Ke SPV</button>
                                    <a href="{{route('qc.lab.proses_lab2_pecah_kulit')}}" type="button" class="btn btn-sm btn-danger m-btn">Kembali</a>
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
    $(document).on('keyup', '#harga_bongkaran_pk', function(e) {
        var data = $(this).val();
        var hasil = formatRupiah(data, "Rp. ");
        $(this).val(hasil);
    });
    $(document).on('keyup', '#tonase_pk', function(e) {
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
                    if ($('#lokasi_bongkar_pk').val() == '' |
                        $('#tonase_pk').val() == '' |
                        $('#no_dtm_pk').val() == '') {
                        Swal.fire('Gagal!', 'Data Harus Diisi Semua', 'error')
                    } else if ($('#harga_bongkaran_pk').val() == '' | $('#harga_bongkaran_pk').val() == '0') {
                        Swal.fire('Mohon Dicek!', 'Harga Bongkaran Rp. 0', 'warning')
                    } else {
                        $('#formfinishing_qc').submit();
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