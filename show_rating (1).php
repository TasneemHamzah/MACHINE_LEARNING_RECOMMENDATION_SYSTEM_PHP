<?php

//include("header.php");
include("dbh.php");

?>


	
	
	
	
	
	
	<!DOCTYPE html >
<html >
<head>

<title></title>

<link href="style.css" rel="stylesheet" type="text/css" />
<!--   Free Website Template by t o o p l a t e . c o m   -->


</head>
<body>

<div id="contain"><!--open contain-->

	<div id="header"><!--open head-->
    	
        <div id="menu">
        	   <ul>
                <li><a href="index.php" >Home</a></li>
                <li><a href="course.html">Course</a></li>
                <li><a href="artical.php">Artical</a></li>
                <li><a href="textbook.php">Textbook</a></li>
                  <li><a href="contact.html">Contact</a></li>
                
                <li><a href="Aboutus.html" class="current">Aboutus</a></li>
                
                <div id="navthing">
      <h2><a href="#" id="loginform">Login</a> | <a href="#">Register</a></h2>
    <div class="login"> <!-- apear or not -->
     <!--  <div class="arrow-up"></div> -->
      <div class="formholder">
        <div class="randompad">
           <fieldset>
     
 
           </fieldset>
        </div>
      </div>
    </div>
    </div>
            </ul>

            <div class="clear"></div>
        </div> <!-- end of menu -->
        
		<div id="site_title"><h1><a href="#">Blue Wave</a><span></span></h1></div>

    <div class="clear"></div>
</div> <!--end of header -->


    

        
  
    <div id="middle">
   

    </div> <!-- end of middle -->
    
    <div id="main">
                
        <div id="content">


<div>
        <h2>Your Ratings</h2>
        
		<div class="">

    
	 <div class="">
	 
	 <table class="">
	 
	 <th>Course Name</th>
	 <th> Course Rating</th>
	 
	 
	 
	 <?php $result=mysqli_query($conn,"select * from user_movies where user_id='$_GET[id]'"); 
	 
	 while($row=mysqli_fetch_array($result))
	 {
	 ?>
	 <tr>
	      <td><?php echo $row['movie_name']; ?> </td>
		  <td><?php echo $row['movie_rating']; ?> </td>
	     
	</tr>
	 
	 
	 <?php } ?>
	 
	 
	 </table>
	 
	 	 <h2>
	 
	 
	 <a class="" href="course.php"> Back </a>
	 
	 </h2>

	 
	 </div>
	
	
	
	
	
	</div>


                </div>
        





         </div> <!-- end of content -->
        
    </div>  <!-- end of main -->
    
    <div id="footer">
        <div>
<a><img title="Twitter" alt="Twitter" src="https://socialmediawidgets.files.wordpress.com/2014/03/01_twitter.png" width="35" height="35" /></a>
<a><img title="Pinterest" alt="Pinterest" src="https://socialmediawidgets.files.wordpress.com/2014/03/13_pinterest.png" width="35" height="35" /></a>
<a><img title="Facebook" alt="Facebook" src="https://socialmediawidgets.files.wordpress.com/2014/03/02_facebook.png" width="35" height="35" /></a>
<a><img title="LinkedIn" alt="LinkedIn" src="https://socialmediawidgets.files.wordpress.com/2014/03/07_linkedin.png" width="35" height="35" /></a>
<a><img title="Instagram" alt="RSS" src="https://socialmediawidgets.files.wordpress.com/2014/03/10_instagram.png" width="35" height="35" /></a>
</div>
        Copyright Â© 2048 <a href="#">Your Company Name</a>
    
    </div> <!-- end of tooplate_footer -->

</div> <!-- end of wrapper -->

<!--   Free Website Template by t o o p l a t e . c o m   -->
</body>
</html>