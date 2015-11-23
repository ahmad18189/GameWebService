<?php

namespace App\Http\Controllers;

use App\fbfrinds;
use Carbon\Carbon;
use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class FbfrindsCtrl extends Controller
{
    function index()
    {
        //$fbf = fbfrinds::all();
       // $fbf = fbfrinds::latest()->get();
        $fbf = fbfrinds::orderBy('id','desc')->get();
       /// $fbf = fbfrinds::latest('id')->where('id','<=',3)->get();

        return view('fbfrinds.index')->with('fbfrinds',$fbf);
    }
    function show($id)
    {
        $frn = fbfrinds::findOrFail($id);
        return view('fbfrinds.show')->with('frn',$frn);


    }
    function create()
    {
        return view('fbfrinds.create');

    }
    function store()
    {
        $input =Request::all();
        fbfrinds::create($input);
        return redirect("fbfrinds");
    }
    function All()
    {
        $fbf = fbfrinds::orderBy('id','desc')->get();
        return $fbf;
    }

    public function api_store(Request $request)
    {
        $id = $request::get('fb_id');
        $user = new fbfrinds();
        $user->fb_id=  $id;
        $user->save();
        //return Response::json($id, 200, array('Access-Control-Allow-Origin' => '*'));
        //  return response()->$id->array('Access-Control-Allow-Origin' -> '*');
        //   return Response::json("", 200, array('Access-Control-Allow-Origin' => '*'));

        return $id;
        //
    }
}
