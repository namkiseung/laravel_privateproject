@extends('layouts.app')

@section('content')
<hr>
<div style="text-align: center;"><h1>여행정보 글 목록</h1></div>
<hr>
	<ul class="list-group">
		@foreach($posts as $post)
			<li class="list-group-item">
				<a href="{{ route('post.show', $post->id) }}">{{ $post->title }}>
			</li>
		@endforeach
	</ul>
	{!! $posts -> render()!!}
	<br><br>
	<h3>
	<div style="text-align: center;"><a href="{{ route('post.create') }}" class="btn btn-primary">글작성</a></div>
</h3>
@stop
