<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class locationController extends Controller
{
    //
    public function index(Request $req)
    {
        $i= $_SERVER['REMOTE_ADDR'];
        $n=Http::get("http://ip-api.com/json/");

        $data=json_decode($n->getBody()->getContents());
        //return $data;
        return view('index',['data'=>$data]);
    }

    public function userlocation_javascript()
    {
        # code...
        return view('userlocation_javascript');
    }
}
