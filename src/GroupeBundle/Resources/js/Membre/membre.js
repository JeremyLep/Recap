$(document).ready(function() {
	$('.update-membre').on('click', function () {
	    var button = $(event.relatedTarget);
	    var recipient = $(this).attr('data-name');
	    var modal = $('#modif');
	    modal.find('.modal-title').text('Réglage du membre ' + recipient + ' pour ce groupe');
	    $('#membre_id').attr('value', $(this).attr('data-id'));
	});
});