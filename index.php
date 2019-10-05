


<!DOCTYPE html>
<html >
	<head>
 <title>The India Helpers</title>
 <?php include('./include/head.php');  ?>
    </head>
<body>
 	<div id="innerLayout">
    
<header style="margin-top: 10%" id="header-container">
  <div id="top_bar">
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
	</div>
</header>
    
<section id="body-container">
	<div class="wrapper rel bigwrapper" >
    <form class="searchmain" id="searchmain" method="POST" action="index.php">
	<fieldset style="margin-top: 12%">
      <div class="fblock fleft fcity clr rel" >
        <div class="locationrequest" id="locationBox">
           
                   <div class="dropdown">
                      
                        <select style="height:45px;width:150px;border-radius:11px;" name="search_find">
                       
                       <option value="0">Select</option>
                       <option value="1">Jobs</option>
                       <option value="2">Foods</option>
                       <option value="3">Rooms</option>
                       </select>
                     
                    
</div>

                </div>
            </div>
      
    <div class="fblock fquery fleft clr rel">
        <div class="rel clr lheight16">
            <div class="clearbox rel fleft input-container">
                <input autocomplete="off" type="text" 
                    class="fleft ca2 light large queryfield defaultval with-x-clear-button autosuggest-input" id="headerSearch" value="" name="SearchBox">
                <i class="icon searchflat abs" for="headerSearch">&nbsp;</i>
            </div>
        </div>
    </div>

		<span class="button big4 fright br3">
			<span class="icon inlblk vtop b_searchmain2 marginleft14 margintop9">&nbsp;</span>
			<input name="search_submit" id="submit-searchmain" type="submit" value="Search" class="cfff x-large margintop-1">
		</span>
	</fieldset>
</form> 
        
	</div>
</section>
</div>


<style>
      div#feed {
        padding: 15px;
        margin-left: 96%;
        margin-top: 4%;
        width: 40px;
        background-color: orange;
        color: white;
        height: 27%;
        border-radius: 43px;
        position: absolute;
      }
      p{
        font-family: cursive
      }
      .sidenav {
        height: 50%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 39%;
        right: 0%;
        background-color: #111;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
      }
      label{
        color:white;

        margin-left: -64%
      }
      .col-sm-3 {
          width: 86%;
          margin-left: 17px;
      }
      #msg{
        height: 95px;
      }
