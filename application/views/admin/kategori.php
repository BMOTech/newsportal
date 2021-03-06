
 <?php include ('header.php');?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
					Kategori
					<a href="<?php echo base_url("admin/add_kategori"); ?>">
						<button type="button" class="btn btn-primary btn-lg">Tambah Kategori</button>
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
                            Daftar Kategori
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID Kategori</th>
                                            <th>Kategori</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php foreach ($kategori->result() as $key) {?>	
										<tr>
											<td><?php echo $key->id_kategori ?></td>
											<td class="center"><?php echo $key->nama_kategori ?></td>
											<td class="center">
												<a href="<?php echo base_url("admin/update_kategori/".$key->id_kategori); ?>">
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