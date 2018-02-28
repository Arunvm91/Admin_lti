<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            User Profile
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">User profile</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">


                        <?php
                        if ($userdetails[0]->image) {
                            ?>
                            <img class="profile-user-img img-responsive img-circle" src="<?= base_url() . "_assets/"; ?>dist/img/<?= $userdetails[0]->image?>" alt="User profile picture">

                        <?php } else {
                            ?>
                            <img class="profile-user-img img-responsive img-circle" src="<?= base_url() . "_assets/"; ?>dist/img/user4-128x128.jpg" alt="User profile picture">
                        <?php } ?>



                        <h3 class="profile-username text-center"><?= isset($userdetails[0]->name) ? $userdetails[0]->name : ''; ?></h3>

                        <p class="text-muted text-center">Admin</p>

                        <ul class="list-group list-group-unbordered">

                            <li class="list-group-item">
                                <b>Email</b> <a class="pull-right"><?= isset($userdetails[0]->email) ? $userdetails[0]->email : ''; ?></a>
                            </li>

                        </ul>

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

                <!-- About Me Box -->

                <!-- /.box -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#settings" data-toggle="tab">Settings</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="active tab-pane" id="settings">
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
                            <!-- Post -->
                            <form class="form-horizontal"  enctype="multipart/form-data" action="<?= base_url('_admin/profile/save'); ?>" method="POST">
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?= isset($userdetails[0]->name) ? $userdetails[0]->name : ''; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email" name="email" value="<?= isset($userdetails[0]->email) ? $userdetails[0]->email : ''; ?>" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-sm-2 control-label">password</label>
                                    <div class="col-sm-10">
                                        <input type="hidden" value="<?= isset($userdetails[0]->password) ? $userdetails[0]->password : ''; ?>"  name="old_password" >
                                        <input type="password"  class="form-control" id="password" name="password" placeholder="password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-sm-2 control-label">Image</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="image" class="form-control" id="file" placeholder="file" value="<?= isset($userdetails[0]->image) ? $userdetails[0]->image : ''; ?>">
                                    </div>
                                </div>


                                <div class="box-footer" align="right">
                                    <input type="hidden" value="<?= isset($userdetails[0]->id) ? $userdetails[0]->id : ''; ?>" name="id">
                                    <a href="javascript:back();" class="btn btn-info ">Back</a>
                                    <button type="submit" class="btn  btn-success">Save</button>
                                </div>
                            </form>
                            <!-- /.post -->

                            <!-- Post -->

                            <!-- /.post -->

                            <!-- Post -->

                            <!-- /.post -->
                        </div>
                        <!-- /.tab-pane -->

                        <!-- /.tab-pane -->


                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

    </section>
    <!-- /.content -->
</div>
