<?php
session_start();
if(isset($_SESSION['uid']))
{
header('location:user/index.php');
}
if(isset($_SESSION['auid']))
{
header('location:Admn/index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
  <head> <title> SignIn to The India Helpers</title>
    <link rel="stylesheet" href="css/Link/Login.css">
    <link rel="stylesheet" href="css/Link/Login_2.css">
    <link rel="stylesheet" href="css/Link/Login_3.css">
    <link rel="icon" type="image/x-icon" href="./images/logo.png">
    <link rel="stylesheet" href="css/index_css.css">
    <link rel="stylesheet" href="css/Link/Login_4.css">
</head>

  <body class="logged-out env-production page-responsive min-width-0 session-authentication">
  <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php"> <img src="./images/logo.png"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="room.php">Rooms</a></li>
            <li><a href="food.php">Food</a></li>
              <li><a href="job.php">Jobs</a></li>
               <li><a href="about.php">About Us</a></li>
         
              <li><a href="contact.php">Contact Us</a></li>
              
            <li><a href="login.php">Login</a></li>
            <li><a href="signup.php">SignUp</a></li>
          
                
          </ul>
          <ul class="nav navbar-nav navbar-right" id="social">
            <li><a href="#"><i class="fa fa-dribbble"></i></a> 
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>   
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>   
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          </ul>
        </div>
      </div>
    </nav>
    <br>
    <br><br>

  <div class="position-relative js-header-wrapper ">
    <a href="#start-of-content" tabindex="1" class="px-2 py-4 bg-blue text-white show-on-focus js-skip-to-content">Skip to content</a>
    <div id="js-pjax-loader-bar" class="pjax-loader-bar"><div class="progress"></div></div>

    
    
    


      <div class="header header-logged-out width-full pt-5 pb-4" role="banner">
  <div class="container clearfix width-full text-center">
    <a class="header-logo" href="https://github.com/" aria-label="Homepage" data-ga-click="(Logged out) Header, go to homepage, icon:logo-wordmark">
      <a class="login" href="#"> 
      <img src="images/logo.png" style=" border-style: none; height: 81px; width: 119px;margin-right:350px;"></a>
    </a>
  </div>
</div>


  </div>

  <div id="start-of-content" class="show-on-focus"></div>



  <div role="main" class="application-main " >
      
      <div id="js-pjax-container" data-pjax-container>
        

<div class="auth-form px-3" id="login">
    <div class="auth-form-header p-0">
        <h1>Sign in to The India Helpers</h1>
      </div>

    <div class="auth-form-body mt-3">
<form method="post" action="login.php">
<label for="login_field">
          Username or email address
        </label>
        <select style="height:35px;width:270px;border-radius:5px;" name="search_find">
                       
                       <option value="0">Login Type</option>
                       <option value="1">User</option>
                       <option value="2">Admin</option>
                      
                       </select>
           <label for="login_field">
          Username or email address
        </label>
        <input type="text" name="uname" id="login_field" class="form-control input-block" tabindex="1" autocapitalize="off" autocorrect="off" autofocus="autofocus" required/>

        <label for="password">
          Password <a class="label-link" href="./user/forget_password.php">Forgot password?</a>
        </label>
        <input type="password" name="psw" id="password" class="form-control form-control input-block" tabindex="2" required/>

        <input type="submit" name="user_login" value="Sign in" tabindex="3" class="btn btn-primary btn-block" data-disable-with="Signing in…" />
    
          </form>
       

    
         <?php
           include('./include/mydb.php');
           if(isset($_POST['user_login']))
           {
                $selectOption = $_POST['search_find'];
                $login_name=$_POST['uname'];
                $login_psw=$_POST['psw'];
           
               if($selectOption==0)
               {
                ?>
                  <script>
                  alert('please select valid user');
                      window.open('login.php', '_self');
                  </script>
                  <?php

               
               }

               if($selectOption==1)
               {
$qry = "SELECT * FROM `user_login` WHERE `user_email`= '$login_name' AND `user_password`='$login_psw'; ";
                $run = mysqli_query($con, $qry);
                $row = mysqli_num_rows($run);
                if($row > 0)
                {
                  $data = mysqli_fetch_assoc($run);
                  
                  $id = $data['user_id'];
                  $_SESSION['uid'] = $id;
                  $_SESSION['username'] = $login_name;
                  ?>
                  <script>
                
                      window.open('./user/index.php', '_self');
                  </script>
                  <?php
           
                }
                else
                {
                 
                  ?>
                  <script>
                  alert('None Type User');
                      window.open('login.php', '_self');
                  </script>
                  <?php
                }
                }
echo $selectOption;
               if($selectOption==2)
               {
                 echo $login_name;
                 echo $login_psw;
               
        $qry = "SELECT * FROM `admin` WHERE `admin_user_name`= '$login_name' AND `admin_user_password`='$login_psw'; ";
                $run = mysqli_query($con, $qry);
                $row = mysqli_num_rows($run);
                echo $row;
                if($row > 0)
                {
                  
                  $data = mysqli_fetch_assoc($run);
                  $id = $data['admin_id'];
                  $_SESSION['auid'] = $id;
                  ?>
            <script>
           
                window.open('./Admn/index.php', '_self');
            </script>
            <?php 
                }
               else
                {
                  ?>
                  <script>
                  alert('None Type User');
                      window.open('login.php', '_self');
                  </script>
                  <?php
                }
                }
              }
               ?>

      <p class="create-account-callout mt-3">
        New to The India Helpers?
        <a data-ga-click="Sign in, switch to sign up" href="signup.php">Create an account</a>.
      </p>
</div>
   </div>
</div>
      </div>

  </body>
</html>

