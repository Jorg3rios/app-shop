<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
	public function welcome(){}
		$a=4;
		$b=2;
		$c=$a+$b;
		return "el valor es $c";	
	}
    
}
