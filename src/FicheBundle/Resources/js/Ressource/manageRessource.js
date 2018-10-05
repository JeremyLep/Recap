class ManageRessource
{
  constructor(selector) {
    this.selector = selector;
    this.route    = selector.attr('data-route-view');
    
    var self = this;

    $("object#object").css('height', '0');
    
    $(this.selector).on('click', '.btn-suppr', function() {
        $('#routeModal').val($(this).attr('data-route'));
        $('#delete-ressource').submit();
    });

    this.selector.on('click', '#openRessource', function() {
      self.ajaxCall($(this).attr('data-ressource'), $(this).attr('data-title'));
    });

    $("#close").on('click', function() {
      $("#overlayRessource").hide();
      $("#office").html('');
      $("embed#file").attr('src', '');
      $("#image").attr('src', '');
      $("object#object").attr('data', '');
      $("object#object").css('height', '0');
      $("#office").css('height', '0');
      $("#image").css('height', '0');
    });
  }

  ajaxCall(ressource, title) {
    var self = this;

    $.ajax({
      url: self.route,
      type: "POST",
      data: { fileName : ressource },
      success: function(ressource) {
        $("#titreModal").html(title);
        if (ressource.type == "video") {
          $("#video").attr("src", ressource.content);
          var evt = document.createEvent("MouseEvents");
          evt.initMouseEvent("click", true, true, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null);
          var a = document.getElementById("trigger"); 
          a.dispatchEvent(evt);
        }
        if (ressource.type == "file") {
          $("#overlayRessource").show();
          $("object#object").css('height', '100%');
          $("embed#file").attr('src', ressource.content);
          $("object#object").attr('data', ressource.content);
        }
        if (ressource.type == "office") {
          $("#overlayRessource").show();
          $("#office").css('height', '100%');
          $("#office").html(ressource.content);
        }
        if (ressource.type == "image") {
          $("#overlayRessource").show();
          $("#image").css('height', '100%');
          $("#image").attr('src', ressource.content);
        }
      }
    });
  }
}