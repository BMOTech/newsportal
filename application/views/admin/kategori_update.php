

        <?php include "header.php";?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Update kategori</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Update Kategori
                        </div>
						
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="<?php echo base_url('admin/save_kategori');?>" method="post">
                                        <input type="hidden" name="status" value="edit">
					<?php foreach($kategori->result() as $key){ ?>
					     <input type="hidden" name="id_kategori" value="<?php echo $key->id_kategori?>">
					    <div class="form-group">                                           
					    <label>Kategori</label>
                                            <input class="form-control" name="nama_kategori" value="<?php echo $key->nama_kategori ?>">
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
<?php include "footer.php";?>
   
