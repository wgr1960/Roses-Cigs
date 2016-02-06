jQuery.ajax({
	url: 'http://api.songkick.com/api/3.0/artists/8552809/calendar.json?apikey=nb73Yx2o9AEEmBh7',
	type: 'GET',
	dataType: 'json',
	success: function(data) {
		alert(data.resultsPage.results.event.length);
	}
});