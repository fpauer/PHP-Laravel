@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    	<h2 class="page-header">Latest News</h2>
                    <?php 
	                	$maxCell = 2; 
	                	$cells = 0;
	                ?>
	                @if( sizeof($articles) == 0 )
	                <div class="jumbotron">
	                	<div class="container">
	                		<h1>Hello,</h1> <h2>We don't have any article yet! Please, register and be the first!</h2>
	                	</div>
	                </div>
	                @endif
	                
					@foreach($articles as $article)
					
						@if ( $cells == 0 || $maxCell == $cells)
							<div class="row">
					  	@endif
					  	
					  	<div class="col-sm-6 col-md-6">
						    <div class="thumbnail">
						      
						      @if ( !empty($article->photo_path) )
						      <img src="{{ $article->photo_path }}" style="height: 100%; width: 280; display: block;">
						      @else
						      <img data-src="holder.js/100%x200" alt="100%x200" 
						      	src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjQyIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDI0MiAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MjAwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTUzOTBmNmNmYWUgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMnB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNTM5MGY2Y2ZhZSI+PHJlY3Qgd2lkdGg9IjI0MiIgaGVpZ2h0PSIyMDAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSI4OS44NTkzNzUiIHk9IjEwNS4xIj4yNDJ4MjAwPC90ZXh0PjwvZz48L2c+PC9zdmc+" 
						      	data-holder-rendered="true" style="height: 200px; width: 100%; display: block;">
						      @endif
						      <div class="caption">
						        <h3><a href="article/{{ $article->link }}" target="_blank">{{ $article->title }}</a></h3>
						        <span class="glyphicon glyphicon-time" aria-hidden="true"></span> {!! $article->created_at->format('d F Y g:i A') !!}
						      </div>
						    </div>
						</div>
					    
						<?php $cells++;?>
						@if ( $maxCell == $cells)
							</div> 
							<?php $cells = 0;?>
					  	@endif
					@endforeach
					
					@if ( $cells != 0 || $maxCell != $cells)
						</div> 
				  	@endif
                </div>
    </div>
</div>
@endsection
