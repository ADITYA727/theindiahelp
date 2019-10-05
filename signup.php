<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="./css/link/signup.css">
    <link rel="stylesheet" href="./css/link/signup_2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" href="./css/Link/Rooms.css/Rooms_2.css" />
        <link rel="icon" type="image/x-icon" href="./images/logo.png">
        <link rel="stylesheet" href="css/index_css.css">
        <link rel="stylesheet" type="text/css" href="./css/Link/Rooms.css/Rooms_3.css">
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
      <div id="js-pjax-loader-bar" class="pjax-loader-bar">
      <div class="progress"></div>
      </div>
       <div class="header header-logged-out width-full pt-5 pb-4" role="banner">
        <div class="container clearfix width-full text-center">
        <a class="login" href="#"> 
        <img src="images/logo.png" style=" border-style: none; height: 81px; width: 119px; margin-right:350px;"></a>
  </div>
</div>
  </div>
  
        

<div class="auth-form px-3" id="login">

        <div class="auth-form-header p-0">
        <h1>Sign in to The India Help</h1>
      </div>
      <div id="js-flash-container">
</div>


      <div class="auth-form-body mt-3">
        <form method="post" action="signup.php">
        <label for="login_field">
          Username 
        </label>
        <input type="text" name="name" id="login_field" class="form-control input-block" tabindex="1" autocapitalize="off" autocorrect="off" autofocus="autofocus"  required/>
           <label for="login_field">
          Contact Number
        </label>
        <input type="text" name="mob" id="login_field" class="form-control input-block" tabindex="1" autocapitalize="off" autocorrect="off" autofocus="autofocus"  required/>
           <label for="login_field">
          Email Address
        </label>
        <input type="text" name="email" id="login_field" class="form-control input-block" tabindex="1" autocapitalize="off" autocorrect="off" autofocus="autofocus" required/>
           <label for="login_field">
          Password
        </label>
        <input type="Password" name="pass" id="login_field" class="form-control input-block" tabindex="1" autocapitalize="off" autocorrect="off" autofocus="autofocus" required/>
      

        <input type="submit" name="submit_user" value="Sign in" tabindex="3" class="btn btn-primary btn-block"  />
            </form>
          
          
          
           <?php
     
      if(isset($_POST['submit_user']))
      {
           include('./include/mydb.php');
           $user_name=$_POST['name'];
           $user_mob=$_POST['mob'];
           $user_email=$_POST['email'];
           $user_pass=$_POST['pass'];
          
$qry = "INSERT INTO `user_login`(`user_name`,`user_mobile`,`user_email`,`user_password`) 
       VALUES ('$user_name', '$user_mob', '$user_email', '$user_pass')";
          $run = mysqli_query($con, $qry);
          if($run == true)
          {
              ?>
      <script>
      alert('Thank You For Registration!!!!!!!');
          window.open('login.php', '_self');
      </script>
      <?php
          }
          else
          {
         ?>
      <script>
      alert('Thank You For Registration!!!!!!!');
          window.open('signup.php', '_self');
      </script>
      <?php
   
          }
          }
    ?>
      </div>
 <p class="create-account-callout mt-3">
        Have a Account?
        <a data-ga-click="Sign in, switch to sign up" href="/join?source=login">Login an account</a>.
      </p>   
  </div>
  </body>
</html>