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
              
              <h1 style="color:bisque ;  margin-top:  80px;" class="display-3">You have successfully signed up</h1>
                <br><br>
             <p class="text-black" style="font-size:25;">Thanks for joining us !
               <br>You will be able to Upload any question
               <br>Get lots of information here :)</p>
               <a href="<?php echo base_url() . 'index.php/pages/view/login' ?>" class="btn btn-light btn-lg active" role="button" style="padding:5px; font-size:18px;">Login</a>
<br><br>
              </div>
            </div>
          </div>
  </body>
</html>