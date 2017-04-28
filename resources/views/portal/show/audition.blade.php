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

    <div class="row">
      <div class="container">
        <div class="col-sm-6 ">
          <div class="panel panel-default">
            <div class="panel-heading">Add Donor</div>
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
              </div>
            </div>


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
