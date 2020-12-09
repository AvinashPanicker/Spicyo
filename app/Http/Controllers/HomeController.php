<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index(){
       return view('index');
   }
   public function blog(){
       return view('blog');
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