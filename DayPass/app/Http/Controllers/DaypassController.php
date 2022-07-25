<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Daypass;

class DaypassController extends Controller
{
  public function index(){
    $daypass= Daypass::latest()->paginate(6);
    return view('dashboard') ->with(
    [
        'daypass'=>$daypass
    ] );
  }

  public function show($slug)
  {
      $daypass = Daypass::where('slug',$slug)->first();
      return view('showDaypass')->with([
          'daypass' => $daypass
      ]);
  }
}
