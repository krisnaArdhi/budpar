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
              <div class="col-lg-8">
                <h1 class="page-title">
                    Posts
                </h1>
              </div>
              <div class="col-lg-4 page-options text-right">
                  <a class="btn btn-success btn-md" href="<?php echo base_url()?>admin/post/create">Buat Post  <i class="fe fe-plus"></i></a>
              </div>
            </div>
            <!-- #isi -->
            <div class="row row-cards row-deck">
            <?php foreach ($posts as $post): ?>
            <div class="col-lg-12">
                <div class="card card-aside" style="min-height:300px">
                <?php if ($post['post_image'] !== 'noimage.jpg') : ?>
                <div class="card-aside-column" style="background-image: url(<?php echo site_url();?>assets/images/posts/<?php echo $post['uri'];?>/<?php echo $post['post_image']?>); height:auto"></div>
                <?php endif;?>
                    <div class="card-body d-flex flex-column">
                        <div class="alert alert-warning alert-dismissible" id="del<?php echo $post['id'];?>" style="display:none">
                            <p>
                            Delete post: <?php echo $post['judul'];?>?
                            </p>
                            <div class="btn-list">
                              <?php echo form_open('post/delete/'.$post['id']);?>
                                  <input class="btn btn-danger" type="submit" value="Delete">
                                  <button class="btn btn-secondary ml-2" data-dismiss="alert" type="button">Batal</button>
                              </form>
                            </div>
                        </div>
                        <div class="card-header">
                            <h4><?php echo $post['judul'];?></h4>
                            <div class="card-options">
                                <a class="btn btn-primary btn-sm" href="<?php echo base_url()?>admin/post/edit/<?php echo $post['uri'];?>">Edit Post</a>
                                <button class="btn btn-danger btn-sm ml-2" onclick="deleteConfirm('<?php echo $post['id'];?>')">Delete</button>
                            </div>
                        </div>
                        <div>
                            <?php echo $post['artikel'];?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
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
function deleteConfirm(id){
    document.getElementById("del"+id).style.display = "block";
}
    </script>
  </body>
</html>
