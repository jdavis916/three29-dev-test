	<?php
		//some settings
		$random_images = array(
			'http://icons.iconarchive.com/icons/zairaam/bumpy-planets/256/07-jupiter-icon.png',
			'http://www.princeton.edu/~willman/planetary_systems/Sol/Saturn/Saturn.gif',
			'http://www.solstation.com/stars/venus.gif',
			'http://quest.nasa.gov/mars/background/images/mars.gif'
		);

		$cover_image = 'http://www.lovethispic.com/uploaded_images/20521-Rocky-Beach-Sunset.jpg';
	?>

<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Jason Davis">

		<title>Jason Davis - Three20 Dev Test</title>

	  
		<!-- Custom styles -->
		<link href="inc/css/styles.css" rel="stylesheet">

		<style>
			.div1{
				background-image: url(<?php echo htmlspecialchars($cover_image)?>);
			}
			.div2{
				background-image: url(<?php echo htmlspecialchars($random_images[rand(0,3)])?>);
			}
		</style>
	</head>
	<body>