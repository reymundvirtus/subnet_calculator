<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubnetController extends Controller
{
    public function index(){
        return view('subnet_calculator');
    }

    public function scratch(){
        return view('scratch');
    }
}
