<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
      <title>login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, 
                                   initial-scale=1, shrink-to-fit=no">
      
  </head>
  <style>
          body{
              
            
              
              background-image: url('<?php echo asset_url().'images/cc.jpg' ?>');
              background-repeat: no-repeat;
              
          }
          
      </style>
  <body>
     
        <div class="container">
          <div class="row text-center">
            <div class="col">
              
              <h1 style="color:cornflowerblue;   margin-top:  110px;" class="display-2">CODEFORCES</h1>
                
                
                
                
              <?php echo validation_errors(); ?>
 <?php echo form_open('user/login'); ?>
 
 <div class="form-group">
 <label for="email">Email:</label>
 <input type="email" size="20" id="email" name="email" placeholder="name@example.es"/> </div>
 
 <div class="form-group">
 <label for="password">Password:</label>
 <input type="password" size="20" id="password" name="password" placeholder="******"/>
 </div> 
 <input type="submit" value="Login" class="btn btn-dark btn-lg active" role="button" aria-pressed="true"/>
 </form>
                
                <a href="<?php echo base_url() . 'index.php/pages/view/signup' ?>" class="text-info">Sign Up</a>
                <br>  <br>        
                

              </div>
            
            </div>
          
          </div>
      
      
      
  
  </body>
</html>