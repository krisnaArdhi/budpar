<!doctype html>
<html lang="en" dir="ltr">
  <head>

      <?php include APPPATH.'views/nimda/head.php';?>

      <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">

    <script>
        requirejs.config({
    paths: {
    'summernote' : 'https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4'
    }
});
    </script>


       </head>
  <body class="">
    <div class="page">
      <div class="page-main">
          <?php include APPPATH.'views/nimda/header.php';?> 
          <?php include APPPATH.'views/nimda/navbar.php';?> 
        <div class="my-3 my-md-5">
          <div class="container">
            <div class="page-header">
              <h1 class="page-title">
                Blog components
              </h1>
            </div>
            <!-- #isi -->

            <div class="row">
                <div class="col-12">
                    <?php echo validation_errors();?>
                    <?php $attributes = array('class' => 'card');?>
                    <?php echo form_open_multipart('post/create',$attributes);?>
                    <div class="card-header">
                        <h3 class="card-title">Buat Post</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="judul">Judul</label>
                                    <input class="form-control" type="input" name="judul">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="artikel">Isi</label>
                                     <textarea id="summernote" class="form-control" name="artikel"></textarea>
                                    <div id="editor"></div>
                                </div>
                                <div class="form-group">
                                    <div class="form-label">Upload Gambar Header</div>
                                    <div class="custom-file">
                                        <input class="custom-file-input" type="file" name="headerpost">
                                        <label class="custom-file-label">Pilih Gambar</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <div class="d-flex">
                            <a class="btn btn-link" href="#">Batal</a>
                            <!--<button class="btn btn-primary ml-auto" type="submit" name="submit">Post</button>-->
                            <input type="submit" class="btn btn-primary ml-auto" name="submit" value="post">
                        </div>
                    </div>
                    </form>

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
    <script>
    
    </script>
    <script>
requirejs(['jquery','bootstrap', 'summernote'], function(){
    $(document).ready(function(){
        $('#summernote').summernote({
        height: 200
    });
    })
});
    </script>
  </body>

<
