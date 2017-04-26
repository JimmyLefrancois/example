<?php include_once('app/templates/header.php'); ?>

<div class="jumbotron">
	<div class="container">
		<h1>Hello, world!</h1>
		<hr>
		<p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>

		<hr>

		<div class="row items_container">

			<?php foreach ($folders as $index => $folder): ?>
				<div class="col-md-3 item">
					<h2><?php echo ucfirst($index); ?></h2>

					<p class="img_container">
						<a class="grow" href="albums/<?php echo $index ?>" role="button" title="Voir l'album <?php echo ucfirst($index) ?>">
							<span class="overlay"></span>
							<img src="<?php echo $folder['pic'] ?>" alt="Album <?php echo $index; ?>">
						</a>
					</p>
					<p><a class="btn btn-default link" href="albums/<?php echo $index ?>" role="button" title="Voir l'album <?php echo ucfirst($index) ?>">Voir l'album</a></p>
				</div>
			<?php endforeach ?>

		</div>

		<?php include_once('app/templates/footer.php'); ?>
