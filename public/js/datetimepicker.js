$('#conflict').daterangepicker({
    "timePicker": true,
    "timePickerIncrement": 15,
    "parentEl": "conflict",
    "startDate": "04/25/2017",
    "endDate": "05/01/2017"
}, function(start, end, label) {
  console.log("New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')");
});