</style>
    <script>
          function openNav() {
              document.getElementById("mySidenav").style.width = "250px";
          }

          function closeNav() {
              document.getElementById("mySidenav").style.width = "0";
          }
    </script>
        
 <div class="container">
        
        <?php
        include('./include/mydb.php');
        if(isset($_POST['search_submit']))
        {
             $selectOption = $_POST['search_find'];
             $SearchBox = $_POST['SearchBox'];
            $query='';
            if($selectOption==1){
               
                $query="SELECT enter_job_title,Job_profile,job_type,job__description,job_location,enter_job_image FROM admin_enter_job where Job_profile LIKE '%".$SearchBox."%' order by created_on ";
                
               // echo $query ;
                
                  $run = mysqli_query($con, $query);
                $num = mysqli_num_rows($run);
                if($num >0)
                {
                    
                    
                   
          while ($data = mysqli_fetch_array($run)) 
            {
              ?>
        
        <table class="table" style="width:200px; border:1px solid black;float:left;margin-left:50px;">
  <thead>
    <tr> 
        <th>Job</th> </tr>
  </thead>
  <tbody>
       <tr>
           <th scope="row"><?php echo "<img src='./Admn/upload_images/".$data['enter_job_image']."' />"; ?>  </th></tr>
       <tr>
      <th scope="row">Job Title: <?php  echo $data['enter_job_title']; ?></th>
    
    </tr>
    <tr>
      <th scope="row">Job Profile: <?php echo $data['Job_profile']; ?></th>
    
    </tr>
    <tr>
      <th scope="row">Job Type: <?php  echo $data['job_type']; ?></th>
       
    </tr>
    <tr>
      <th scope="row">Job Location: <?php  echo $data['job_location']; ?></th>
     
    </tr>
  </tbody>
         
</table>
        <?php 
                    
          }
                }
        
                
                
                
            }
            if($selectOption==2){
               
                $query="SELECT enter_food_title,food_name,food_type,food_provider,food_rs,enter_food_image FROM admin_enter_food where food_name LIKE '%".$SearchBox."%' order by created_on ";
                
               // echo $query ;
                
                 $run = mysqli_query($con, $query);
                $num = mysqli_num_rows($run);
                if($num >0)
                {
                    
                    
                   
          while ($data = mysqli_fetch_array($run)) 
            {
              ?>
        <table class="table" style="width:250px; border:1px solid black;float:left;margin-left:50px;">
  <thead>
    <tr> 
        <th>Food</th> </tr>
  </thead>
  <tbody>
       <tr>
           <th scope="row"><?php echo "<img src='Admn/upload_images/".$data['enter_food_image']."' />"; ?>  </th></tr>
       <tr>
      <th scope="row">Food Title: <?php  echo $data['enter_food_title']; ?></th>
    
    </tr>
    <tr>
      <th scope="row">Food Title: <?php echo $data['food_name']; ?></th>
    
    </tr>
    <tr>
      <th scope="row">Food Title: <?php  echo $data['food_type']; ?></th>
       
    </tr>
    <tr>
      <th scope="row">Food Title: <?php  echo $data['food_rs']; ?></th>
     
    </tr>
  </tbody>
         
</table>
                 <?php 
                    
          }
                }
            }
            if($selectOption==3){
               
                $query="SELECT enter_room_title,room_locatiom,room_type,room_remt,room_landlord_description, enter_room_image FROM admin_enter_room where room_locatiom LIKE '%".$SearchBox."%' order by created_on ";
                
                //echo $query ;
                
                $run = mysqli_query($con, $query);
                $num = mysqli_num_rows($run);
                if($num >0)
                {
                    
                    
                   
          while ($data = mysqli_fetch_array($run)) 
            {
              ?>
        
        <table class="table" style="width:200px; border:1px solid black;float:left;margin-left:50px;">
  <thead>
    <tr> 
        <th>Food</th> </tr>
  </thead>
  <tbody>
       <tr>
           <th scope="row"><?php echo "<img src='Admn/upload_images/".$data['enter_room_image']."' />"; ?>  </th></tr>
       <tr>
      <th scope="row">Food Title: <?php  echo $data['enter_room_title']; ?></th>
    
    </tr>
    <tr>
      <th scope="row">Food Title: <?php echo $data['room_locatiom']; ?></th>
    
    </tr>
    <tr>
      <th scope="row">Food Title: <?php  echo $data['room_type']; ?></th>
       
    </tr>
    <tr>
      <th scope="row">Food Title: <?php  echo $data['room_landlord_description']; ?></th>
     
    </tr>
  </tbody>
         
</table>
        
                 <?php 
                    
          }
                }
                
                
            }
            
         
            
            
            
        }
           
                       
                       
            else{           ?>
        
          <?php  
        include('./include/mydb.php');
        $qry="SELECT enter_food_title,food_name,food_type,food_rs,enter_food_image, `created_on` FROM `admin_enter_food` order by created_on DESC LIMIT 3";
        $run = mysqli_query($con, $qry);
        $num = mysqli_num_rows($run);
        if($num >0)
        {
        
          while ($data = mysqli_fetch_array($run)) 
            {
              ?>
        
        <table class="table" style="width:24%; border:1px solid black;float:left;margin-left:50px;">
  <thead>
    <tr> 
        <th>Food</th> </tr>
  </thead>
  <tbody>
       <tr>
           <th scope="row"><?php echo "<img src='Admn/upload_images/".$data['enter_food_image']."' />"; ?>  </th></tr>
       <tr>
      <th scope="row">Food Title: <?php  echo $data['enter_food_title']; ?></th>
    
    </tr>
    <tr>
      <th scope="row">Food Title: <?php echo $data['food_name']; ?></th>
    
    </tr>
    <tr>
      <th scope="row">Food Title: <?php  echo $data['food_type']; ?></th>
       
    </tr>
    <tr>
      <th scope="row">Food Title: <?php  echo $data['food_rs']; ?></th>
     
    </tr>
  </tbody>
         
</table>
        <?php
    }
        }
        
        ?>
 
        </div>
    <div class="container">
        
          <?php  
        include('./include/mydb.php');
        
        $qry="SELECT `enter_job_title`, `Job_profile`, `job_type`, `job__description`, `job_location`, `enter_job_image`,`created_on`  FROM `admin_enter_job` order by created_on DESC LIMIT 3";
        $run = mysqli_query($con, $qry);
        $num = mysqli_num_rows($run);
        if($num >0)
        {
        
          while ($data = mysqli_fetch_array($run)) 
            {
              ?>
        
        <table class="table" style="width:24%; border:1px solid black;float:left;margin-left:50px;">
  <thead>
    <tr> 
        <th>Job</th> </tr>
  </thead>
  <tbody>
       <tr>
           <th scope="row"><?php echo "<img src='Admn/upload_images/".$data['enter_job_image']."' />"; ?>  </th></tr>
       <tr>
      <th scope="row">Job Title: <?php  echo $data['enter_job_title']; ?></th>
    
    </tr>
    <tr>
      <th scope="row">Job Profile: <?php echo $data['Job_profile']; ?></th>
    
    </tr>
    <tr>
      <th scope="row">Job Type: <?php  echo $data['job_type']; ?></th>
       
    </tr>
    <tr>
      <th scope="row">Job Url: <a href=""><?php  echo $data['job_location']; ?></a></th>
     
    </tr>
  </tbody>
         
</table>
        <?php
    }
        }
        
        ?>
 
        </div>
    <div class="container">
        
          <?php  
        include('./include/mydb.php');
        
        $qry="SELECT `enter_room_title`, `room_locatiom`, `room_type`, `room_remt`, `room_landlord_description`, `enter_room_image`,`created_on` FROM `admin_enter_room`order by created_on DESC LIMIT 3";
        $run = mysqli_query($con, $qry);
        $num = mysqli_num_rows($run);
        if($num >0)
        {
        
          while ($data = mysqli_fetch_array($run)) 
            {
              ?>
        
        <table class="table" style="width:24%; border:1px solid black;float:left;margin-left:50px;">
  <thead>
    <tr> 
        <th>Rooms</th> </tr>
  </thead>
  <tbody>
       <tr>
           <th scope="row"><?php echo "<img src='Admn/upload_images/".$data['enter_room_image']."' />"; ?>  </th></tr>
       <tr>
      <th scope="row">Room Title: <?php  echo $data['enter_room_title']; ?></th>
    
    </tr>
    <tr>
      <th scope="row">Room Location: <?php echo $data['room_locatiom']; ?></th>
    
    </tr>
    <tr>
      <th scope="row">Room Type: <?php  echo $data['room_type']; ?></th>
       
    </tr>
    <tr>
      <th scope="row">About Room: <?php  echo $data['room_landlord_description']; ?></th>
     
    </tr>
  </tbody>
         
</table>
        <?php
    }
        }
            }
        ?>
        
 
        </div>       
    </body>
 
    
</html>




