<?php include("includes/config.php"); ?>
	<head>
	<title>ABYAN PHOTOGRAPH</title>
</head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

	
	
	<title>Gallery</title>
	
	<link href="css/bootstrap.css" rel="stylesheet">
	
	<link href="css/custom.css" rel="stylesheet">



	

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	</head>
<body>


	<?php include("includes/navbar.php"); ?>


	
	<div class="container body" style="background-image: url(fonts/paper.jpg); background-size: cover;background-attachment: fixed; width: 0 auto; height: 0 auto;">
		<h1 style="margin: 8rem auto 8.1rem auto; color: white; text-shadow: inherit; border: solid; border-radius: 30px; border-width: 2px; width: 200px; border-color: #FF8C00; background-color: #20B2AA; font-family: fantasy;"><marquee direction="right">Abyan pictures</marquee></h1>

		<div class="gal" style="margin-top: 20px;">

			

			<?php
			$query = $koneksi->query("SELECT * FROM galeri ORDER BY id DESC") or die($koneksi->error);
			if($query->num_rows){
				while($row = $query->fetch_assoc()){
					echo '<a href="foto.php?id='.$row['id'].'"><img src="gallery/'.$row['nama'].'" alt=""></a>';


				}
			}
			?>
			

		</div>
	</div>


	
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>