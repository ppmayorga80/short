<?php

namespace App\Http\Controllers;

use App\UrlTransform;
use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;

class UrlTransformController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
        $this->middleware('auth', ['except' => 'index']);
    }

    public function index($key=-1)
    {
        if($key<0){
            if(Auth::check())
                return view('welcome')->with("urls",UrlTransform::all());
            else
                return view('auth.login');
        }

        $row = UrlTransform::transformKey($key);

        if($row)
        {
            $row->clicks++;
            $row->save();

            return redirect($row->original_url);
        }
        else
        {
            if(Auth::check())
                return view('welcome')->with("urls",UrlTransform::all())->with(array('errorKey' => "Key $key is invalid"));
            else
                return view('auth.login');
        }

    }
    public function getNuevo()
    {
        return view("createurl");
    }
    public function postNuevo(Request $request)
    {
        $len = 8;
        $this->validate($request,[
            "original_url" => "required|URL",
            "short_url"    => "max:$len",
        ]);

        if($request->has("short_url"))
        {
            $flag = UrlTransform::addUrlWithKey($request->input("original_url"),$request->input("short_url"));
            if($flag==0)
            {
                $id = time();
                $trans = new UrlTransform();
                $key = $trans->transform($id);

                return redirect()->back()->withInput()->withErrors(array('errorKey' => "Key is assigned, try with $key"));

                //return redirect()->back()->with('errorKey', ['your message,here']);
            }
        }
        else
        {
            UrlTransform::addUrl($request->input("original_url"));
        }

        //$organizador = Organizador::find($request->input("id"));

        return view('welcome')->with("urls",UrlTransform::all())->with("msg","New Short URL added");

        //return redirect('/');
        //return redirect()->back();
    }
}
