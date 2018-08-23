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
                Daftar Wisata
              </h1>
              <button class="btn btn-primary"  data-toggle="modal" data-target="#contohModalKecil">
                  Tambah</button>
            </div>
            <!-- #isi -->
            <div class="col-12">
              <div class="input-group">

                            <input class="form-control" name="search_text" id="search_text" placeholder="Search for..." type="text">
                            <span class="input-group-append">
                              <button class="btn btn-primary" type="submit">Go!</button>
                            </span>


                </div>



              <div class="card">

                <div class="table-responsive">
                  <div id="result"></div>
                </div>
              </div>
            </div>
            <!-- /#isi -->
          </div>
        </div>
      </div>
      <div class="footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="row">
                <div class="col-6 col-md-3">
                  <ul class="list-unstyled mb-0">
                    <li><a href="#">First link</a></li>
                    <li><a href="#">Second link</a></li>
                  </ul>
                </div>
                <div class="col-6 col-md-3">
                  <ul class="list-unstyled mb-0">
                    <li><a href="#">Third link</a></li>
                    <li><a href="#">Fourth link</a></li>
                  </ul>
                </div>
                <div class="col-6 col-md-3">
                  <ul class="list-unstyled mb-0">
                    <li><a href="#">Fifth link</a></li>
                    <li><a href="#">Sixth link</a></li>
                  </ul>
                </div>
                <div class="col-6 col-md-3">
                  <ul class="list-unstyled mb-0">
                    <li><a href="#">Other link</a></li>
                    <li><a href="#">Last link</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mt-4 mt-lg-0">
              Premium and Open Source dashboard template with responsive and high quality UI. For Free!
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container">
          <div class="row align-items-center flex-row-reverse">
            <div class="col-auto ml-lg-auto">
              <div class="row align-items-center">
                <div class="col-auto">
                  <ul class="list-inline list-inline-dots mb-0">
                    <li class="list-inline-item"><a href="./docs/index.html">Documentation</a></li>
                    <li class="list-inline-item"><a href="./faq.html">FAQ</a></li>
                  </ul>
                </div>
                <div class="col-auto">
                  <a href="https://github.com/tabler/tabler" class="btn btn-outline-primary btn-sm">Source code</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-auto mt-3 mt-lg-0 text-center">
              Copyright © 2018 <a href=".">Tabler</a>. Theme by <a href="https://codecalm.net" target="_blank">codecalm.net</a> All rights reserved.
            </div>
          </div>
        </div>
      </footer>
    </div>
    <div class="modal fade" id="contohModalKecil" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel">Tambah data wisata</h4>
            </div>
            <div class="modal-body">
              <form method="post" action="<?php echo base_url();?>fetch_admin/tambah_wisata">
              <div class="card">
                  <div class="card-body card-block">
                    <div class="row form-group">
                            <label for="selectSm" class=" form-control-label">Lokasi Wisata</label>
                            <select name="id_wilayah" id="SelectLm" class="form-control-sm form-control">
                                <option value="0">Please select</option>
                                <?php
                                if (empty($wilayah))
                                {
                                  echo "<tr><td colspan=\"6\">Data tidak tersedia</td></tr>";
                                }else
                                {
                                   foreach ($wilayah as $isi)
                                {
                                ?>
                                <option value="<?php echo $isi->id_wilayah?>"><?php echo $isi->nama_wilayah?></option>
                                <?php
                                 }}
                                 ?>
                            </select>
                    </div>
                      <div class="form-group">
                          <label for="vat" class=" form-control-label">Nama Wisata</label>
                          <input type="text" id="vat" name="nama_wisata" placeholder="masukan nama wisata" class="form-control">
                      </div>
                      <div class="form-group">
                          <label for="street" class=" form-control-label">Deskripsi</label>
                          <input type="text" id="street" name="deskripsi" placeholder="masukan deskripsi tentang objek wisata" class="form-control">
                      </div>
                      <div class="form-group">
                          <label for="street" class=" form-control-label">Foto</label>
                          <input type="text" id="street" name="foto" placeholder="masukan foto" class="form-control">
                      </div>
                  </div>
                  <div class="card-footer">
                      <button type="submit" name="mysubmit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Simpan
                      </button>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                  </div>
              </div>
            </form>
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
   url:"<?php echo base_url(); ?>fetch_admin/fetch_wisata",
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
