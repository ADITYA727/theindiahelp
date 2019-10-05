
<?php
session_start();
if(isset($_SESSION['auid']))
{
    echo "";
}
else{

    header('location:../login.php');
}  


?>


<!DOCTYPE html>
<html xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">
	<head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic|Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'/>
        <link href="https://fonts.googleapis.com/css?family=Covered+By+Your+Grace" rel="stylesheet"/>
        <script src="https://cdn.internshala.com/static/js/includes/common/jquery-1.11.1.min.js"></script>
        <script src="https://cdn.internshala.com/static/cdn/3.3.6/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdn.internshala.com/static/cdn/3.3.6/bootstrap.css" />
        <link rel="icon" href="../images/logo.png" />
                <title >The India Helpers</title>
        <meta name="description" content="Find and apply for CSE internships for students in 1st, 2nd, 3rd and 4th years of study and graduates all over India. Apply for free and earn attractive stipends." />
        <meta property="og:title" content="Internship for CSE students | Computer Science Internships |Internshala" />
        <meta property="og:description" content="Find and apply for CSE internships for students in 1st, 2nd, 3rd and 4th years of study and graduates all over India. Apply for free and earn attractive stipends." />
        <meta property="og:image" content="https://internshala.com/static/images/internships_for_facebook.png" />
        <meta name="twitter:title" content="Internship for CSE students | Computer Science Internships |Internshala" />
        <meta name="twitter:description" content="Find and apply for CSE internships for students in 1st, 2nd, 3rd and 4th years of study and graduates all over India. Apply for free and earn attractive stipends." />
        <link href="https://cdn.internshala.com/static/css/internship/search/search.1543497415.css" rel="stylesheet" type="text/css" />
        <link href="https://cdn.internshala.com/static/css/login/login_modal.1543497415.css" rel="stylesheet" type="text/css" />
        <link href="https://cdn.internshala.com/static/css/chat/notification.1543497415.css" rel="stylesheet" type="text/css" />
        <script src="https://cdn.internshala.com/static/js/combined/common.1543497415.js" type="text/javascript" ></script>
        <script src="https://cdn.internshala.com/static/js/chat/websocket.1543487577.js" type="text/javascript" ></script>
        <script src="https://cdn.internshala.com/static/js/combined/internship-search.1543497415.js" type="text/javascript" ></script>
        <script src="https://cdn.internshala.com/static/js/student/student_common.1543487577.js" type="text/javascript" ></script>	
        
        
        
    <style>
    #header-container .navi .postnewlink {
    position: relative;
    font-size: 17px;
    font-weight: normal;
    line-height: 15px;
    float: right;
    margin-top: 3px;
    margin-bottom: 15px;
    padding: 13px 21px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    background: #ff7700;
    color: #fff;
    font-weight: bold;
}
        li {
    list-style: none;
    float: left;
    margin-left: 67px;
}
        .container-fluid {
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
    margin-top: 31px;
}
        .navbar-default .navbar-collapse, .navbar-default .navbar-form {
    border-color: #e7e7e7;
    margin-top: 28px;
}
li.active {
    margin-left: 51px;
}
    .navbar-brand img {
    display: block;
    margin-top: -43px;
    height: 93px;
    margin-left: -14px;
}
    #header-container .nav {
    min-height: 36px;
   
    margin-left: 104px;
}
    </style>
        


		<title>Free classifieds in India, Classified ads in India, Online Classified Advertising</title>
						<meta name="robots" content="index, follow" />		<link rel="canonical" href="https://www.olx.in" />		<link rel="alternate" href="https://www.olx.in" hreflang="en" />

				<meta name="google-site-verification" content="yVwhHrKjufVXHFEeBCU1bMn3QrFBkRGbO-YLes1GhWA" />
					<link rel="icon" type="image/x-icon" href="https://s5.olx.in/static/olxin/naspersclassifieds-regional/olxsa-atlas-web-olxin/static/img/favicon.ico?v=4">
					<link rel="search" type="application/opensearchdescription+xml" href="https://www.olx.in/opensearch/" title="OLX.in" />
			<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "WebSite",
			"url": "https://www.olx.in",
			"potentialAction": {
			"@type": "SearchAction",
			"target": "https://www.olx.in/all-results/?q={q}&utm_source=google&utm_medium=search&utm_campaign=search_organic",
			"query-input": "required name=q"
			}
		}
		</script>
        <script type="application/ld+json">
		{
			"@context": "schema.org",
            "@type": "Organization",
            "url": "https://www.olx.in",
            "logo": "https://s4.olx.in/static/olxin/naspersclassifieds-regional/olxsa-atlas-web-olxin/static/img/fb/fb-image200x200.png"
		}
		</script>
												<script type="text/javascript">
	window.trackData;
		window.trackData = {"language":"en_IN","platformType":"desktop","trackPage":"home"};
