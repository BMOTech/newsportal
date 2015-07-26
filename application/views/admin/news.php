
 <?php include ('header.php');?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
					Berita
					<a href="<?php echo base_url("admin/add_news"); ?>">
						<button type="button" class="btn btn-primary btn-lg">Tambah Berita</button>
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
                            Daftar Berita
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Judul Berita</th>
                                            <th>Kategori</th>
											<th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php foreach ($news->result() as $key) {?>	
										<tr>
											<td class="center"><?php echo $key->title ?></td>
											<td class="center"><?php echo $key->nama_kategori ?></td>
											<td class="center">
												<a href="<?php echo base_url("admin/update_news/".$key->id_news); ?>">
													<button type="button" class="btn btn-success">Edit</button>
												</a>
												<a href="<?php echo base_url("admin/delete_news/".$key->id_news); ?>">
													<button type="button" class="btn btn-danger">Delete</button>
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