
(function ($) {
    $('button.search-submit').on('click', function(event) {
      event.preventDefault();
      $('.search-field').toggle('slow');
    });
    $(document).on('click', function(event) {
    if(! $('.search-field').is(event.target) ) {
      $('.search-field').hide('slow');
    }
  });
    $(window).on('scroll', function() {
      var scrollPosition = $(window).scrollTop();
      var heroHeight = $('.hero-banner').height();
      if(scrollPosition > heroHeight) {
        $('header').addClass('active');
      } else {
        $('header').removeClass('active');
      }
    })
})(jQuery);