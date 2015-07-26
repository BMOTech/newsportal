<?php include "header.php"?>
<section id="ccr-main-section">
	<div class="container">


		<section id="ccr-left-section" class="col-md-8">
			<section id="ccr-slide-main" class="carousel slide" data-ride="carousel">				
				
					<!-- Carousel items -->
					<div class="carousel-inner">
						<?php foreach ($carousel_active->result() as $carousel_active) {?>
						<div class="active item">
							<div class="container slide-element">
								<img src="<?php echo sprintf("uploads/%s", $carousel_active->image)?>" width="770" height="662">
								<p><a href="<?php echo base_url("front_end/detail/".$carousel_active->id_news);?>"><?php echo $carousel_active->title ?></a></p>
							</div> <!-- /.slide-element -->
						</div> <!--/.active /.item -->
						<?php } ?>
						<?php foreach ($carousel->result() as $carousel) {?>
						<div class="item">
							<div class="container slide-element">
								<img src="<?php echo sprintf("uploads/%s", $carousel->image)?>" width="770" height="662">
								<p><a href="<?php echo base_url("front_end/detail/".$carousel->id_news);?>"><?php echo $carousel->title ?></a></p>
							</div> <!-- /.slide-element -->
						</div> <!--/.active /.item -->
						<?php } ?>
					
					</div> <!-- /.carousel-inner -->
					
					<!-- slider nav -->
					<a class="carousel-control left" href="#ccr-slide-main" data-slide="prev"><i class="fa fa-arrow-left"></i></a>
					<a class="carousel-control right" href="#ccr-slide-main" data-slide="next"><i class="fa fa-arrow-right"></i></a>

					<ol class="carousel-indicators">
						<li data-target="#ccr-slide-main" data-slide-to="0" ></li>
						<li data-target="#ccr-slide-main" data-slide-to="1"></li>
						<li data-target="#ccr-slide-main" data-slide-to="2"></li>
					</ol> <!-- /.carousel-indicators -->

							
			</section><!-- /#ccr-slide-main -->

			<section id="ccr-latest-post-gallery">
					<div class="ccr-gallery-ttile">
						<span></span> 
						<p>Others Latest Post Gallery</p>
					</div><!-- .ccr-gallery-ttile -->

					<?php foreach ($front_end->result() as $key) {?>
						<ul class="ccr-latest-post">
							<li>
								<div class="ccr-thumbnail">
									<img src="<?php echo sprintf("uploads/%s", $key->image)?>">
									<p><a href="<?php echo base_url("front_end/detail/".$key->id_news);?>">Read More</a></p>
								</div>
								<h4><a href="<?php echo base_url("front_end/detail/".$key->id_news);?> "> <?php echo $key->title ?></a></h4>
							</li>
						</ul> <!-- /.ccr-latest-post -->
			     <?php } ?>
            		
				</section> <!--  /#ccr-latest-post-gallery  -->
				
				<section class="bottom-border">
				</section> <!-- /#bottom-border -->

		</section><!-- /.col-md-8 / #ccr-left-section -->



<?include "popular-post.php"?>


	</div><!-- /.container -->
</section><!-- / #ccr-main-section -->
<?php include "footer.php"?>