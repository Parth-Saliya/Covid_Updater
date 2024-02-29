<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
		integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
		crossorigin="anonymous"></script>
	<title>Chart</title>

</head>

<body>
	<div id="total_active"></div>
	<br>
	<div id="total_confirmed"></div>
	<br>
	<div id="total_recovered"></div>
	<br>
	<div id="total_death"></div>
	<br>

	<div id="Dtotal_active"></div>
	<br>
	<div id="Dtotal_confirmed"></div>
	<br>
	<div id="Dtotal_recovered"></div>
	<br>
	<div id="Dtotal_death"></div>
	<br>




</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
<script>
	function getLonLat(address) {

		var settings = {
			"async": true,
			"crossDomain": true,
			"url": "https://us1.locationiq.com/v1/search.php?key=1d3d1d3cfb474b&q=" + address + "&format=json",
			"method": "GET"
		}
		var lon
		var lat
		$.ajax(settings).done(function (response) {
			 lon = response[0].lon
			 lat = response[0].lat
			
		});
		return lon,lat
	}
</script>

</html>