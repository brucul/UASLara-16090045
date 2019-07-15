@extends('layouts.admin.admin')

@section('main')
<div class="card">
	<div class="card-body">
		<h4 align="center" class="card-title">Sejarah</h4>
		<!-- Create the editor container -->
		<form action="{{ route('sejarah.update') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
			@csrf
			<textarea name="konten" id="summernote" required>{{$sejarah->konten}}</textarea>
		</br>
		<input type="submit" name="submit" class="btn btn-warning" value="Post">
	</form>
</div>
</div>
@stop

@section('js')
<script src="{{ asset('public/admin/assets/extra-libs/summernote/summernote-bs4.js') }}"></script>
<script src="{{ asset('public/admin/assets/libs/quill/dist/quill.min.js') }}"></script>
<script type="text/javascript">
    $('#summernote').summernote({
        placeholder: '',
        tabsize: 2,
        height: 500
    });
    var quill = new Quill('#editor', {
    	theme: 'snow'
    });
</script>
@stop