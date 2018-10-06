$(document).ready(function(){
  var currentFilesize = parseInt($('.countSize').attr('data-size'));
  var maxFilesize = $('.countSize').attr('data-maxSize');

  $('#recap_ressource_routeDoc').bind('change', function() {
    if (typeof this.files[0] == "undefined") {
      $('.countSize').html(convertFilesize(currentFilesize) + ' / ' + maxFilesize ).removeClass('text-danger text-success');
    } else {
      var newSize = this.files[0].size + currentFilesize;  
    }

    if (newSize < 1610000000) {
      $('.countSize').html('<i class="fa fa-check-circle"></i> ' + convertFilesize(newSize) + ' / ' + maxFilesize ).addClass('text-success').removeClass('text-danger');
    } else if(typeof newSize !== "undefined") {
      $('.countSize').html('<i class="fa fa-exclamation-circle"></i> ' + convertFilesize(newSize) + ' / ' + maxFilesize ).removeClass('text-success').addClass('text-danger');
    }
  });

  function convertFilesize(size) 
  {
    if (size >= 1073741824) {
      size = size / 1073741824;
      size = size.toFixed(2) + ' GB'
    } else if (size >= 1048576) {
      size = size / 1048576;
      size = size.toFixed(2) + ' MB'
    } else if (size >= 1024) {
      size = size / 1024;
      size = size.toFixed(2) + ' KB'
    } else if (size > 1) {
      size = size + ' B';
    } else if (size == 1) {
      size = size + ' B';
    } else {
      size = '0 B';
    }
    
    return size;
  }
});