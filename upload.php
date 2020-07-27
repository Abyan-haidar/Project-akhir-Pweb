<?php include("includes/config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Gallery</title>
	
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/jasny-bootstrap.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	</head>
<body>

	<?php include("includes/navbar.php"); ?>
	
	<div class="container body" style="background-image: url(fonts/paper.jpg); background-size: cover; background-attachment: fixed; width: auto; height: 665px; margin-top: 50px;" >
		<h1 style=" margin: 2rem auto 8.1rem auto ;color: white; text-shadow: inherit; border: solid; border-radius: 30px; border-width: 2px; width: 200px; border-color: #FF8C00; background-color: #20B2AA; font-family: fantasy;"><marquee direction="right">Abyan Picture</marquee></h1>

		<div id="card">
			<div id="card-content">
		<form method="post" action="upload-proses.php" enctype="multipart/form-data" style="margin-top: 70px;">
			<center><div class="fileinput fileinput-new" data-provides="fileinput" >
			  <div class="fileinput-new thumbnail" style="width: 480px; height: 250px;">

			<!--	<img data-src="holder.js/100%x100%" alt="">-->
			  </div>
			  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width:200px; max-height: 150px;"></div>
			  <div>
				<span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="foto" required></span>

				<input type="submit" class="btn btn-primary" name="submit" value="Upload">
			
			  </div>
			</div></center>
		</form>
	</div>
</div>
</div>
	
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jasny-bootstrap.js"></script>
	
</body>
</html>