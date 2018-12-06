<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test extends Controller
{
    public function __invoke(){
    	return "none";
    }
    public function test($aa='abc'){
    	return 'hi '. $aa;
    }
}
