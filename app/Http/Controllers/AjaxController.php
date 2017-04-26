<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
Use App\Http\Controllers\Controlller;
Use App\Donor;


class AjaxController extends Controller
{
    public function index(){
      $msg = "This is a simple message.";
      return response()->json(array('msg'=> $msg), 200);
   }

    public function fetchDonor(Request $request){
      
      if ($request->   ('post')){
        return response()->json(['response' => '']);
      }

        return response()->json(['response'=> '']);

    }
}
