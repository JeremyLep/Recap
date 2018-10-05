class InfiniteScroll
{
  constructor(selector) {
    this.selectorNode = $('#' + selector);
    this.items        = '.' + selector;
    this.flag         = true;

    var self = this;
    
    $('#loading').hide();

    $('#content').on('scroll', function() {
      if ($('#content').height() + $('#content').scrollTop() >= $('#content div').height()-4 || $('#content div').height() <= $('#content').height()) {
        $('#loading').show();

        if (self.flag) {
          self.lock();
          self.ajaxCall();
        }
      }
    });

    if ($('#content').height() > $('#content div').height()) {
      this.ajaxCall();
    }
  }

  ajaxCall() {
    self = this;

    $.ajax({
      type: "POST",
      url: self.selectorNode.attr('data-route') + "/" + self.getOffset(),
      data:  {
        limit: self.selectorNode.attr('data-limit')
      },
      success: function(success) {
        $('#loading').hide();
 
        if (success === '') {
          $('#content').unbind('scroll');
          self.lock();
        } else {
          self.selectorNode.find(self.items).last().after(success);
          self.unlock();         
        }
      }
    });
  }

  lock() {
    this.flag = false;
  }

  unlock() {
    this.flag = true;
  }

  getOffset() {
    return this.selectorNode.find(self.items).length;
  }
}