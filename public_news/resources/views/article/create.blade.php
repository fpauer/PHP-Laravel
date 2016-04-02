@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    	<div class="panel panel-default">
        	<div class="panel-heading">NEW ARTICLE</div>

        	<div class="panel-body">
        		@if ($errors->any())
					<ul class="alert alert-warning">
						@foreach($errors->all() as $error) 
							<li>{{ $error }}</li>
						@endforeach
					</ul> 
				@endif
				<form method="POST" enctype="multipart/form-data">
				  <input type="hidden" name="_token" value="{{ csrf_token() }}">
				  <div class="form-group required">
				    <label for="inputTitle">Title</label>
				    <input type="title" class="form-control" id="Title" name="Title" placeholder="What is the title ?">
				  </div>
				  <div class="form-group">
				    <label for="inputTitle">Photo</label>
				    <input name="file" type="file" 
					   class="cloudinary-fileupload" data-cloudinary-field="image_id" 
					   data-form-data=" ... html-escaped JSON data ... " valeu="Select a file or drag and drop here"></input>
				  </div>
				  <div class="form-group required">
				    <label for="inputTitle">Content</label>
				    <input type="hidden" id="Content" name="Content"></input>
					<div id="summernote"></div>
  				  </div>
				  <div class="form-group">
				    <label for="inputTitle">Reporter Name</label>
				    <input type="title" class="form-control" id="ReporterName" name="ReporterName" placeholder="What is the reporter name ?" value="{{ Auth::user()->name }}">
				  </div>
				  <div class="form-group">
				    <label for="inputTitle">Reporter E-mail</label>
				    <input type="title" class="form-control" id="ReporterEmail" name="ReporterEmail" placeholder="What is the email ?"  value="{{ Auth::user()->email }}">
				  </div>
				  
 	 			  <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> Save</button>
  				  <button type="button" class="btn btn-default" onclick="history.go(-1);"><span class="glyphicon glyphicon-ban-circle" aria-hidden="true"></span> Cancel</button>

                	
				</form>
        	</div>
    	</div>
    </div>
</div>
@endsection
@section('javascript')
<!-- include summernote css/js-->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.6.16/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.6.16/summernote.js"></script>
<script src="{{ URL::asset('js/editor.js') }}"></script>
<script src="{{ URL::asset('js/jquery.cloudinary.js') }}" type='text/javascript'></script>
<script src="{{ URL::asset('js/article.create.js') }}"></script>
@endsection
