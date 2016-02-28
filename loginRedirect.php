<link rel="stylesheet" type="text/css" href="css/style.css" />
<body id='thanks'>
<?php
$function = 6;
include 'phpWrapper.php';
if($flag == 5){
?>
<div id="box">
		<br>
		<br>
		<p id="title_thanks">Login Successful!</p>
		<a href="Home.php"><button>Home</button></a>
	</div>
<?php 

}

else {?>

<div id="box">
		<br>
		<br>
		<p id="title_thanks">Username or Password is incorrect!</p>
		<a href="index.php"><button>Go Back</button></a>
	</div>
	<?php 
}
?>
</body>