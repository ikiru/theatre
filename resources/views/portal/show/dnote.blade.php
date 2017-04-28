@include('partials.needs')
@extends('layouts.app')
@section('content')
  {{-- TODO --}}


  {{--
  |--------------------------------------------------------------------------
  |Col 1 -
  |--------------------------------------------------------------------------
  |
  --}}



  <div class="row">
    <div class="container">
      <div class="col-sm-8 ">
        <div class="panel panel-default">
          <div class="panel-heading"><h4>Director's Audition Note</h4></div>
           <div class="form-horizontal">
             <div class="panel-body">

               <form class="form-horizontal" action="add-donor" method="post" id="add-donor-form">

                            {!! Form::token(); !!}
                            {!! Form::hidden('user_id','user_id') !!}
                            {!! Form::hidden('school_id', 'school_id') !!}
                            {{-- <div class="form-inline"> --}}
                          <div class="row">
                            <div class="container">
                              <div class="col-sm-6 ">
                            <div class="form-group{{ $errors->has('audtion_id') ? ' has-error' : '' }}">
                                {!! Form::label('audtion_id', 'Performers Name', ['class' => 'col-sm-4 control-label']) !!}
                                <div class="col-sm-3">
                                    {!! Form::select('audtion_id', $shows, 'shows', ['class' => 'form-control', 'required' => 'required']) !!}
                                    <small class="text-danger">{{ $errors->first('audtion_id') }}</small>
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('show_id') ? ' has-error' : '' }}">
                                {!! Form::label('show_id', 'Show', ['class' => 'col-sm-4 control-label']) !!}
                                <div class=" col-sm-3">
                                {!! Form::select('show_id', $shows, 'show', ['class' => 'form-control', 'required' => 'required']) !!}
                                <small class="text-danger">{{ $errors->first('show_id') }}</small>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="checkbox-inline col-sm-3"><label id="reading">Reading Fluency</label></div>
                            <div class="col-sm-pull-6">
                                <div id="reading" class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-default active">
                                        <input type="radio" id="q156" name="reading" value="1" /> 1
                                    </label>
                                    <label class="btn btn-default">
                                        <input type="radio" id="q157" name="reading" value="2" /> 2
                                    </label>
                                    <label class="btn btn-default">
                                        <input type="radio" id="q158" name="reading" value="3" /> 3
                                    </label>
                                    <label class="btn btn-default">
                                        <input type="radio" id="q159" name="reading" value="4" /> 4
                                    </label>
                                    <label class="btn btn-default">
                                        <input type="radio" id="q160" name="reading" checked="checked" value="5" /> 5
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                          <div class="checkbox-inline col-sm-3"><label id="characterization">Characterization</label></div>
                            <div class="col-sm-pull-6">
                                <div id="characterization" class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-default active">
                                        <input type="radio" id="q156" name="characterization" value="1" /> 1
                                    </label>
                                    <label class="btn btn-default">
                                        <input type="radio" id="q157" name="characterization" value="2" /> 2
                                    </label>
                                    <label class="btn btn-default">
                                        <input type="radio" id="q158" name="characterization" value="3" /> 3
                                    </label>
                                    <label class="btn btn-default">
                                        <input type="radio" id="q159" name="characterization" value="4" /> 4
                                    </label>
                                    <label class="btn btn-default">
                                        <input type="radio" id="q160" name="characterization" checked="checked" value="5" /> 5
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                          <div class="checkbox-inline col-sm-3"><label id="taking_direction">Taking Direction</label></div>
                            <div class="col-sm-pull-6">
                                <div id="taking_direction" class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-default active">
                                        <input type="radio" id="q156" name="taking_direction" value="1" /> 1
                                    </label>
                                    <label class="btn btn-default">
                                        <input type="radio" id="q157" name="taking_direction" value="2" /> 2
                                    </label>
                                    <label class="btn btn-default">
                                        <input type="radio" id="q158" name="taking_direction" value="3" /> 3
                                    </label>
                                    <label class="btn btn-default">
                                        <input type="radio" id="q159" name="taking_direction" value="4" /> 4
                                    </label>
                                    <label class="btn btn-default">
                                        <input type="radio" id="q160" name="taking_direction" checked="checked" value="5" /> 5
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                          <div class="checkbox-inline col-sm-3"><label id="vocal">Vocal Projection</label></div>
                            <div class="col-sm-pull-6">
                                <div id="vocal" class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-default active">
                                        <input type="radio" id="q156" name="vocal" value="1" /> 1
                                    </label>
                                    <label class="btn btn-default">
                                        <input type="radio" id="q157" name="vocal" value="2" /> 2
                                    </label>
                                    <label class="btn btn-default">
                                        <input type="radio" id="q158" name="vocal" value="3" /> 3
                                    </label>
                                    <label class="btn btn-default">
                                        <input type="radio" id="q159" name="vocal" value="4" /> 4
                                    </label>
                                    <label class="btn btn-default">
                                        <input type="radio" id="q160" name="vocal" checked="checked" value="5" /> 5
                                    </label>
                                </div>
                            </div>

                            <div class="row">
                              <div class="checkbox-inline col-sm-3"><label id="movement">Movement</label></div>
                                <div class="col-sm-pull-6">
                                    <div id="movement" class="btn-group" data-toggle="buttons">
                                        <label class="btn btn-default active">
                                            <input type="radio" id="q156" name="taking_direction" value="1" /> 1
                                        </label>
                                        <label class="btn btn-default">
                                            <input type="radio" id="q157" name="movement" value="2" /> 2
                                        </label>
                                        <label class="btn btn-default">
                                            <input type="radio" id="q158" name="movement" value="3" /> 3
                                        </label>
                                        <label class="btn btn-default">
                                            <input type="radio" id="q159" name="movement" value="4" /> 4
                                        </label>
                                        <label class="btn btn-default">
                                            <input type="radio" id="q160" name="movement" checked="checked" value="5" /> 5
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="form-group{{ $errors->has('reading_note') ? ' has-error' : '' }}">
                                {!! Form::label('reading_note', 'Reading Note', ['class' => 'col-sm-3 control-label']) !!}
                                <div class="col-sm-6">
                                    {!! Form::text('reading_note', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                    <small class="text-danger">{{ $errors->first('reading_note') }}</small>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('characterization_note') ? ' has-error' : '' }}">
                                {!! Form::label('characterization_note', 'Characterization Note', ['class' => 'col-sm-3 control-label']) !!}
                                <div class="col-sm-6">
                                    {!! Form::text('characterization_note', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                    <small class="text-danger">{{ $errors->first('characterization_note') }}</small>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('direction_notes') ? ' has-error' : '' }}">
                                {!! Form::label('direction_notes', 'Taking Direction Notes', ['class' => 'col-sm-3 control-label']) !!}
                                <div class="col-sm-6">
                                    {!! Form::text('direction_notes', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                    <small class="text-danger">{{ $errors->first('direction_notes') }}</small>
                              </div>
                            </div>

                            <div class="form-group{{ $errors->has('vocal_notes') ? ' has-error' : '' }}">
                                {!! Form::label('vocal_notes', 'Vocal Notes', ['class' => 'col-sm-3 control-label']) !!}
                                <div class="col-sm-6">
                                    {!! Form::text('vocal_notes', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                    <small class="text-danger">{{ $errors->first('vocal_notes') }}</small>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('movement_notes') ? ' has-error' : '' }}">
                                {!! Form::label('movement_notes', 'Movement Notes', ['class' => 'col-sm-3 control-label']) !!}
                                <div class="col-sm-6">
                                    {!! Form::text('movement_notes', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                    <small class="text-danger">{{ $errors->first('movement_notes') }}</small>
                                </div>
                            </div>

                            <hr>
                          <div class="row">

                            <div class="container">


                          <div class="col-sm-offset-1 col-sm-6">
                            <div class="form-group{{ $errors->has('notes') ? ' has-error' : '' }}">
                                {!! Form::label('notes', 'Audition Notes') !!}
                                {!! Form::textarea('notes', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                <small class="text-danger">{{ $errors->first('notes') }}</small>

                            </div>
                            {!! Form::submit('Submit',['class' => "btn btn-primary pull-right"]) !!}
                            {!! Form::close() !!}
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>





    {{--
    |--------------------------------------------------------------------------
    |Col 2 -
    |--------------------------------------------------------------------------
    |
    --}}
    <div class="row">
      <div class="col-sm-4">
        <div class="panel panel-default">
          <div class="panel-heading"><h4>Donor List</h4></div>
            <div class="panel-body">
              <table class="table">
                <thead>
                      <tr>
                        <th>Name</th>
                        <th>Edit/Delete</th>
                      </tr>
                </thead>
                      <tbody id="show-donors">

                                {{-- @foreach ($data as $d)
                                  <tr>
                                    <td id="firstname-{{ $d->id }}">{{ $d->firstname }} {{ $d->lastname }}</td>
                                    <td id="lastname-{{ $d->id }}">{{ $d->business_name }}</td>
                                    <td id="business-{{ $d->id }}">{{ $d->phone }}</td>
                                    <td id="button-{{ $d->id }}">
                                    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#edit-modal" data-id="{{ $d->id }}" data-firstname="{{ $d->id }}" data-lastname="{{ $d->id }}" data-business="{{ $d->id }}"data-phone="{{ $d->id }}">Edit</button>
                                    <button class="btn btn-sm btn-danger btn-primary" data-toggle="modal" data-target="#delete-modal" data-id={{ $d->id }}>Delete</button>

                                    </td>
                                  </tr>
                                @endforeach --}}

                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>


    </div>

  </div>
        @endsection
