
<aside id="ccr-footer-sidebar">
	<div class="container">

		<ul>
			<li class="col-md-3">
				<h5>About Us</h5>
				<div class="about-us">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, quod, nostrum, corrupti, maxime quis doloribus debitis id consectetur laudantium iure aperiam soluta consequuntur modi accusamus molestias. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, quod, nostrum, corrupti, maxime quis doloribus debitis id consectetur laudantium iure aperiam soluta consequuntur modi accusamus molestias Ab veniam atque eius...
				</div>
				<!-- / .navbar-header -->
				
			</li>
			<li class="col-md-3">
				<h5>Tags</h5>
				<div class="tagcloud">
					<?php foreach ($tags_news->result() as $key1) { ?>
                    <a href="<?php echo base_url();?>front_end/tags/<?php echo $key1->id_tags?>"> <?php echo $key1->nama_tags ?></a>
					<?php } ?>
				</div>
				
			</li>
		</ul>
	</div>
	
</aside> <!-- /#ccr-footer-sidebar -->


<footer id="ccr-footer">
	<div class="container">
	 	
	</div> <!-- /.container -->
</footer>  <!-- /#ccr-footer -->


	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>

</body>
</html>