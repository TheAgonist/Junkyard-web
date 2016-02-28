<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="UTF-8" />
<title>Add Problem</title>
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
						<form action="problemRedirect.php" autocomplete="on" method='post'>
							<h1>Problem Form</h1>
							<p>
								<label for="title" class="title" > Title : </label>
								<input id="title" name="title" required="required" type="text" />
							</p>
							<p>
								<label for="description" class="desc" > Description : </label>
								<input id="description" name="description" type="text" />
							</p>
							<p>
								<label for="picture" class="yourpicture">Picture: </label>
								 <input type="file" name="picture" id="picture"> 
							</p>

							<p class="login button">
								<input type="submit" value="Login" />
							</p>
						</form>
					</div>
				</div>
			</div>
		</section>
	</div>
</body>
</html>