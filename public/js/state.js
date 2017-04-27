$(document).ready(function() {

  $('#search').keyup(function(event) {
    /* Act on the event */
    var search = $('search').val();

    $.$.ajax({
      url: '/state',
      type: 'get',
      data: {search:search''}
      success:(data){
        if(!data.error){

          $('#search').html(data);
        }
      }
    })
    .done(function() {
      console.log("success");
    })
    .fail(function() {
      console.log("error");
    })
    .always(function() {
      console.log("complete");
    });

  });
});
