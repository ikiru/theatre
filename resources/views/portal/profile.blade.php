<h1>Profile</h1>

{!! Form::open(['method'=>'POST','action'=>'UserController@store'])!!}

    <div class="form-group">

      {!! Form::radio('role_id','2',['class'=> 'form-control']) !!}Teacher
      {!! Form::radio('role_id','3',['class'=> 'form-control']) !!}Student
      {!! Form::radio('role_id','4',['class'=> 'form-control']) !!}Booster
      {!! Form::radio('role_id','5',['class'=> 'form-control']) !!}Parent

      {!! Form::hidden('is_active',1) !!}
      {!! Form::text('firstname',null,['class'=> 'form-control','placeholder' => 'First Name']) !!}
      {!! Form::text('lastname',null,['class'=> 'form-control','placeholder' => "Last Name"]) !!}
      {!! Form::text('address',null,['class'=> 'form-control','placeholder' => "Home Address"]) !!}
      {!! Form::text('city',null,['class'=> 'form-control','placeholder' => "City"]) !!}
      {!! Form::select('state_id',$states,['class'=> 'form-control']) !!}
      {!! Form::text('zip',null,['class'=> 'form-control','placeholder' => "Zip"]) !!}
      {!! Form::text('phone',null, ['class'=> 'form-control','placeholder' => "Moble Phone"]) !!}
      {!! Form::email('email',null, ['class'=> 'form-control','placeholder' => "email"]) !!}
      {!! Form::select('district_id',$districts,['class'=> 'form-control']) !!}
      {!! Form::select('school_id',$schools,['class'=> 'form-control']) !!}

    </div>

		<div class="'form-group'">
					{!! Form::submit('Sign up',['class' => "btn btn-primary"]) !!}
				</div>

    <div class="form-group">

      {!! Form::close() !!}

    </div>

    @if(count($errors)>0)

      <div class="alert alert-danger">

        <ul>

          @foreach ($errors->all() as $error)

            <li>{{$error}}</li>

          @endforeach

        </ul>

      </div>

    @endif
