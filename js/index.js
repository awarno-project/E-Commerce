$('.share').click(function(){
    $('.share-box').toggleClass('show');
})

$('.permission').click(function(){
    $('.new-address').removeClass('show');
    $('.add-address').addClass('show');

  })
  $('.add-address').click(function(){
    $('.new-address').addClass('show');
    $('.add-address').removeClass('show');
  })


  $('.permission').click(function(){
    $('.password-change-popup').removeClass('show');

  })
  $('.change-password').click(function(){
    $('.password-change-popup').addClass('show');
  })