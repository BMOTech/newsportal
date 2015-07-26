
 <?php include ('header.php');?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
					Management User
					<a href="<?php echo base_url("admin/add_user"); ?>">
						<button type="button" class="btn btn-primary btn-lg">Tambah User</button>
					</a>
					</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Daftar User
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID User</th>
                                            <th>Username</th>
                                            <th>Nama</th>
                                            <th>Kota</th>
                                            <th>Privilege</th>
											<th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php foreach ($users->result() as $key) {?>	
										<tr>
											<td><?php echo $key->id_user ?></td>
											<td class="center"><?php echo $key->username ?></td>
											<td class="center"><?php echo $key->nama ?></td>
											<td class="center"><?php echo $key->alamat ?></td>
											<td class="center"><?php echo $key->group_name ?></td>
											<td class="center">
												<a href="<?php echo base_url("admin/update_user/".$key->id_user); ?>">
													<button type="button" class="btn btn-success">Edit</button>
												</a>
												<a class="btn btn-danger" href="<?php echo base_url("admin/delete_user/".$key->id_user); ?>">
													<i class="icon-trash icon-white"></i> 
														Delete
												</a>
											</td>
										</tr>
							<?php }?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                           
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
<script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>
   <?php include ('footer.php');?>