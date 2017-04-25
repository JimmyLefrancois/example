<?php include_once('app/templates/header.php'); ?>

<div class="jumbotron">
	<div class="container">
		<h1>Hello, world!</h1>
		<p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>

		<hr>

		<div class="row items_container">

			<?php foreach ($folders as $index => $folder): ?>
				<div class="col-md-4 item">
					<h2><?php echo ucfirst($index); ?></h2>
					<img src="<?php echo $folder['pic'] ?>" alt="<?php echo $index; ?>">
					<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
				</div>
			<?php endforeach ?>

		</div>

		<?php include_once('app/templates/footer.php'); ?>
