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
        $giocatori = Player::all();
        $data = [
          'giocatori' => $giocatori
        ];
        return view('player', $data);
    }
  public function about()
  {
    return view('about');
  }
}
