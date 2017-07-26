
var form_dropbox;

function hrefPopup(el, container){
  $(el).on('click', function(e){

    e.preventDefault()
    var url = $(e.delegateTarget).attr('href')

    $BLANKET.dimmer('show')

    ajaxGet(url, container)

  })
}

function ajaxFormSubmit($container, successMsg, errMsg) {

  $container.find('form').submit(function(e){
    e.preventDefault()

    var url = $(this).attr('action')
    var method = $(this).attr('method')
    var data = $(this).serialize()

    $.ajax({
      url: url,
      type: method,
      dataType: "json",
      data: data,
      statusCode: {
        422: function(res){
          //console.log(res.responseJSON)

          // for (var key in res.responseJSON) {

          // }

          $container.find('.message').html(errMsg).addClass('visible negative')
        }
      },
      success: function(res, req){
        $container.find('.message').html(successMsg).addClass('visible positive')
      },
      error: function(req,res,err){
        console.log(err)
        $container.find('.message').html(errMsg).addClass('visible negative')
      }
    })
  })

}

function ajaxGet(url, container){

  $.ajax({
    url: url,
    type: 'GET',
    statusCode: {
      401: function(res) {
        ajaxGet('/login', 'section.login')
      }
    },
    success: function(data){

      var $data = $(data)
      $BLANKET.html($data.find(container))

      $form = $(container).find('form');

      if($form) {

        ajaxFormSubmit($BLANKET, 'Successfull!', 'There was a problem!')
        
        if($form.hasClass('dropzone') ){
          form_dropbox = new Dropzone($form.get(0))
        }

      }

    }



  })
}

$(document).ready(function(){


  // Create common dimmer //

  $BLANKET = $('.blanket.dimmer')
  $BLANKET.dimmer('setting', {
    onHide: function(){
      $BLANKET.empty()

      if(typeof form_dropbox != undefined && form_dropbox != null)  
        form_dropbox.destroy()
    }
  })


  // Create <a> click bindings for popups //

  hrefPopup('nav li.login a, nav li.register a', 'section')
  hrefPopup('div.post-ad a.button', 'section.single-listing')


  // Handle listing thumbnail click //

  $('.listing .item').on('click', function(e){

    var listing_id = e.delegateTarget.dataset.id
    
    $BLANKET.dimmer('show')

    // Edit listing

    if($(e.target).hasClass('pencil')) {
      ajaxGet('/listing/'+listing_id+'/edit', 'section.single-listing')
    }

    // Delete listing

    else if($(e.target).hasClass('delete')) {
      $.post('/listing/'+listing_id+'/delete', function(data){
        var $data = $(data)
        $BLANKET.html($data.find('section.single-listing'))
      })
    }

    // Get listing

    else {

      $.get('/listing/'+listing_id, function(data){
        var $data = $(data)
        $BLANKET.html($data.find('section.single-listing'))

        // Listing Edit within popup

        $('section.single-listing').find('.right .button').on('click', function(e){
          e.preventDefault()
          var url = $(e.delegateTarget).attr('href')
          ajaxGet(url, 'section')
        })
      })
    }
  })

})