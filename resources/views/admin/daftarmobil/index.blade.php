@extends('admin.layouts.master')
@section('css')
    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}ablepro/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}ablepro/assets/pages/data-table/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}ablepro/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">

    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/ablepro/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/ablepro/assets/pages/data-table/css/buttons.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/ablepro/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}">
    <!-- Style.css -->

@endsection
@section('content')

<div class="col-sm-12">
        <!-- Nestable card start -->
        <div class="card">
            <div class="card-header">
                <h5>{{ trans('quickadmin::templates.templates-view_index-list') }}</h5>
            </div>
            <div class="card-block">
                <div id="nestable-menu" class="m-b-10">
                    <button class="btn btn-success waves-effect" id="" onclick="add_data()" type="button">Tambah Mobil</button>
                </div>
                <div class="modal fade" id="default-Modal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="title"></h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <form class="form-control">
                                    <div class="form-group">
                                        {!! Form::label('no_kerangka', 'Nomor Kerangka*', array('class'=>'control-label')) !!}
                                        <div class="col-md-12">
                                            {!! Form::text('no_kerangka', old('no_kerangka'), array('class'=>'form-control form-control-primary', 'id'=>'no_kerangka')) !!}

                                        </div>
                                    </div><div class="form-group">
                                        {!! Form::label('no_polisi', 'Nomor Polisi*', array('class'=>'control-label')) !!}
                                        <div class="col-md-12">
                                            {!! Form::text('no_polisi', old('no_polisi'), array('class'=>'form-control form-control-primary', 'id'=>'no_polisi')) !!}

                                        </div>
                                    </div><div class="form-group">
                                        {!! Form::label('merek', 'Merek*', array('class'=>'control-label')) !!}
                                        <div class="col-md-12">
                                            {!! Form::text('merek', old('merek'), array('class'=>'form-control form-control-primary', 'id'=>'merek' )) !!}

                                        </div>
                                    </div><div class="form-group">
                                        {!! Form::label('tipe', 'Tipe*', array('class'=>'control-label')) !!}
                                        <div class="col-md-12">
                                            {!! Form::text('tipe', old('tipe'), array('class'=>'form-control form-control-primary', 'id'=>'tipe')) !!}

                                        </div>
                                    </div><div class="form-group">
                                        {!! Form::label('tahun', 'Tahun*', array('class'=>'control-label')) !!}
                                        <div class="col-md-12">
                                            {!! Form::text('tahun', old('tahun'), array('class'=>'form-control form-control-primary', 'id'=>'tahun')) !!}

                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div id="button_submit" class="modal-footer">

                            </div>
                        </div>
                    </div>
                </div>


                    @if ($daftarmobil->count())


                        <div class="table-responsive dt-responsive" id="data-tabel1">
                        </div>


            <div class="row">
                <div class="col-xs-12">
                    <button class="btn btn-sm btn-danger" id="delete">
                        {{ trans('quickadmin::templates.templates-view_index-delete_checked') }}
                    </button>
                </div>
            </div>
            {!! Form::open(['route' => config('quickadmin.route').'.daftarmobil.massDelete', 'method' => 'post', 'id' => 'massDelete']) !!}
                <input type="hidden" id="send" name="toDelete">
            {!! Form::close() !!}
        </div>
	</div>
@else
    {{ trans('quickadmin::templates.templates-view_index-no_entries_found') }}
