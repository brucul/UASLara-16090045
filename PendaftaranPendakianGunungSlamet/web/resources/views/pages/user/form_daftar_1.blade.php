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
    <!-- Custom CSS -->
    <link href="{{ asset('public/admin/assets/libs/jquery-steps/jquery.steps.css') }}" rel="stylesheet">
    <link href="{{ asset('public/admin/assets/libs/jquery-steps/steps.css') }}" rel="stylesheet">
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
            <div class="bg-dark border-top border-secondary" style="width: 70%">
                <div class="card">
                    <div class="card-body wizard-content">
                        <h4 class="card-title">Pendaftaran Pendaki</h4>
                        <h6 class="card-subtitle"><a href="{{ url('/#daftar') }}"><i class="fa fa-arrow-left"></i> Home</a></h6>
                        <br>
                        <form action="{{ route('daftar') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="description">Tanggal Pendakian</label>
                                <select class="form-control" name="tgl" required>
                                    @foreach($kuota as $k)
                                    <option value="{{ $k->tanggal }}">{{ $k->tanggal }}, Kuota : {{ $k->kuota }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    @php $kode = 'GS'.time(); @endphp
                                    <input type="hidden" name="kode" value="{{$kode}}">
                                    <label for="name">Nama Ketua *</label>
                                    <input id="name" name="name" type="text" class="required form-control">
                                    <label for="address">Alamat *</label>
                                    <input id="address" name="address" type="text" class="required form-control">
                                    <label for="telp">No. HP *</label>
                                    <input id="telp" name="telp" type="text" class="required form-control">
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
                                    <label for="no-id">No. Kartu Identitas *</label>
                                    <input id="no-id" name="no_id" type="text" class="required form-control">
                                    <label for="no-id">Jenis Kartu Identitas *</label>
                                    <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="jenis_id">
                                        <option>Select</option>
                                        <option value="KTP">KTP</option>
                                        <option value="NIK">NIK</option>
                                        <option value="KK">KK</option>
                                        <option value="Kartu Pelajar">Kartu Pelajar</option>
                                    </select>
                                    <label for="kebangsaan">Kebangsaan *</label>
                                    <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="kebangsaan">
                                        <option>Select</option>
                                        <option value="Lokal">Lokal</option>
                                        <option value="Mancanegara">Mancanegara</option>
                                    </select>
                                    <label for="pekerjaan">Pekerjaan *</label>
                                    <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="pekerjaan">
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
                            <p>(*) Wajib</p>
                            <button type="submit" class="btn btn-primary">Tambah Anggota</button>
                        </form>
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
    <script src="{{ asset('public/admin/assets/libs/jquery-steps/build/jquery.steps.min.js') }}"></script>
    <script src="{{ asset('public/admin/assets/libs/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    <script>

        $('[data-toggle="tooltip"]').tooltip();
        $(".preloader").fadeOut();
    </script>

</body>

</html>