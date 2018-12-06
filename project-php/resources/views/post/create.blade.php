@extends('layouts.app')
@section('content')
<!-- <h2>글 생성</h2> -->
	<form method="post" action=" {{ route('post.index') }} " enctype="multipart/form-data">
		<!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
		{!! csrf_field() !!}
		<div class="form-group">
			<h2><label name="title" for="title">제목</label></h2>
			<input type="text" name="title" class="form-control" value=""/>
		</div>
		<!-- <div class="form-group">
			<label name="file" for="file">파일</label>
			<input type="file" name="thumbnail" value=""/>
		</div> -->
		<div class="form-group">
			<h2><label name="body" for="body">내용</label></h2>
			<textarea name="body" class="form-control"></textarea>
		</div>
		<div style="text-align: center;" class="form-group">
			<input type="submit" value="생성하기" class="btn btn-primary">
		</div>
	</form>
@stop
