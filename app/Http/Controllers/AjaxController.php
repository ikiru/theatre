<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controlller;
use App\State;
use App\Donor;


class AjaxController extends Controller
{
  public function getstate(){

    $id = State::all();

  return response()->json([
    'id' => $id,
    'name' => $name

    ]);
  }
  public function addonor(){
    echo "I work";

  }
    //   Donor::create($_POST->all());
    //
    //   return('portal.booster.donor')

  }
  public function getdonor(){




  }
}
