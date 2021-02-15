<html>
	<link rel="stylesheet" href="<?php echo asset_url().'css/bootstrap.css'?>">
	<link rel="stylesheet" href="<?php echo asset_url().'css/style.css'?>">
  <script src="<?php echo asset_url().'js/controller.js'?>" ></script>
<script src="<?php echo asset_url().'js/jquery-3.3.1.js'?>" ></script>
    <script src="<?php echo asset_url().'js/popper.min.js'?>" ></script>
    <script src="<?php echo asset_url().'js/bootstrap.js'?>" ></script>

<script src="<?php echo asset_url().'bootstrap.min.css'?>"></script>
<body>
<div class="container" style="background-color: #e3f2fd;">
 <div class="page-header">
 <nav class="navbar navbar-light">
          
          <div class="container">          
    
          <button class="navbar-toggler" data-toggle="collapse" data-target="#nvbCollapse">
              <span class="navbar-toggler-icon"></span>
              </button>
              <img src="<?php echo asset_url().'images/logo.png'?>" width= 80px;>
							<a href="<?php echo base_url() . 'index.php/pages/view/' ?>" style="color:cornflowerblue; font-size:30px;" class="navbar-brand">CODEFORCES</a>
              <?php echo form_open('post/skeyword'); ?>
              <input class="form-control mr-sm-2" type="text" id="title" placeholder="Search" aria-label="Search" style="width:200px; float:left;">
              <input type="submit" name="submit" value="Search" id="register"  class="btn btn-outline-success my-2 my-sm-0" role="button" style="float:left;" aria-pressed="true"/>
          </form>
                 <a href="<?php echo base_url() . 'index.php/pages/view/login' ?>" class="btn btn-white btn-lg active" role="button" aria-pressed="true" style="width:10px; font-size:18px;">Login</a>
								 <a href="<?php echo base_url() . 'index.php/pages/view/signup' ?>" class="btn btn-light btn-lg active" role="button" aria-pressed="true" style="padding:5px; font-size:18px;">Sign Up</a>


					<div class="collapse navbar-collapse" id="nvbCollapse">
          <ul class="nav justify-content-end">
      <li class="nav-item">
        <a class="nav-link active" href="<?php echo base_url() . 'index.php/pages/view' ?>">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() . 'index.php/pages/view/postview' ?>">Post your Problem</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() . 'index.php/pages/view/AboutUs' ?>">About Us</a>
      </li>
         
      </ul>
						 </div>
</div>
    </nav>
	</div>
</div>

