<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('public/admin/assets/images/favicon.png') }}">
    <title>Form Pendaftaran</title>
    <link href="{{ asset('public/admin/dist/css/style.min.css') }}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark">
            <div class="bg-dark border-top border-secondary" style="width: 90%">
                <div class="card">
                    <div class="card-body wizard-content">
                        <h4 class="card-title">Pendaftaran Pendaki</h4>
                        <h6 class="card-subtitle"><a href="{{ url('/#daftar') }}"><i class="fa fa-arrow-left"></i> Home</a></h6>
                        <br><br>
                        <a data-toggle="tooltip" data-placement="right" title="Tambah"><button style="margin-bottom: 10px" type="button" class="btn btn-info margin-5 text-white" name="create_record" id="create_record"><i class="fa fa-plus"></i></button></a>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped" id="kuota_table">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>No HP</th>
                                        <th>Email</th>
                                        <th>Jenis Kelamin</th>
                                        <th>No ID</th>
                                        <th>Jenis No ID</th>
                                        <th>Kebangsaan</th>
                                        <th>Pekerjaan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        @if ($message = Session::get('kode'))
                        <form method="post" action="{{ route('finish-daftar') }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="kode_pendakian" value="{{$message}}">
                            <input type="submit" value="Daftar" class="btn btn-success">
                        </form>
                        @endif
                        <!-- Modal -->
                        <div id="formModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add New Record</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <span id="form_result"></span>
                                        <form method="post" id="sample_form" class="form-horizontal" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="hidden" name="hidden_kode" value="{{$message}}">
                                                    <label for="nama">Nama *</label>
                                                    <input id="nama" name="nama" type="text" class="required form-control">
                                                    <label for="alamat">Alamat *</label>
                                                    <input id="alamat" name="alamat" type="text" class="required form-control">
                                                    <label for="no_hp">No. HP *</label>
                                                    <input id="no_hp" name="no_hp" type="text" class="required form-control">
                                                    <label for="email">Email *</label>
                                                    <input id="email" name="email" type="text" class="required email form-control">
                                                    <label for="gender">Jenis Kelamin *</label>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input" id="laki-laki" name="jk" value="Laki-laki" required>
                                                        <label class="custom-control-label" for="laki-laki">Laki-laki</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input" id="perempuan" name="jk" value="Perempuan" required>
                                                        <label class="custom-control-label" for="perempuan">Perempuan</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="no_id">No. Kartu Identitas *</label>
                                                    <input id="no_id" name="no_id" type="text" class="required form-control">
                                                    <label for="jenis_id">Jenis Kartu Identitas *</label>
                                                    <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="jenis_id" id="jenis_id">
                                                        <option>Select</option>
                                                        <option value="KTP">KTP</option>
                                                        <option value="NIK">NIK</option>
                                                        <option value="KK">KK</option>
                                                        <option value="Kartu Pelajar">Kartu Pelajar</option>
                                                    </select>
                                                    <label for="kebangsaan">Kebangsaan *</label>
                                                    <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="kebangsaan" id="kebangsaan">
                                                        <option>Select</option>
                                                        <option value="Lokal">Lokal</option>
                                                        <option value="Mancanegara">Mancanegara</option>
                                                    </select>
                                                    <label for="pekerjaan">Pekerjaan *</label>
                                                    <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="pekerjaan" id="pekerjaan">
                                                        <option>Select</option>
                                                        <option value="Belum/Tidak Bekerja">Belum/Tidak Bekerja</option>
                                                        <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                                                        <option value="Wiraswasta">Wiraswasta</option>
                                                        <option value="Karyawan Swasta">Karyawan Swasta</option>
                                                        <option value="Buruh">Buruh</option>
                                                        <option value="Lainnya">Lainnya</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <br />
                                            <div class="form-group" align="center">
                                                <input type="hidden" name="action" id="action" />
                                                <input type="hidden" name="hidden_id" id="hidden_id" />
                                                <input type="submit" name="action_button" id="action_button" class="btn btn-warning" value="Add" />
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="confirmModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title">Confirmation</h2>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <h4 align="center" style="margin:0;">Are you sure you want to remove this data?</h4>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" name="ok_button" id="ok_button" class="btn btn-danger">OK</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="{{ asset('public/admin/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('public/admin/assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('public/admin/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script src="{{ asset('public/admin/assets/extra-libs/DataTables/datatables.min.js') }}"></script>
    <script src="{{ asset('public/admin/assets/libs/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    <script>

        $('[data-toggle="tooltip"]').tooltip();
        $(".preloader").fadeOut();
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#kuota_table').DataTable({
                processing: true,
                serverSide: true,
                ajax:{
                    url: "{{ route('daftar.index') }}",
                },
                columns:[
                {
                    data: 'nama', name: 'nama'
                },
                {
                    data: 'alamat', name: 'alamat'
                },
                {
                    data: 'no_hp', name: 'no_hp'
                },
                {
                    data: 'email', name: 'email'
                },
                {
                    data: 'jenis_kelamin', name: 'jenis_kelamin'
                },
                {
                    data: 'no_id', name: 'no_id'
                },
                {
                    data: 'jenis_id', name: 'jenis_id'
                },
                {
                    data: 'kebangsaan', name: 'tanggal'
                },
                {
                    data: 'pekerjaan', name: 'tanggal'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false
                }
                ]
            });

            $('#create_record').click(function(){
                $('.modal-title').text("Add New Record");
                $('#action_button').val("Add");
                $('#action').val("Add");
                $('#formModal').modal('show');
                $('#sample_form').trigger("reset");
            });


            $('#sample_form').on('submit', function(event){
                event.preventDefault();
                if($('#action').val() == 'Add'){
                    $.ajax({
                        url:"{{ route('daftar.store') }}",
                        method:"POST",
                        data: new FormData(this),
                        contentType: false,
                        cache:false,
                        processData: false,
                        dataType:"json",
                        success:function(data){
                            var html = '';
                            if(data.errors){
                                html = '<div class="alert alert-danger">';
                                for(var count = 0; count < data.errors.length; count++){
                                    html += '<p>' + data.errors[count] + '</p>';
                                }
                                html += '</div>';
                            }
                            if(data.success){
                                html = '<div class="alert alert-success">' + data.success + '</div>';
                                $('#sample_form')[0].reset();
                                $('#kuota_table').DataTable().ajax.reload();
                            }
                            $('#form_result').html(html);
                        }
                    })
                }

            });

            var id;

            $(document).on('click', '.delete', function(){
                id = $(this).attr('id');
                $('#confirmModal').modal('show');
                $('.modal-title').text("Delete Record");
                $('#ok_button').text('OK');
            });

            $('#ok_button').click(function(){
                $.ajax({
                    url:"kuota/destroy/"+id,
                    beforeSend:function(){
                        $('#ok_button').text('Deleting...');
                    },
                    success:function(data)
                    {
                        setTimeout(function(){
                            $('#kuota_table').DataTable().ajax.reload();
                            $('#confirmModal').modal('hide');
                        }, 2000);
                    }
                })
            });
        });
    </script>

</body>

</html>