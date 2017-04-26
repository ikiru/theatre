@extends('layouts.app')
@section('content')
  {{-- FIXME dropdowns must relate to School--}}
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

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                {!! Form::label('name', 'Input', ['class' => 'col-sm-3 control-label']) !!}
                                <div class="col-sm-9">
                                    {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                    <small class="text-danger">{{ $errors->first('name') }}</small>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('donationdate') ? ' has-error' : '' }}">
                                {!! Form::label('donationdate', 'Date of Dontation') !!}
                                {!! Form::date('donationdate', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                <small class="text-danger">{{ $errors->first('donationdate') }}</small>
                            </div>

                            <div class="form-group{{ $errors->has('donationtype') ? ' has-error' : '' }}">
                                {!! Form::label('donationtype', 'Type of Dontation', ['class' => 'col-sm-3 control-label']) !!}
                                <div class="col-sm-9">
                                    {!! Form::select('donationtype', $options, $selected_value, ['class' => 'form-control', 'required' => 'required', 'multiple']) !!}
                                    <small class="text-danger">{{ $errors->first('donationtype') }}</small>
                                </div>
                            </div>

                            {{-- FIXME look into changing how this behaves.  It probably will need a If/Else  --}}
                            <div class="form-group{{ $errors->has('donationvalue') ? ' has-error' : '' }}">
                                {!! Form::label('donationvalue', 'Donation Value', ['class' => 'col-sm-3 control-label']) !!}
                                <div class="col-sm-9">
                                    {!! Form::number('donationvalue', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                    <small class="text-danger">{{ $errors->first('donationvalue') }}</small>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('note') ? ' has-error' : '' }}">
                                {!! Form::label('note', 'Note') !!}
                                {!! Form::textarea('note', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                <small class="text-danger">{{ $errors->first('description') }}</small>
                            </div>

                            {{-- FIXME look into changing how this behaves.  It probably will need a If/Else  --}}
                            {!! Form::label('receivedreceipt','Has donor received a donation reciept?') !!}
                            <div class="radio{{ $errors->has('receivedreceipt') ? ' has-error' : '' }}">
                                <div class=" col-sm-12">
                                  <span class="input-group-addon">
                                  {!! Form::radio('receivedreceipt',1,['class'=>'form-control']); !!}
                                  {!! Form::label('receivedreceipt','Yes') !!}
                                </span>
                                  <span class="input-group-addon">
                                  {!! Form::radio('receivedreceipt',2,['class'=>'form-control']); !!}
                                  {!! Form::label('receivedreceipt','N') !!}
                                </span>
                                </div>
                            </div>



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
