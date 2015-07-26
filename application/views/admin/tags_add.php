

        <?php include "header.php";?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tambah tags</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah tags
                        </div>
						
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="<?php echo base_url('admin/save_tags');?>" method="post">
                                        <input type="hidden" name="status" value="new">
										<div class="form-group">
                                            <label>Judul tags</label>
                                            <input class="form-control" placeholder="Judul tags" name="nama_tags" value="" required>
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
   
