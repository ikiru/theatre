@extends('layouts.app')
@section('content')

  {{-- TODO --}}
  {{-- TODO : link dropdown menus  --}}
  {{-- TODO : Add Edit  --}}


  {{--
  |--------------------------------------------------------------------------
  |Col 1 - New Venue
  |--------------------------------------------------------------------------
  |
  --}}
  <div class="row">
    {!! Form::open(['method'=>'POST', 'action'=>'VenueController@store']) !!}
      <div class="container">
        <div class="col-sm-6 ">
          <div class="well">
            <h3>New Venue</h3>
              <div class="form-horizontal">

                  {{-- <div class="form-inline"> --}}
                  {!! Form::token(); !!}
                  {!! Form::hidden('user_id','user_id') !!}

                  <div class="radio{{ $errors->has('in_district') ? ' has-error' : '' }}">
                      <div class=" col-sm-12">
                        <span class="input-group-addon">
                        {!! Form::radio('in_district',1,['class'=>'form-control']); !!}
                        {!! Form::label('in_district','District') !!}
                      </span>
                        <span class="input-group-addon">
                        {!! Form::radio('in_district',2,['class'=>'form-control']); !!}
                        {!! Form::label('in_district','Community') !!}
                      </span>
                      </div>
                  </div>


                <hr>

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    {!! Form::label('name', 'Venue Name', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-9">
                        {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
                        <small class="text-danger">{{ $errors->first('name') }}</small>
                    </div>
                </div>

                <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                    {!! Form::label('address', 'Address', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-9">
                        {!! Form::text('address', null, ['class' => 'form-control', 'required' => 'required']) !!}
                        <small class="text-danger">{{ $errors->first('address') }}</small>
                    </div>
                </div>

                <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                    {!! Form::label('city', 'City', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-9">
                        {!! Form::text('city', null, ['class' => 'form-control', 'required' => 'required']) !!}
                        <small class="text-danger">{{ $errors->first('city') }}</small>
                    </div>
                </div>

                <div class="form-group{{ $errors->has('state_id') ? ' has-error' : '' }}">
                    {!! Form::label('state_id', 'State', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-9">
                        {!! Form::select('state_id', $states, null, ['class' => 'form-control', 'required' => 'required', 'placeholder'=>'']) !!}
                        <small class="text-danger">{{ $errors->first('state_id') }}</small>
                    </div>
                </div>


                 <div class="form-group{{ $errors->has('zip') ? ' has-error' : '' }}">
                     {!! Form::label('zip', 'Zip', ['class' => 'col-sm-3 control-label']) !!}
                     <div class="col-sm-9">
                         {!! Form::text('zip', null, ['class' => 'form-control', 'required' => 'required']) !!}
                         <small class="text-danger">{{ $errors->first('zip') }}</small>
                     </div>
                 </div>

                 <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                     {!! Form::label('phone', 'Phone', ['class' => 'col-sm-3 control-label']) !!}
                     <div class="col-sm-9">
                         {!! Form::text('phone', null, ['class' => 'form-control', 'required' => 'required']) !!}
                         <small class="text-danger">{{ $errors->first('phone') }}</small>
                     </div>
                 </div>

                 <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                     {!! Form::label('email', 'Email address', ['class' =>'col-sm-3 control-label']) !!}
                     <div class="col-sm-9">
                         {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'eg: foo@bar.com']) !!}
                         <small class="text-danger">{{ $errors->first('email') }}</small>
                     </div>
                 </div>

                 <div class="form-group{{ $errors->has('website') ? ' has-error' : '' }}">
                     {!! Form::label('website', 'Website', ['class' => 'col-sm-3 control-label']) !!}
                     <div class="col-sm-9">
                         {!! Form::text('website', null, ['class' => 'form-control', 'required' => 'required']) !!}
                         <small class="text-danger">{{ $errors->first('website') }}</small>
                     </div>
                 </div>
                 <span>
                  {!! Form::submit('Submit',['class' => "btn btn-primary pull-right"]); !!}
                </span>
            </div>
          </div>
        </div>


    {!! Form::close() !!}


    {{--
    |--------------------------------------------------------------------------
    |Col 2 - List of Saved Venue
    |--------------------------------------------------------------------------
    |
    --}}

    <div class="row">
      <div class="col-sm-6">
        <div class="well">
          <h3>All venues</h3>
          <table class="table">
            <thead>
                  <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Business</th>
                    <th>Edit/Delete</th>
                  </tr>
            </thead>
                  <tbody id="show-venues">
                    @if ($venues)

                          @foreach ($venues as $venue)

                              <tr>
                                <td>{{ $venue->firstname }} </td>
                                <td>{{ $venue->lastname }}</td>
                                <td>{{ $venue->business_name }}</td>
                                <td>

                                <a href="/venue/{{ $venue->id }}/edit" class="btn btn-sm btn-primary">Edit</button>
                                <a href="/venue/{{ $venue->id }}" class="btn btn-sm btn-danger btn-primary" >Delete</button>
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
