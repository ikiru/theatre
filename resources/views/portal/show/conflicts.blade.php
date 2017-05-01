@include('partials.needs')
@extends('layouts.app')
@section('content')
<script src="{{ asset('js/datetimepicker.js') }}"></script>
  {{-- TODO --}}

  {{--
  |--------------------------------------------------------------------------
  |Col 1 -
  |--------------------------------------------------------------------------
  |
  --}}



      <div class="container">
       <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-heading"><h4>Conflicts</h4></div>
             <div class="form-horizontal">
               <div class="panel-body">


                   {!! Form::open(['method'=>'POST', 'action'=>'ConflictController@store']) !!}

                          {!! Form::token(); !!}
                          {!! Form::hidden('user_id','{{ Auth::user()->id }}') !!}
                          {!! Form::hidden('school_id', '{{ Auth::user()->state_id }}') !!}

                      <div class="row">
                        <div class="col-md-4">

                          <div class="form-group{{ $errors->has('reason_id') ? ' has-error' : '' }}">
                              {!! Form::label('reason_id', 'Reason', ['class' => 'col-sm-3 control-label']) !!}
                              <div class="col-sm-9">
                                  {!! Form::select('reason_id', $reason, 'reason', ['class' => 'form-control', 'required' => 'required']) !!}
                                  <small class="text-danger">{{ $errors->first('reason_id') }}</small>
                              </div>
                          </div>



                          {{-- {!! Form::label('conflict', 'Confilct Date', ['class' => 'col-sm-4 control-label']) !!}
                          <div id="conflict" name="date" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
                              <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
                              <span></span> <b class="caret"></b>
                          </div> --}}

                        </div>
                      </div>

                    <div class="row">
                      <div class="col-md-offset-2 col-md-6">
                        <div class="form-group{{ $errors->has('note') ? ' has-error' : '' }}">
                            {!! Form::label('note', 'Additional Information') !!}
                            {!! Form::textarea('note', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'How will material missed be made up?']) !!}
                            <small class="text-danger">{{ $errors->first('note') }}</small>
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




    {{--
    |--------------------------------------------------------------------------
    |Col 2 -
    |--------------------------------------------------------------------------
    |
    --}}

          {{-- <div class="row">
            <div class="col-sm-2">
              <div class="panel panel-default">
                <div class="panel-heading"><h4>Donor List</h4></div>
                  <div class="panel-body">



                </div>
              </div>
            </div>
          </div>
        </div> --}}
      </div>
    </div>
    <script type="text/javascript" src="{{ URL::asset('js/datetimepicker.js') }}"></script>


@endsection
