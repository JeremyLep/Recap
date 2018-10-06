$(document).ready(function() {  
  $('.rating').on('click', function() {
    var rate    = $(this).attr('data-rate');
    var route   = $(this).parent().attr('data-route');
    var ficheId = $(this).parent().attr('data-id');

    $.ajax({
      url: route,
      type: "POST",
      data: { rate : rate, ficheId : ficheId },
      success: function(rating) {
        if (typeof rating['message'] === 'undefined') {
          $('#rating').html(rating);
          $('.rating-error').html('<i class="fa fa-check-circle"></i> Votre vote à été validé').addClass('text-success');  
        } else {
          $('.rating-error').html(rating['message']).addClass('text-danger'); 
        }
      }
    });
  });

  $('.rating').hover(function() {
    var count = $(this).attr('data-rate');

    $(this).removeClass('fa-star-o').addClass('fa-star'); 

    for (var i = 1; i <= 5; i++) {

      if (i <= count) {
        var rating = $('#stars :nth-child('+i+')');
        rating.removeClass('fa-star-o').addClass('fa-star');    
      } else {
        var rating = $('#stars :nth-child('+i+')');
        rating.removeClass('fa-star').addClass('fa-star-o');
      }
    }
  });

  $('.rating').mouseleave(function() {
    var count = $(this).parent().attr('data-avg');;

    for (var i = 1; i <= 5; i++) {

      if (i <= count) {
        var rating = $('#stars :nth-child('+i+')');
        rating.removeClass('fa-star-o').addClass('fa-star');    
      } else {
        var rating = $('#stars :nth-child('+i+')');
        rating.removeClass('fa-star').addClass('fa-star-o');
      }
    }
  });
});