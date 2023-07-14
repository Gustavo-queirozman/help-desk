<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function index(){
        return [
            "id" => 1,
            "description" => "sdasd sadsda",
            "folder" => "dasasd"
        ];
    }
}
