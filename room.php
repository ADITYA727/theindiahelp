
<!DOCTYPE html>
<html >
	<head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" href="./css/Link/Rooms.css/Rooms_2.css" />
        <link rel="icon" type="image/x-icon" href="./images/logo.png">
        <link rel="stylesheet" href="css/index_css.css">
        <link rel="stylesheet" type="text/css" href="./css/Link/Rooms.css/Rooms_3.css">
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
    <form class="searchmain" id="searchmain" method="POST" action="room.php">
	<fieldset style="margin-top: 12%">
      <div class="fblock fleft fcity clr rel" >
        <div class="locationrequest" id="locationBox">

                </div>
            </div>
      
    <div class="fblock fquery fleft clr rel">
        <div class="rel clr lheight16">
            <div class="clearbox rel fleft input-container">
                <input autocomplete="off" type="text" 
                    class="fleft ca2 light large queryfield defaultval with-x-clear-button autosuggest-input" id="headerSearch" value="" name="SearchBox">
                <label class="icon searchflat abs" for="headerSearch">&nbsp;</label>
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
<div class="container">
 <?php
        include('./include/mydb.php');
        if(isset($_POST['search_submit']))
        {
           
             $SearchBox = $_POST['SearchBox'];
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
     <th>Room</th> </tr>
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
   <th scope="row">Room Landlord Description: <?php  echo $data['room_landlord_description']; ?></th>
  
 </tr>
</tbody>
      
</table>
     
              <?php 
                 
       }
             }
             
             
         }
       ?>
        </div>
    </div>

 <div class="container">
        
          <?php  
        include('./include/mydb.php');
        
        $qry="SELECT `enter_room_title`, `room_locatiom`, `room_type`, `room_remt`, `room_landlord_description`, `enter_room_image`,`created_on` FROM `admin_enter_room`order by created_on DESC LIMIT 9";
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
           
        ?>
        
 
        </div>  
    


    </body>
</html>