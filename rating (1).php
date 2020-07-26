<!DOCTYPE html >

<?php
include("dbh.php");
     session_start();
     if(isset($_GET['id']))
	 {
		 $_SESSION['id'] =$_GET['id'];
	 }
	// else{echo "not succeful id" ;}
	 
	 if(isset($_GET['movie_name']))
	 {
		 $_SESSION['movie_name'] =$_GET['movie_name'];
	 }
   // else{echo "not succefull"; }
    //include("db.php");

     $flag=0;
	 
	 
	 if(isset($_POST['submit']))
	 { 
 $a=$_SESSION['id'];
 
 $b=$_SESSION['movie_name'];
 //$c=$_POST[movie_rating];
 
	//$query = "INSERT INTO user_movies(user_id,movie_name,movie_rating)
	                        //    values('$_SESSION[nid]','$_SESSION[movie_name]',$_POST[movie_rating]')";
    	//$result=mysqli_query($conn, $query);

     $submitmovie=mysqli_query($conn,"select * from user_movies where user_id like'$a' && movie_name like'$b' ");
	 
	/* if($submitmovie === FALSE) 
	 { 
    yourErrorHandler(mysqli_error($mysqli));
      } */         
	 $row=mysqli_fetch_array($submitmovie);
	 //$submitted=$row['movie_name'];
	
	 if(!($row) )
	        {
	                 $result= mysqli_query($conn,"insert into user_movies(user_id,movie_name,movie_rating)
	                            values('$_SESSION[id]','$_SESSION[movie_name]','$_POST[movie_rating]')"); 
		                if($result)
		                   {
			 
			                $flag=1;
		                   }
	        
			}
			else {echo " YOU HAVE RATED THIS COURSE BEFORE " ;}
			
	 }
?>
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
        <h2>Rating the <?php echo $_SESSION['movie_name'] ?> out of five</h2>
		
		<?php if($flag){?>
	 <div class="alert alert-success"> Thanks For Rating</div>
	 
	 
	 <?php } else {echo "PLEAS MAKE SURE YOU ARE LOGGED IN" ;} ?>
	 
	 
	    <form action="rating.php" method="post">
		
		<div class="form-group">
	 <label for="username">My  Rating</label>
	 <input type="number" name="movie_rating" id="movie_rating"  class="" required>
	 
	 </div>
	 
	
	 <div class="form-group">
	 	 <input type="submit" name="submit" value="submit"  class="btn btn-primary" required>
		 
		 </div>
		 
		 </form>
		 <a class="btn btn-info pull-right" href="course.php"> Back </a>
       
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