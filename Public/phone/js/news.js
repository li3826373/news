$(function() {
  $('.top-tap').find('li').click(function() {
    var num = $(this).index()
    $('.top-tap').find('li').removeClass('active')
    $(this).addClass('active')
    $('.new-content').find('.news').hide();
    $('.new-content').find('.news').eq(num).show();
  })
})
