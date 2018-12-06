@extends('layouts.app')

@section('content')
<h1>All Posts</h1>
	<ul class="list-group">
		@foreach($posts as $post)
			<li class="list-group-item">
				<a href="{{ route('post.show', $post->id) }}">{{ $post->title }}></a>
			</li>
		@endforeach
	</ul>
	{!! $posts -> render()!!} 
	<h3>
		<a href="{{ route('post.create') }}" class="btn btn-primary">글작성</a>
	</h3>
@stop