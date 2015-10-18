<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AboutCtrl extends Controller
{
    function about ()
    {
        $name = "Ahmad abd";
        return view("pages.about")->with([
            "first"=> "Ahmad",
            "last"=> "Abd"
        ]);
    }
}
