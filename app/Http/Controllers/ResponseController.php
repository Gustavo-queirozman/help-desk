<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResponseController extends Controller
{
    public function index(){
        return [
            "id"=> 1,
            "response"=> "sdjsla ksdl"
        ];
    }
}
