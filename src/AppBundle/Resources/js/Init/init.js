$(document).ready(function() {
  $(function () {
    $('[data-toggle="tooltip"]').tooltip({
      trigger: 'hover'
    });
  });

  $(document).on("click", ".notif-check", function() {
    $.ajax({
      url: $('#notif1').attr('data-route'), 
      type: 'GET',
      success: function(success) {
        $('.notif-success').html( success );
        $('button.notif-check').removeClass('notif-check').addClass('notif-check-close');
        $('.notification').show();
      }
    });
  });
      
  $(document).on('click', '.notif-check-close', function() {
    $('button.notif-check-close').removeClass('notif-check-close').addClass('notif-check');
    $('.notification').hide();
  });

  $(document).on("click", "#notif-activated i", function() {
    $.ajax({
      url: $('#notif1').attr('data-route-active'),
      type: 'POST',
      data: { id : $(this).attr('data-id') },
      success: function(success) {
        $('.notif-success').html( success );
        $('.notification').show();
      }
    });
  });

  $(document).on("click", "#markAll", function() {
    $.ajax({
      url: $('#notif1').attr('data-route-all'),
      type: 'POST',
      success: function(success) {
        $('.notif-success').html( success );
        $('.notification').show();
      }
    });
  });
  
  $('#search-form').click(function(){
    if (!$('input#search').val().length === 0) {
      $('form').submit();  
    }
  });
  
  $('form ul li').prepend('<i class="fa fa-exclamation-circle"></i> ');

  $('input#search').focus(function() {
    $('.navbar-brand').addClass('collapse-search');
  });
  
  $('input#search').focusout(function() {
    $('.navbar-brand').removeClass('collapse-search');
  });
});