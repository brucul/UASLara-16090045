@extends('layouts.admin.admin')

@section('main')
<!-- Cards -->
<div class="row">
    <div class="col-md-3">
        <div class="card m-t-0">
            <div class="row">
                <div class="col-md-6">
                    <div class="left text-center m-t-10">
                        <span style=""></span>
                        <canvas width="50" height="24"></canvas>
                        <h6></h6>
                    </div>
                </div>
                <div class="col-md-6 border-left text-center p-t-10">
                    <h3 class="mb-0 font-weight-bold">{{$kuota}}</h3>
                    <span class="text-muted">Kuota</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card m-t-0">
            <div class="row">
                <div class="col-md-6">
                    <div class="peity_bar_bad left text-center m-t-10"><span style="display: none;"></span>
                        <canvas width="50" height="24"></canvas>
                        <h6></h6>
                    </div>
                </div>
                <div class="col-md-6 border-left text-center p-t-10">
                    <h3 class="mb-0 font-weight-bold">{{$pendaki}}</h3>
                    <span class="text-muted">Jumlah Pendaki</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card m-t-0">
            <div class="row">
                <div class="col-md-6">
                    <div class="peity_line_good left text-center m-t-10">
                        <span style="display: none;"></span>
                        <canvas width="50" height="24"></canvas>
                        <h6></h6>
                    </div>
                </div>
                <div class="col-md-6 border-left text-center p-t-10">
                    <h3 class="mb-0 ">{{$jadwal}}</h3>
                    <span class="text-muted">Jadwal Pendakian</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card m-t-0">
            <div class="row">
                <div class="col-md-6">
                    <div class="peity_bar_good left text-center m-t-10"><span></span>
                        <h6></h6>
                    </div>
                </div>
                <div class="col-md-6 border-left text-center p-t-10">
                    <h3 class="mb-0 font-weight-bold">{{$tarif}}</h3>
                    <span class="text-muted">Total Pendapatan</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End cards -->
</br></br></br>
<!-- ============================================================== -->
<div class="container">
    <div class="row el-element-overlay">
        @foreach($galleries as $galeri)
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="el-card-item">
                    <div class="el-card-avatar el-overlay-1"> <img src="{{ URL::to('/public/images/galeri') }}/{{ $galeri->image }}"/>
                        <div class="el-overlay">
                            <ul class="list-style-none el-info">
                                <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="{{ URL::to('/public/images/galeri') }}/{{ $galeri->image }}"><i class="mdi mdi-magnify-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>                                
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@stop