@extends('layouts.app')
@section('content')

  {{-- TODO : link dropdown menus  --}}
  {{-- TODO : Add Edit  --}}
  {{-- TODO : FK  --}}

  {{--
  |--------------------------------------------------------------------------
  |Col 1 - Add a New Donor
  |--------------------------------------------------------------------------
  |
  --}}
  {{-- <script>
  $.ajax({
    url:/fetch_donor,
    type:'POST',
    success:function(show_donor){

      if(!show_donor.error){

        $("show-donors").html("hello it works");

      }

    }

  });
  </script> --}}
  {{--
  |--------------------------------------------------------------------------
  |Col 1 - Add a New Donor
  |--------------------------------------------------------------------------
  |
  --}}


  {{-- Create form --}}


<div class="row">

  {!! Form::open(['method'=>'POST', 'action'=>'DonorController@store']) !!}
  <div class="container">

  <div class="col-sm-6 ">
    <div class="well">
      <div class="form-horizontal">

          {{-- <div class="form-inline"> --}}
          {!! Form::token(); !!}
          {{-- {!! Form::hidden('user_id','user_id') !!}
          {!! Form::hidden('school_id', 'school_id') !!} --}}

          <h3>New Donor</h3>

          <div class="form-group{{ $errors->has('inputname') ? ' has-error' : '' }}">
              {!! Form::label('inputname', 'First Name', ['class' => 'col-sm-3 control-label']) !!}
              <div class="col-sm-9">
                  {!! Form::text('firstname', null, ['class' => 'form-control', 'required' => 'required']) !!}
                  <small class="text-danger">{{ $errors->first('inputname') }}</small>
              </div>
          </div>

          <div class="form-group{{ $errors->has('inputname') ? ' has-error' : '' }}">
              {!! Form::label('inputname', 'Last Name', ['class' => 'col-sm-3 control-label']) !!}
              <div class="col-sm-9">
                  {!! Form::text('lastname', null, ['class' => 'form-control', 'required' => 'required']) !!}
                  <small class="text-danger">{{ $errors->first('inputname') }}</small>
              </div>
          </div>

          <div class="radio{{ $errors->has('is_active') ? ' has-error' : '' }}">
              <div class=" col-sm-12">
                <span class="input-group-addon">
                {!! Form::radio('is_active',1,['class'=>'form-control']); !!}
                {!! Form::label('is_active','Active') !!}
              </span>
                <span class="input-group-addon">
                {!! Form::radio('is_active',2,['class'=>'form-control']); !!}
                {!! Form::label('is_active','Inactive') !!}
              </span>
              </div>
          </div>

            <hr>

          <div class="form-group{{ $errors->has('business_name') ? ' has-error' : '' }}">
              {!! Form::label('business_name', 'Business Name', ['class' => 'col-sm-3 control-label']) !!}
              <div class="col-sm-9">
                  {!! Form::text('business_name', null, ['class' => 'form-control', 'required' => 'required']) !!}
                  <small class="text-danger">{{ $errors->first('business_name') }}</small>
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
                  {!! Form::select('state_id', '{{ $states->name }}', '{{ $states->id }}', ['class' => 'form-control', 'required' => 'required']) !!}
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

          <div class="radio{{ $errors->has('is_active') ? ' has-error' : '' }}">
              <div class=" col-sm-12">

                <span class="input-group-addon">
                  {!! Form::radio('donor_id',1,['class'=>'form-control']); !!}
                  {!! Form::label('donor_id','Business ') !!}
                </span>

                <span class="input-group-addon">
                  {!! Form::radio('donor_id',2,['class'=>'form-control']); !!}
                  {!! Form::label('donor_id','Individual/Family ') !!}
                </span>

                <span class="input-group-addon">
                  {!! Form::radio('donor_id',3,['class'=>'form-control']); !!}
                  {!! Form::label('donor_id','Private/Anonymous') !!}
                </span>
              </div>
          </div>

          <div class="form-group{{ $errors->has('inputname') ? ' has-error' : '' }}">
              {!! Form::label('inputname', 'Input label') !!}
              {!! Form::textarea('inputname', null, ['class' => 'form-control', 'required' => 'required']) !!}
              <small class="text-danger">{{ $errors->first('inputname') }}</small>
          </div>

          {!! Form::button('Add',['class' => "btn btn-primary pull-right"]) !!}
        </span>

        </div>
      </div>
    </div>



    {!! Form::close() !!}


    {{--
    |--------------------------------------------------------------------------
    |Col 2 - Donor List
    |--------------------------------------------------------------------------
    |
    --}}

    <div class="row">
      <div class="col-sm-6">
        <div class="well">
          <h3>All Donors</h3>
          <table class="table">
            <thead>
                  <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Business</th>
                    <th>Edit/Delete</th>
                  </tr>
            </thead>
                  <tbody id="show-donors">
                    @if ($donors)

                          @foreach ($donors as $donor)

                              <tr>
                                <td>{{ $donor->firstname }} </td>
                                <td>{{ $donor->lastname }}</td>
                                <td>{{ $donor->business_name }}</td>
                                <td>

                                <a href="/donor/{{ $donor->id }}/edit" class="btn btn-sm btn-primary">Edit</button>
                                <a href="/donor/{{ $donor->id }}" class="btn btn-sm btn-danger btn-primary" >Delete</button>
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
<script>
$.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });

  // we're not passing any data with the get route, though you can if you want
  $.get('/state');
  var states = $data


function onPostClick(event)
{
  // we're passing data with the post route, as this is more normal
  $.post('/ajax/post', {payload:'hello'}, onSuccess);
}

function onSuccess(data, status, xhr)
{
  // with our success handler, we're just logging the data...
  console.log(data, status, xhr);
  // but you can do something with it if you like - the JSON is deserialised into an object
  console.log(String(data.value).toUpperCase())
}
// listeners
$('button#get').on('click', onGetClick);
$('button#post').on('click', onPostClick);

</script>

@include('partials.footer')
