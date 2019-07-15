@extends('layouts.admin.admin')

@section('main')
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title" style="text-align: center;">Jadwal Pendakian</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Kode Pendakian</th>
                                                <th>Tanggal Pendakian</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($jadwal as $j)
                                            <tr>
                                                <td>{{$j->kode_pendakian}}</td>
                                                <td>{{$j->tanggal_pendakian}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@stop