





<!DOCTYPE html>
<html lang="en">
  <head>





 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="../css/Link/Rooms.css/Rooms_2.css">
        <link rel="icon" type="image/x-icon" href="../images/logo.png">
        <link rel="stylesheet" href="../css/index_css.css">
        <link rel="stylesheet" type="text/css" href="../css/Link/Rooms.css/Rooms_3.css">

<link rel="stylesheet" type="text/css" href="../css/Link/Enter_room.css/Enter_room_1.css">
 <link rel="stylesheet" type="text/css" href="../css/Link/Enter_room.css/Enter_room_2.css">
  <link rel="stylesheet" type="text/css" href="../css/Link/Enter_room.css/Enter_room_3.css">
  
  <title>Sign in to The India Helpers</title>
  
 

  </head>

  <body class="logged-out env-production page-responsive min-width-0 session-authentication">
    

<header style="margin-top: 10%" id="header-container">
  <div id="top_bar">
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php"> <img src="../images/logo.png"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="enter_room.php">Rooms</a></li>
            <li><a href="enter_food.php">Food</a></li>
              <li><a href="enter_job.php">Jobs</a></li>
              <li><a href="send_email.php">Send Email</a></li>
               <li><a href="notification.php">Notification</a></li>
          
              
            <li><a href="../logout.php">Logout</a></li>
     
          
                
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
	</div>
</header>


  <div class="position-relative js-header-wrapper ">
    <a href="#start-of-content" tabindex="1" class="px-2 py-4 bg-blue text-white show-on-focus js-skip-to-content">Skip to content</a>
    <div id="js-pjax-loader-bar" class="pjax-loader-bar"><div class="progress"></div></div>

    
    
    


      <div class="header header-logged-out width-full pt-5 pb-4" role="banner">
  <div class="container clearfix width-full text-center">
   <a class="login" href="#"> <img src="../images/logo.png" style=" border-style: none; height: 81px; width: 119px;"></a>
  </div>
</div>


  </div>

  <div id="start-of-content" class="show-on-focus"></div>



  <div role="main" class="application-main " >
      
      <div id="js-pjax-container" data-pjax-container>
        

<div class="auth-form px-3" id="login">

    <!-- '"` --><!-- </textarea></xmp> -->     <div class="auth-form-header p-0">
        <h1> Send Email By The India Help</h1>
      </div>


      <div id="js-flash-container">


</div>


      <div class="auth-form-body mt-3">
        <form method="post" action="send_email.php">
           <label for="login_field">
          Email Address
        </label>
        <input type="email" name="email_address" id="login_field" class="form-control input-block" tabindex="1" autocapitalize="off" autocorrect="off" autofocus="autofocus" />
           <label for="login_field">
          Enter Message
        </label>
        <input type="text"   name="email_text"  id="login_field" class="form-control input-block" tabindex="1" autocapitalize="off" autocorrect="off" autofocus="autofocus"  style="height:100px;" />
      

  <input type="submit" name="email_login" value="Sign in" tabindex="3" class="btn btn-primary btn-block"  />
            </form>
          
          
          
          
                <?php
     
      if(isset($_POST['email_login']))
      {
           include('../include/mydb.php');
            $email=$_POST['email_address'];
           $text=$_POST['email_text'];
   
          
          
$qry = "INSERT INTO `admin_enter_email`(`admin_email`, `admin_text`) VALUES ('$email','$text')";
          $run = mysqli_query($con, $qry);
          if($run == true)
          {
              ?>
      <script>
      alert('Email Send');
      </script>
      <?php
          }
          else
          {
         ?>
      <script>
      alert('Email not Send');
      </script>
      <?php
   
          }
          }
    ?>
    </div>
          </div>
      </div>
      </div>
      

  </body>
</html>

