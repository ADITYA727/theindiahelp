





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
<div class="auth-form-header p-0">
        <h1>Enter Food in to The India Help</h1>
      </div>


      <div id="js-flash-container">


</div>


      <div class="auth-form-body mt-3">
        <form method="post" action="enter_food.php" enctype="multipart/form-data">
        <label for="login_field">
          Food Title
        </label>
        <input type="text" name="food_title" id="login_field" class="form-control input-block" tabindex="1" autocapitalize="off" autocorrect="off" autofocus="autofocus" />
           <label for="login_field">
          Food Name
        </label>
        <input type="text" name="food_name" id="login_field" class="form-control input-block" tabindex="1" autocapitalize="off" autocorrect="off" autofocus="autofocus" />
           <label for="login_field">
          Food Type
        </label>
        <input type="text" name="food_type" id="login_field" class="form-control input-block" tabindex="1" autocapitalize="off" autocorrect="off" autofocus="autofocus" />
           <label for="login_field">
          Food Description
        </label>
        <input type="text" name="food_des" id="login_field" class="form-control input-block" tabindex="1" autocapitalize="off" autocorrect="off" autofocus="autofocus" />
      <label for="login_field">
          Food Price
        </label>
        <input type="number" name="food_rent" id="login_field" class="form-control input-block" tabindex="1" autocapitalize="off" autocorrect="off" autofocus="autofocus" />
              <label for="login_field">
          Food Image
        </label>
        <input type="file" name="food_image" id="login_field" class="form-control input-block" tabindex="1" autocapitalize="off" autocorrect="off" autofocus="autofocus" />

<input type="submit" name="food_login" value="Sign in" tabindex="3" class="btn btn-primary btn-block"  />
            </form>
          
          
        
        
          
          
           <?php
     
      if(isset($_POST['food_login']))
      {

         
          include('../include/mydb.php');
            $food_title=$_POST['food_title'];
            $food_name=$_POST['food_name'];
            $food_type=$_POST['food_type'];
            $food_des=$_POST['food_des'];
             $food_rs=$_POST['food_rent'];
             $food_img=$_FILES['food_image']['name'];
          $tempname = $_FILES['food_image']['tmp_name'];
          move_uploaded_file($tempname, "./upload_images/$food_img");

$qry = "INSERT INTO `admin_enter_food`(`enter_food_title`, `food_name`, `food_type`, `food_provider`, `food_rs`, `enter_food_image`,created_on
)
VALUES ('$food_title','$food_name','$food_type','$food_des','$food_rs','$food_img',NOW())";
          $run = mysqli_query($con, $qry);
          if($run == true)
          {
              ?>
      <script>
      alert('Food  successfully enter');
      window.open('index.php', '_self');
      </script>
      <?php
          }
          else
          {
         ?>
      <script>
       alert('Food not enter');
       window.open('enter_food.php', '_self');
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