</script>
<script type="text/javascript">
	<!--
	window.hydraData = window.hydraData || [];
		window.hydraData.push({"language":"en_IN","platformType":"desktop","trackPage":"home"});
	window.dataLayer = window.dataLayer || [];
	window.dataLayer.push({"cleanup": function () {
		window.dataLayer.push({"language":"en_IN","platformType":"desktop","trackPage":"home"});
	}});
	var ninjaTag = document.getElementById("ninja-script-tag");
	if (!ninjaTag) {
		(function () {
			"use strict";
			window.configTracking = {"siteUrl":"www.olx.in","environment":"production"};
			var script = document.createElement("script");
			script.type = "text/javascript";
			script.id = "ninja-script-tag";
			script.async = true;
			script.src = ("https:" === document.location.protocol ? "https://" : "http://") + "ninja.onap.io/ninja.js";
			(document.getElementsByTagName("head")[0] || document.getElementsByTagName("body")[0]).appendChild(script);
		}());
	}
	//-->
</script>
<noscript>
<img width="1" height="1" src="http://tracking.olx-st.com/h/v2/ns-sa?siteUrl=www.olx.in&environment=production&language=en_IN&platformType=desktop&trackPage=home&t=1543517435"/></noscript>

									    <script type="text/javascript">
var _adblock = true;
</script>
<script type="text/javascript" src=""></script>
		    			    												<link rel="stylesheet" type="text/css" href="https://s5.olx.in/static/olxin/packed/sw352547ef8d933055e3f2c45ce41f75ba.css">
																					<link rel="stylesheet" type="text/css" href="https://s4.olx.in/static/olxin/packed/swa0964e7c3a0f89d7ed2597fe4cc8558f.css">
																										<!--[if 7bac1025ec.css">
					<![endif]-->										<script type="text/javascript">
window.suggestmeyes_loaded = true;

var fb_connect_url='http://connect.facebook.net/en_IN/all.js#xfbml=1&amp;appId=320949351409311';
var fb_app_id='320949351409311';
var fraudsubject={"id":"25","subject_en":"Support Team :: Report Fraud","subject_hi":"\u0927\u094b\u0916\u093e\u0927\u0921\u093c\u0940 \u0930\u093f\u092a\u094b\u0930\u094d\u091f  \u0915\u0930\u0947\u0902","zendesk_tag":"in_report_fraud"};
var otherssubject={"id":"13","subject_en":"Support Team :: Others","subject_hi":"\u0938\u0939\u093e\u092f\u0924\u093e \u091f\u0940\u092e","zendesk_tag":"in_support_team"};
function __(txt) {
	if (typeof translations == 'object') {
		if (translations[txt] == undefined) {
			return txt;
		} else {
			return translations[txt];
		}
	}
	return txt;
}
</script>
	<!--[if lt IE 9]><script type="text/javascript" src="https://s5.olx.in/static/olxin/naspersclassifieds-shared/atlas-web-framework/static/js/scripts/html5shiv.min.js"></script><![endif]-->
        
	                    	                									    <script type='text/javascript'>
        var  googletag = googletag || {};
        googletag.cmd = googletag.cmd || [];
        (function(){ var gads = document.createElement('script');
            gads.async = true; gads.type = 'text/javascript';
            var useSSL = 'https:' == document.location.protocol;
            gads.src = (useSSL ? 'https:' : 'http:') + '//www.googletagservices.com/tag/js/gpt.js';
            var node = document.getElementsByTagName('script')[0];
            node.parentNode.insertBefore(gads, node);

        })();
    </script>
            <script type="text/javascript">
            var refreshSlot = [];
            googletag.cmd.push(function() {
                                    var slotName = googletag.defineSlot('/66431097/Dektop_HomePage_IN_SQ', [[300, 250]], 'div-gpt-ad-1433503533903-1').addService(googletag.pubads())
                                .setTargeting('location_text', 'Bengaluru')
                                                .setTargeting('lat', '12.966844499999999')
                                                .setTargeting('lon', '77.705133')
                                                                                                                                                   ))
                                .setTargeting('location_text', 'Bengaluru')
                                                .setTargeting('lat', '12.966844499999999')
                                                .setTargeting('lon', '77.705133')
                                                                                                                                                   )
                                .setTargeting('location_text', 'Bengaluru')
                                                .setTargeting('lat', '12.966844499999999')
                                                .setTargeting('lon', '77.705133')
                                                                                                                                                    v)
                                .setTargeting('location_text', 'Bengaluru')
                                                .setTargeting('lat', '12.966844499999999')
                                                .setTargeting('lon', '77.705133')
                                          setInterval(function(){
                    console.log(googletag);
                    googletag.pubads().refresh(refreshSlot);
                }, 60000);
                //googletag.pubads().enableAsyncRendering();
                googletag.pubads().collapseEmptyDivs(true);
                googletag.enableServices();
            });
        </script>
        				                    	</head>
	<body class="homepage">
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
                <li class="active"><a href="index.php">Admin Dashboard</a></li>
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
                           <option value="4">Email</option>
                          
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
    
    
     
            
     <div class="container">
            
     <?php
        include('../include/mydb.php');
        if(isset($_POST['search_submit']))
        {
             $selectOption = $_POST['search_find'];
             $SearchBox = $_POST['SearchBox'];
            $query='';
            if($selectOption==0){

            }


            if($selectOption==1){
               
                $query="SELECT job_id,enter_job_title,Job_profile,job_type,job__description,job_location,enter_job_image FROM admin_enter_job where Job_profile LIKE '%".$SearchBox."%' order by created_on ";
                
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
      <th scope="row">Job Location: <?php  echo $data['job_location']; ?></th>
     
    </tr>
    <tr>
      <th><a href="edit_job.php?job_id=<?php  echo $data['job_id']; ?>">Edit</a></th>
     
    </tr>
    <tr>
      <th><a href="delete_job.php?job_id=<?php  echo $data['job_id']; ?>">Delete</a></th>
     
    </tr>
  </tbody>
         
</table>
        <?php 
                    
          }
                }
        
                
                
                
            }
            if($selectOption==2){
               
                $query="SELECT food_id,enter_food_title,food_name,food_type,food_provider,food_rs,enter_food_image FROM admin_enter_food where food_name LIKE '%".$SearchBox."%' order by created_on ";
                
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
    <tr>
      <th><a href="edit_food.php?food_id=<?php  echo $data['food_id']; ?>">Edit</a></th>
     
    </tr>
    <tr>
      <th><a href="delete_food.php?food_id=<?php  echo $data['food_id']; ?>">Delete</a></th>
     
    </tr>
  </tbody>
         
</table>
                 <?php 
                    
          }
                }
            }
            if($selectOption==3){
               
                $query="SELECT room_id,enter_room_title,room_locatiom,room_type,room_remt,room_landlord_description, enter_room_image FROM admin_enter_room where room_locatiom LIKE '%".$SearchBox."%' order by created_on ";
                
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
    <tr>
      <th><a href="edit_room.php?room_id=<?php  echo $data['room_id']; ?>">Edit</a></th>
     
    </tr>
    <tr>
      <th><a href="delete_room.php?room_id=<?php  echo $data['room_id']; ?>">Delete</a></th>
     
    </tr>
    
  </tbody>
         
</table>
        
                 <?php 
                   } } } }
            
         ?>
  
        	</body>
  
    
    
    
</html>
<!-- prd-wrk-i-0169d1cbb58c0c7ba -->
