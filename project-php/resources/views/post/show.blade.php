@extends('layouts.app')

@section('content')
<hr>
	<div style="padding-left: 10%;"> <h1>[제목] </h1><h1>{{ $post -> title }}</h1></div>
	<hr>
	<article>
		<div style="padding-left: 10%;"><h1>[내용] </h1>{{ $post->body }}</div>
	</article>
	<hr><br><br><br><br><br>
	<article>
		<!-- {{ $post->thumbnail }} -->
	</article>

	<h3>
		<div style="padding-left: 10%; float: left; width: 33%;"><a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary">글 수정</a></div>
		<form method="post" action="{{ route('post.destroy', $post->id) }}">
			{!! csrf_field() !!}
			{{ method_field('DELETE') }}
			<div style="padding-left: 10%;float: left; width: 33%;"><button class="btn btn-primary" value=""/>글 삭제</button></div>
		</form>

		<div style="padding-left: 10%;float: left; width: 33%;"><a href="{{ route('post.index') }}" class="btn btn-primary">목록으로</a></div>
	</h3>
@stop
