@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    	<div class="panel panel-default">
    		
        	<div class="panel-body" id="contentPDF">
        		<h2>{{ $article->title }}</h2>
        		
        		<h5 class="page-header">
        			<span class="glyphicon glyphicon-time" aria-hidden="true"></span> {!! $article->created_at->format('d F Y') !!}
        			
        			<a href="{{ $_SERVER['REQUEST_URI'] }}/pdf" target="_blank" id="btDownloadPdf" class="btn btn-default btn-xs pull-right" role="button"><span class="glyphicon glyphicon-save-file" aria-hidden="true"></span> PDF</a>
        		</h5>
        		
        		@if ( !empty($article->photo_path) )
			      <img src="{{ $article->photo_path }}" style="max-height: 500px; max-width:100%" display: block;">
			    @endif
			    
            	{!! $article->body !!}
                    
            	{{ $article->author_name }}: {{ $article->author_email }}
        	</div>
			<div id="editor"></div>
    	</div>
    </div>
</div>
@endsection
