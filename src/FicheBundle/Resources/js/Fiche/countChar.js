$(document).ready(function() {
	$('form textarea').on("input", function(){
        var maxlength = $(this).attr("maxlength");
        var currentLength = $(this).val().length;
        if( currentLength >= maxlength ){
            $('.countChar').html(" Vous avez atteint la limite de caractères.").addClass('text-danger');
            $('.countChar').prepend('<i class="fa fa-exclamation-circle"></i> ');
        } else {
            $('.countChar').html(maxlength - currentLength + " caractères restants").removeClass('text-danger');
        }
    });
});