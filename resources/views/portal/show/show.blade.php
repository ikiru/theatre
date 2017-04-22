@extends('layouts.app')
@section('content')
  {{-- TODO :bulid Show model--}}
  {{-- TODO :get show length, --}}
  {{-- TODO :get rehearsal length
  {{-- TODO: Ajax link Show to Venue --}}
  {{-- TODO: Publisher table --}}
  {{-- FIXME: Calendars Show dates --}}
  {{-- FIXME: Calendars Rhearsal dates --}}

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

                            {!! Form::label('name','Name of Show') !!}
                            {!! Form::text('name',null,['class'=>'form-control', 'placeholder'=>'' ]); !!}
                            {!! Form::label('playwrite','Playwrite') !!}
                            {!! Form::text('playwrite',null,['class'=>'form-control', 'placeholder'=>'' ]); !!}
                            {!! Form::label('publisher','Publisher') !!}
                            {!! Form::text('publisher',null,['class'=>'form-control', 'placeholder'=>'' ]); !!}
                            {!! Form::label('royality','Royalities') !!}
                            {!! Form::number('royality',null,['class'=>'form-control', 'placeholder'=>'' ]); !!}
                            {!! Form::label('schoolyear_id','School Year') !!}
                            {{-- {!! Form::dropdown('schoolyear_id',null,['class'=>'form-control', 'placeholder'=>'' ]); !!} --}}

                            <h3>Show Dates</h3>
                          <div class="row">
                            <div class="col-sm-3 ">
                          </div>
                          </div>
                            {{-- linked pickers --}}
                            {!! Form::label('showstartdate','Show Start Date') !!}
                            <div class='input-group date' id='datetimepicker1'>
                            {!! Form::date('showstartdate',null,['class'=>'form-control', 'placeholder'=>'' ]); !!}
                            <span class="input-group-addon">
                              <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                          </div>
                            {!! Form::label('showenddate','Show End Date') !!}
                          <div class='input-group date' id='datetimepicker2'>
                            {!! Form::date('showenddate',null,['class'=>'form-control', 'placeholder'=>'' ]); !!}
                            <span class="input-group-addon">
                              <span class="glyphicon glyphicon-calendar"></span>
                          </span>
                        </div>
                          </div>


                          <h3>Rehearsal Dates</h3>



                          {{-- linked pickers --}}

                          {!! Form::label('rehearstartdate','Rehearsal Start Date') !!}
                          <div class='input-group date' id='datetimepicker3'>
                            {!! Form::date('rehearstartdate',null,['class'=>'form-control', 'placeholder'=>'' ]); !!}
                          <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                          </span>
                        </div>

                        {!! Form::label('rehearenddate','Rehearsal End Date') !!}
                        <div class='input-group date' id='datetimepicker4'>
                          {!! Form::date('rehearenddate',null,['class'=>'form-control', 'placeholder'=>'' ]); !!}
                          <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                      </div>
                          </span>
                          <hr>
                        {!! Form::textarea('notes',null,['class'=>'form-control', 'placeholder'=>'Notes' ]); !!}

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
{{--
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
                            </tr>
                      </thead>
                            <tbody id="show-states">
                              @if ($show)

                                    @foreach ($show as $show)

                                        <tr>
                                          <td>{{ $show ->name }} </td>
                                          <td>{{ $show ->date }}</td>
                                          <td>{{ $show ->rehearsal_start }}</td>

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

              </div> --}}


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
