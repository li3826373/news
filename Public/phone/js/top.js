$(function() {
  var num = 1
  $('.navbar-toggle').click(function() {
    if (num == 1) {
      num = 0
      $('.navbar-toggle').css('transform','rotate(90deg)')
    $('.navbar-collapse').css({'left':'15px','max-height':'380px','height':'380px'})
    } else {
      num = 1
        $('.navbar-toggle').css('transform','rotate(0deg)')
      $('.navbar-collapse').css({'left':'-200px','max-height':'380px','height':'380px'})
    }
  })
})
