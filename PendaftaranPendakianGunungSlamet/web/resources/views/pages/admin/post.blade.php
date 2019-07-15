@extends('layouts.admin.admin')

@section('main')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button> 
                        <strong>{{ $message }}</strong>
                </div>
                @endif
                <h5 class="card-title" style="text-align: center;">Post</h5>
                <div class="table-responsive">
                    <table id="post_table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Image</th>
                                <th>Tanggal</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($blogs as $blog)
                            <tr>
                                <td><a href="{{ url('/post') }}/{{ $blog->id }}" target="_blank">
                                    <span class="font-bold">{{ $blog->judul }}</span></a></td>
                                <td><img src="{{ URL::to('/public/images/post') }}/{{ $blog->image }}" style="width: 100px"></td>
                                <td>{{ $blog->created_at }}</td>
                                <td>
                                    <button data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-warning"><a style="color: white;" href="{{ url('web/post/edit') }}/{{ $blog->id }}"><i class="fa fa-edit"></i></a></button>
                                    <button data-toggle="tooltip" data-placement="top" title="Delete" type="button" name="delete" id="{{ $blog->id }}" class="delete btn btn-danger"><i class="fa fa-trash"></i></button>'
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
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
                <h4 align="center">Are you sure want to remove this post?</h4>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger"><a href="{{ url('admin/post/destroy') }}/{{ $blog->id }}" data-toggle="tooltip" data-placement="top" title="Delete" style="color: white;">OK</a></button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
@stop

@section('js')
<script type="text/javascript">
    $(document).ready(function(){

        var id;

        $(document).on('click', '.delete', function(){
            id = $(this).attr('id');
            $('#confirmModal').modal('show');
            $('.modal-title').text("Delete Record");
            $('#ok_button').text('OK');
        });
    });
</script>
@stop