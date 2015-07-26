

        <?php include "header.php";?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tambah Berita</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah Berita
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" enctype="multipart/form-data" action="<?php echo base_url('admin/save_news');?>" method="post">
                                        <input type="hidden" name="status" value="new">
										<div class="form-group">
                                            <label>Judul Berita</label>
                                            <input class="form-control" placeholder="Judul Berita" name="title" value="" required>
                                        </div>
										<div class="form-group">
                                            <label>Kategori</label>
                                            <select class="form-control" name="id_kategori" required>
												<option value="">Pilih Kategori</option>
											<?php foreach($kategori->result() as $key){ ?>
												<option value="<?php echo $key->id_kategori?>"><?php echo $key->nama_kategori?></option>
													<?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Isi Berita</label>
											<script type="text/javascript" src="<?php echo base_url();?>js/tinymce/tinymce.min.js"></script>
											<script type="text/javascript">
											tinymce.init({
											selector: "textarea",
											plugins: [
												 "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
												 "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
												 "save table contextmenu directionality emoticons template paste textcolor"
										   ],
										   content_css: "css/content.css",
										   toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons", 
										   style_formats: [
												{title: 'Bold text', inline: 'b'},
												{title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
												{title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
												{title: 'Example 1', inline: 'span', classes: 'example1'},
												{title: 'Example 2', inline: 'span', classes: 'example2'},
												{title: 'Table styles'},
												{title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
											]
											}); 
											</script>
                                            <textarea class="form-control" name="post"></textarea>
                                        </div>
										<div class="form-group">
                                            <label>Tags</label>
											<?php foreach($tags->result() as $key1){ ?>
											<div class="checkbox">
                                                <label>
												<input type="checkbox" name="tags[]" value="<?php echo $key1->id_tags?>"><?php echo $key1->nama_tags?>
												</label>
                                            </div>
											<?php } ?>
										</div>
										<div class="form-group">
                                            <label>Featured Image</label>
                                            <input type="file" name="image_file" id="image_file" required>
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
   
