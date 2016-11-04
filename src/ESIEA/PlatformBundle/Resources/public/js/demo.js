
function collapseNavbar() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
}

$(window).scroll(collapseNavbar);
$(document).ready(collapseNavbar);

// Scrolling
$('.navbar-nav a').click(function(e){}); {
    var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
    event.preventDefault();
};


/*
var Demo = {
   init: function()
   {
       $('.toggle).click(Demo.toggleNavbar);
   },
   
   toggleNavbar: function()
   {
       // blabla
   }
};*/