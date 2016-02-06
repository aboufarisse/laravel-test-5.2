<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class exampleController extends Controller
{
    //
    public function index() {
    	return view('welcome');
    }
    public function example(){
    	return view('example');
    }
}
