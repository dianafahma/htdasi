<style type="text/css">
  .wondrous{
     width:50%;
     padding:5px; 
     margin-bottom: -13px;
     padding-right: 12px;
  }
  h4{
    color: red;
    font-size: 13;
  }
</style>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Admin Wondrous</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>media/frontend/admin/login/css/normalize.css">
    <link href="<?php echo base_url().'media/frontend/admin/login/css/style.css';?>" rel="stylesheet" type="text/css" media="all" />
    <script src="<?php echo base_url(); ?>media/frontend/admin/login/js/prefixfree.min.js"></script>
  
  </head>
  <body>

    <div class="wrapper">
    
    <h4><?php echo validation_errors(); ?></h4>
    <?php echo form_open('admin/verifylogin','class="login"'); ?>
    <p class="title"><img class="wondrous" src="<?php echo base_url().'media/frontend/admin/login/img/wondrous1.png'; ?>">Admin Login </p>
    
    <input type="text" id="username" name="username" placeholder="Username">
    <i class="fa fa-user"></i>
    <input type="password" id="password" name="password" placeholder="Password">
    <i class="fa fa-key"></i>
    <a href="#">Forgot your password?</a>
    <button type="submit">
      <i class="spinner"></i>
      <span class="state">Log in</span>
    </button>
  </form>
  <!-- <footer><a target="blank" href="http://boudra.me/">boudra.me</a></footer> -->
  </p>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="<?php echo base_url(); ?>media/frontend/admin/login/js/index.js"></script>

    
    
    
  </body>
</html>
