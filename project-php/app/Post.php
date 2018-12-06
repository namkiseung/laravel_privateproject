<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public static $rules = [
    	'title'=>'required',
    	'body'=>'required'

	];

	#사용자로부터 입력받는 값은 밑에 3개에 대한 것
	protected $fillable = ['title','body','thumnail'];
}
