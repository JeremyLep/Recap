$(document).ready(function() {
  $('#fiche-fav').click(function() {
    
    $.ajax({
      url: $(this).attr('data-route'),
      type: 'POST',
      data: { fiche : $(this).attr('data-id') },
      success: function(success) {
        if (success.add) {
          $('#fiche-fav').removeClass('fa-star-o grey').addClass('fa-star yellow');
        } 
        if (success.delete) {
          $('#fiche-fav').removeClass('fa-star yellow').addClass('fa-star-o grey');
        }
      }
    });
  });
});