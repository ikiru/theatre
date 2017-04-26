$(document).ready(function() {

  $('#add-button').click(function() {

    var data = $('#add-form').serializeArray();

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
      url: '/donor',
      type: 'post',
      data: data,
      success: function(response) {
        $('#add-form')[0].reset();
        $('tbody').prepend(  '<tr><td id="firstname-'+response.id+'">'+response.firstname+''+response.lastname+'</td><td id="lastname-'+response.id+'">'+response.phone+'</td><td id="business-'+response.id+'">'+response.business_name+'</td><td><button class="btn btn-sm btn-primary"data-toggle="modal" data-target="#edit-modal" data-id="'+response.id+'" data-firstname="'+response.firstname+'"data-lastname="'+response.lastname+'" data-business="'+response.business_name+'">Edit</button> <button class="btn btn-sm btn-danger btn-primary" data-toggle="modal" data-target="#delete-modal">Delete</button><td></td></tr>')
      },
      error: function() {

      }
    })

  });

  $('#edit-modal').on('shown.bs.modal',function(e){

    $('#edit-form input[name=firstname]').val($(e.relatedTarget).attr('data-firstname'));
    $('#edit-form input[name=lastname]').val($(e.relatedTarget).attr('data-lastname'));
    $('#edit-form input[name=business_name]').val($(e.relatedTarget).attr('data-business'));
    $('#edit-form input[name=phone]').val($(e.relatedTarget).attr('data-phone'));

  })

})
