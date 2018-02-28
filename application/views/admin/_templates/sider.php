<?php $ChecCon=$this->router->fetch_class(); $ChecMe= $this->router->fetch_method();  $ChecSub = $this->uri->segment(3);

 ?>

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= base_url() . "_assets/"; ?>dist/img/user2-160x1601.jpg" class="img-circle" style="max-width: 30%;" alt="User Image">
            </div>

            <div class="pull-left info">
                <p>  <?= isset($_SESSION['Access']->name) ? $_SESSION['Access']->name : ''; ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
            <br>
            <br>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>




            <li class="treeview <?php   if($ChecMe == 'gallery' || $ChecCon == 'gallery'  ) { echo "active";}   ?>">
                <a href="#">
                    <i class="fa fa-folder"></i> <span>Gallery</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php  if($ChecMe == 'gallery' ) { echo "active";}    ?>"><a href="<?= base_url('admin/gallery'); ?>"><i class="fa fa-edit"></i>Image</a></li>
                </ul>
            </li>




        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
