<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ajax & Codeigniter</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">AJAX & CODEIGNITER</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <!-- <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul> -->
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center">CRUD Ajax With Codeigniter & Bootstrap Framework</h1>
                <div class="panel panel-primary">
				  <div class="panel-heading">
				  	CRUD Ajax & Codeigniter
				  	<div class="btn-group pull-right">
				  		<button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModalAdd"><i class="glyphicon glyphicon-plus" data-toggle="tooltip" title="Add category"></i></button>
				  	</div>
				  </div>
				  <div class="panel-body">
				  	<table class="table table-bordered">
					    <thead>
					      <tr>
					      	<th>ID</th>
					        <th>Name</th>
					        <th>Description</th>
					        <th>Action</th>
					      </tr>
					    </thead>
					    <tbody>
					      <tr>
					      	<td>1</td>
					        <td>Programming</td>
					        <td>C, C++, C#...</td>
					        <td>
					        	<a href="#" data-toggle="modal" data-target="#myModalUpdate"><i class="glyphicon glyphicon-edit" data-toggle="tooltip" title="Edit category"></i></a> |
					        	<a href="#" data-toggle="modal" data-target="#myModalDelete"><i class="glyphicon glyphicon-trash" data-toggle="tooltip" title="Delete category"></i>
					        </td>
					      </tr>
					    </tbody>
					</table>
				  </div>
				</div>
            </div>
        </div>
        <!-- /.row -->
        <!-- Modal Add Category -->
		<div id="myModalAdd" class="modal fade" role="dialog">
		  <div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Add category</h4>
		      </div>
		      <div class="modal-body">
		        <form class="form-horizontal">
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="cate_name">Name:</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="cate_name" name="cate_name" placeholder="Enter category">
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="cate_desc">Description:</label>
				    <div class="col-sm-10">
				     <textarea class="form-control" id="cate_desc" name="cate_desc" placeholder="Description Here"></textarea>
				    </div>
				  </div>
				</form>
		      </div>
		      <div class="modal-footer">
		      	<button type="button" class="btn btn-success">Create</button>
		        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
		      </div>
		    </div>

		  </div>
		</div>
		<!-- Modal Delete Category -->
		<div id="myModalDelete" class="modal fade" role="dialog">
		  <div class="modal-dialog modal-sm">

		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Delete category</h4>
		      </div>
		      <div class="modal-body">
		        <p>Do you want to delete this record?</p>
		      </div>
		      <div class="modal-footer">
		      	<button type="button" class="btn btn-info" id="btn-remove">Yes</button>
		        <button type="button" class="btn btn-warning" data-dismiss="modal">No</button>
		      </div>
		    </div>

		  </div>
		</div>
		<!-- Modal Update Category -->
		<div id="myModalUpdate" class="modal fade" role="dialog">
		  <div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Update category</h4>
		      </div>
		      <div class="modal-body">
		        <form class="form-horizontal">
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="cate_name">Name:</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="cate_name" name="cate_name" value="Programming" placeholder="Enter category">
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="cate_desc">Description:</label>
				    <div class="col-sm-10">
				     <textarea class="form-control" id="cate_desc" name="cate_desc" placeholder="Description Here">C, C++, C#...</textarea>
				    </div>
				  </div>
				</form>
		      </div>
		      <div class="modal-footer">
		      	<button type="button" class="btn btn-success">Update</button>
		        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
		      </div>
		    </div>

		  </div>
		</div>
    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="<?php echo base_url() ?>assets/js/jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
    		$(document).ready(function(){
    			// Load category when page load
    			window.onload = function(){
    				load_category();
    			};
    		    $('[data-toggle="tooltip"]').tooltip();
    		    // Create category
    		    $('#btn-create').on('click', function(){
    		    	$.ajax({
    		    		url: "<?php echo base_url() ?>welcome/create_category",
    		    		type: "POST",
    		    		data: $('#frm-create').serialize(),
    		    		dataType: 'json',
    		    		success: function(data){
    		    			if(data.status)
    		    			{
    		    				// clear form
    		    				load_category();
    		    				$('#frm-create')[0].reset();
    		    				alert('Record created...');
    		    			}
    		    		},
    		    		error: function(){
    		    			alert('Error....');
    		    		}
    		    	});
    		    });
    		    // Load delete modal
    		    $('#category-row').on('click', '.btn-confirm-delete', function(){
    		    	var id = $(this).attr('dataid');
    		    	$('#myModalDelete').data('id', id).modal('show');
    		    });
    		    // Delete record from database
    		    $('#btn-remove').on('click', function(){
    		    	var id = $('#myModalDelete').data('id');
    		    	$.ajax({
    		    		url: "<?php echo base_url() ?>welcome/delete_category",
    		    		type: "POST",
    		    		data: {cate_id:id},
    		    		dataType: 'json',
    		    		success: function(data){
    		    			alert('Category deleted successfully...');
    		    			// remove row on table
    		    			$('#row-id-'+id).remove();
    		    			// Hide myModalDelete
    		    			$('#myModalDelete').modal('hide');
    		    		},
    		    		error: function(){
    		    			alert('Error....');
    		    			$('#myModalDelete').modal('hide');
    		    		}
    		    	});
    		    });
    		    // Load edit modal with record from database
    		    $('#category-row').on('click', '.btn-confirm-update', function(){
    		    	var id = $(this).attr('dataid');
    		    	$.ajax({
    		    		url: "<?php echo base_url() ?>welcome/get_update_category",
    		    		type: "POST",
    		    		data: {cate_id:id},
    		    		dataType: 'json',
    		    		success: function(data){
    		    			$('#form-update-category').html(data);
    		    			$('#myModalUpdate').modal('show');
    		    		},
    		    		error: function(){
    		    			alert('Error....');
    		    		}
    		    	});
    		    });
    		    // Update record into database
    		    $('#btn-update').on('click', function(){
    		    	$.ajax({
    		    		url: "<?php echo base_url() ?>welcome/update_category",
    		    		type: "POST",
    		    		data: $('#form-update-category').serialize(),
    		    		dataType: 'json',
    		    		success: function(data){
    		    			// Load category
    		    			load_category();
    		    			alert('Category updated successfully...');
    		    			// Hide myModalDelete
    		    			$('#myModalUpdate').modal('hide');
    		    		},
    		    		error: function(){
    		    			alert('Error....');
    		    		}
    		    	});
    		    });
    		    // Load category function
    		    function load_category()
    		    {
    		    	$.ajax({
    		    		url: "<?php echo base_url() ?>welcome/get_category",
    		    		type: "GET",
    		    		dataType: 'json',
    		    		success: function(data){
    		    			$('#category-row').html(data);
    		    		},
    		    		error: function(){
    		    			alert('Error....');
    		    		}
    		    	});
    		    }
    		    // Fix tooltip not work
    		    $('body').tooltip({
    		    	selector: '[data-toggle="tooltip"]'
    		    });
    		});
    	</script>
</body>

</html>
