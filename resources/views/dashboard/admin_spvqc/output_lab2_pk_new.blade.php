@extends('dashboard.admin_spvqc.layout.main')
@section('title')
SURYA PANGAN SEMESTA
@endsection
@section('content')
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
                        Output Lab Bongkaran
                    </a>
                    <a href="#" onclick="return false" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-fast-next"></i></a>
                    <span class="kt-subheader__breadcrumbs-separator"></span>
                    <a href="#" onclick="return false" class="kt-subheader__breadcrumbs-link">
                        Beras PK
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
                            <i class="kt-menu__link-icon flaticon2-writing kt-font-warning"></i>
                        </span>
                        <h3 class="kt-portlet__head-title">
                            Hasil Data Lab 2 Pecah Kulit
                        </h3>
                    </div>
                </div>
                <div style="margin-left: 10px; margin-top:10px;" class="row input-daterange">
                    <div class="col-md-4">
                        <input type="text" name="from_date" id="from_date" class="form-control" placeholder="From Date" readonly />
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="to_date" id="to_date" class="form-control" placeholder="To Date" readonly />
                    </div>
                    <div class="col-md-4">
                        <button type="button" name="filter" id="filter" class="btn btn-primary">Filter</button>
                        <button type="button" name="refresh" id="refresh" class="btn btn-default">Refresh</button>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <table class="table table-bordered" id="datatable1">
                        <thead>
                            <tr>
                                <th style="text-align: center;width:2%">No</th>
                                <th style="text-align: center;width:auto">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kode&nbsp;PO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                <th style="text-align: center;width:auto">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Supplier&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                <th style="text-align: center;width:auto">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nopol&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                <th style="text-align: center;width:auto">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Status&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                <th style="text-align: center;width:auto">&nbsp;&nbsp;&nbsp;Tanggal&nbsp;PO&nbsp;&nbsp;&nbsp;</th>
                                <th style="text-align: center;width:auto">&nbsp;&nbsp;&nbsp;Lokasi&nbsp;Bongkar&nbsp;&nbsp;&nbsp;</th>
                                <th style="text-align: center;width:auto">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No.&nbsp;DTM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                <th style="text-align: center;width:auto">Hasil&nbsp;Tonase&nbsp;Akhir</th>
                                <th style="text-align: center;width:auto">Harga&nbsp;Bongkaran&nbsp;(Rp.)</th>
                            </tr>

                        </thead>
                        <tbody style="text-align: center">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- end:: Content -->
</div>
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    $(document).ready(function() {
        $('.input-daterange').datepicker({
            todayBtn: 'linked',
            format: 'yyyy-mm-dd',
            autoclose: true
        });

        load_data();

        function load_data(from_date = '', to_date = '') {
            var table = $('#datatable1').DataTable({
                "scrollY": true,
                "scrollX": true,
                processing: true,
                serverSide: true,
                "aLengthMenu": [
                    [10, 25, 100, 300, -1],
                    [10, 25, 100, 300, "All"]
                ],
                "iDisplayLength": 10,
                ajax: {
                    url: "{{ route('qc.spv.output_lab2_pk_new_index') }}",
                    data: {
                        from_date: from_date,
                        to_date: to_date
                    }
                },
                columns: [{
                        data: "id_lab2_pk",

                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        data: 'kode_po'
                    },
                    {
                        data: 'nama_vendor'
                    },
                    {
                        data: 'plat_kendaraan'
                    },
                    {
                        data: 'status_lab2_pk'
                    },
                    {
                        data: 'tanggal_po'
                    },
                    {
                        data: 'lokasi_bongkar'
                    },
                    {
                        data: 'no_dtm'
                    },
                    {
                        data: 'hasil_akhir_tonase'
                    },

                    {
                        data: 'harga_bongkaran_pk'
                    },
                ],
                "order": []
            });
            $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
                table.columns.adjust().draw().responsive.recalc();
            })
        }
        $('#filter').click(function() {
            var from_date = $('#from_date').val();
            var to_date = $('#to_date').val();

            if (from_date != '' && to_date != '') {
                $('#datatable1').DataTable().destroy();
                // table.ajax.reload(from_date, to_date);
                load_data(from_date, to_date);
                Swal.fire({
                    title: 'Berhasil',
                    text: 'Sukses filter data',
                    icon: 'success',
                    timer: 1500
                });
            } else {
                Swal.fire({
                    title: 'Infoo!!',
                    text: 'Mohon Isikan data',
                    icon: 'warning',
                    timer: 1500
                });
            }

        });

        $('#refresh').click(function() {
            $('#from_date').val('');
            $('#to_date').val('');
            $('#datatable1').DataTable().destroy();
            load_data();
        });
    });
