<?php
	require __DIR__ . '/../config/config.php';
	require __DIR__ . '/../controllers/folderController.php';
?>
<?php //var_dump(file_get_contents(__DIR__ . '/../controllers/folderController.php')); ?>
<html>
<head>
	<meta charset="UTF-8">
	<title><?php echo getTitle(); ?></title>
	<link rel="stylesheet" href="<?php echo $filePath; ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $filePath; ?>assets/css/style.css">
</head>
<body>