@endif
 </div>

            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script type="text/javascript" src="{{ url('/') }}/ablepro/bower_components/jquery/js/jquery.min.js"></script>
    <script type="text/javascript" src="{{ url('/') }}/ablepro/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="{{ url('/') }}/ablepro/bower_components/popper.js/js/popper.min.js"></script>
    <script type="text/javascript" src="{{ url('/') }}/ablepro/bower_components/bootstrap/js/bootstrap.min.js"></script>
    <!-- waves js -->
    <script src="{{ url('/') }}/ablepro/assets/pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{ url('/') }}/ablepro/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="{{ url('/') }}/ablepro/bower_components/modernizr/js/modernizr.js"></script>
    <script type="text/javascript" src="{{ url('/') }}/ablepro/bower_components/modernizr/js/css-scrollbars.js"></script>
    <!-- data-table js -->
    <script src="{{ url('/') }}/ablepro/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ url('/') }}/ablepro/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ url('/') }}/ablepro/assets/pages/data-table/js/jszip.min.js"></script>
    <script src="{{ url('/') }}/ablepro/assets/pages/data-table/js/pdfmake.min.js"></script>
    <script src="{{ url('/') }}/ablepro/assets/pages/data-table/js/vfs_fonts.js"></script>
    <script src="{{ url('/') }}/ablepro/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="{{ url('/') }}/ablepro/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ url('/') }}/ablepro/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ url('/') }}/ablepro/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ url('/') }}/ablepro/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
    <!-- Custom js -->
    <script src="{{ url('/') }}/ablepro/assets/pages/data-table/js/data-table-custom.js"></script>
    <script src="{{ url('/') }}/ablepro/assets/js/pcoded.min.js"></script>
    <script src="{{ url('/') }}/ablepro/assets/js/vertical/vertical-layout.min.js"></script>
    <script src="{{ url('/') }}/ablepro/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="{{ url('/') }}/ablepro/assets/js/script.js"></script>
    <script >
        $( document ).ready(function () {
            tabeldata();
        });

        var url = "{{ url('/api/') }}";

        /**
         * AddNew the specified daftarmobil from list table.
         *
         * @param  int  $id
         */



        function tambah_data() {


            var form = new FormData();
            form.append("no_kerangka", $('#no_kerangka').val());
            form.append("no_polisi", $('#no_polisi').val());
            form.append("merek", $('#merek').val());
            form.append("tipe", $('#tipe').val());
            form.append("tahun", $('#tahun').val());

            var settings = {
                "async": true,
                "crossDomain": true,
                "url": url+"/mobil/",
                "method": "POST",
                "headers": {
                    "cache-control": "no-cache",
                    "Postman-Token": "c8c50ec0-13b7-46fe-bd0f-f9be5b41306d"
                },
                "processData": false,
                "contentType": false,
                "mimeType": "multipart/form-data",
                "data": form
            }

            $.ajax(settings).done(function (response) {
                $("#default-Modal").modal("hide");
                tabeldata();
                $('#no_kerangka').val('');
                $('#no_polisi').val('');
                $('#merek').val('');
                $('#tipe').val('');
                $('#tahun').val('');
            });
        }

        function add_data() {
            $('#no_kerangka').val('');
            $('#no_polisi').val('');
            $('#merek').val('');
            $('#tipe').val('');
            $('#tahun').val('');
            text = "Tambah Data";
            document.getElementById("title").textContent = text;
            html = "<button type=\"button\" class=\"btn btn-default waves-effect \" data-dismiss=\"modal\">Close</button>\n" +
                "<button onclick='tambah_data()' type=\"button\" class=\"btn btn-primary waves-effect waves-light \">Save changes</button>";
            document.getElementById("button_submit").innerHTML = html;
            $("#default-Modal").modal("show");
        }

        /**
         * Update the specified daftarmobil from list table.
         *
         * @param  int  $id
         */

        function update_data(){
            var form = new FormData();
            form.append("no_kerangka", $('#no_kerangka').val());
            form.append("no_polisi", $('#no_polisi').val());
            form.append("merek", $('#merek').val());
            form.append("tipe", $('#tipe').val());
            form.append("tahun", $('#tahun').val());
            form.append("_method", "put");

            var settings = {
                "async": true,
                "crossDomain": true,
                "url": "http://localhost:8000/api/mobil/1/update",
                "method": "POST",
                "headers": {
                    "cache-control": "no-cache",
                    "Postman-Token": "008b82d3-557f-4c4a-ab9a-34fb6544e569"
                },
                "processData": false,
                "contentType": false,
                "mimeType": "multipart/form-data",
                "data": form
            }

            $.ajax(settings).done(function (response) {
                $("#default-Modal").modal("hide");
                tabeldata();
                $('#no_kerangka').val('');
                $('#no_polisi').val('');
                $('#merek').val('');
                $('#tipe').val('');
                $('#tahun').val('');
            });
        }



        function tabeldata(){
            html = "<table id=\"dt-ajax-array2\" class=\"table table-striped table-bordered nowrap\">\n" +
                "<thead>\n" +
                "<tr>\n" +
                "<th>Nomor Kerangka</th>\n" +
                "<th>Nomor Polisi</th>\n" +
                "<th>Merek</th>\n" +
                "<th>Tipe</th>\n" +
                "<th>Tahun</th>\n" +
                "\n" +
                "<th>&nbsp;</th>\n" +
                "</tr>\n" +
                "</thead>" +
                "</table>";
            document.getElementById("data-tabel1").innerHTML = html;

            var action = $('#dt-ajax-array2').DataTable({

                "ajax": url+"/mobil",
                "columns": [
                    {"data": "no_kerangka"},
                    {"data": "no_polisi"},
                    {"data": "merek"},
                    {"data": "tipe"},
                    {"data": "tahun"},
                    {"targets": 1,
                        "data": null,
                        "defaultContent": "<button class='btn btn-info btn-mini'>Edit</button> <input type='button' class='btn btn-danger btn-mini' value='Hapus'>"
                    }
                ],

            });

            /**
             * Get Edit the specified daftarmobil from list table.
             *
             * @param  int  $id
             */

            $('#dt-ajax-array2').on('click', 'button', function() {
                var data = action.row($(this).parents('tr')).data();

                console.log(data);

                var settings = {
                    "async": true,
                    "crossDomain": true,
                    "url": url+"/mobil/"+data.id+"/edit",
                    "method": "GET",
                    "headers": {
                        "cache-control": "no-cache",
                        "Postman-Token": "d974b5f2-09e8-4b74-8755-80dc7151b960"
                    }
                }



                $.ajax(settings).done(function (response) {
                    $('#no_kerangka').val(response.data.no_kerangka);
                    $('#no_polisi').val(response.data.no_polisi);
                    $('#merek').val(response.data.merek);
                    $('#tipe').val(response.data.tipe);
                    $('#tahun').val(response.data.tahun);
                    text = "Edit Data";
                    document.getElementById("title").textContent = text;

                    $('#tahun').val(response.data.tahun);

                });
                html = "<button type=\"button\" class=\"btn btn-default waves-effect \" data-dismiss=\"modal\">Close</button>\n" +
                    "<button onclick='update_data()' type=\"button\" class=\"btn btn-primary waves-effect waves-light \">Save changes</button>";
                document.getElementById("button_submit").innerHTML = html;
                $("#default-Modal").modal("show");
            });


            /**
             * Delete the specified datamobil from list table.
             *
             * @param  int  $id
             */

            $('#dt-ajax-array2').on('click', 'input', function() {
                var data = action.row($(this).parents('tr')).data();
                var settings = {
                    "async": true,
                    "crossDomain": true,
                    "url": url+"/mobil/"+data.id+"/delete",
                    "method": "DELETE",
                    "headers": {
                        "cache-control": "no-cache",
                        "Postman-Token": "7335276d-2ed4-4ab0-97b3-fde5f2499eb1"
                    }
                }

                $.ajax(settings).done(function (response) {
                    console.log(response);
                    tabeldata();
                });
            });

        }

    </script>

    <script>
        $(document).ready(function () {
            $('#delete').click(function () {
                if (window.confirm('{{ trans('quickadmin::templates.templates-view_index-are_you_sure') }}')) {
                    var send = $('#send');
                    var mass = $('.mass').is(":checked");
                    if (mass == true) {
                        send.val('mass');
                    } else {
                        var toDelete = [];
                        $('.single').each(function () {
                            if ($(this).is(":checked")) {
                                toDelete.push($(this).data('id'));
                            }
                        });
                        send.val(JSON.stringify(toDelete));
                    }
                    $('#massDelete').submit();
                }
            });
        });
    </script>
@stop
