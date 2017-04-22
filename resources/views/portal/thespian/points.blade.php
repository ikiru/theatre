@extends('layouts.app')
@section('content')

  {{-- TODO :bulid point model --}}
  {{-- TODO: bulid point model --}}
  {{-- TODO: table for venue --}}
  {{-- TODO: if then statement to determine user catagory--}}
  {{-- TODO: Ajax link Tcatacgory to Tposition --}}
  {{-- TODO: Ajax link Tlength to Tpoints --}}
  {{-- TODO: Ajax link Show to Venue --}}
  {{-- TODO: Button to new venue --}}


  <div class="row">
  {{--
  |--------------------------------------------------------------------------
  |Col 1 - New Event
  |--------------------------------------------------------------------------
  |
  --}}


  {!! Form::open(['method'=>'POST', 'action'=>'PointsController@store']) !!}

            <div class="container">

            <div class="col-sm-6 ">
              <div class="well">
                <h3>Col 1</h3>
                <div class="form-horizontal">

                    {{-- <div class="form-inline"> --}}
                    {!! Form::token(); !!}
                    {!! Form::hidden('user_id','user_id') !!}
                    {!! Form::hidden('approved_id','1') !!}

                    {!! Form::label('name','Event Name') !!}
                    {!! Form::text('name',null,['class'=>'form-control', 'placeholder'=>'' ]); !!}

                    {{-- linked pickers --}}
                    {!! Form::label('startdate','Start date of work') !!}
                    <div class='input-group date' id='datetimepicker3'>
                      {!! Form::label('startdate','End date of work') !!}
                      {!! Form::date('startdate', ['class'=>'form-control', 'placeholder'=>'']) !!}
                        {{-- <input type='text' class="form-control" /> --}}
                    <span class="input-group-addon">
                      <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                  </div>

                  <div class='input-group date' id='datetimepicker4'>
                    {!! Form::label('enddate','End date of work') !!}
                    {!! Form::date('enddate', ['class'=>'form-control', 'placeholder'=>'']) !!}
                      {{-- <input type='text' class="form-control" /> --}}
                    <span class="input-group-addon">
                      <span class="glyphicon glyphicon-calendar"></span>
                  </span>
                </div>

                  <hr>
                    <span class="input-group-addon">
                      {!! Form::radio('locationcat_id',1,['class'=>'form-control']); !!}
                      {!! Form::label('locationcat_id','School Event') !!}
                    </span>
                    <span class="input-group-addon">
                      {!! Form::radio('locationcat_id',2,['class'=>'form-control']); !!}
                      {!! Form::label('locationcat_id','Community') !!}
                    </span>
                    <hr>

                    {{-- {!! Form::select('catagory_id',null,['class'=>'form-control', 'placeholder'=>'Catagory' ]); !!} --}}
                    {{-- {!! Form::select('position_id',null,['class'=>'form-control', 'placeholder'=>'Position' ]); !!} --}}

                  <span class="input-group-addon">
                    {!! Form::radio('length_id',1,['class'=>'form-control']); !!}
                    {!! Form::label('length_id','Business ') !!}
                  </span>
                  <span class="input-group-addon">
                    {!! Form::radio('length_id',2,['class'=>'form-control']); !!}
                    {!! Form::label('length_id','Individual/Family ') !!}
                  </span>

                    {!! Form::textarea('notes',null,['class'=>'form-control', 'placeholder'=>'Notes' ]); !!}

                    {!! Form::submit('Submit',['class' => "btn btn-primary pull-right"]) !!}
                  </span>

                    </div>
                  </div>
                </div>
              </div>
              {!! Form::close() !!}


  {{--
  |--------------------------------------------------------------------------
  |Col 2 - All Event
  |--------------------------------------------------------------------------
  |
  --}}
{{--
              <div class="row">
                <div class="col-sm-6">
                  <div class="well">
                    <h3>Col 2</h3>
                    <table class="table">
                      <thead>
                            <tr>
                              <th>Name</th>
                              <th>Name</th>
                              <th>Business</th>
                              <th>Edit/Delete</th>
                            </tr>
                      </thead>
                            <tbody id="show-donors">
                              @if ($)

                                    @foreach ($ as $)

                                        <tr>
                                          <td>{{ $ -> }} </td>
                                          <td>{{ $ ->name }}</td>

                                          <td>

                                          <a href="/donor/{{ $ ->id }}/edit" class="btn btn-sm btn-primary">Edit</button>
                                          <a href="/donor/{{ $ ->id }}" class="btn btn-sm btn-danger btn-primary" >Delete</button>
                                          </td>
                                      </tr>
                                    </a>
                                    @endforeach
                                  @endif
                            </tbody>
                    </table>
                  </div>
                </div>

              </div> --}}


            </div>



        @endsection
