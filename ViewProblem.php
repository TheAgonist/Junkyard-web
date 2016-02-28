<link rel="stylesheet" type="text/css" href="css/Home.css" />

<?php
try {
	$db = new PDO ( "mysql:host=127.0.0.1;dbname=bs_fixer;charset=utf8", "root", "" );
	/* Other Codes */
} catch ( PDOException $e ) {
	echo "Error: " . $e;
}
$id = $_GET ["id"];
$sql = "SELECT * FROM problem WHERE problem_id = '$id'";
foreach($db->query($sql) as $row)
{
	//echo $row['problem_ID'] ;
	//echo $row['title'] ;
	//echo $row['description'] ;
	//echo $row['submitted'] ;
	//echo $row['x'] ;
	//echo $row['y'] ;
	//echo $row['picture'] ;
	//echo $row['rating'] ;
	//echo $row['solved'] ;
	//echo $row['date_Solved'] ;

?>
<body>
<script>
function myFunction() {
    document.getElementById("demo").innerHTML = "Hello World";
}
</script>
<div align="center" class="logo">
<img class="img img3" src="images/Logo2.png" width="124" height="124" >
	</div>
	<div align="center">
			<button class="button button1" onclick="parent.location='Home.php'">Problems</button>
			<button class="button button1" onclick="parent.location='listAllEvents.php'">Events</button>
		<button class="button button1">Click Me!</button>
		<button class="button button1" onclick="parent.location='index.php'">Log In</button>
	</div>
	<div>

		<br>
		<table class="table table3" align="center">
			<tr>
				<td class="table table3" rowspan="2" height="384" width="384"><img
					src="<?php echo $row['picture']; ?> " class="img img2"></td>
				<td class="table table3" height="124" width="384"><h1 align="center"><?php echo $row['title'] ;  ?></h1></td>
			</tr>
			<tr>
				<td class="table table3"><h3 size="2"><?php echo $row['description'] ;  ?></h3></td>
			</tr>
			<tr>
				<td class="table table3" colspan="2" height="64" width="768">
					<h3>Date of Upload:<?php echo $row['submitted'] ; ?></h3>
				</td>
			</tr>
			<tr>
				<td class="table table3" colspan="2" height="768" width="768"><script
						src="http://maps.googleapis.com/maps/api/js"></script> <script>
var myCenter=new google.maps.LatLng(<?php echo $row['x'] ; ?>,<?php echo $row['y'] ;?>);

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:18,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  title: 'Hello World!'
  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);


function geocodeAddress(geocoder, resultsMap) {
	  var address = document.getElementById('address').value;
	  geocoder.geocode({'address': address}, function(results, status) {
	    if (status === google.maps.GeocoderStatus.OK) {
	      resultsMap.setCenter(results[0].geometry.location);
	      var marker = new google.maps.Marker({
	        map: resultsMap,
	        position: results[0].geometry.location
	      });
	    } else {
	      alert('Geocode was not successful for the following reason: ' + status);
	    }
	  });
}
</script>

					<div id="googleMap" style="width: 768px; height: 768px;"></div></td>
			</tr>
		</table>
	</div>
</body>
<?php 
}
?>