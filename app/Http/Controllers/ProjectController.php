<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    function index () {
        return view("vue1");
    }

    function test ($param) {
        return view("vue2", ["valeurParam"=>$param]);
    }
}
