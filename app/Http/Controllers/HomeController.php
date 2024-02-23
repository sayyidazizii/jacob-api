<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Documentation;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function documentation(){
        $data = Documentation::select('*')->get();
        return view('welcome',compact('data'));
    }
}
