<html>

<head>
      <title>search</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, 
                                   initial-scale=1, shrink-to-fit=no">

    
     <style>
          body{
              
              background-image: url('<?php echo asset_url().'images/cc.jpg' ?>');
              background-repeat: no-repeat;
              
          }
      </style>
      
  </head>
<body>
<div class="container">  
<div class="row text-center">
            <div class="col">
              
              <h1 style="color:darkmagenta ;  margin-top:  50px;" class="display-4">List of all Problems
              </h1>
              
              <table><tr>
              <td> TITLE</td>
              <td> DESCS</td>
              <td> EDIT</td>
              <td> DELETE</td>
              </tr>
              <?php if (sizeof($posts) > 0)
              {
              foreach($posts as $post){?> 
              <tr><td>
              <a style="color:blue; font-size:20px;" class="row text-center" href="<?php echo base_url() . 'index.php/pages/view/Problemthings'; ?>">
              <?php echo $post->title;?></a></td>
              <td>  <?php echo $post->descs;?></td>
              <td>  <a href="<?php echo base_url() . 'index.php/post/postedit' ?>" >Edit</a></td>
              <td>  <a href="<?php echo base_url() . 'index.php/post/delete' ?>" >Delete</a></td>
              
              <?php }
} else {
 echo "No user";
} ?></table>
               
                <br>

              </div>
            
            </div>
          
          </div>

        
</body>