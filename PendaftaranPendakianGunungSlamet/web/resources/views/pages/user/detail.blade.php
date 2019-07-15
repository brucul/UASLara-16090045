<!DOCTYPE html>
<html>
<head>
    <title>Pendakian</title>
    <link href="{{ asset('public/admin/dist/css/style.min.css') }}" rel="stylesheet">
</head>
<body>
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark" style="width: 100%">
        <div class="bg-dark border-top border-secondary">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-body printableArea">
                        <h3><span class="pull-right">#{{$jadwal->kode_pendakian}}</span></h3>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="pull-left">
                                    <address>
                                        <h3><b class="text-danger">Gunung Slamet</b></h3>
                                    </address>
                                </div>
                                <div class="pull-right text-right">
                                    <address>
                                        <h4 class="font-bold">Pendakian Gunung Slamet</h4>
                                        <p class="m-t-30"><b>Tanggal :</b> <i class="fa fa-calendar"></i> {{$jadwal->tanggal_pendakian}}</p>
                                    </address>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="table-responsive m-t-40" style="clear: both;">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th>Nama</th>
                                                <th>Alamat</th>
                                                <th>No HP</th>
                                                <th>Email</th>
                                                <th>Jenis Kelamin</th>
                                                <th>No ID</th>
                                                <th>Jenis No ID</th>
                                                <th>Kebangsaan</th>
                                                <th>Pekerjaan</th>
                                                <th>Tarif</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $i = 1;
                                            @endphp
                                            @foreach($pendaki as $p)
                                            <tr>
                                                <td>{{$i++}}</td>
                                                <td>{{$p->nama}}</td>
                                                <td>{{$p->alamat}}</td>
                                                <td>{{$p->no_hp}}</td>
                                                <td>{{$p->email}}</td>
                                                <td>{{$p->jenis_kelamin}}</td>
                                                <td>{{$p->no_id}}</td>
                                                <td>{{$p->jenis_id}}</td>
                                                <td>{{$p->kebangsaan}}</td>
                                                <td>{{$p->pekerjaan}}</td>
                                                <td>{{$p->biaya}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="pull-right m-t-30 text-right">
                                    <hr>
                                    <h3><b>Total : </b>Rp. {{$tarif}}</h3>
                                </div>
                                <div class="clearfix"></div>
                                <hr>
                                <div class="text-right">
                                    <button class="btn btn-danger" type="submit"> Proceed to payment </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('public/admin/assets/libs/jquery/dist/jquery.min.js') }}"></script>
</body>
</html>