<?php
require('connection.inc.php');
require('function.inc.php');
$msg='';
if(isset($_POST['submit']))
{
   $username=get_safe_value($conn,$_POST['username']);
   $password=get_safe_value($conn,$_POST['password']);
   $sql="select * from admin_users where username='$username'and password='$password'";
   $res=mysqli_query($conn,$sql);
   $count=mysqli_num_rows($res);
   if($count>0)
   {
      $_SESSION['ADMIN_LOGIN']='yes';
      $_SESSION['ADMIN_USERNAME']=$username;
      header('location:index.php');
      die();

   }else {
      $msg="Please Enter Valid Details!!";
   }
}

?>
<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Login Page</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
   </head>
   <body class="bg-dark">
      <div class="sufee-login d-flex align-content-center flex-wrap">
         <div class="container">
            <div class="login-content">
               <div class="login-form mt-150">
                  <form method="post">
                     <div class="form-in">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Username" required>
                     </div>
                     <div class="form-in">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                     </div>
                     <button type="submit" name="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
					</form>
					<div class="field_error"><?php  echo $msg?></div>
               </div>
            </div>
         </div>
      </div>
      <script src="assets/js/bootstrap.min.js"></script>
      <script src="assets/js/jquery-3.6.0.min.js" type="text/javascript"></script>
      <script src="assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>
      <script src="assets/js/plugins.js" type="text/javascript"></script>
      <script src="assets/js/main.js" type="text/javascript"></script>
   </body>
</html>