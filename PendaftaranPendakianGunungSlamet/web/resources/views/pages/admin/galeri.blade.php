@extends('layouts.admin.admin')

@section('main')
<button type="button" name="create_record" id="create_record" class="btn btn-success btn-sm">Tambah</button>
<div class="card card-body" style="margin-top: 20px">
    <div class="table-responsive">
        <table class="table table-bordered table-striped" id="galeri_table">
            <thead>
                <tr>
                    <th width="70%">Gambar</th>
                    <th></th>
                </tr>
            </thead>
        </table>
    </div>
</div>
<div id="formModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add New Record</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body" align="center">
                <span id="form_result"></span>
                <form method="post" id="sample_form" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="control-label" style="margin-left: 85px">Select Image :</label>
                        <input type="file" name="image" id="image" />
                        <div class="col-md-10">
                            <span id="store_image"></span>
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
@stop

@section('js')
<script>
    $(document).ready(function(){

        $('#galeri_table').DataTable({
            processing: true,
            serverSide: true,
            ajax:{
                url: "{{ route('galeri.index') }}",
            },
            columns:[{
                data: 'image',
                name: 'image',
                render: function(data, type, full, meta){
                    return "<img src={{ URL::to('/public/images/galeri') }}/" + data + " width='50%' class='img-thumbnail' />";
                },
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
            $('#store_image').html('');
        });

        $(document).on('click', '.edit', function(){
            var id = $(this).attr('id');
            $('#form_result').html('');
            $.get("{{ url('/admin/galeri/') }}" +'/' + id +'/edit', function (html) {
                $('#store_image').html("<img src={{ URL::to('/public/images/galeri') }}/" + html.data.image + " width='100%' class='img-thumbnail' />");
                $('#store_image').append("<input type='hidden' name='hidden_image' value='"+html.data.image+"' />");
                $('#hidden_id').val(html.data.id);
                $('.modal-title').text("Edit New Record");
                $('#action_button').val("Edit");
                $('#action').val("Edit");
                $('#formModal').modal('show');
            })
        });

        $('#sample_form').on('submit', function(event){
            event.preventDefault();
            if($('#action').val() == 'Add'){
                $.ajax({
                    url:"{{ route('galeri.store') }}",
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
                            $('#galeri_table').DataTable().ajax.reload();
                            $('#formModal').modal('hide');
                        }
                        $('#form_result').html(html);
                    }
                })
            }

            if($('#action').val() == "Edit"){
                $.ajax({
                    url:"{{ route('galeri.update') }}",
                    method:"POST",
                    data:new FormData(this),
                    contentType: false,
                    cache: false,
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
                            $('#store_image').html('');
                            $('#galeri_table').DataTable().ajax.reload();
                            setTimeout(function(){
                                $('#formModal').modal('hide');
                            }, 2000);
                        }
                        $('#form_result').html(html);
                    }
                });
            }
        });

        var img_id;

        $(document).on('click', '.delete', function(){
            img_id = $(this).attr('id');
            $('#confirmModal').modal('show');
            $('.modal-title').text("Delete Record");
            $('#ok_button').text('OK');
        });

        $('#ok_button').click(function(){
            $.ajax({
                url:"galeri/destroy/"+img_id,
                beforeSend:function(){
                    $('#ok_button').text('Deleting...');
                },
                success:function(data){
                    setTimeout(function(){
                        $('#confirmModal').modal('hide');
                        $('#galeri_table').DataTable().ajax.reload();
                    }, 1000);
                }
            })
        });


    });
</script>
@stop