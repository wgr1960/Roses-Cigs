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

