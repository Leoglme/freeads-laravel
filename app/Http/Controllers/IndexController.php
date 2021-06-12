<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;

class IndexController extends Controller
{

    function __construct(){}

    public function showIndex()
    {
        return view('index');
    }

}
