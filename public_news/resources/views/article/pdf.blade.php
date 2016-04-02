@extends('layouts.pdf')

@section('content')
<div class="container">
    <div class="row">
    	<div class="panel panel-default">
    		
        	<div class="panel-body" id="contentPDF">
        		<h2>{{ $article->title }}</h2>
        		
        		<h5 class="page-header">
        			<span class="glyphicon glyphicon-time" aria-hidden="true"></span> {!! $article->created_at->format('d F Y') !!}
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
