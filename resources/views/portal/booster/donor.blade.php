@include('partials.needs')
@extends('layouts.app')
@section('content')

  {{-- FIXME : notes add --}}
  {{-- TODO : Add Edit  --}}
  {{-- TODO : FK  --}}

  {{--
  |--------------------------------------------------------------------------
  |Col 1 - Add a New Donor
  |--------------------------------------------------------------------------
  |
  --}}

<div class="row">
<div class="container">
  <div class="col-sm-6 ">
    <div class="panel panel-default">
      <div class="panel-heading">Add Donor</div>
       <div class="form-horizontal">
         <div class="panel-body">

          {!! Form::open(['class' => 'form-horizontal', 'id' =>"add-form"]) !!}
          {!! Form::token(); !!}

          {!! Form::hidden('user_id','{{ Auth::user()->id }}') !!}
          {!! Form::hidden('school_id', '{{ Auth::user()->state_id }}') !!}


          <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
              {!! Form::label('firstname', 'First Name', ['class' => 'col-sm-3 control-label']) !!}
              <div class="col-sm-9">
                  {!! Form::text('firstname', null, ['class' => 'form-control', 'required' => 'required']) !!}
                  <small class="text-danger">{{ $errors->first('firstname') }}</small>
              </div>
          </div>

          <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
              {!! Form::label('lastname', 'Last Name', ['class' => 'col-sm-3 control-label']) !!}
              <div class="col-sm-9">
                  {!! Form::text('lastname', null, ['class' => 'form-control', 'required' => 'required']) !!}
                  <small class="text-danger">{{ $errors->first('lastname') }}</small>
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
                  {!! Form::text('state_id', null, ['class' => 'form-control', 'required' => 'required', 'id'=>'search']) !!}
                  <small class="text-danger">{{ $errors->first('state_id') }}</small>
              </div>
          </div>

          {{-- <div class="form-group{{ $errors->has('state_id') ? ' has-error' : '' }}">
              {!! Form::label('state_id', 'State', ['class' => 'col-sm-3 control-label']) !!}
              <div class="col-sm-9">
                  {!! Form::select('state_id', $states, 'states', ['class' => 'form-control', 'required' => 'required']) !!}
                  <small class="text-danger">{{ $errors->first('state_id') }}</small>
              </div>
          </div> --}}

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
                  {!! Form::text('phone', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => '000-000-0000']) !!}
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

          <div class="form-group{{ $errors->has('notes') ? ' has-error' : '' }}">
              {!! Form::label('notes', 'Notes') !!}
              {!! Form::textarea('notes', null, ['class' => 'form-control', 'placeholder' =>'Enter any notes that you have about the donor'])!!}
              <small class="text-danger">{{ $errors->first('notes') }}</small>
          </div>

              {!! Form::button('Add',['class' => "btn btn-primary pull-right", 'id'=>"add-button"]) !!}
              {!! Form::close() !!}
        </span>
        </div>
        </div>
      </div>
    </div>






    {{--
    |--------------------------------------------------------------------------
    |Col 2 - Donor List
    |--------------------------------------------------------------------------
    |
    --}}

  <div class="row">
    <div class="col-sm-6">
      <div class="panel panel-default">
        <div class="panel-heading">Donor List</div>
          <div class="panel-body">
            <table class="table">
              <thead>
                    <tr>
                      <th>Name</th>
                      <th>Business</th>
                      <th>Phone</th>
                      <th>Edit/Delete</th>
                    </tr>
              </thead>
                    <tbody id="show-donors">

                              @foreach ($data as $d)
                                <tr>
                                  <td id="firstname-{{ $d->id }}">{{ $d->firstname }} {{ $d->lastname }}</td>
                                  <td id="lastname-{{ $d->id }}">{{ $d->business_name }}</td>
                                  <td id="business-{{ $d->id }}">{{ $d->phone }}</td>
                                  <td id="button-{{ $d->id }}">
                                  <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#edit-modal" data-id="{{ $d->id }}" data-firstname="{{ $d->id }}" data-lastname="{{ $d->id }}" data-business="{{ $d->id }}"data-phone="{{ $d->id }}">Edit</button>
                                  <button class="btn btn-sm btn-danger btn-primary" data-toggle="modal" data-target="#delete-modal" data-id={{ $d->id }}>Delete</button>

                                  </td>
                                </tr>
                              @endforeach

                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>


  </div>

</div>
{{--
|--------------------------------------------------------------------------
|Col 2 - Donor List
|--------------------------------------------------------------------------
|
--}}

<div class="modal fade" id="edit-modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit</h4>
      </div>
      <div class="modal-body">

        {{--
        Edit Form Begins
         --}}

        {!! Form::open(['class' => 'form-horizontal', 'id' =>"edit-form"]) !!}

        <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
            {!! Form::label('firstname', 'First Name', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-9">
                {!! Form::text('firstname', null, ['class' => 'form-control', 'required' => 'required']) !!}
                <small class="text-danger">{{ $errors->first('firstname') }}</small>
            </div>
        </div>

        <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
            {!! Form::label('lastname', 'Last Name', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-9">
                {!! Form::text('lastname', null, ['class' => 'form-control', 'required' => 'required']) !!}
                <small class="text-danger">{{ $errors->first('lastname') }}</small>
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
                {!! Form::select('state_id', $states, 'states', ['class' => 'form-control', 'required' => 'required']) !!}
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
                {!! Form::text('phone', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => '000-000-0000']) !!}
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

        <div class="form-group{{ $errors->has('notes') ? ' has-error' : '' }}">
            {!! Form::label('notes', 'Notes') !!}
            {!! Form::textarea('notes', null, ['class' => 'form-control', 'placeholder' =>'Enter any notes that you have about the donor'])!!}
            <small class="text-danger">{{ $errors->first('notes') }}</small>
        </div>


            {{-- {!! Form::close() !!} --}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="edit buttom">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

{{--
  Modal DESTROY record
 --}}

<div class="modal fade" id="delete-modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Delete Donor</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h2>Are you sure you want to delete this Donor?</h2>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="delete-button">Yes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
@endsection

<script src="{{ asset('js/state.js') }}"></script>

@include('partials.footer')
