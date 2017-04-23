@extends('layouts.app')
@section('content')
  {{-- TODO :bulid Show model--}}
  {{-- TODO :get show length, --}}
  {{-- TODO :get rehearsal length
  {{-- TODO: Ajax link Show to Venue --}}
  {{-- TODO: Publisher table --}}
  {{-- FIXME: Calendars Show dates --}}
  {{-- FIXME: Calendars Rhearsal dates --}}
  {{-- TODO : link dropdown menus  --}}
  {{-- TODO : Add Edit  --}}

  <div class="row">

  {{--
  |--------------------------------------------------------------------------
  |Col 1 -
  |--------------------------------------------------------------------------
  |
  --}}

    {!! Form::open(['method'=>'POST', 'action'=>'ShowController@store']) !!}

                <div class="container">
                  <div class="col-sm-6 ">
                    <div class="well">
                      <h3>New Show</h3>
                        <div class="form-horizontal">

                            {{-- <div class="form-inline"> --}}
                            {!! Form::token(); !!}
                            {!! Form::hidden('user_id','user_id') !!}
                            {!! Form::hidden('school_id', 'school_id') !!}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                {!! Form::label('name', 'Name of Show', ['class' => 'col-sm-3 control-label']) !!}
                                <div class="col-sm-9">
                                    {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required','placeholder'=>'Required']) !!}
                                    <small class="text-danger">{{ $errors->first('name') }}</small>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('playwrite') ? ' has-error' : '' }}">
                                {!! Form::label('playwrite', 'Playwrite', ['class' => 'col-sm-3 control-label']) !!}
                                <div class="col-sm-9">
                                    {!! Form::text('playwrite', null, ['class' => 'form-control']) !!}
                                    <small class="text-danger">{{ $errors->first('playwrite') }}</small>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('publisher') ? ' has-error' : '' }}">
                                {!! Form::label('publisher', 'Publisher', ['class' => 'col-sm-3 control-label']) !!}
                                <div class="col-sm-9">
                                    {!! Form::select('publisher', $publishers, null, ['class' => 'form-control', 'placeholder' => '']) !!}
                                    <small class="text-danger">{{ $errors->first('publisher') }}</small>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('venue_id') ? ' has-error' : '' }}">

                                {!! Form::label('venue_id', 'Venue', ['class' => 'col-sm-3 control-label']) !!}
                                <div class="col-sm-9">
                                    {!! Form::select('venue_id', $venues, null, ['class' => 'form-control']) !!}
                                    <small class="text-danger">{{ $errors->first('venue_id') }}</small>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('showtype') ? ' has-error' : '' }}">
                                {!! Form::label('showtype', 'Type of Show', ['class' => 'col-sm-3 control-label']) !!}
                                <div class="col-sm-9">
                                    {!! Form::select('showtype', $options, $selected_value, ['class' => 'form-control', 'required' => 'required', 'multiple']) !!}
                                    <small class="text-danger">{{ $errors->first('type') }}</small>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('royality') ? ' has-error' : '' }}">
                                {!! Form::label('royality', 'Royality', ['class' => 'col-sm-3 control-label']) !!}
                                <div class="col-sm-9">
                                    {!! Form::number('royality', null, ['class' => 'form-control']) !!}
                                    <small class="text-danger">{{ $errors->first('royality') }}</small>
                                </div>


                            <div class="form-group{{ $errors->has('schoolyear_id') ? ' has-error' : '' }}">
                                {!! Form::label('schoolyear_id', 'School Year', ['class' => 'col-sm-3 control-label']) !!}
                                <div class="col-sm-9">
                                    {!! Form::select('schoolyear_id', $options, $selected_value, ['class' => 'form-control', 'required' => 'required', 'multiple']) !!}
                                    <small class="text-danger">{{ $errors->first('schoolyear_id') }}</small>
                                </div>
                            </div>


                            <h3>Show Dates</h3>

                            <div class="form-group{{ $errors->has('showstartdate') ? ' has-error' : '' }}">
                                {!! Form::label('showstartdate', 'Start Date', ['class' => 'col-sm-3 control-label']) !!}
                                <div class="col-sm-9">
                                    {!! Form::date('showstartdate', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                    <small class="text-danger">{{ $errors->first('showstartdate') }}</small>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('showenddate') ? ' has-error' : '' }}">
                                {!! Form::label('showenddate', 'End Date', ['class' => 'col-sm-3 control-label']) !!}
                                <div class="col-sm-9">
                                    {!! Form::date('showenddate', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                    <small class="text-danger">{{ $errors->first('showenddate') }}</small>
                                </div>
                            </div>
                          </div>

                          <h3>Rehearsal Dates</h3>

                          <div class="form-group{{ $errors->has('rehearstartdate') ? ' has-error' : '' }}">
                              {!! Form::label('rehearstartdate', 'Start Date', ['class' => 'col-sm-3 control-label']) !!}
                              <div class="col-sm-9">
                                  {!! Form::date('rehearstartdate', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                  <small class="text-danger">{{ $errors->first('rehearstartdate') }}</small>
                              </div>
                          </div>

                          <div class="form-group{{ $errors->has('rehearenddate') ? ' has-error' : '' }}">
                              {!! Form::label('rehearenddate', 'End Date', ['class' => 'col-sm-3 control-label']) !!}
                              <div class="col-sm-9">
                                  {!! Form::date('rehearenddate', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                  <small class="text-danger">{{ $errors->first('rehearenddate') }}</small>
                              </div>
                          </div>


                          </span>
                          <hr>

                          <div class="form-group{{ $errors->has('note') ? ' has-error' : '' }}">
                              {!! Form::label('note', 'Note') !!}
                              {!! Form::textarea('note', null, ['class' => 'form-control', 'required' => 'required']) !!}
                              <small class="text-danger">{{ $errors->first('note') }}</small>
                          </div>

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
                    <h3>Show List</h3>
                    <table class="table">
                      <thead>
                            <tr>
                              <th>Show Name</th>
                              <th>Show Date</th>
                              <th>Rehearsal Start Date</th>
                              <th>Show End Date</th>
                              <th>Edit/Delete</th>
                            </tr>
                      </thead>
                            <tbody id="show-states">
                              @if ($shows)

                                    @foreach ($shows as $show)

                                        <tr>
                                          <td>{{ $show ->name }} </td>
                                          <td>{{ $show ->date }}</td>
                                          <td>{{ $show ->rehearstartdate }}</td>
                                          <td>{{ $show ->showenddate }}</td>
                                          <td>

                                          <a href="/show/{{ $show ->id }}/edit" class="btn btn-sm btn-primary">Edit</button>
                                          <a href="/show/{{ $show ->id }}" class="btn btn-sm btn-danger btn-primary" >Delete</button>
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

<script type="text/javascript">
    $(function () {
        $('#datetimepicker1').datetimepicker();
        $('#datetimepicker2').datetimepicker({
            useCurrent: false //Important! See issue #1075
        });
        $("#datetimepicker1").on("dp.change", function (e) {
            $('#datetimepicker2').data("DateTimePicker").minDate(e.date);
        });
        $("#datetimepicker2").on("dp.change", function (e) {
            $('#datetimepicker1').data("DateTimePicker").maxDate(e.date);
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $('#datetimepicker3').datetimepicker();
        $('#datetimepicker4').datetimepicker({
            useCurrent: false //Important! See issue #1075
        });
        $("#datetimepicker3").on("dp.change", function (e) {
            $('#datetimepicker4').data("DateTimePicker").minDate(e.date);
        });
        $("#datetimepicker4").on("dp.change", function (e) {
            $('#datetimepicker3').data("DateTimePicker").maxDate(e.date);
        });
    });
</script>
        @endsection
