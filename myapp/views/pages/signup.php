<!doctype html>
<html lang="en">
  <head>
      <title>Signup</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, 
                                   initial-scale=1, shrink-to-fit=no">
     <style>
          body{
              
            
              
              background-image: url('<?php echo asset_url().'images/cc.jpg' ?>');
              background-repeat: no-repeat;
              
          }
          input:invalid {
  border: 2px solid red;
}
          
      </style>
      
  </head>
  <body>
<script src="<?php echo asset_url().'js/jquery-3.3.1.min.js'?>"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <script src="<?php echo asset_url().'js/controller.js'?>">
</script>
        <div class="container">
          <div class="row text-center">
            <div class="col">
              
              <h1 style="color:black;   margin-left: auto 200px;" class="display-3">JOIN TO BE OUR BRAIN</h1>
                <br>
              <?php echo validation_errors(); ?>
 <?php echo form_open('signup/register'); ?>
                    <div class="form-group">
					 <label for="username">Nick Name</label>
					 <input type="text" id="username" name="username" placeholder="Nick name" 
					 value="<?php echo set_value('username');?>">
                    <span class="text-danger"><?php echo form_error('username');?></span>
                           </div>
                <div class="form-group">
                     <label for="email">Email address</label>
                     <input  type="email" id="email" name="email" placeholder="name@example.es" 
					 value="<?php echo set_value('email');?>">
                    <span class="text-danger"><?php echo form_error('email');?></span>
                           </div>
                
                  <div class="form-group">
                     <label for="password">Password</label>
                     <input  type="password" id="password" name="password" placeholder="******"
					 value="<?php echo set_value('password');?>">
                    <span class="text-danger"><?php echo form_error('password');?></span>
                           </div>   
                    <div class="form-group">
                     <label for="password">Confirm password</label>
                     <input  type="password" id="password" name="password" placeholder="******"
					 value="<?php echo set_value('password');?>">
                    <span class="text-danger"><?php echo form_error('password');?></span>
                           </div>
                           <span id="errMessage"></span>
						           
<div id="dialog-confirm" title="Confirm data sending" style='color:red; display:none;'><br>
Do you really want to send the entered information?
</div><br>
						   <div class="form-group">
                           <input type="submit" name="signup" value="Sign Up" class="btn btn-dark btn-lg active" role="button" onclick="ddd()" aria-pressed="true"/>
               </div>
			   </form>
        

                <a href="#" >Do you want to get an email notification from us?</a>
                <p>
                </p>
                <a href="#">You can change it on "My Page" afterwards</a>
                
                 <p> </p>
                   <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    
                   <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">No</label>
                    </div>
                <br>
              </div>
            </div>
          </div>
  </body>
</html>