$(document).ready(function() {
	$('.btn-suppr').each(function () {
    	var $this = $(this);
        $this.on("click", function() {
          var route = $(this).attr('data-route');
          $('#routeModal').val(route);
        });
    });
});