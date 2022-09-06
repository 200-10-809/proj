<?php
require('connection.inc.php');
require('function.inc.php');
if(isset($_SESSION['ADMIN_LOGIN']) && $_SESSION['ADMIN_LOGIN']!=''){

}else{
	header('location:login.php');
	die();
}
?>
<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Dashboard Page</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <link rel="stylesheet" href="css/newstyle.css">
    </head>
   <body>
      <aside id="left-panel" class="left-panel">
         <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
               <ul class="nav navbar-nav">
				  <li class="menu-item dropdown"><br/>
                     <h3><a href="index.php">Dashboard</a><h3><br/>
                  </li>
				  <li class="menu-item-has-children dropdown">
                     <a href="product.php" > Product Master</a>
                  </li>
				  <li class="menu-item-has-children dropdown">
                  </li>
				  
				  <li class="menu-item-has-children dropdown">
                     <a href="categories.php" > Categories Master</a>
                  </li>
				  <li class="menu-item-has-children dropdown">
                     <a href="sub_categories.php" > Sub Categories Master</a>
                  </li>
                  
				  <li class="menu-item-has-children dropdown">
                     <a href="users.php" > User Master</a>
                  </li>
				  <li class="menu-item-has-children dropdown">
                     <a href="about_us.php" > About Us</a>
                  </li>
				 
				  <li class="menu-item-has-children dropdown">
                     <a href="contact_us.php" > Contact Us</a>
                  </li>
				   <li class="menu-item-has-children dropdown">
                     <a href="feedback.php" >Feedback</a>
                  </li>
               </ul>
            </div>
         </nav>
      </aside>
      <div id="right-panel" class="right-panel">
         <header id="header" class="header">
            <div class="top-left">
               <div class="navbar-header">
                  <a class="navbar-brand" href="index.php"><h2>Sport360</h2></a>
                  <a class="navbar-brand hidden" href="index.php"><img src="images/logo2.png" alt="Logo"></a>
                  <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
               </div>
            </div>
            <div class="top-right">
               <div class="header-menu">
                  <div class="user-area dropdown float-right ">
                     <a href="#" class="dropdown-toggle active" id="admin-click" onclick = "clicked()" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Welcome <?php echo $_SESSION['ADMIN_USERNAME']?></a>
                     <div class="user-menu dropdown-menu" id="my-logout">
                        <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i>Logout</a>
                        <script scr=""></script>
                     </div>
                  </div>
               </div>
            </div>
         </header>

<script>
   var admin = document.getElementById('admin-click');
   function clicked(){
      var logout = document.getElementById('my-logout');
      logout.classList.toggle("show");
   }   
</script>