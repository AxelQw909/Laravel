<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function second()
    {
        $name = "Имя";
        $arr = ['name' => "Имя", "mark"=>4, "isadmin"=>true];
        return view('second', compact('name', 'arr'));
    }

    public function third()
    {
        return view('third');
    }
}