</script>
<script type="text/javascript">
    $(function() {
        $(document).on('click', '#btn_save_pk', function(e) {
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
                    $('#form_updatehargaakhir_pk').submit();
                    Swal.fire('Sukses!', 'Data anda berhasil di Simpan.', 'success')
                } else {
                    Swal.fire('Gagal!', 'Data anda Tidak di Simpan.', 'error')

                }
            });
        });

        $(document).on('click', '.detail_hasil_qc', function() {
            var id = $(this).attr("name");
            var url = "{{ route('qc.lab.detail_output_incoming_qc') }}" + "/" + id;
            console.log(url);
            $.ajax({
                type: "GET",
                url: url,
                success: function(response) {
                    // console.log(response);
                    var parsed = $.parseJSON(response);
                    $('#plan_harga').val(parsed.plan_harga);
                    console.log(parsed.bid_user_id);
                }
            });
        });
        $(document).on('click', '#btn_approve_lab2_pk', function() {
            var id = $(this).data('id');
            var kode_po = $(this).data('kodepo');
            var harga_akhir = $(this).data('hargaakhir');
            var tonase = $(this).data('tonase_akhir');
            // console.log(tonase);
            Swal.fire({
                title: 'Apakah Yakin Approve Data Ini',
                icon: 'warning',
                html: '<b>Kode PO :</b> ' +
                    kode_po + '<br>',
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: 'Approve',
                customClass: 'swal-wide',
                denyButtonText: 'Tolak Approve'
            }).then(function(result) {
                if (result.isConfirmed) {
                    if (tonase == '' || tonase == 'NULL') {
                        Swal.fire('Maaf', 'Tonnase Akhir Belum Di Input', 'warning')
                    } else {
                        $.ajax({
                            type: "GET",
                            url: "{{route('qc.spv.approve_lab2_pk')}}/" + id,
                            success: function(response) {
                                Swal.fire('Sukses!', 'Data Anda Sudah Tersimpan', 'success', 1500)
                                $('#datatable1').DataTable().ajax.reload();

                            },
                            error: function(response) {
                                Swal.fire('Error', 'Cancel Proses Data', 'error')

                            }
                        });
                    }
                } else if (result.isDenied) {
                    $.ajax({
                        type: "GET",
                        url: "{{route('qc.spv.tolak_approved_pk')}}/" + id,
                        success: function(response) {
                            Swal.fire('Sukses!', 'Data Anda Sudah Tersimpan', 'success', 1500)
                            $('#datatable1').DataTable().ajax.reload();

                        },
                        error: function(response) {
                            Swal.fire('Error', 'Cancel Proses Data', 'error')

                        }
                    });

                } else {
                    Swal.fire('Error', 'Cancel Proses Data', 'error')
                }
            });
        });
    });
</script>
<script type="text/javascript">
    // function cekAnalisa(that) {
    //     if (that.value == "tidak") {
    //          Swal.fire({
    //         position: 'top',
    //         icon: 'warning',
    //         title: 'Silahkan Input Harga Permintaan',
    //         showConfirmButton: true
    //       });

    //         document.getElementById("form_keterangan").style.display = "block";  
    //         document.getElementById("harga_akhir_permintaan_gb").focus();
    //     } else {
    //         document.getElementById("form_keterangan").style.display = "none";
    //     }
    // }

    function cekAdmin(that) {
        if (that.value == "1") {
            $('textarea[id=keterangan_analisa]').val('Nopol Tidak Sesuai');
        } else {
            $('textarea[id=keterangan_analisa]').val('');
        }
    }
</script>
<script type="text/javascript">
    $(function() {
        $(document).on('click', '.lokasi_bongkar', function() {
            var id = $(this).attr("name");
            var url = "{{ route('qc.lab.lokasi_bongkar') }}" + "/" + id;
            console.log(url);
            $.ajax({
                type: "GET",
                url: url,
                success: function(response) {
                    console.log(response);
                    var parsed = $.parseJSON(response);
                    $('#lokasi_bongkar').text(parsed.lokasi_bongkar);
                    $('#nomer_antrian').text(parsed.antrian);
                }
            });
        });
    });
</script>
@endsection