@extends('layouts.app')

@section('content')
	<h1>{{ $post->title }}</h1>
	<article>
		{{ $post->body }}
	</article>
	<article>
		{{ $post->thumbnail }}
	</article>
	<h3>
		<a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary">글 수정</a>
		<form method="post" action="{{ route('post.destroy', $post->id) }}">
			{!! csrf_field() !!}
			{{ method_field('DELETE') }}
			<button class="btn btn-primary" value=""/>글 삭제</button>
		</form>
		<a href="{{ route('post.index') }}" class="btn btn-primary">목록으로</a>
	</h3>
@stop