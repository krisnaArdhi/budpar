<!doctype html>
<html lang="en" dir="ltr">
  <head>
      <?php include 'head.php';?>
  </head>
  <body class="">
   <div class="page">
     <div class="page-single">
       <div class="container">
         <div class="row">
           <div class="col col-login mx-auto">
             <div class="text-center mb-6">
               <img src="./assets/brand/tabler.svg" class="h-6" alt="">
             </div>
             <form class="card" action="<?php echo base_url();?>login/cek_login" method="post">
               <div class="card-body p-6">
                 <div class="card-title">Login to your account</div>
                 <div class="form-group">
                   <label class="form-label">Email address</label>
                   <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                 </div>
                 <div class="form-group">
                   <label class="form-label">
                     Password
                     <a href="./forgot-password.html" class="float-right small">I forgot password</a>
                   </label>
                   <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                 </div>
                 <div class="form-group">
                   <label class="custom-control custom-checkbox">
                     <input type="checkbox" class="custom-control-input" />
                     <span class="custom-control-label">Remember me</span>
                   </label>
                 </div>
                 <div class="form-footer">
                   <button type="submit" name="mysubmit" class="btn btn-primary btn-block">Sign in</button>
                 </div>
               </div>
             </form>
             <div class="text-center text-muted">
               Don't have account yet? <a href="./register.html">Sign up</a>
             </div>
           </div>
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
