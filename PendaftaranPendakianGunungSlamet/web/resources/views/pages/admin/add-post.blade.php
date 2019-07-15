@extends('layouts.admin.admin')

@section('main')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('add-post.store') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <h5 class="card-title" style="text-align: center;">Post</h5>
                    <div class="form-group row">
                        <label for="judul" class="col-sm-2 control-label col-form-label">Judul Post</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul Post" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="file" class="col-sm-2 control-label col-form-label">Gambar Post</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" name="image" id="file" placeholder="Gambar Post" required>
                        </div>
                    </div>
                    <textarea name="konten" id="summernote" required></textarea>
                    </br>
                    <input type="submit" name="submit" class="btn btn-warning" value="Post">
                </form>
            </div>
        </div>
    </div>
</div>
@stop

@section('js')
<script src="{{ asset('public/admin/assets/extra-libs/summernote/summernote-bs4.js') }}"></script>
<script type="text/javascript">
    $('#summernote').summernote({
        placeholder: '',
        tabsize: 2,
        height: 500
    });
</script>
@stop