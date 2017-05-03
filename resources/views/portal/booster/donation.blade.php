@include('partials.needs')
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

    {!! Form::open(['method'=>'POST', 'action'=>'DonationController@store']) !!}

    <div class="container">
      <div class="row">
        <div class="container">
          <div class="col-sm-6 ">
            <div class="panel panel-default">
              <div class="panel-heading"><h4>Add Donations</h4></div>
                <div class="form-horizontal">
                  <div class="panel-body">


                    {!! Form::open(['method'=>'POST', 'action'=>'DonationController@store']) !!}
                    {!! Form::token(); !!}

                    <input type="hidden" name="user_id" value={{ Auth::user()->id }}>
                    <input type="hidden" name="school_id" value={{ Auth::user()->school_id }}>

              <div class="form-group">
                  <div class="col-sm-12">
                    <div class="form-group{{ $errors->has('donor_id') ? ' has-error' : '' }}">
                        {!! Form::label('donor_id', 'Donor', ['class' => 'col-sm-3 control-label']) !!}
                          <div class="col-sm-9">
                            {!! Form::select('donor_id', $donors, 'donors', ['class' => 'form-control', 'required' => 'required']) !!}
                          </div>
                            <small class="text-danger">{{ $errors->first('donor_id') }}</small>
                        </div>
                    </div>
                  </div>

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        {!! Form::label('name', 'Item', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-9">
                            {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required', 'palceholder' => 'e.g. Cash, object']) !!}
                            <small class="text-danger">{{ $errors->first('name') }}</small>
                        </div>
                    </div>


                    <div class="input-append date form_datetime">
                        <input size="16" type="text" value="" readonly>
                        <span class="add-on"><i class="icon-th"></i></span>
                    </div>

                    <script type="text/javascript">
                        $(".form_datetime").datetimepicker({
                            format: "dd MM yyyy - hh:ii"
                        });
                    </script>


                    <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                        {!! Form::label('date', 'Date', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-9">
                            {!! Form::date('date', null, ['class' => 'form-control', 'required' => 'required']) !!}
                            <small class="text-danger">{{ $errors->first('date') }}</small>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('donationtype_id') ? ' has-error' : '' }}">
                        {!! Form::label('donationtype_id', 'Type of Dontation', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-9">
                            {!! Form::select('donationtype_id', $type, 'type', ['class' => 'form-control', 'required' => 'required']) !!}
                            <small class="text-danger">{{ $errors->first('donationtype_id') }}</small>
                        </div>
                    </div>

                    {{-- FIXME look into changing how this behaves.  It probably will need a If/Else  --}}
                    <div class="form-group{{ $errors->has('value') ? ' has-error' : '' }}">
                        {!! Form::label('value', 'Cash value of dontion', ['class' => 'col-sm-6 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::number('value', null, ['class' => 'form-control', 'required' => 'required']) !!}
                            <small class="text-danger">{{ $errors->first('value') }}</small>
                        </div>
                    </div>


                      {!! Form::label('note', 'Notes') !!}
                    <div class="form-group{{ $errors->has('note') ? ' has-error' : '' }}">
                      <div class="col-sm-12">
                        {!! Form::textarea('note', null, ['class' => 'form-control']) !!}
                        <small class="text-danger">{{ $errors->first('note') }}</small>
                      </div>
                    </div>


                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <div class="checkbox{{ $errors->has('has_receipt') ? ' has-error' : '' }}">
                              {!! Form::label('has_receipt', 'Email Receipt') !!}
                              <input type="checkbox" name="has_receipt" checked data-toggle="toggle" data-size="normal" data-on="No" data-off="Yes" data-onstyle="primary" data-offstyle="">
                            </div>
                            <small class="text-danger">{{ $errors->first('has_receipt') }}</small>
                        </div>
                          <div class="btn-group pull-right">
                            {!! Form::reset("Reset", ['class' => 'btn btn-warning']) !!}
                            {!! Form::submit("Add", ['class' => 'btn btn-success']) !!}
                          </div>
                        </div>
                      {!! Form::close() !!}
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
        <div class="panel panel-default">
          <div class="panel-heading"><h4>Donation List</h4></div>
            <div class="panel-body">
              <table class="table">
                <thead>
                      <tr>
                        <th>Donor</th>
                        <th>Business</th>
                        <th>Donation</th>
                        <th>Value</th>
                        <th>Edit/Delete</th>
                      </tr>
                </thead>
                      <tbody id="show-donations">
                        {{-- @if ($donations)

                              @foreach ($donations as $donation)

                                  <tr>
                                    <td>{{ $donation ->firstname }} {{ $donation ->lastname  }} </td>
                                    <td>{{ $donation ->business_name }}</td>
                                    <td>{{ $donation ->value }}</td>

                                    <td>

                                    <a href="/donation/{{ $donation ->id }}/edit" class="btn btn-sm btn-primary">Edit</button>
                                    <a href="/donation/{{ $donation ->id }}" class="btn btn-sm btn-danger btn-primary" >Delete</button>
                                    </td>
                                </tr>
                              </a>

                              @endforeach
                            @endif --}}
                      </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>


        @endsection
