
 <?php include ('header.php');?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
					Tags
					<a href="<?php echo base_url("admin/add_tags"); ?>">
						<button type="button" class="btn btn-primary btn-lg">Tambah Tags</button>
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
                            Daftar Tags
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID Tags</th>
                                            <th>Tags</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php foreach ($tags->result() as $key) {?>	
										<tr>
											<td><?php echo $key->id_tags ?></td>
											<td class="center"><?php echo $key->nama_tags ?></td>
											<td class="center">
												<a href="<?php echo base_url("admin/update_tags/".$key->id_tags); ?>">
													<button type="button" class="btn btn-success">Edit</button>
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