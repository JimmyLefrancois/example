<?php
	require __DIR__ . '/../config/config.php';
	require __DIR__ . '/../controllers/folderController.php';
?>
<!DOCTYPE HTML>
<html lang="en">
	<head>
		<!--=============== basic  ===============-->
		<meta charset="UTF-8">
		<title><?php echo getTitle(); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="robots" content="index, follow"/>
		<meta name="keywords" content=""/>
		<meta name="description" content=""/>
		<!--=============== css  ===============-->
		<link type="text/css" rel="stylesheet" href="<?php echo $filePath; ?>assets/css/reset.css">
		<link type="text/css" rel="stylesheet" href="<?php echo $filePath; ?>assets/css/plugins.css">
		<link type="text/css" rel="stylesheet" href="<?php echo $filePath; ?>assets/css/style.css">
		<link type="text/css" rel="stylesheet" href="<?php echo $filePath; ?>assets/css/yourstyle.css">
		<!--=============== favicons ===============-->
		<link rel="shortcut icon" href="images/favicon.ico">
	</head>
	<body>
		<!--Loader  -->
		<div class="loader"><i class="fa fa-refresh fa-spin"></i></div>
		<!--LOader end  -->
		<!--================= main start ================-->
		<div id="main">
			<!--=============== header ===============-->
			<header>
				<!-- Header inner  -->
				<div class="header-inner">
					<!-- Logo  -->
					<div class="logo-holder">
						<a href="index.html"><img src="assets/images/logo.png" alt=""></a>
					</div>
					<!--Logo end  -->
					<?php include_once('menu.html'); ?>
				</div>
				<!--Header inner end  -->
			</header>
			<!--header end -->
