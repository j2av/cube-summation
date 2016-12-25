<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Summation;

class SummationController extends Controller
{

  public function input()
  {
    return view("input");
  }

  public function analyze(Request $request)
  {
      $input = $request->input("input");
      $summation = new Summation();
      $lines = explode("\n", $input);
      $result = $summation->eval($lines);
      return response()->view("output", ["results" => $result]);
  }
}
