<?php 
session_start();
include"dbh.php";
?>

<!DOCTYPE html >
<html>
<head>

<title></title>

<link href="style.css" rel="stylesheet" type="text/css" />


</head>
<body>

<div id="contain"><!--open contain-->

  <div id="header"><!--open head-->
      
        <div id="menu">
             <ul>
                <li><a href="index.php" >Home</a></li>
                <li><a href="course.php" class="current" >Course</a></li>
                <li><a href="artical.php">Artical</a></li>
                <li><a href="textbook.php">Textbook</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="Aboutus.php">Aboutus</a></li>  
                <div id="navthing">
      <?php  
           $now = time();
           if(isset($_SESSION['id'])){  

               echo"<form  style='display:inline-block;'  action='logout.php' method='POST'>

   <h4><button type='submit' name='logoutsubmit' ><h4>logout</h4></button> | <a href=\"profile.php\">profile</a></h4>';
  </form>";}
           else{
         echo' <h2><a href="#" id="loginform">Login</a> | <a href="signup.php">Register</a></h2>';
       }  
  //$now = time(); 
  if(isset($_SESSION['id'])){


 if ($now > $_SESSION['expire']){
     
     session_start();
        session_destroy();
        header("Lcation:".$_SERVER['PHP_SELF']);  
  
  }
  }


?>
 <div class="login"> <!-- apear or not -->
     <!--  <div class="arrow-up"></div> -->
      <div class="formholder">
        <div class="randompad">
          <fieldset>


 <?php if(empty($_SESSION["id"])) { ?>
<form   style='display:inline-block;' action='login.php' method='POST'>
  <label name=\"name\">username</label>
<input type="text" name="uid"
  value="<?php if(isset($_COOKIE["member_login"])) { echo $_COOKIE["member_login"]; } ?>" >

     <label name=\"password\" >Password</label>  
 <input type='password' name='pwd' value="<?php if(isset($_COOKIE["pwd"])) { echo $_COOKIE["pwd"]; } ?>" >
<button type='submit' name='loginsubmit' ><h4> login</h4></button>
<input type="checkbox" name="remember" id="remember" <?php if(isset($_COOKIE["member_login"])) { ?> checked <?php } ?> />
    <label for="remember-me">Remember me</label>

  </form>
  <?php } else { ?>
<div class="member-dashboard">You have Successfully logged in!. <a href="logout.php">Logout</a></div>
<?php } ?>
       </fieldset>
        </div>
      </div>
    </div>
    </div>
            </ul>
 


            <div class="clear"></div>
        </div> <!-- end of menu -->
        
    <div id="site_title"><h1><a href="#"></a><span></span></h1></div>
  
  <!-- </div> -->

    <div class="clear"></div>
</div> <!--end of header -->


    

        <div class="clear"></div>
  
    <div id="middle">


    </div> <!-- end of middle -->
    
    <div id="main">
                
        <div id="content">
        
        	<div class="col_1">
                <h1>Our courses</h1></br>
                <a href="#" class="learnmore"></a>

                <div class="clear"></div>
            </div> <!--close col1-->
			
        <div class="col head">
		
		
           <?php 
				 $id=$_SESSION['id'];
				 if($id)
				 {
				 $result=mysqli_query($conn,"select * from user where id='$id'  "); 
	 
	                     $row=mysqli_fetch_array($result);
						 $name=$row['uid'];
	             }           
	        ?>
				 
	<table>			  
	   <tr>
	      
	      
		  <td>
	      <form action="show_rating.php">
	      <input type="submit" name="show_rating" class="" value="Show rating">
	      <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
	      </form>
	      </td>
		  
		  <td>
	      <form action="course_recomendation.php">
	      <input type="submit" name="show_movies" class="" value="Show Recomendation">
	      <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
	      </form>
	      </td>
	  </tr>
    </table>   
            
            <div class="col head">
      
              <h2>The Power Of Habit course</h2>
              <div class="col_1">
       
 <video id="vid" width="270" height="170" controls>
  <source src="(11) The Power of Habit - One of the most Motivational Talks Ever - YouTube.mp4"  type="video/mp4">

</video>


                  <h6>The Power of Habit.</h6>
                     <!-- <a class="more" href="#">Learn more</a> -->

                </div>
                
                <div class="col_1">
                  
                    <video  id="vid2" width="270" height="170" controls>
                        <source src="(11) Jim Kiwik- How to Break Bad Habits That Hold You Back (One of the Best Speeches Ever) - YouTube.mp4" type="video/mp4"></video>
                    <h6>How to Break Bad Habits That Hold You Back.</h6>
                     <!-- <a class="more" href="#">Learn more</a> -->
                </div>
                
                <div class="col_1 col_last">
                  
                    <video  id="vid3" width="270" height="170" controls>
                        <source src="(8) FIVE HABITS THAT CHANGED MY LIFE - YouTube.mp4" type="video/mp4"></video>
                    <h6>FIVE HABITS THAT CHANGED MY LIFE.</h6>
                    
                </div>

<button style="
    position: relative;
    top: 31px;
    left: -506px;
    width: 136px;
    height: 31px;
    color: black;
  background: url(images/tooplate_button2.jpg);
      font-weight: bold;
  " id='btn' type='submit'  name="button" >GET CERTIFICATE </button>
                <a class="more" href="#">See more</a>
        <script type='text/javascript'>

var a , b, c ;

   document.getElementById('vid').addEventListener('ended',Handler,false);
  document.getElementById('vid2').addEventListener('ended',Handler,false);
    document.getElementById('vid3').addEventListener('ended',Handler,false);
    document.getElementById('btn').onclick = function() { myFunction()};
  
function Handler(e){
  
  
  var vid_name=e.target.id;
  
  
  if(vid_name=='vid' ){
   a=1;
  
  }
  if(vid_name=='vid2'){ 
  b=2;
  
  
  }
  
  if(vid_name=='vid3'){ 
  c=3;
  
  }
  


  
}


function myFunction(){
  if(a==1  && b==2 && c==3){
 $course=true;   
window.location.replace("cert.php");
  }
else{alert("you must see alll video");}
$course=false;
}



</script>



            <?php /* 
				 $id=$_SESSION['id'];
				 if ($id){
				 $result=mysqli_query($conn,"select * from user where id='$id'  "); 
	 
	                     $row=mysqli_fetch_array($result);
						 $name=$row['uid'];
				 }  */
	             ?>
         <?php echo "Hi '{$name}' would you love to give us your openion about this course ( this is going to help you to get good recomendation ) " ; ?> 
		<table>			  
	   <tr>
	      
	      <td>
	      <form action="rating.php">
	       <input  type="submit" name="rating" class="" value="Rating">
	       <input type="hidden" name="urid" value="<?php echo $row['id'] ?>">
			<input type="hidden" name="movie_name" value="The power of habit course">
														   
	        </form>
	      </td>
		  
		  
	  </tr>
        </table>      
			  
			  
			  
        
        <div class="clear"></div>
             
      </div>  <!-- end of colhead -->



              <div class="col head">
      
              <h2 id="The Soicial Skills Course">Social Skills course</h2>
              <div class="col_1">
                  <video  id="vid4" width="270" height="170"  id="movie" controls>
                        <source src="(11) Communication Skills - Deep Conversations - YouTube.mp4" type="video/mp4"></video>
                  <h6>Communication Skills - Deep Conversations.</h6>
                   <!-- <a class="more" href="#">Learn more</a> -->
                </div>
                
                <div class="col_1">
                  <video   id="vid5" width="270" height="170" controls >
                        <source src="(11) Communication Skills - How To Improve Communication Skills - 7 Unique Tips! - YouTube.mp4" type="video/mp4"></video>

     
                  <h6>How To Improve Communication Skills - 7 Unique Tips!.</h6>
                   <!-- <a class="more" href="#">Learn more</a> -->
                </div>
                
                <div class="col_1 col_last">
                  <video   id="vid6" width="270" height="170" controls>
                        <source src="(11) How To Be Funny - Easily Visualized - YouTube.mp4" type="video/mp4"></video>
                  <h6>How To Be Funny - Easily Visualized.</h6>
                     <!-- <a class="more" href="#">Learn more</a> -->
                              </div>

<button style="
    position: relative;
    top: 31px;
    left: -506px;
    width: 136px;
    height: 31px;
    color: black;
  background: url(images/tooplate_button2.jpg);
      font-weight: bold;
  " id='btn2' type='submit'  name="button" >GET CERTIFICATE </button>
                <a class="more" href="#">See more</a>
        <script type='text/javascript'>

var a , b, c ;

   document.getElementById('vid4').addEventListener('ended',Handler,false);
  document.getElementById('vid5').addEventListener('ended',Handler,false);
    document.getElementById('vid6').addEventListener('ended',Handler,false);
    document.getElementById('btn2').onclick = function() { myFunction()};
  
function Handler(e){
  
  
  var vid_name=e.target.id;
  
  
  if(vid_name=='vid4' ){
   a=1;
  
  }
  if(vid_name=='vid5'){ 
  b=2;
  
  
  }
  
  if(vid_name=='vid6'){ 
  c=3;
  
  }
  


  
}


function myFunction(){
  if(a==1  && b==2 && c==3){
    
window.location.replace("cert.php");
  }
else{alert("you must see alll video");}
}



</script>

                   
				   
				    <?php 
				 //$id=$_SESSION['id'];
				 /*$result=mysqli_query($conn,"select * from user where $id='$id'  "); 
	 
	                     $row=mysqli_fetch_array($result);*/
	                        
	             ?>
                      <?php echo "Hi '{$row['uid']}' would you love to give us your openion about this course ( this is going to help you to get good recomendation ) " ; ?> 
		<table>			  
	   <tr>
	      
	      <td>
	      <form action="rating.php">
	       <input type="submit" name="rating" class="" value="Rating">
	       <input type="hidden" name="urid" value="<?php echo $row['id'] ?>">
			<input type="hidden" name="movie_name" value="The Soicial Skills Course ">
														   
	        </form>
	      </td>
		  
		  
	  </tr>
        </table>      
			  
				   
				   
        
        <div class="clear"></div>
             
      </div>  <!-- end of colhead -->

              <div class="col head">
      
              <h2 id="The Time Management Course">Time Management Course</h2>
              <div class="col_1">
                  <video id="vid7" width="270" height="170" controls>
                        <source src="(11) How to Manage Time With 10 Tips That Work - YouTube.mp4" type="video/mp4"></video>
                  <h6>How to Manage Time With 10 Tips That Work.</h6>
                     <!-- <a class="more" href="#">Learn more</a> -->
                </div>
                
                <div class="col_1">
                  <video id="vid8" width="270" height="170" controls>
                        <source src="How to Wake up at 4-30 AM and be Excited - 4 Simple Steps to Wake up Early - YouTube.mp4" type="video/mp4"></video>
                  <h6>How to Wake up at 4-30 AM and be Excited - 4 Simple Steps to Wake up Early.</h6>
                    <!-- <a class="more" href="#">Learn more</a> -->
                </div>
                
                <div class="col_1 col_last">
                  <video  id="vid9" width="270" height="170" controls>
                        <source src="1.mp4" type="video/mp4"></video>
                  <h6>4 Best Things Do in your Free Time - What to do when you’re bored.</h6>
                    <!-- <a class="more" href="#">Learn more</a> -->
 </div>

<button style="
    position: relative;
    top: 31px;
    left: -506px;
    width: 136px;
    height: 31px;
    color: black;
  background: url(images/tooplate_button2.jpg);
      font-weight: bold;
  " id='btn3' type='submit'  name="button" >GET CERTIFICATE </button>
                <a class="more" href="#">See more</a>
        <script type='text/javascript'>

var a , b, c ;

   document.getElementById('vid7').addEventListener('ended',Handler,false);
  document.getElementById('vid8').addEventListener('ended',Handler,false);
    document.getElementById('vid9').addEventListener('ended',Handler,false);
    document.getElementById('btn3').onclick = function() { myFunction()};
  
function Handler(e){
  
  
  var vid_name=e.target.id;
  
  
  if(vid_name=='vid7' ){
   a=1;
  
  }
  if(vid_name=='vid8'){ 
  b=2;
  
  
  }
  
  if(vid_name=='vid9'){ 
  c=3;
  
  }
  


  
}


function myFunction(){
  if(a==1  && b==2 && c==3){
    
window.location.replace("cert.php");
  }
else{alert("you must see alll video");}
}


</script>



                 <?php 
				 //$id=$_SESSION['id'];
				/* $result=mysqli_query($conn,"select * from user where $id='$id'  "); 
	 
	                     $row=mysqli_fetch_array($result);*/
	                        
	             ?>
                      <?php echo "Hi '{$row['uid']}' would you love to give us your openion about this course ( this is going to help you to get good recomendation ) " ; ?> 
		<table>			  
	   <tr>
	      
	      <td>
	      <form action="rating.php">
	       <input type="submit" name="rating" class="" value="Rating">
	       <input type="hidden" name="urid" value="<?php echo $row['id'] ?>">
			<input type="hidden" name="movie_name" value="The Time Management Course">
														   
	        </form>
	      </td>
		  
		  
	  </tr>
        </table>    
              
			  
			  
			  
             <div class="clear"></div>

      </div>  <!-- end of colhead -->
        </div> <!-- end of content -->
        </div><!-- end of main -->

  <!-- end of main -->
 
    <div id="footer">
         <div>
<a><img title="Twitter" alt="Twitter" src="https://socialmediawidgets.files.wordpress.com/2014/03/01_twitter.png" width="35" height="35" /></a>
<a><img title="Pinterest" alt="Pinterest" src="https://socialmediawidgets.files.wordpress.com/2014/03/13_pinterest.png" width="35" height="35" /></a>
<a><img title="Facebook" alt="Facebook" src="https://socialmediawidgets.files.wordpress.com/2014/03/02_facebook.png" width="35" height="35" /></a>
<a><img title="LinkedIn" alt="LinkedIn" src="https://socialmediawidgets.files.wordpress.com/2014/03/07_linkedin.png" width="35" height="35" /></a>
<a><img title="Instagram" alt="RSS" src="https://socialmediawidgets.files.wordpress.com/2014/03/10_instagram.png" width="35" height="35" /></a>
</div>
        Copyright © 2018 <a href="#">web project</a>
    
    </div> <!-- end of footer -->




<script  src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'>
    
</script>
    <script  src="js/index.js"></script>

    <script>

            document.getElementById("movie").addEventListener("ended", function(){alert("all done")}, true);

            </script>

</body>
</html>