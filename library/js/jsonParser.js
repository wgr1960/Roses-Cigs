var upcomingHTMLTable	= "<div class='gigs-container'>";
var pastHTMLTable		= "<div class='gigs-container'>";

function formatDate(unformattedDate) {
	var d = moment(unformattedDate, "YYYY-MM-DD");
	return d.format("MMMM Do, YYYY");
}

jQuery.ajax({
	url: 'http://api.songkick.com/api/3.0/artists/8552809/calendar.json?apikey=nb73Yx2o9AEEmBh7',
	type: 'GET',
	dataType: 'json',
	success: function(data) {
		var upcomingEvents = data;
		var eventCount = upcomingEvents.resultsPage.results.event.length;
		for(var i = 0; i < eventCount; i++) {
			var venueLocation = upcomingEvents.resultsPage.results.event[i].location.city;
			var venueName 	  = upcomingEvents.resultsPage.results.event[i].venue.displayName;
			var venueTickets  = upcomingEvents.resultsPage.results.event[i].uri;

			var unformattedDate = upcomingEvents.resultsPage.results.event[i].start.date;
			var formattedDate 	= formatDate(unformattedDate);

			upcomingHTMLTable 	+= "<div id='row'><div class='col date'>"+formattedDate+"</div><div class='col venue'>"+venueName+"</div><div class='col city'>"+venueLocation+"</div><div class='col tickets'><a href='"+venueTickets+"' class='action-button shadow animate yellow' target='_blank'>Tickets</a></div></div>";
		}
		upcomingHTMLTable += "</div>";
		document.getElementById("tab-1").innerHTML = upcomingHTMLTable;
	}
});

jQuery.ajax({
	url: 'http://api.songkick.com/api/3.0/artists/8552809/gigography.json?apikey=nb73Yx2o9AEEmBh7',
	type: 'GET',
	dataType: 'json',
	success: function(data) {
		pastEvents = data;
		var eventCount = pastEvents.resultsPage.results.event.length;
		for(var i = 0; i < eventCount; i++) {
			var venueLocation = pastEvents.resultsPage.results.event[i].location.city;
			var venueName 	  = pastEvents.resultsPage.results.event[i].venue.displayName;

			var unformattedDate = pastEvents.resultsPage.results.event[i].start.date;
			var formattedDate 	= formatDate(unformattedDate);

			pastHTMLTable += 
			"<div id='row'><div class='col date'>"+formattedDate+"</div><div class='col venue'>"+venueName+"</div><div class='col city'>"+venueLocation+"</div></div>";
		}
		pastHTMLTable += "</div>";
		document.getElementById("tab-2").innerHTML = pastHTMLTable;
	}
});


$(document).ready(function(){
	
	$('ul.tabs li').click(function(){
		var tab_id = $(this).attr('data-tab');
		console.log(tab_id);
		$('ul.tabs li').removeClass('current');
		$('.tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	})
});