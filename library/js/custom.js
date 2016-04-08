/*******************************
CUSTOM CAROUSEL
*******************************/
$(document).ready(function() {
    $('#slides').superslides({
      play: 5000,
      pagination: true
    });
    $('#video-slides').superslides({
      pagination: true
    });
});


/*******************************
CUSTOM JUMPER
*******************************/
var scrollValue = 0;
$(function() {
    $("#menu-nav-links > li > a").addClass('jumper');
    $("#menu-nav-links > li:nth-child(6) > a").attr('target', '_blank');
    $("#menu-nav-links > li:nth-child(6) > a").removeClass('jumper');

	$(".jumper").on("click", function( e ) {

        e.preventDefault();
        var clickedLink = $(this).html();

        if(clickedLink == "Music") {
            scrollValue = 170;
        }
        else if(clickedLink == "News") {
        	scrollValue = 255;
        }
        else if(clickedLink == "Gigs") {
        	scrollValue = 340;
        }
        else if(clickedLink == "About") {
        	scrollValue = 425;
        }
        else if(clickedLink == "Photos") {
        	scrollValue = 510;
        }
        else if(clickedLink == "Videos") {
        	scrollValue = 595;
        }
        else if(clickedLink == "Music") {
        	scrollValue = 680;
        }
        else if(clickedLink == "Contact") {
        	scrollValue = 765;
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