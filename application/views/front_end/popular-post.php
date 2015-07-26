<aside id="ccr-right-section" class="col-md-4 ccr-home">
			
			
			<section id="sidebar-popular-post">
				<div class="ccr-gallery-ttile">
					<span></span> 
					<p><strong>Popular Post</strong></p>
				</div> <!-- .ccr-gallery-ttile -->
				<ul>
				<?php foreach ($popular->result() as $popular) {?>
					<li>
						<img src="<?php echo sprintf("uploads/%s", $popular->image)?>" alt="Avatar">
						<a href="<?php echo base_url("front_end/detail/".$popular->id_news);?> "><?php echo $popular->title ?></a>
						<div class="date-like-comment">
							<span class="date"><?php echo $popular->datetime ?></time></span>
							<span class="like"><i class="fa fa-search"></i><?php echo $popular->point ?></span>
						</div>
						<?php } ?>
					</li>
				</ul>

			</section> <!-- /#sidebar-popular-post -->
			
			<section id="sidebar-popular-post">
				<div class="ccr-gallery-ttile">
					<span></span> 
					<p><strong>Recent Post</strong></p>
				</div> <!-- .ccr-gallery-ttile -->
				<ul>
				<?php foreach ($front_end->result() as $f) {?>
					<li>
						<img src="<?php echo sprintf("uploads/%s", $f->image)?>" alt="Avatar">
						<a href="<?php echo base_url("front_end/detail/".$f->id_news);?> "><?php echo $f->title ?></a>
						<div class="date-like-comment">
							<span class="date"><?php echo $f->datetime ?></time></span>
							<span class="like"><i class="fa fa-search"></i><?php echo $f->point ?></span>
						</div>
						<?php } ?>
					</li>
				</ul>

			</section> <!-- /#sidebar-popular-post -->
			
		</aside><!-- / .col-md-4  / #ccr-right-section -->