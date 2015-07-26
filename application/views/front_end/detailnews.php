<?php include "header.php"?>

<section id="ccr-main-section">
	<div class="container">

<?php foreach ($detail->result() as $key) {?> 
		<section id="ccr-left-section" class="col-md-8">

			<div class="current-page">
				<a href="<?php echo base_url();?>"><i class="fa fa-home"></i> <i class="fa fa-angle-double-right"></i></a> <a href="<?php echo base_url();?>kategori/<?php echo $key->id_kategori ?>"><?php echo $key->nama_kategori ?><i class="fa fa-angle-double-right"></i></a> <?php echo $key->title ?>
			</div> <!-- / .current-page -->

			<article id="ccr-article">
            <?php //foreach ($detail->result() as $key) {?> 
				<h1><a href="./single.html" ><?php echo $key->title ?></a></h1>

				<div class="article-like-comment-date">	
					Posted by <?php echo $key->nama ?> on <?php echo $key->datetime ?> in <?php echo $key->nama_kategori ?></a>

					<span class="comments" href="#"><i class="fa fa-search"></i> <?php echo $key->point ?> views</span>
										
				</div> <!-- /.article-like-comment-date -->


				<!--img src="img/slide/main-slide-1.jpg" alt="1st Image"--><p>
				<img src="<?php echo sprintf("uploads/%s", $key->image)?>" width="100%"></p>
				<p> 
                    <?php echo $key->post ?> 
				</p>
				<!--img src="img/article-image.jpg" alt="2nd Image"-->
				<p>
					
                </p>
				
    <?php //}?> 
				<h5>Tags</h5>
					<?php
													$newstags 	= $news_tags->result_array();
													$tagss 		= $tags->result_array();
													
														
													foreach($tagss as $k0 => $v0){
														$tagss[$k0]['chosen'] = 0;
													}			
													
													foreach($newstags as $k => $v){
														foreach($tags->result_array() as $k2 => $v2){
															if($v['id_tags'] == $v2['id_tags']){
																$tagss[$k2]['chosen'] = 1;
															}
														}
													}		
													
													foreach($tagss as $k3 => $v3){
														
															if($tagss[$k3]['chosen'] == 0)
															{
																unset($tagss[$k3]);
															}
															
													}
													
													 // echo "<pre>";
													 // print_r($tagss);
													 // echo "</pre>";
													foreach ($tagss as $key3){
													?>
                                            
											
											<i class="fa fa-tags"></i> <a href="<?php echo base_url();?>front_end/tag/<?php echo $key3['id_tags']; ?>"><?php echo $key3['nama_tags']; ?></a>
											<?php }?>
					
					
				
<?php }?> 
			</article> <!-- /#ccr-single-post -->


			<section id="ccr-commnet">
				<div class="ccr-gallery-ttile">
						<span class="bottom"></span>
						<p>Comment</p>
				</div> <!-- .ccr-gallery-ttile -->
			<div class="fb-comments" data-href="<?php echo base_url();?>/front_end/detail/<?php echo $key->id_news ?>" data-width="760" data-numposts="5" data-colorscheme="light"></div>
			</section> <!-- /#ccr-commnet -->



			<section class="bottom-border"></section> <!-- /#bottom-border -->


				


		</section><!-- /.col-md-8 / #ccr-left-section -->



<?include "popular-post.php"?>


	</div><!-- /.container -->
</section><!-- / #ccr-main-section -->

<?php include "footer.php"?>