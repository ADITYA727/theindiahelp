





<!DOCTYPE html>
<html lang="en">
  <head>




 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
         <link rel="stylesheet" href="../css/Link/Rooms.css/Rooms_2.css">
        <link rel="icon" type="image/x-icon" href="../images/logo.png">
        <link rel="stylesheet" href="../css/index_css.css">
        <link rel="stylesheet" type="text/css" href="../css/Link/Rooms.css/Rooms_3.css">

<link rel="stylesheet" type="text/css" href="../css/Link/Enter_room.css/Enter_room_1.css">
 <link rel="stylesheet" type="text/css" href="../css/Link/Enter_room.css/Enter_room_2.css">
  <link rel="stylesheet" type="text/css" href="../css/Link/Enter_room.css/Enter_room_3.css">
  
  
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

 <div class="header header-logged-out width-full pt-5 pb-4" role="banner">
  <div class="container clearfix width-full text-center">
   <a class="login" href="#"> <img src="../images/logo.png" style=" border-style: none; height: 81px; width: 119px;"></a>
  </div>
</div>

 <div id="start-of-content" class="show-on-focus"></div>
<div role="main" class="application-main " >
       <div id="js-pjax-container" data-pjax-container>
        

<div class="auth-form px-3" id="login">

    <div class="auth-form-header p-0">
        <h1>Enter Job in to The India Help</h1>
      </div>


      <div id="js-flash-container">


</div>


      <div class="auth-form-body mt-3">
        <form method="post" action="enter_job.php" enctype="multipart/form-data">
        <label for="login_field">
          Job Title
        </label>
        <input type="text" name="job_title" id="login_field" class="form-control input-block" tabindex="1" autocapitalize="off" autocorrect="off" autofocus="autofocus" />
           <label for="login_field">
          Job Profile
        </label>
        <input type="text" name="job_profile" id="login_field" class="form-control input-block" tabindex="1" autocapitalize="off" autocorrect="off" autofocus="autofocus" />
           <label for="login_field">
          Job Type
        </label>
        <input type="text" name="job_type" id="login_field" class="form-control input-block" tabindex="1" autocapitalize="off" autocorrect="off" autofocus="autofocus" />
           <label for="login_field">
          Job Description
        </label>
        <input type="text" name="job_desc" id="login_field" class="form-control input-block" tabindex="1" autocapitalize="off" autocorrect="off" autofocus="autofocus" />
      <label for="login_field">
          Job Location
        </label>
        <input type="text" name="job_loca" id="login_field" class="form-control input-block" tabindex="1" autocapitalize="off" autocorrect="off" autofocus="autofocus" />
              <label for="login_field">
          Job Image
        </label>
        <input type="file" name="job_img" id="login_field" class="form-control input-block" tabindex="1" autocapitalize="off" autocorrect="off" autofocus="autofocus" />

        <input type="submit" name="job_login" value="Sign in" tabindex="3" class="btn btn-primary btn-block"  />
            </form>
          
           
            <?php
     
      if(isset($_POST['job_login']))
      {

         
          include('../include/mydb.php');
            $job_title=$_POST['job_title'];
            $job_pro=$_POST['job_profile'];
            $job_type=$_POST['job_type'];
            $job_des=$_POST['job_desc'];
            $job_loca=$_POST['job_loca'];
            $job_img=$_FILES['job_img']['name'];
            $tempname = $_FILES['job_img']['tmp_name'];
            move_uploaded_file($tempname, "./upload_images/$job_img");

$qry = "INSERT INTO `admin_enter_job`(`enter_job_title`, `Job_profile`, `job_type`, `job__description`, `job_location`, `enter_job_image`) VALUES ('$job_title','$job_pro','$job_type','$job_des','$job_loca','$job_img')";
          $run = mysqli_query($con, $qry);
          if($run == true)
          {
              ?>
      <script>
      alert('Job successfully enter');
      </script>
      <?php
          }
          else
          {
         ?>
      <script>
       alert('Job not enter');
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

