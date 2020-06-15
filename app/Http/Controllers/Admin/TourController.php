<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tour;
class TourController extends Controller
{
    public function create(){
        return view("admin.createtour");
    }

    function index(){
        $tours= DB::table("tours")->get();
        return view("admin.tours",["tours" => $tours]);
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required|unique:tours|max:255',
            'image' => 'required',
            'typetour' => 'required',
            'schedule' => 'required',
            'depart' => 'required',
            'number' => 'required',
            'price' => 'required',
        ]);
        $image= $request->file("image")-> store("public");
        $name=$request->name;
      
        $typetour=$request->typetour;
        $schedule=$request->schedule;
        $depart=$request->depart;
        $number=$request->number;
        $price=$request->price;

        $tour= new Tour;
        $tour->name= $name;
        $tour->image= 'storage/'.$image;
        $tour->typetour= $typetour;
        $tour->schedule= $schedule;
        $tour->depart= $depart;
        $tour->number= $number;
        $tour->price= $price;
        $tour->save();

        return redirect("admin/tours");




    }
}
