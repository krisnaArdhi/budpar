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
                  Daftar pesan masuk via contact us
                </h1>
              </div>
              <!-- #isi -->
              <div class="row">
                <div class="col-md-3">
                <div>
                  <div class="list-group list-group-transparent mb-0">
                    <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                      <span class="icon mr-3"><i class="fe fe-inbox"></i></span>Semua <span class="ml-auto badge badge-primary"><?php echo $ttl_pesan;?></span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                      <span class="icon mr-3"><i class="fe fe-inbox"></i></span>Belum Dibaca <span class="ml-auto badge badge-primary"><?php echo $jml_pesan;?></span>
                    </a>
                    
                  </div>
                  <div class="mt-6">
                    <a href="#" class="btn btn-secondary btn-block">Compose new Email</a>
                  </div>
                </div>
              </div>
              <div class="col-md-9">
                <div class="input-group">

                              <input class="form-control" name="search_text" id="search_text" placeholder="Search for email" type="text">
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
