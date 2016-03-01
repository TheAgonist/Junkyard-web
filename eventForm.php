<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="UTF-8" />
<title>Add Event</title>
<link rel="stylesheet" type="text/css" href="css/demo.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
</head>
<body>

	<div class="container">
		<header> </header>
		<section>
			<div id="container_demo">
				<a class="hiddenanchor" id="toregister"></a> <a class="hiddenanchor"
					id="tologin"></a>
				<div id="wrapper">
					<div id="login" class="animate form">
						<form action="eventRedirect.php" autocomplete="on" method='post'>
							<h1>Event Form</h1>
							<p>
								<label for="title" class="title"> Title : </label> <input
									id="title" name="title" required="required" type="text" />
							</p>
							<p>
								<label for="description" class="desc"> Description : </label> <input
									id="description" name="description" type="text" />
							</p>
							<p>
								<label for="date" class="date"> Date : </label> <input id="date"
									name="date" required="required" type="text"
									placeholder="dd/MM/YY 2012-07-08 11:14:15.638276" />
							</p>
							<p>
								<label for="picture" class="yourpicture">Picture: </label> <input
									type="file" name="picture" id="picture">
							</p>
							<p>
<label for="location" class="location"> Select location : </label> 
								<head>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script>
        var map;
        var markersArray = [];

        function initMap()
        {
            var latlng = new google.maps.LatLng(42.491339963063815, 27.443504333496094);
            var myOptions = {
                zoom: 11,
                center: latlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

            // add a click event handler to the map object
            google.maps.event.addListener(map, "click", function(event)
            {
                // place a marker
                placeMarker(event.latLng);

                // display the lat/lng in your form's lat/lng fields
                document.getElementById("x").value = event.latLng.lat();
                document.getElementById("y").value = event.latLng.lng();
            });
        }
        function placeMarker(location) {
            // first remove all markers if there are any
            deleteOverlays();

            var marker = new google.maps.Marker({
                position: location, 
                map: map
            });

            // add marker in markers array
            markersArray.push(marker);

            //map.setCenter(location);
        }

        // Deletes all markers in the array by removing references to them
        function deleteOverlays() {
            if (markersArray) {
                for (i in markersArray) {
                    markersArray[i].setMap(null);
                }
            markersArray.length = 0;
            }
        }
    </script>
								<body onload="initMap()">
									<div id="map_canvas" style="width: 440px; height: 440px;"></div>
									<table>
										<tr>
											<td><input type="text" id="x" name="x" style="width: 181px;" readonly></td>
											<td><input type="text" id="y" name="y" style="width: 181px;" readonly></td>
										</tr>
									</table>
									</body>
							</p>
							<p class="login button">
								<input type="submit" value="Submit" />
							</p>
						</form>
					</div>
				</div>
			</div>
		</section>
	</div>
</body>
</html>