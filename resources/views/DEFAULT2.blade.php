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

    {!! Form::open(['method'=>'POST', 'action'=>'AuditionController@store']) !!}

      <div class="container-fluid">
       <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="panel panel-default">
            <div class="panel-heading"><h4></h4></div>
             <div class="form-horizontal">
               <div class="panel-body">

                          {{-- <div class="form-inline"> --}}
                          <form class="" action="index.html" method="post">

                          {!! Form::token(); !!}
                          {!! Form::hidden('user_id','{{ Auth::user()->id }}') !!}
                          {!! Form::hidden('school_id', '{{ Auth::user()->state_id }}') !!}








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

          <div class="row">
            <div class="col-sm-5">
              <div class="panel panel-default">
                <div class="panel-heading"><h4>Donor List</h4></div>
                  <div class="panel-body">



                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


@endsection
