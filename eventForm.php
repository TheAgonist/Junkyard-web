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