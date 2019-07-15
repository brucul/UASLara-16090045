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
                    <div class="card-body border-top">
                        <div class="alert alert-success" role="alert">
                            <h4 class="alert-heading">Pendaftaran Berhasil !</h4>
                            <p>PEMBAYARAN DAN UPLOAD BUKTI PEMBAYARAN PADA LINK KONFIRMASI YANG TIDAK DILAKUKAN DALAM WAKTU 1X24 JAM, MENGAKIBATKAN HANGUSNYA KODE BOOKING ANDA.</p>
                            <hr>
                            @if ($message = Session::get('id'))
                            <p class="mb-0">Kode : {{ $message }}.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('public/admin/assets/libs/jquery/dist/jquery.min.js') }}"></script>
</body>
</html>