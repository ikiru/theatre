<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
Use App\Http\Controllers\Controlller;
Use App\State;


class AjaxController extends Controller
{
  public function getstate(){

    $id = State::all();

  return response()->json([
    'id' => $id,
    'name' => $name
    
    ]);
  }
}
