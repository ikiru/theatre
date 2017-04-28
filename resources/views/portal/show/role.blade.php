@include('partials.needs')
@extends('layouts.app')
@section('content')
  {{-- TODO --}}
  <div class="row">

  {{--
  |--------------------------------------------------------------------------
  |Col 1 - Add the Character roles for a Play after Adding the play
  |--------------------------------------------------------------------------
  |
  --}}

    {!! Form::open(['method'=>'POST', 'action'=>'RolelistController@store']) !!}

                  <div class="container">

                  <div class="col-sm-6 ">
                    <div class="well">
                      <h3>Role List for </h3>
                      <p>Enter the name of the role of each character in the show.
                      If you are going to double cast enter tehm as to sperate characters. (i.e. Emily 1, Emily 2) </p>
                        <div class="form-horizontal">

                            {{-- <div class="form-inline"> --}}
                            {!! Form::token(); !!}
                            {!! Form::hidden('user_id','{{ Auth::user()->id }}') !!}
                            {!! Form::hidden('school_id', '{{ Auth::user()->state_id }}') !!}

                            <div class="form-group{{ $errors->has('shows') ? ' has-error' : '' }}">
                                {!! Form::label('shows', 'Show', ['class' => 'col-sm-3 control-label']) !!}
                                <div class="col-sm-9">
                                    {!! Form::select('shows', $shows, $shows, ['class' => 'form-control', 'required' => 'required']) !!}
                                    <small class="text-danger">{{ $errors->first('shows') }}</small>
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                {!! Form::label('name', 'Character', ['class' => 'col-sm-3 control-label']) !!}
                                <div class="col-sm-9">
                                    {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                    <small class="text-danger">{{ $errors->first('name') }}</small>
                                </div>
                            </div>
                            {!! Form::submit('Submit',['class' => "btn btn-primary pull-right"]) !!}

                      </div>
                    </div>
                  </div>

                {!! Form::close() !!}

    {{--
    |--------------------------------------------------------------------------
    |Col 2 -  Character Roles for A play
    |--------------------------------------------------------------------------
    |
    --}}

      <div class="row">
        <div class="col-sm-6">
          <div class="well">
            <h3>Roles</h3>
            <table class="table">
              <thead>
                    <tr>
                      <th>Name</th>
                      <th>Edit/Delete</th>
                    </tr>
              </thead>
                    <tbody id="show-donors">
                      @if ($roles)

                            @foreach ($roles as $role)

                                <tr>
                                  <td>{{ $role ->name }}</td>
                                <td>

                                  <a href="/donor/{{ $roles ->id }}/edit" class="btn btn-sm btn-primary">Edit</button>
                                  <a href="/donor/{{ $roles ->id }}" class="btn btn-sm btn-danger btn-primary" >Delete</button>
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



        @endsection
