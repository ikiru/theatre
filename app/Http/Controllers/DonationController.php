<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Donor;
use App\User;
use App\Donation;
use App\Donationtype;
use Auth;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //true for all schools
        $type = Donationtype::pluck('name','id');

        //Only for selected schools
      if(!Donation::all()){

        }else{
          $donations = Donation::where('school_id', Auth::user()->pluck('id'))->pluck('name','id');
          $donors = Donor::where('school_id', Auth::user()->pluck('school_id'))->pluck('business_name','id');

        }

        return view('portal.booster.donation', compact('type','donations','donors'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        Donation::create($request->all());
        return redirect()->action('DonationController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
