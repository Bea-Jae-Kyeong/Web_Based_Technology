<!doctype html>
<html lang="en">
  <head>
      <title>MyPage</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, 
                                   initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" >
       <!----STYLE CSS--->
  <style>
          
          body{
              background-image: url('<?php echo asset_url().'images/kare.jpg' ?>');
              background-repeat: no-repeat;
              
          }
      </style>
    
  </head>
  <body>
    
        <div class="container">
          <div class="row text-center">
            <div class="col">
              
             
  <h1 class="display-3">Hello!</h1>
 <br>
              
                <form>
                    <div class="form-group">
                      <label for="inputName">User Name</label>
                      
                     <input  type="text" id="username" placeholder="UserName">
                    </div>
                
                    
                    <div class="form-group">
                       <label for="in">User Email</label>
                       
                     <input  type="email" id="email" placeholder="example@red.ujaen.es">
                    </div>   
                    
                    
                    
                    <div class="form-group">
                       <label for="in">Change Password</label>
                         <input  type="password" id="in1" placeholder="">
                    </div>  
                    
                     <div class="form-group">
                     <label for="in">Confirm Password</label>
                     <input  type="password" id="in2" placeholder="">
                           </div>   
               
                    
                </form>
                   <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">Private</label>
                    </div>
                    
                <br>
                
                
                   <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">Public</label>
                    </div>
                    <br>
                    <a href="<?php echo base_url() . 'index.php/pages/view/' ?>" class="btn btn-dark">Save</a>
                    <a href="<?php echo base_url() . 'index.php/pages/view/' ?>" class="btn btn-dark">Cancel</a>

              </div>
            
            </div>
          
          </div>
      
      
      
      
      
      
   
  </body>
</html>