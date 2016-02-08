/*******************************
CUSTOM CAROUSEL
*******************************/

var currentSlide = 1;

function pageSlide(clickedID) {
	var slide = "slide" + currentSlide;

	if(clickedID == 'slide-right') {
		document.getElementById(slide).style.display = "none";
		if(currentSlide == 3) {
			currentSlide = 1;
		}
		else {
			currentSlide += 1;
		}
	}
	else if(clickedID == 'slide-left') {
		document.getElementById(slide).style.display = "none";
		if(currentSlide == 1) {
			currentSlide = 3;
		}
		else {
			currentSlide -= 1;
		}
	}
	slide = "slide" + currentSlide;
	console.log(slide);	
	document.getElementById(slide).style.display = "inline-block";
}

//setInterval(function() { pageSlide('slide-right') }, 20000);

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

