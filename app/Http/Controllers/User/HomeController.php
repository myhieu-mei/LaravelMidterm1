<?php

namespace App\Http\Controllers\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
        function index(){
            $tours= DB::table("tours")->get();
            return view("user.home",["tours" => $tours]);
        }
    
}