

        <?php include "header.php";?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Update Berita</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Update Berita
                        </div>
						
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                
                                <form role="form" action="<?php echo base_url('admin/save_user');?>" method="post">
                                    <input type="hidden" name="status" value="edit">
									<?php foreach($users->result() as $key){ ?>
									<input type="hidden" name="id_user" value="<?php echo $key->id_user;?>">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input class="form-control" name="username" value="<?php echo $key->username;?>">
                                        </div>
                            			<div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" name="password" type="password" value="" required>
                                        </div>
                            			<div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama" value="<?php echo $key->nama;?>">
                                        </div>
                            			<div class="form-group">
                                            <label>Alamat</label>
                                            
                                            <input class="form-control" name="alamat" value="<?php echo $key->alamat;?>">
                                        </div>
										<div class="form-group">
                                            <label>Privilege</label>
                                            <select class="form-control" name="id_group">
											<option value="">Pilih Privilege</option>
											<?php foreach($groups->result() as $key1){ ?>
											<option value="<?php echo $key1->id_group?>"
											<?php if ($key1->id_group==$key->id_group)
											    echo "selected='selected'";?>>
											<?php echo $key1->group_name?></option>
											<?php }?>
                                            </select>
                                        <?php }?>
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
<?php include ("footer.php");?>
   
