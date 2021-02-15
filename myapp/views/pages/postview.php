<html>
<style>
          
          body{
              background-image: url('<?php echo asset_url().'images/kare.jpg' ?>');
              background-repeat: no-repeat;
              
          }
      </style>
<body>
<div class="container">
          <div class="row text-center">
            <div class="col">
              
             
  <h1 class="display-4" style="color:green;">Post your problem</h1><br>
          <?php echo form_open('post/add'); ?>
          
          <div class="form-group">
                      <label for="title">Title:</label><input class="form-control" type="text" name="title"></div>
                      <div class="form-group">
                      <label for="title">Write:</label>
          <textarea class="form-control mr-sm-2" name="descs" size="100px"></textarea>
          <br><input class="btn btn-dark" type="submit" name="submit" value="Post">
          </div>
          </form>
          </div>
          </div>

      
   

</div>
</body>
