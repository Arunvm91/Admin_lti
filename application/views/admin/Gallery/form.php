
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
          <?= isset($title) ? $title : ''; ?>

        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Gallery</a></li>
            <li class="active">  <?= isset($title) ? $title : ''; ?></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- Horizontal Form -->
                <div class="box box-info">
                    <div class="box-header with-border" align="center">
                        <h3 class="box-title">Form</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <?php if ($this->session->flashdata('addmessage')) { ?>
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <?php echo $this->session->flashdata('addmessage'); ?>
                        </div>
                    <?php } elseif ($this->session->flashdata('updatemessage')) {
                        ?>
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <?php echo $this->session->flashdata('updatemessage'); ?>
                        </div>
                    <?php } ?>
                    <form class="form-horizontal" method="post" action="<?= base_url('gallery/save');  ?>"  enctype="multipart/form-data">
                        <div class="box-body">
                          <div class="form-group">
                                <label for="inputEmail" class="col-sm-3 control-label">Image</label>
                                <div class="col-sm-8">
                                   <img src="<?= base_url() . "/"; ?>uploads/gallery/<?= isset($edit_item['image']) ?  $edit_item['image'] : '';  ?>" style="width:200px;" alt="" class="img-responsive img-rounded service-img">
                                   <br>
                                    <input type="file" name="image" class="" id="file" placeholder="file" value="<?= isset($edit_item['image']) ?  $edit_item['image'] : '';  ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">Status</label>
                                <div class="col-sm-8">
                                  <select class="form-control" name="status">
                                      <option value="Active" <?php if (!empty($edit_item['status']) && $edit_item['status'] == 'Active')  echo 'selected = "selected"'; ?> > Show</option>
                                      <option value="Hide" <?php if (!empty($edit_item['status']) && $edit_item['status'] == 'Hide')  echo 'selected = "selected"'; ?> > Hide</option>
                                 </select>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="id" value="<?= isset($edit_item['id']) ? $edit_item['id'] : ''; ?>">
                        <!-- /.box-body -->
                        <div class="box-footer" align="right">
                            <a href="javascript:back();" class="btn btn-info ">Back</a>
                            <button type="submit" class="btn  btn-success">Save</button>
                            <button type="reset" class="btn  btn-danger">Clear</button>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>

            </div>
        </div>
    </section>
</div>
