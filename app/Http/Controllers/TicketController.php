<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index(){
        return [
            "code" => 10290192,
            "title"=> "ticket 1",
            "description"=> "ksad ksadklsa klasdkl lkasd lkksad lk akll"
        ];
    }
}
