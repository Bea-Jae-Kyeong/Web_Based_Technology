<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  
      <title>Success</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, 
                                   initial-scale=1, shrink-to-fit=no">

     <style>
          body{
              
              background-image: url('<?php echo asset_url().'images/e.jpg' ?>');
              background-repeat: no-repeat;
              
          }
          
      </style>
      
  </head>
  <body>
        <div class="container">
          <div class="row text-center">
            <div class="col">
              
              <h1 style="color:bisque ;  margin-top:  120px;" class="display-3">
              You have successfully logged in!</h1>
              You can now go to Mypage.<br><br>
              <a href="<?php echo base_url() . 'index.php/user/profile' ?>" class="btn btn-light btn-lg active" role="button" style="padding:5px; font-size:18px;">My Page</a>

         <a href="<?php echo base_url() . 'index.php/user/logout' ?>" class="btn btn-light btn-lg active" role="button" style="padding:5px; font-size:18px;">Logout</a>
<br><br><br><br><br><br>
              </div>
            </div>
          </div>
  </body>
</html>