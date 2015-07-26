<?php include "header.php"?>

<section id="ccr-main-section">
	<div class="container">


		<section id="ccr-left-section" class="col-md-8">
<?php foreach ($current_tag->result() as $key) {?> 
			<div class="current-page">
				<a href="<?php echo base_url();?>"><i class="fa fa-home"></i> <i class="fa fa-angle-double-right"></i></a> <a href="<?php echo base_url();?>tags/<?php echo $key->id_tags ?>"><?php echo $key->nama_tags ?></a>
			</div> <?php } ?> <!-- / .current-page -->
			<section id="ccr-category-1">
					<ul class="ccr-category-post">
						<?php foreach ($news_tag->result() as $key) {?> 
						<li>
							<div class="ccr-thumbnail">
								<img src="<?php echo sprintf("uploads/%s", $key->image)?>" alt="thumbnail-small-1.png">
								<p><a href="<?php echo base_url("front_end/detail/".$key->id_news);?>">Read More</a></p>
							</div>
							<h5><a href="<?php echo base_url("front_end/detail/".$key->id_news);?>"><?php echo $key->title ?></a></h5>
						</li>
						<?php } ?>
					</ul>


				</section> <!-- / #ccr-category -->
				</section>
				<?include "popular-post.php"?>	
				</div>
				</section>
				<?php include "footer.php"?>