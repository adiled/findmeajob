$(document).ready(function(){

  // Login Click
  $('li.login').on('click', function(){
    $('.login.dimmer').dimmer('show')
  })

  // Blanket Dimmer
  $BLANKET = $('.blanket.dimmer')
  $BLANKET.dimmer('setting', {
    onHide: function(){
      $BLANKET.empty()
    }
  })

  $('.listing .item').on('click', function(e){

    var listing_id = e.delegateTarget.dataset.id
    
    $BLANKET.dimmer('show')

    $.get('/listing/'+listing_id, function(data){
      var $data = $(data)

      $BLANKET.html($data.find('section.single-listing'))
    })

    
  
  })


})