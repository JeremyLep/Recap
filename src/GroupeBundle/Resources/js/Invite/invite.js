$(document).ready(function(){
  $(document).on("click", "#confirm", function() {
    $.ajax({
      url: $('#membre').attr('data-route'),
      type: 'POST',
      data: { id : $(this).attr('data-invite'), confirm : $(this).attr('data-confirm')},
      success: function(success) {
        $('html').html( success );
      }
    });
  });
});