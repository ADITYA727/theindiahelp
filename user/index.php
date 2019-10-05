
<!DOCTYPE html>
<html >
	<head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" href="https://cdn.internshala.com/static/cdn/3.3.6/bootstrap.css" />
        <link rel="icon" type="image/x-icon" href="../images/logo.png">
        <link rel="stylesheet" href="../css/index_css.css">
        <link rel="stylesheet" type="text/css" href="https://s5.olx.in/static/olxin/packed/sw352547ef8d933055e3f2c45ce41f75ba.css">
    </head>
<body>
 	<div id="innerLayout">
    
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
            <li><a href="room.php">Rooms</a></li>
            <li><a href="food.php">Food</a></li>
              <li><a href="job.php">Jobs</a></li>
               <li><a href="about.php">About Us</a></li>
               <li><a href="notification.php">Notification</a></li>
              <li><a href="contact.php">Contact Us</a></li>
              <li><a href="../logout.php">Logout</a></li>
              

          <?php

//In this page I am going to use session:

  session_start();
  if($_SESSION['username'])
  {
  echo $_SESSION['username'];
  }
 ?>
                
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
</div>
     
    </body>
</html>