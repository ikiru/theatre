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

    {!! Form::open(['method'=>'POST', 'action'=>'///Controller@store']) !!}

                  <div class="container">

                  <div class="col-sm-6 ">
                    <div class="well">
                      <h3>Col 1</h3>
                        <div class="form-horizontal">

                            {{-- <div class="form-inline"> --}}
                            {!! Form::token(); !!}
                            {!! Form::hidden('user_id','user_id') !!}
                            {!! Form::hidden('school_id', 'school_id') !!}






                          </span>


                            {!! Form::submit('Submit',['class' => "btn btn-primary pull-right"]) !!}
                          </span>
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

              </div>


            </div>



        @endsection
