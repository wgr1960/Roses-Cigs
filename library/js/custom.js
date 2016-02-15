/*******************************
CUSTOM CAROUSEL
*******************************/
$(document).ready(function() {
    $('#slides').superslides({
      play: 5000,
      pagination: true
    });
    $('#video-slides').superslides({
      play: 5000,
      pagination: true
    });
});


/*******************************
CUSTOM JUMPER
*******************************/
var scrollValue = 0;
$(function() {
	$("#menu-nav-links > li > a").addClass('jumper');
	

	$(".jumper").on("click", function( e ) {

        e.preventDefault();
        var clickedLink = $(this).html();

        if(clickedLink == "News") {
        	scrollValue = 170;
        }
        else if(clickedLink == "Gigs") {
        	scrollValue = 255;
        }
        else if(clickedLink == "About") {
        	scrollValue = 340;
        }
        else if(clickedLink == "Photos") {
        	scrollValue = 425;
        }
        else if(clickedLink == "Videos") {
        	scrollValue = 510;
        }
        else if(clickedLink == "Music") {
        	scrollValue = 595;
        }
        else if(clickedLink == "Contact") {
        	scrollValue = 680;
        }

        $("body, html").animate({ 
           scrollTop: $( $(this).attr('href') ).offset().top 
        }, scrollValue);
    });
});

$('.menu-btn').on('click', function() {
    $(this).toggleClass('animate');
    $('#mobile-menu').fadeToggle(500);
});

$('.mobile-link').on('click', function() {
    $('#mobile-menu').fadeOut(400);
    $('.menu-btn').toggleClass('animate');
});