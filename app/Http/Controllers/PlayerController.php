<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;

class PlayerController extends Controller
{
  public function home()
    {
        return view('home');
    }
  public function player()
    {
        return view('player');
    }
  public function about()
  {
    return view('about');
  }
}
