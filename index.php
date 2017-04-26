<?php include_once('app/templates/header.php'); ?>

<!--=============== wrapper ===============-->
			<div id="wrapper">
				<div class="content-holder elem scale-bg2 transition3">
					<!-- title -->
					<div class="fixed-title"><span>Portfolio</span></div>
					<!-- portfolio counter -->
					<div class="count-folio">
						<div class="num-album"></div>
						<div class="all-album"></div>
					</div>
					<!-- portfolio counter  end-->
					<!--=============== content ===============-->
					<div class="content">
						<section>
							<div class="container">
								<!--  portfolio header -->
								<div class="content-logo">
									<img src="assets/images/content-logo.png" alt="">
								</div>
								<div class="separator separator-image"><img  src="assets/images/separator2.png"   alt=""></div>
								<h3 class="subtitle" style="color:#000;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </h3>
								<!--  portfolio header end-->
								<!-- Filters-->
								<div class="filter-holder inline-filters">
									<div class="gallery-filters">
										<a href="#" class="gallery-filter gallery-filter-active"  data-filter="*">All Albums</a>
										<a href="#" class="gallery-filter " data-filter=".travel">Travel</a>
										<a href="#" class="gallery-filter" data-filter=".nature">Nature</a>
										<a href="#" class="gallery-filter" data-filter=".comercial">Comercial</a>
									</div>
								</div>
								<!-- filters end -->
							</div>
							<div class="gallery-items grid-big-pad vis-port-info">
								<!-- 1 -->
								<?php foreach ($folders as $index => $folder): ?>
									<div class="gallery-item travel">
										<div class="grid-item-holder">
											<div class="box-item">
												<a href="albums/<?php echo $index ?>" >
												<span class="overlay"></span>
												<img  src="<?php echo $folder['pic'] ?>" alt="Album <?php echo $index; ?>">
												</a>
											</div>
											<div class="grid-item ">
												<h3><a href="albums/<?php echo $index ?>" class="ajax portfolio-link"><?php echo ucfirst($index); ?></a></h3>
												<span>Travel / Nature</span>
											</div>
										</div>
									</div>
								<?php endforeach ?>
								<!-- 1 end -->
							</div>
						</section>
					</div>
					<!-- Content end  -->
					<!-- Share container  -->
					<div class="share-container  isShare"  data-share="['facebook','pinterest','googleplus','twitter','linkedin']"></div>
				</div>
				<!-- content holder end -->
			</div>

<?php include_once('app/templates/footer.php'); ?>
