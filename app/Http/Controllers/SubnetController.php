<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subnetting;

class SubnetController extends Controller
{
    public function index(){

        return view('subnet_calculator');
    }

    public function ipAdd(Request $request){

        $insert = new Subnetting();
        $insert->InsertIpAddress($request); // the function inside model
        return response()->json($insert);
    }
}
