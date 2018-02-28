<header class="main-header">
    <!-- Logo -->
    <a href="javascript:back();" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>Y</b>KH</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Admin</b>YKH</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->

                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <?php
                        if ($_SESSION['Access']->image) {
                            ?>
                            <img class="user-image" src="<?= base_url() . "_assets/"; ?>dist/img/<?= $_SESSION['Access']->image ?>" alt="User Image">

                        <?php } else {
                            ?>
                            <img src="<?= base_url() . "_assets/"; ?>dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                        <?php } ?>

                        <span class="hidden-xs"><?= isset($_SESSION['Access']->name) ? $_SESSION['Access']->name : ''; ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <?php
                            if ($_SESSION['Access']->image) {
                                ?>
                                <img class="img-circle" src="<?= base_url() . "_assets/"; ?>dist/img/<?= $_SESSION['Access']->image ?>" alt="User Image">

                            <?php } else {
                                ?>
                                <img src="<?= base_url() . "_assets/"; ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                            <?php } ?>

                            <p>
                                <?= isset($_SESSION['Access']->name) ? $_SESSION['Access']->name : ''; ?>
<!--                                <small>Member since Nov. 2012</small>-->
                            </p>
                        </li>
                        <!-- Menu Body -->

                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="<?= base_url() . "_admin/admin/profile"; ?>" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="<?= base_url() . "_admin/admin/logout"; ?>" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->

            </ul>
        </div>
    </nav>
</header>
