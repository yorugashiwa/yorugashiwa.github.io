(function($) {
    $(function () {
        $('#gnav_btn').on('click', function() {
            $('body').toggleClass('open');
        });
    });
    //h1
    $(window).on('load scroll', function() {
    var scrollPos = $('html').scrollTop();
    if ( scrollPos > 100 ) {
        $('header').addClass('slim');
    } else {
        $('header').removeClass('slim');
    }
});
//nav
$(function(){
    $('#hamburger').on('click', function() {
      $(this).toggleClass('active');
      return false;
    });
  });

})(jQuery);
Pace.on('done', 
    function(){
    $('.wrap').fadeIn(1000);
    /*footer固定*/
    var f = $('footer');
    $('.wrap').css('padding-bottom',f.height()+200);
});



$(function(){
    $('a[href^="#"]').click(function(){
      var speed = 500;
      var href= $(this).attr("href");
      var target = $(href == "#" || href == "" ? 'html' : href);
      var position = target.offset().top  -100;
      $("html, body").animate({scrollTop:position}, speed, "swing");
      return false;
    });
  });


  

