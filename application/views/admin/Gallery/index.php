

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

            <div class="col-xs-12">

                <!-- /.box -->

                <div class="box" >
                    <div class="box-header" align="right">
                        <a href="<?= base_url('gallery/form'); ?>" class="btn btn-success">
                            Add New
                        </a>
                    </div>
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
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Sl NO</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php
                              $i=1;
                              foreach($gallery_list as $gallery): ?>

                                <tr>
                                    <td><?= $i; ?></td>
                                    <td style="width:250px;">
                                        <img class="profile-user-img img-responsive img-rounded" src="<?= base_url() . "uploads/"; ?>gallery/<?= $gallery->image?>" alt="User profile picture">
 </td>
                                    <td>
                                        <a  href="<?php echo base_url('gallery/form/'.$gallery->id); ?>" class="btn btn-sm btn-info"  data-id="<?= $gallery->id; ?>" href="javascript:void(0)"><i class="glyphicon glyphicon-edit"></i></a>
                                        &nbsp;&nbsp;
                                        <a class="btn btn-sm btn-danger" id="delete_product" data-id="<?= $gallery->id; ?>" href="javascript:void(0)"><i class="glyphicon glyphicon-trash"></i></a>

                                    </td>
                                </tr>

                              <?php $i++; endforeach; ?>


                            </tbody>

                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>



<!-- /.content-wrapper -->
<script>
	$(document).ready(function(){

		readProducts(); /* it will load products when document loads */

		$(document).on('click', '#delete_product', function(e){

			var productId = $(this).data('id');
			SwalDelete(productId);
			e.preventDefault();
		});

	});

	function SwalDelete(productId){

		swal({
			title: 'Are you sure?',
			text: "It will be deleted permanently!",
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes, delete it!',
			showLoaderOnConfirm: true,

			preConfirm: function() {
			  return new Promise(function(resolve) {

			     $.ajax({
			   		url: '../gallery/Delete',
			    	type: 'POST',
			       	data: 'id='+productId,
			       	dataType: 'json'
			     })
			     .done(function(response){
			     	swal('Deleted!', response.message, response.status);
					readProducts();
          $('#example1').load(document.URL + ' #example1');
			     })
			     .fail(function(){
			     	swal('Oops...', 'Something went wrong with ajax !', 'error');
			     });
			  });
		    },
			allowOutsideClick: false
		});

	}

	function readProducts(){
		$('#load-products').load('read.php');
	}

</script>
