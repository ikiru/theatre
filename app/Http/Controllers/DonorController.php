<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donor;
use App\State;
use App\User;

class DonorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //true for all schools
        $states = State::pluck('name','id');

        //Only for selected schools
        $data = Donor::all();

        return view('portal.booster.donor', compact('data','states'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        echo "I'm a big fat muffin";

        // return redirect('DonorController@index');
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
        Donor::create($request->all());
        $id = Donor::getPdo()->lastInsertId();

        return response()->json([
          'id' => $id,
          'firstname' => $firstname,
          'lastname' => $lastname,
          'business' => $business,
          'phone' => $phone,
          'address' => $address,
          'city' => $city,
          'state_id' => $state_id,
          'zip' => $zip,
          'donor_id' => $donor_id,
          'is_active' => $is_active,
          'created_at' => $created_at,
          'updated_at' => $updated_at,
          'notes' => $notes,
          'email' => $email,
          'user_id' => $user_id
        ]);
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
        if($id){
          $donor = Donor::findOrFail($id);

            return view('portal.booster.donor', compact('donor'));
        }else{

          return redirect('DonorController@index');
        }
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
        $donor = Donor::findOrFail($id);

        return view('portal.booster.donor', compact('donor'));
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
       Donor::destroy($id);
       return redirect('DonorController@index');
    }
  }
