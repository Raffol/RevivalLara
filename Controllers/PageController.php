<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
   public function home()
    {
        return view('home');
    }
    public function news()
    {
        return view('404');
    }
    public function about()
    {
        return view('about');
    }
    public function events()
    {
        return view('events');
    }
    public function projects()
    {
        return view('projects');
    } public function organizers()
    {
        return view('organizers');
    }
    public function ourgames()
  {
      return view('404');
  }
   public function registration()
   {
      return view('registration');
    }
   public function entrance()
   {
        return view('entrance');
    }
    public function lk(){
       return view('lk');
    }
}
