

        <?php include "header.php";?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tambah User</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah User
                        </div>
						
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="<?php echo base_url('admin/save_user');?>" method="post">
                                        <input type="hidden" name="status" value="new">
										<div class="form-group">
                                            <label>Username</label>
                                            <input class="form-control" placeholder="Username" name="username" value="" required>
                                        </div>
                            			<div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" type="password" placeholder="Password" name="password" value="" required>
                                        </div>
                            			<div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" placeholder="Name" name="nama" value="" required>
                                        </div>
                            			<div class="form-group">
                                            <label>Hometown</label>
                                            <input class="form-control" placeholder="Hometown" name="alamat" value="" required>
                                        </div>
										<div class="form-group">
                                            <label>Privilege</label>
                                            <select class="form-control" name="id_group" required>
												<option value="">Pilih Privilege</option>
											<?php foreach($groups->result() as $key){ ?>
												<option value="<?php echo $key->id_group?>"><?php echo $key->group_name?></option>
													<?php } ?>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-default">Submit</button>
                                        <button type="reset" class="btn btn-default">Reset</button>
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
   
