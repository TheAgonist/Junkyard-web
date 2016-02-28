<link rel="stylesheet" type="text/css" href="css/Home.css" />
<div align="center">
	<button class="button button1" onclick="parent.location='Home.php'">Problems</button>
	<button class="button button1"
		onclick="parent.location='listAllEvents.php'">Events</button>
	<button class="button button1">Click Me!</button>
	<button class="button button1" onclick="parent.location='index.php'">Log In</button>
</div>
<?php
try {
	$db = new PDO ( "mysql:host=127.0.0.1;dbname=bs_fixer;charset=utf8", "root", "" );
	/* Other Codes */
} catch ( PDOException $e ) {
	echo "Error: " . $e;
}
$sql = "SELECT * FROM event ";
foreach ( $db->query ( $sql ) as $row ) {
	// echo $row['problem_ID'] ;
	// echo $row['title'] ;
	// echo $row['description'];
	// echo $row['submitted'];
	$locx = $row ['x'];
	$locy = $row ['y'];
	// echo $row['picture'] ;
	// echo $row['rating'] ;
	// echo $row['solved'] ;
	// echo $row['date_Solved'];
	$loclink = "https://www.google.bg/maps/@$locx,$locy,18z";
	?>
<div align="center">
	<br> <br>
	<table>
		<tr>
			<td class="tg-yw4l" rowspan="2">
				<form method=GET action="ViewEvent.php">
					<button class="button button2"
						value=" <?php echo $row['event_ID']; ?>" NAME="id">
						<img src=" <?php echo $row['picture']; ?> " height="124px"
							width="124px" align="left">
						<table class="table table1">
							<tr>
								<td colspan="2" align="center"><font size="5"> <?php echo $row['title']; ?> </font></td>
							</tr>
							<tr align="center">
								<td><font size="5"> <?php echo $row['submitted'];?> </font></td>
								<td><font size="5"> <?php echo $loclink; ?> </font></td>
							</tr>
						</table>
					</button>
				</form>
			</td>
		<td><button class="button button3">Up vote</button></td>
		</tr>
		<tr>
			<td><button class="button button3">Share</button></td>
		</tr>
	</table>
</div>
<?php
}
?>