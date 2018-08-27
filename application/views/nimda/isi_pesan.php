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

            <!-- #isi -->
            <div class="col-lg-12">
              <div class="card">
               <div class="card-header">
                 <h3 class="card-title">pesan masuk via contact us</h3>
               </div>
               <div class="card-body">
                 <?php
                 if (empty($data_pesan))
                 {
                   echo "<tr><td colspan=\"6\">Data tidak tersedia</td></tr>";
                 }else
                 {
                    foreach ($data_pesan as $isi)
                 {
                 ?>
                 <form action="<?php echo base_url();?>contact_us/balas/<?php echo $isi->id_pesan;?>">
                   <div class="form-group">
                     <div class="row align-items-center">
                       <label class="col-sm-2">Dari : </label>
                       <div class="col-sm-10">
                         <input type="text" value="<?php echo $isi->email;?>" class="form-control">
                       </div>
                     </div>
                   </div>
                   <div class="form-group">
                     <div class="row align-items-center">
                       <label class="col-sm-2">Nama : </label>
                       <div class="col-sm-10">
                         <input type="text" value="<?php echo $isi->nama;?>" class="form-control">
                       </div>
                     </div>
                   </div>
                   <textarea rows="10" class="form-control" disabled> <?php echo $isi->pesan;?></textarea>
                   <div class="btn-list mt-4 text-right">
                     <button type="submit" class="btn btn-primary btn-space">Balas</button>
                   </div>
                 </form>
                 <?php
                  }}
                  ?>
               </div>
             </div>

            </div>
            <!-- /#isi -->
          </div>
        </div>
      </div>

    </div>
  </body>
</html>
