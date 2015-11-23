<?php

namespace App\Http\Controllers;
use App\fbfrinds;
use Illuminate\Support\Facades\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ApiCalls extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "Mad !";
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_user(Request $request)
    {
        $id = $request::get('fb_id');
        $score = $request::get('score');
        $user = fbfrinds::where('fb_id', '=', $id)->first();
        if ($user === null) {
            $user = new fbfrinds();
            $user->fb_id = $id;
            $user->score = $score;
        }
        else
        {
            $user->score = $score;
        }
        $user->save();
        return $user;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_score (Request $request, $id)
    {
        //
    }


}
