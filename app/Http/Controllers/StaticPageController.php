<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
  public function privacy() {
    // $title = 'Privacy-Policy';
    return view('privacy');
  }

  public function lavoraConNoi() {
    // $title = 'Lavora-Con-Noi';
    return view('lavora-con-noi');
  }
}
