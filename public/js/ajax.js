$(document).ready(function() {

  $('#add-button').click(function() {

    var data = $('#add-form').serializeArray();

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.$.ajax({
      url: '/save',
      type: 'POST',
      dataType: '',
      data: data,
      success: function(response) {
        $('add-form')[0].reset();
      },
      error: function() {

      }
    })

  });

})
