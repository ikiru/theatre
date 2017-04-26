@extends('layouts.app')
@section('content')
  {{-- TODO --}}

    <div class="row">

    {{--
    |--------------------------------------------------------------------------
    |Col 1 - Add New Show
    |--------------------------------------------------------------------------
    |
    --}}


    <div class="row">

      {!! Form::open(['method'=>'POST', 'action'=>'ShowController@store']) !!}
      <div class="container">

      <div class="col-sm-6 ">
        <div class="well">
          <div class="form-horizontal">

              {{-- <div class="form-inline"> --}}
              {!! Form::token(); !!}
              {!! Form::hidden('user_id','user_id') !!}
              {!! Form::hidden('school_id', 'school_id') !!}

              <h3>New Show</h3>

              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                  {!! Form::label('name', 'Show name', ['class' => 'col-sm-3 control-label']) !!}
                  <div class="col-sm-9">
                      {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
                      <small class="text-danger">{{ $errors->first('name') }}</small>
                  </div>
              </div>

              <div class="form-group{{ $errors->has('playwrite') ? ' has-error' : '' }}">
                  {!! Form::label('playwrite', 'Playwrite', ['class' => 'col-sm-3 control-label']) !!}
                  <div class="col-sm-9">
                      {!! Form::text('playwrite', null, ['class' => 'form-control', 'required' => 'required']) !!}
                      <small class="text-danger">{{ $errors->first('playwrite') }}</small>
                  </div>
              </div>

              <div class="form-group{{ $errors->has('publisher_id') ? ' has-error' : '' }}">
                  {!! Form::label('publisher_id', 'Publisher', ['class' => 'col-sm-3 control-label']) !!}
                  <div class="col-sm-9">
                      {!! Form::select('publisher_id', $publishers, $publishers, ['class' => 'form-control', 'placeholder' => '']) !!}
                      <small class="text-danger">{{ $errors->first('publisher_id') }}</small>
                  </div>
              </div>

              <div class="form-group{{ $errors->has('venue_id') ? ' has-error' : '' }}">
                  {!! Form::label('venue_id', 'Venue', ['class' => 'col-sm-3 control-label']) !!}
                  <div class="col-sm-9">
                      {!! Form::select('venue_id', $venues, $venues, ['class' => 'form-control', 'required' => 'required']) !!}
                      <small class="text-danger">{{ $errors->first('venue_id') }}</small>
                  </div>
              </div>

              <div class="form-group{{ $errors->has('showtype_id') ? ' has-error' : '' }}">
                  {!! Form::label('showtype_id', 'Show type', ['class' => 'col-sm-3 control-label']) !!}
                  <div class="col-sm-9">
                      {!! Form::select('showtype_id', $showtypes, $showtypes, ['class' => 'form-control', ]) !!}
                      <small class="text-danger">{{ $errors->first('showtype_id') }}</small>
                  </div>
              </div>

              <div class="input-group{{ $errors->has('royality') ? ' has-error' : '' }}">
                {!! Form::label('royality', 'Royalities', ['class' => 'col-sm-3 control-label']) !!}

                  <div class="col-sm-9">
                      {!! Form::number('royality', "0", ['class' => 'form-control currency', 'required' => 'required']) !!}
                      <small class="text-danger">{{ $errors->first('royality') }}</small>
                  </span>
                  </div>
              </div>



              <div class="form-group{{ $errors->has('note') ? ' has-error' : '' }}">
                  {!! Form::label('note', 'Note') !!}
                  {!! Form::textarea('note', null, ['class' => 'form-control', 'required' => 'required']) !!}
                  <small class="text-danger">{{ $errors->first('note') }}</small>
              </div>

              {!! Form::submit('Submit',['class' => "btn btn-primary pull-right"]) !!}
            </span>

            </div>
          </div>
        </div>
      </div>
    </div>
    



        {!! Form::close() !!}


    {{--
    |--------------------------------------------------------------------------
    |Col 2 -
    |--------------------------------------------------------------------------
    |
    --}}


        <div class="row">
          <div class="col-sm-6">
            <div class="well">
              <h3>Shows</h3>
              <table class="table">
                <thead>
                      <tr>
                        <th>First Name</th>

                        <th>Edit/Delete</th>
                      </tr>
                </thead>
                      <tbody id="show-donors">
                        @if ($shows)

                              @foreach ($shows as $show)

                                  <tr>
                                    <td>{{ $show->name }} </td>
                                    <td>

                                    <a href="/donor/{{ $show->id }}/edit" class="btn btn-sm btn-primary">Edit</button>
                                    <a href="/donor/{{ $show->id }}" class="btn btn-sm btn-danger btn-primary" >Delete</button>
                                    </td>
                                </tr>
                              </a>
                              @endforeach
                            @endif
                      </tbody>
              </table>
            </div>
          </div>

        </div>


      </div>

    </div>



        @endsection
