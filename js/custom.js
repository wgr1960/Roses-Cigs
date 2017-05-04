var monthNames = ["January", "February", "March", "April", "May", "June",
  "July", "August", "September", "October", "November", "December"];

var upcomingHTMLTable	= "<table class='table gigs-list'>";

function formatDate(unformattedDate) {
	var d = new Date(unformattedDate);
	return monthNames[d.getMonth()] + " " + (d.getDate() + 1) + ", " + d.getFullYear();
}

(function() {
	var pageLinks = document.getElementsByClassName("page-numbers");
	var i;
	for(i = 0; i < pageLinks.length; i++) {
		var oldLink = pageLinks[i].href;
		pageLinks[i].href = oldLink + "#primary"; 
	}

	fetch("http://api.songkick.com/api/3.0/artists/8552809/calendar.json?apikey=nb73Yx2o9AEEmBh7", {method: "GET"})
		.then(function(resp) {
			return resp.json();
		})
		.then(function(data) {
			var upcomingEvents = data;
			var eventCount = upcomingEvents.resultsPage.results.event.length;
			upcomingHTMLTable += "<tbody>";
			for(var i = 0; i < eventCount; i++) {
				var venueLocation = upcomingEvents.resultsPage.results.event[i].location.city;
				var venueName 	  = upcomingEvents.resultsPage.results.event[i].venue.displayName;
				var venueTickets  = upcomingEvents.resultsPage.results.event[i].uri;
				var unformattedDate = upcomingEvents.resultsPage.results.event[i].start.date;
				var formattedDate 	= formatDate(unformattedDate);

				upcomingHTMLTable += "<tr><td>" + formattedDate + "</td><td>" + venueName + "</td><td>" + venueLocation + "</td><td><a href='" + venueTickets + "' target='_blank'>Tickets</a></td>"; 
			}
			upcomingHTMLTable += "</tbody></div>";
			var targetDiv = document.getElementById('gigs').getElementsByClassName("container")[0];
			targetDiv.innerHTML = upcomingHTMLTable;
		})
		.catch(function(err) {

		});
})();