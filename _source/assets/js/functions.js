// sticky top nav

$(document).ready(function() {
  var navOffset = $("nav").offset().top;
  $("nav").wrap('<div class="nav-placeholder"></div>');
  $(".nav-placeholder").height($("nav").outerHeight());
  $(window).scroll(function() {
      var scrollPos = $(window).scrollTop();
      if (scrollPos >= navOffset) {
        $("nav").addClass("fixed");
      } else {
        $("nav").removeClass("fixed");
      }
  });
});

// contact form

$(function(){
  $('.contact-form .input-group input').focusout(function(){
    var text_val = $(this).val();
    if(text_val === "") {
      $(this).removeClass('has-value');
    } else {
      $(this).addClass('has-value');
    }
  });
});

// back to top

$(document).ready(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) { $(".scroll-to-top").fadeIn() }
        else { $(".scroll-to-top").fadeOut() }
    });
    $(".scroll-to-top").click(function() {
        $("html, body").animate({ scrollTop: 0 }, 800);
        return false
    })
});
