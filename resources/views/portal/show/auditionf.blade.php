@include('partials.needs')
@extends('layouts.app')
@section('content')
  {{-- TODO --}}
  <div class="row">

  {{--
  |--------------------------------------------------------------------------
  |Col 1 -
  |--------------------------------------------------------------------------
  |
  --}}

    {!! Form::open(['method'=>'POST', 'action'=>'AuditionController@store']) !!}

    <div class="row">
      <div class="container">
        <div class="col-sm-12 ">
          <div class="panel panel-default">
            <div class="panel-heading"><h4>Audition Form</h4></div>
             <div class="form-horizontal">
               <div class="panel-body">

                  {{-- <div class="form-inline"> --}}
                  <form class="form-horizontal" action="add-donor" method="post" id="add-donor-form">

                  {!! Form::token(); !!}
                  {!! Form::hidden('user_id','{{ Auth::user()->id }}') !!}
                  {!! Form::hidden('school_id', '{{ Auth::user()->state_id }}') !!}

                <div class="col-sm-3">
                  <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                      {!! Form::label('age', 'Age', ['class' => 'col-sm-3 control-label']) !!}
                      <div class="col-sm-9">
                          {!! Form::text('age', null, ['class' => 'form-control', 'required' => 'required']) !!}
                          <small class="text-danger">{{ $errors->first('age') }}</small>
                      </div>
                  </div>

                  <div class="form-group{{ $errors->has('height') ? ' has-error' : '' }}">
                      {!! Form::label('height', 'Height', ['class' => 'col-sm-3 control-label']) !!}
                      <div class="col-sm-9">
                          {!! Form::text('height', null, ['class' => 'form-control', 'required' => 'required']) !!}
                          <small class="text-danger">{{ $errors->first('height') }}</small>
                      </div>
                  </div>

                  <div class="form-group{{ $errors->has('weight') ? ' has-error' : '' }}">
                      {!! Form::label('weight', 'Weight', ['class' => 'col-sm-3 control-label']) !!}
                      <div class="col-sm-9">
                          {!! Form::text('weight', null, ['class' => 'form-control', 'required' => 'required']) !!}
                          <small class="text-danger">{{ $errors->first('weight') }}</small>
                      </div>
                  </div>
                </div>

                <div class="col-sm-3">
                  <div class="form-group{{ $errors->has('eyes') ? ' has-error' : '' }}">
                      {!! Form::label('eyes', 'Eye color', ['class' => 'col-sm-3 control-label']) !!}
                      <div class="col-sm-9">
                          {!! Form::text('eyes', null, ['class' => 'form-control', 'required' => 'required']) !!}
                          <small class="text-danger">{{ $errors->first('eyes') }}</small>
                      </div>
                  </div>

                  <div class="form-group{{ $errors->has('hair') ? ' has-error' : '' }}">
                      {!! Form::label('hair', 'Hair', ['class' => 'col-sm-3 control-label']) !!}
                      <div class="col-sm-9">
                          {!! Form::text('hair', null, ['class' => 'form-control', 'required' => 'required']) !!}
                          <small class="text-danger">{{ $errors->first('hair') }}</small>
                      </div>
                  </div>
                </div>

                  <div class="row">
                    <div class="container">
                      <div class="col-sm-5">
                        <div class="col-sm-offset-2 col-sm-4"><label id="sex">Sex</label></div>
                          <div class="btn-group" data-toggle="buttons">
                              <label class="btn btn-default">
                                  <input type="radio" id="sex" name="female" value="1" /> female
                              </label>
                              <label class="btn btn-default">
                                  <input type="radio" id="sex" name="male" value="2" /> male
                              </label>
                            </div>

                          </br>

                      <div class="form-group{{ $errors->has('physicallimit') ? ' has-error' : '' }}">
                          {!! Form::label('physicallimit', 'Physical Limitations', ['class' => 'col-sm-5 control-label']) !!}
                          <div class="col-sm-7">
                              {!! Form::text('physicallimit', null, ['class' => 'form-control', 'required' => 'required']) !!}
                              <small class="text-danger">{{ $errors->first('physicallimit') }}</small>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                      <hr>
                      <h5>Music ability</h5>
                      <div class="row">
                        <div class="container">
                          <div class="col-sm-5">
                            <div class="col-sm-6"><label id="read_music">Can you read music?</label></div>
                              <div class="btn-group" data-toggle="buttons">
                                  <label class="btn btn-default">
                                      <input type="radio" id="read_music" name="Yes" value="1" /> Yes
                                  </label>
                                  <label class="btn btn-default">
                                      <input type="radio" id="read_music" name="No" value="2" /> No
                                  </label>
                                </div>
                              </div>
                            </div>
                          </div>

                        </br>

                          <div class="row">
                            <div class="container">
                              <div class="col-sm-5">
                                <div class="form-group{{ $errors->has('vocalrange_id') ? ' has-error' : '' }}">
                                    {!! Form::label('vocalrange_id', 'Vocal range', ['class' => 'col-sm-4 control-label']) !!}
                                    <div class="col-sm-8">
                                        {!! Form::select('vocalrange_id', $vocal, 'vocal', ['class' => 'form-control', 'required' => 'required']) !!}
                                        <small class="text-danger">{{ $errors->first('vocalrange_id') }}</small>
                                    </div>
                                </div>
                              </div>
                          </div>
                        </div>


                        <div class="row">
                          <div class="container">
                            <div class="col-sm-8">
                              <div class="col-sm-3 control-label"><label id="vocal_id"></label>Vocal Level</div>
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-default">
                                        <input type="radio" id="vocal_id" name="vocal_id" checked="checked" value="1" />Beginner
                                    </label>
                                    <label class="btn btn-default">
                                        <input type="radio" id="vocal_id" name="vocal_id" value="2" />Intermediate
                                    </label>
                                    <label class="btn btn-default">
                                        <input type="radio" id="vocal_id" name="vocal_id" value="3" />Advance
                                    </label>
                              </div>
                            </div>
                          </div>


                      </br>
                        <div class="col-sm-5">
                          <div class="form-group{{ $errors->has('vocalexp') ? ' has-error' : '' }}">
                              {!! Form::label('vocalexp', 'Vocal Exprience', ['class' => 'col-sm-4 control-label']) !!}
                              <div class="col-sm-8">
                                  {!! Form::text('vocalexp', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                  <small class="text-danger">{{ $errors->first('vocalexp') }}</small>
                              </div>
                          </div>
                        </div>
                      </div>
                            <hr>
                      <h5>Dance Ability</h5>

                          <div class="row">
                            <div class="container">
                            <div class="col-sm-6">
                              <div class="form-group{{ $errors->has('dance_id') ? ' has-error' : '' }}">
                                  {!! Form::label('dance_id', 'Dance type known', ['class' => 'col-sm-4 control-label']) !!}
                                  <div class="col-sm-8">
                                      {!! Form::select('dance_id', $dance, 'dance', ['class' => 'selectpicker', 'multiple data-selected-text-format'=>"count > 3",'required' => 'required']) !!}
                                      <small class="text-danger">{{ $errors->first('dance_id') }}</small>
                                  </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="container">
                              <div class="col-sm-8">
                                <div class="col-sm-3 control-label"><label id="dance_id"></label>Dance Level</div>
                                  <div class="btn-group" data-toggle="buttons">
                                      <label class="btn btn-default">
                                          <input type="radio" id="dance_id" name="dance_id" checked="checked" value="1" />Beginner
                                      </label>
                                      <label class="btn btn-default">
                                          <input type="radio" id="dance_id" name="dance_id" value="2" />Intermediate
                                      </label>
                                      <label class="btn btn-default">
                                          <input type="radio" id="dance_id" name="dance_id" value="3" />Advance
                                      </label>
                                </div>
                              </div>
                            </div>
                          </div>
                        </br>

                          <div class="col-sm-5">
                            <div class="form-group{{ $errors->has('danceexp') ? ' has-error' : '' }}">
                                {!! Form::label('danceexp', 'Dance Exprience', ['class' => 'col-sm-5 control-label']) !!}
                                <div class="col-sm-7">
                                    {!! Form::text('danceexp', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                    <small class="text-danger">{{ $errors->first('danceexp') }}</small>
                                </div>
                            </div>
                          </div>

                  {!! Form::submit('Submit',['class' => "btn btn-primary pull-right"]) !!}
                  {!! Form::close() !!}
                </span>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>




@endsection
