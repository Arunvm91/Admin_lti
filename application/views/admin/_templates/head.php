<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin | <?= isset($title) ? $title : ''; ?></title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="<?= base_url() . "_assets/"; ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?= base_url() . "_assets/"; ?>bower_components/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="<?= base_url() . "_assets/"; ?>bower_components/Ionicons/css/ionicons.min.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="<?= base_url() . "_assets/"; ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?= base_url() . "_assets/"; ?>dist/css/AdminLTE.min.css">
        <!-- custom style -->
        <link rel="stylesheet" href="<?= base_url() . "_assets/"; ?>dist/css/ArunLTE.min.css">
        <link rel="stylesheet" href="<?= base_url() . "_assets/"; ?>dist/css/skins/_all-skins.min.css">
        <!-- sweetalert2 -->
        <link rel="stylesheet" href="<?= base_url() . "_assets/"; ?>bower_components/swal2/sweetalert2.min.css" type="text/css" />
        <!-- jQuery 3 for some sript run -->
        <script src="<?= base_url() . "_assets/"; ?>bower_components/jquery/dist/jquery.min.js"></script>
        <!-- CK Editor -->
        <script src="<?= base_url() . "_assets/"; ?>bower_components/ckeditor/ckeditor.js"></script>
        <!-- CK Finder -->
        <script src="<?= base_url() . "_assets/"; ?>bower_components/ckfinder/ckfinder.js"></script>


        <!-- Google Font -->
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
