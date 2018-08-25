<!doctype html>
<html lang="en" dir="ltr">
  <head>
      <?php include 'head.php';?>
  </head>
  <body class="">
    <div class="page">
      <div class="page-main">
          <?php include 'header.php';?>
          <?php include 'navbar.php';?>
        <div class="my-3 my-md-5">
          <div class="container">
            <div class="page-header">
              <h1 class="page-title">
                Edit Wilayah
              </h1>
            </div>
            <!-- #isi -->
            <div class="col-12">
              <form class="card" method="post" action="<?php echo base_url();?>fetch_admin/simpan_edit_wilayah">
                              <div class="card-body">
                                <div class="row">



                                  <div class="col-md-9">
                                    <div class="form-group">
                                      <label class="form-label">Wilayah</label>
                                      <?php
                                      if (empty($edit_wilayah))
                                      {
                                        echo "<tr><td colspan=\"6\">Data tidak tersedia</td></tr>";
                                      }else
                                      {
                                         foreach ($edit_wilayah as $isi)
                                      {
                                      ?>
                                      <input type="text" class="form-control" name="nama_wilayah" placeholder="Home Address" value="<?php echo $isi['nama_wilayah'];?>">
                                      <input type="text" class="form-control" name="id_wilayah" placeholder="Home Address" hidden value="<?php echo $isi['id_wilayah'];?>">
                                      <?php
                                       }}
                                       ?>
                                    </div>
                                  </div>



                                </div>
                              </div>
                              <div class="card-footer text-right">
                                <button type="submit" name="mysubmit" class="btn btn-primary">Update Wilayah</button>
                              </div>
                            </form>
            </div>
            <!-- /#isi -->
          </div>
        </div>
      </div>
    
    </div>
  </body>
</html>
<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"<?php echo base_url(); ?>fetch_admin/fetch_pesan",
   method:"POST",
   data:{query:query},
   success:function(data){
    $('#result').html(data);
   }
  })
 }

 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>
