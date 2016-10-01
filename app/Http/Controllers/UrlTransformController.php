<?php

namespace App\Http\Controllers;

use App\UrlTransform;
use Illuminate\Http\Request;

use App\Http\Requests;

class UrlTransformController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($key=-1)
    {
        if($key<0){
            return view('welcome')->with("urls",UrlTransform::all());
        }

        $row = UrlTransform::transformKey($key);

        $row->clicks++;
        $row->save();

        return redirect($row->original_url);
    }

}
