<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
    .login-form {
        width: 340px;
        margin: 50px auto;
    }
    .login-form form {
        margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
</style>
</head>
  <body background="<?php echo base_url('assets/images/1.jpg'); ?>">
    <div class="login-form">

    <form class="form-signin" method="post" action="<?php echo base_url('index.php/Login/loginAwal') ?>">
        <h2 class="text-center">Sign in</h2>    
        <div class="form-group">
        <?php echo validation_errors();?>
        <div class="input-group">

            
            <span class="input-group-addon">
              <span class="glyphicon glyphicon-user"></span>
            </span>
            <input type="text" name="username" id="username" class="form-control" placeholder="Username" autofocus>
        </div>
        <br>
        <div class="input-group">
            <span class="input-group-addon">
              <span class="glyphicon glyphicon-lock"></span>
            </span>
           <input type="password" name="password" id="password" class="form-control" placeholder="Password">
        </div>
        <br>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Log in</button>
        </div>
        <div class="text-center"> <a href="<?php echo base_url('index.php/Login/register') ?>">Create an account</a></div> 
    </form>
   
</div>
        </div>
      </div>
    </div>
  </body>
</html>
