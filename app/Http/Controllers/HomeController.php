<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(Request $request){

        $auth = Auth::user();

        $data = [
            "auth" => $auth
        ];

        return view("index", $data);
    }
}
