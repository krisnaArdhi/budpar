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
