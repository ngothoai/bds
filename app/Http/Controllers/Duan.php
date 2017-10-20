<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Duan extends Controller
{
    public function getAdddanhmucduan(){
    	return view('admin.duan');
    }
}
