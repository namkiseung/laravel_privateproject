<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
	public function __construct(){
		$this->middleware('auth');
		$this->middleware('admin')->only('show');
		//$this->middleware('can')->except('show');
	}

    public function show($id){
    	return 'hi :'.$id;	
    }
    public function edit($id){
    	return 'Edit';
    }
}
