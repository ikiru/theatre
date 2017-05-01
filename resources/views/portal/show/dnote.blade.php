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

               {!! Form::open(['method'=>'POST', 'action'=>'DirectorNoteController@store']) !!}

                  {!! Form::token(); !!}
                  {!! Form::hidden('user_id',"{{ $auth->id }}") !!}
                  {!! Form::hidden('school_id', "{{ $auth->school_id }}") !!}
                  {{ Auth::user()->school_id }}
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
                <div class="container">
                  <div class="col-sm-8">
              <div class="col-sm-3"><label id="characterization">Characterization</label></div>
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
                <div class="form-group{{ $errors->has('characterization_note') ? ' has-error' : '' }}">
                    <div class="col-sm-pull-4 col-sm-3">
                        {!! Form::text('characterization_note', null, ['class' => 'form-control']) !!}
                        <small class="text-danger">{{ $errors->first('characterization_note') }}</small>
                    </div>
                </div>
            </div>
          </div>



          <div class="row">
            <div class="container">
              <div class="col-sm-8">
                <div class="col-sm-3"><label id="direction">Taking Direction</label></div>
                      <div id="direction" class="btn-group" data-toggle="buttons">
                          <label class="btn btn-default active">
                              <input type="radio" id="q156" name="direction" checked="checked" value="1" /> 1
                          </label>
                          <label class="btn btn-default">
                              <input type="radio" id="q157" name="direction" value="2" /> 2
                          </label>
                          <label class="btn btn-default">
                              <input type="radio" id="q158" name="direction" value="3" /> 3
                          </label>
                          <label class="btn btn-default">
                              <input type="radio" id="q159" name="direction" value="4" /> 4
                          </label>
                          <label class="btn btn-default">
                              <input type="radio" id="q160" name="direction" value="5" /> 5
                          </label>
                      </div>
                  </div>
                  <div class="form-group{{ $errors->has('direction_note') ? ' has-error' : '' }}">
                      <div class="col-sm-pull-4 col-sm-3">
                          {!! Form::text('direction_note', null, ['class' => 'form-control']) !!}
                          <small class="text-danger">{{ $errors->first('direction_note') }}</small>
                      </div>
                  </div>
              </div>
            </div>



            <div class="row">
              <div class="container">
                <div class="col-sm-8">
                  <div class="col-sm-3"><label id="vocal">Vocal Projection</label></div>
                        <div id="vocal" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default active">
                                <input type="radio" id="q156" name="vocal" checked="checked" value="1" /> 1
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
                                <input type="radio" id="q160" name="vocal" value="5" /> 5
                            </label>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('vocal_note') ? ' has-error' : '' }}">
                        <div class="col-sm-pull-4 col-sm-3">
                            {!! Form::text('vocal_note', null, ['class' => 'form-control']) !!}
                            <small class="text-danger">{{ $errors->first('vocal_note') }}</small>
                        </div>
                    </div>
                </div>
              </div>


              <div class="row">
                <div class="container">
                  <div class="col-sm-8">
                    <div class="col-sm-3"><label id="movement">Physical Movement</label></div>
                          <div id="movement" class="btn-group" data-toggle="buttons">
                              <label class="btn btn-default active">
                                  <input type="radio" id="q156" name="movement" checked="checked" value="1" /> 1
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
                                  <input type="radio" id="q160" name="movement" value="5" /> 5
                              </label>
                          </div>
                      </div>
                      <div class="form-group{{ $errors->has('movement_note') ? ' has-error' : '' }}">
                          <div class="col-sm-pull-4 col-sm-3">
                              {!! Form::text('movement_note', null, ['class' => 'form-control']) !!}
                              <small class="text-danger">{{ $errors->first('movement_note') }}</small>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>


          <div class="row">
            <div class="container">
              <div class="col-sm-offset-1 col-sm-6">
                <div class="form-group{{ $errors->has('note') ? ' has-error' : '' }}">
                    {!! Form::label('note', 'Audition Notes') !!}
                    {!! Form::textarea('note', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    <small class="text-danger">{{ $errors->first('note') }}</small>
                </div>
                <div class="btn-group pull-right">
                  {!! Form::reset("Reset", ['class' => 'btn btn-warning']) !!}
                  {!! Form::submit("Add", ['class' => 'btn btn-success']) !!}
                </div>

                {!! Form::close() !!}
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
          <div class="panel-heading"><h4>Completed Auditions</h4></div>
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
