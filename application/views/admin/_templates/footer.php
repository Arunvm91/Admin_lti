<div id="preloader">
  <div id="status"></div>

</div>

<input type="hidden" id="Jquerurl" value="<?= base_url(); ?>">

<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2017-2018 <a href="https://rexav.in">Rexav</a></strong> All rights
    reserved.
</footer>

<!-- Control Sidebar -->

<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url() . "_assets/"; ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url() . "_assets/"; ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url() . "_assets/"; ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?= base_url() . "_assets/"; ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url() . "_assets/"; ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() . "_assets/"; ?>dist/js/adminlte.min.js"></script>
<!-- custom style -->
<script src="<?= base_url() . "_assets/"; ?>dist/js/arunlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url() . "_assets/"; ?>dist/js/demo.js"></script>
<!-- page sweetalert2 -->
<script src="<?= base_url() . "_assets/"; ?>bower_components/swal2/sweetalert2.min.js"></script>
<!-- for  cdediter -->
<script src="<?= base_url() . "_assets/"; ?>dist/js/arunadminTop.min.js"></script>




<script>


    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': false,
            'ordering': true,
            'info': true,
            'autoWidth': false,
        })
    })
  $(window).on('load', function() {
    $('#preloader').delay(1).fadeOut('slow');
  })

  // config.removeButtons = 'Underline,Subscript,Superscript,Image';

</script>
</body>
</html>
