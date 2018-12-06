@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              여행정보
              @if(Auth::user() -> name == 'admin') <div class="card-header"><a href="{{ route('post.index') }}" class="btn btn-primary">관리자 페이지 가기</a> </div>
            @else <div class="card-header"><a href="{{ route('post.index') }}" class="btn btn-primary">게시판 가기</a> </div>
            @endif
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <!-- {{ Auth::user()->name }} --> <!-- 로그인한 사용자아이디 -->
                @if(Auth::user() -> name == 'admin') admin 관리자님 환영합니다. @else 환영합니다. @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
