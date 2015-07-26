

        <?php include "header.php";?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Update Profil</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Profil
                        </div>
						
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="<?php echo base_url('reporter/save_profil/');?>" method="post">
                                         <input type="hidden" name="status" value="edit">
										 <?php foreach($profil->result() as $key){ ?>
										 <input type="hidden" name="id_user" value="<?php echo $key->id_user?>">
										<div class="form-group">                                           
											<label>Username</label>
                                            <input class="form-control" name="username" value="<?php echo $key->username?>" >
                                        </div>
										<div class="form-group">                                           
											<label>Password</label>
                                            <input class="form-control" name="password" type="password" value="" required>
                                        </div>
										<div class="form-group">                                           
											<label>Nama</label>
                                            <input class="form-control" name="nama" value="<?php echo $key->nama?>" >
                                        </div>
										<div class="form-group">                                           
											<label>Alamat</label>
                                            <input class="form-control" name="alamat" value="<?php echo $key->alamat?>" >
                                        </div>
                                        <button type="submit" class="btn btn-default">Update</button>
                                        <button type="reset" class="btn btn-default">Reset</button>
										<?php }?>
                                    </form>
                                </div>
                                <!-- /.col-lg-12 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
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
<?php include "footer.php";?>
   
