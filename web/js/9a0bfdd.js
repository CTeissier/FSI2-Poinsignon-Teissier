
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
$('.navbar-nav a').click(function(e){
    var url = $(this).attr('href');
    if (url.substr(0, 1) != '#')
    {
        return true;
    }
   
    e.preventDefault();
    $('html, body').stop().animate({
        scrollTop: $(url).offset().top
    }, 500);
});


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