<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Venue;
use App\Show;
use App\Showtype;
use App\Publisher;
use App\Schoolyear;


class ShowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //true for all schools
          $publishers = Publisher::orderBy('name')->pluck('name', 'id');
          $showtypes = Showtype::orderBy('name')->pluck('name','id');
          $schoolyears = Schoolyear::pluck('name','id');

        //Only for selected schools
          $venues = Venue::orderBy('name')->pluck('name','id');
          $shows = Show::all();
          
          return view('portal.show.show', compact('publishers','showtypes','schoolyears','venues','shows'));

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
       Show::create($request->all());

       return view('portal.show.role');

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
        Show::destroy($id);
        return redirect('ShowController@index');
    }
}
