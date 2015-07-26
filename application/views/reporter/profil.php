
 <?php include ('header.php');?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
					Profil
					<a href="<?php echo base_url("reporter/update_profil"); ?>">
						<button type="button" class="btn btn-success btn-lg">Update Profil</button>
					</a>
					</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Profil
                        </div>
                        <div class="panel-body">
							<?php foreach($profil->result() as $key){ ?>
                            <p>Username:<?php echo $key->username?></p>
							<p>Nama:<?php echo $key->nama?></p>
							<p>Alamat:<?php echo $key->alamat?></p>
							<?php } ?>
                        </div>
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
   <?php include ('footer.php');?>