$(document).ready(function() {

  $('#search').keyup(function(event) {
    /* Act on the event */
    var search = $('search').val();

    $.ajax({
      url: '/state',
      type: 'get',
      data: {search:search},
      success:(data){
        if(!response.error){

          $('#search').html(data);
        }
      }
    })
