@extends('layouts.admin.admin')

@section('main')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('post.update') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <h5 class="card-title" style="text-align: center;">Post</h5>
                    <div class="form-group row">
                        <input type="hidden" name="hidden_id" value="{{$blogs->id}}">
                        <input type="hidden" name="hidden_image" value="{{$blogs->image}}">
                        <label for="judul" class="col-sm-2 control-label col-form-label">Judul Post</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul Post" value="{{$blogs->judul}}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" style="margin-top: 5px">Gambar Post</label>
                        <div class="col-md-10">
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" id="validatedCustomFile">
                                <label class="custom-file-label" for="validatedCustomFile">Pilih gambar ...</label>
                                <div class="invalid-feedback">Invalid file</div>
                            </div>
                        </div>
                    </div>
                    <textarea name="konten" id="summernote" required>{!!$blogs->konten!!}</textarea>
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