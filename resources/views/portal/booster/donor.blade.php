@extends('layouts.app')
@section('content')

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
          {!! Form::hidden('user_id','user_id') !!}

          <h3>New Donor</h3>

          {!! Form::label('firstname','First name:') !!}
          {!! Form::text('firstname',null,['class'=>'form-control', 'placeholder'=>'First name of donor contact' ]); !!}
          {!! Form::label('lastname','Last name:') !!}
          {!! Form::text('lastname',null,['class'=>'form-control', 'placeholder'=>'Last name of donor contact' ]); !!}

          <span class="input-group-addon">
          {!! Form::radio('donor_id',1,['class'=>'form-control']); !!}
          {!! Form::label('active_id','Active') !!}
        </span>
          <span class="input-group-addon">
          {!! Form::radio('donor_id',0,['class'=>'form-control']); !!}
          {!! Form::label('active_id','Inactive') !!}
        </span
        </br>
          {!! Form::label('business_name','Business Name:') !!}
          {!! Form::text('business_name',null,['class'=>'form-control', 'placeholder'=>'Optional' ]); !!}
          {!! Form::label('address','Address:') !!}
          {!! Form::text('address',null,['class'=>'form-control', 'placeholder'=>'Address' ]); !!}
          {!! Form::label('city','City:') !!}
          {!! Form::text('city',null,['class'=>'form-control', 'placeholder'  =>'City' ]); !!}
          {{-- {!! Form::select('state',null,['class'=>'form-control', 'placeholder'=>'State' ]); !!} --}}
          {!! Form::label('zip','Zip:') !!}
          {!! Form::text('zip',null,['class'=>'form-control', 'placeholder'=>'' ]); !!}
          {!! Form::label('phone','Phone:') !!}
          {!! Form::text('phone',null,['class'=>'form-control', 'placeholder'=>'777-777-7777' ]); !!}
          {!! Form::label('email','Email:') !!}
          {!! Form::text('email',null,['class'=>'form-control', 'placeholder'=>'johndoe@email.com' ]); !!}

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
          {!! Form::textarea('notes',null,['class'=>'form-control', 'placeholder'=>'Notes' ]); !!}

          {!! Form::submit('Submit',['class' => "btn btn-primary pull-right"]) !!}
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
{{-- <script>
$(document).ready(function(){
  $('.hover').popover({
    title:fetchData,
    html:true,
    placement:'right'
  })

  function fetchData(){
    var fetch_data = '';
    var element = $(this);
    var id = element.attr("id");
    $.ajax({
      type:type,
      url:"fetch.php",
      method:"POST",
      async:false,
      data:{id:id}
      success:function(data){
        fetch_data;
      }
    });
    return fetch_data;
  }
});

</script> --}}

@include('partials.footer')
