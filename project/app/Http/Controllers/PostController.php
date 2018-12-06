<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Input;
use Validator;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //목록 view함수
    public function index()
    {

        $posts = Post::orderBy('created_at','desc')->paginate(5); //모든 포스트 내용 가져오기
        return view('post.index', compact('posts')); //post.index를 뷰에 넘긴다.

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //post작성하는 화면에서 처리하는 함수
    public function create()
    {
        return view('post.create'); //post의 create name을 리턴
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //create에서 작성한 데이터 DB 어세스 함수
    public function store(Request $request)
    {
        $post = new Post; //orm에서 정의하는 클래스를 객체로 만듬.
        //$post에 지정하고
        $title = Input::get('title');
        $post->title = $title;
        $post->body = Input::get('body');
        $post->thumbnail = $title;
        //$post를 저장한다.
        $post->save();

        return redirect()->route('post.index'); //uri의 name인 post.index로 리다이렉트
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //목록에서 선택한 post를 read하는 함수
    public function show($id)#$userID, $postID, $pw
    {
        $post = Post::findOrFail($id); #Post orm
        return view('post.show', compact('post'));
        #return 'This is PostController - SHOW, userID:'.$userID.'PostID :'.$postID.'PW : '.$pw;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //read화면에서 수정하는 화면 보여주는 함수
    public function edit($id)
    {
        $post = Post::find($id);
        return view('post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //edit에서 수정한 데이터 DB에 update역할 하는 함수
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $validator = Validator::make($data = Input::all(), Post::$rules);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput;
        }
        $post->update($data);
        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //post삭제하는 함수 
    public function destroy($id)
    {
        //
        Post::destroy($id);
        return redirect()->route('post.index');
    }
}
