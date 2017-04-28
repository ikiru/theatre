$(document).ready(function() {

    $('#add-donor-form').submit(function(evt) {
      /* Act on the event */
      evt.preventDefault();

      var postData = $(this).serialize();
      var url = $(this).attr('action');

      $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });

      $.post(url, postData, function(donor_data) {
        /*optional stuff to do after success */
        $("#show-donor").html(donor_data);
      });

    });

});
