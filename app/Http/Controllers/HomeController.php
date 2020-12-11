<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dish;

class HomeController extends Controller
{
   public function index(){
       return view('index');
   }
   public function blog(){
    $dishes=Dish::all();
    return view('blog',compact('dishes'));
   }
   public function recipe(){
    return view('recipe');
   }
   public function contact(){
    return view('contact');
   }
   public function about(){
    return view('about');
   }
}
