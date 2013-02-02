<?php
/**
 * index.php
 *
 *Facelink home page with registration and login form
 *
 * Written by: Monideep a.k.a. deep The Grandmaster of PHP
 *
 */
include("include/session.php");
?>

<?php
/**
 * The user is already logged in, not allowed to register.
 */
if($session->logged_in){
   header("location:home.php");
   exit;
}
 /**
  * The user has submitted the registration form and the
  * results have been processed.
  */
  else if(isset($_SESSION['regsuccess'])){
  header('location:complete_profile.php');
  exit;
  }
  else{
?>

<!DOCTYPE html> 
<html lang="en-US">
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
<title> 
	FaceLink &#124; Simplify Your digital life</title>
 
<link rel="stylesheet" href="style.css" type="text/css" media="all" /> 
<link rel='stylesheet' id='visual-buddypress-admin-bar-css'  href='admin_bar.css' type='text/css' media='all' />
<link rel="stylesheet" href="mystyle.css" type="text/css" media="all">
 
<meta name='robots' content='noindex,nofollow' /> 
<meta name="generator" content="Facelink|| Simplify your digital life" />
<meta name="template" content="Facelink" />
<meta name="copyright" content="Copyright (c) 2011" /> 
<meta name="description" content="Private Social Network" />

<link rel='index' title='Visual' href='http://devpress.com/demo/visual/' />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/jquery.inputfocus-0.9.min.js"></script>

 
</head> 
 
<body class="home-page"> 
<div id="container"> 
    <div id="header">
    <div class="header-wrap">
    <div id="branding">
    <h1 id="site-title"><a href="index.php" title="Facelink" rel="home"><span>facelink</span></a></h1>
       <div id="menu-secondary" class="menu-container">
       <div class="wrap">
       <div class="menu">
            <ul id="menu-secondary-items" class="">
                <li class="menu-item"><a href="index.php">Home</a></li>
                <li class="menu-item"><a href="#">About Us</a></li>
                <li class="menu-item"><a href="#">Blog</a></li>
                <li class="menu-item"><a href="#">Help</a></li>
                <li class="menu-item"><a href="#">Contact Us</a> </li>
            </ul>
       </div>
       </div>
       </div><!-- #menu-secondary .menu-container -->
     </div><!-- #branding -->

     <h2 id="site-description"><span> A Simple &amp; secured Social Network designed to make your social life more active more simulating</span></h2>
     </div><!-- .wrap -->
     </div><!-- #header -->
 
		
		
     <div id="main">
     <div class="wrap">
     <div id="content" class="multiple">

         <div class="right">
         <div id="register">
             <div class="reg-error">
                 

                <?php
                if($form->num_errors > 0){
                echo "<td><font size=\"2\" color=\"#ff0000\">".$form->num_errors." error(s) found</font></td>";
                echo "<td>".$form->error("user")."</td>"; 
                  echo "<td>". $form->error("pass")."</td>";
                 echo "<td>". $form->error("email")."</td>";
                }
                ?>
                 
               


             </div>
             <form id="reg_form" action="process.php" method="post">
             <!-- #first_step -->
             <div id="first_step">
             <h1>SIGN UP FOR A FREE <span>FACELINK</span> ACCOUNT</h1>

                <div class="form">
                    <input type="text" name="user" id="username" value="" />
                    <label for="username"> <h4 style="color:#a90329;">User Name </h4>At least 4 characters. letters and numbers only.</label>
                    
                    <input type="password" name="pass" id="password" value="" />
                    <label for="password"><h4 style="color:#a90329;">Password</h4> At least 4 characters. Must be alpha numeric.</label>
                     
                    <input type="password" name="conpass" id="cpassword" value="password" />
                    <label for="cpassword"><h4 style="color:#a90329;">Confirm Password </h4>If your passwords aren’t equal, you won’t be able to continue with signup.</label>
                </div>      <!-- clearfix --><div class="clear"></div><!-- /clearfix -->
                <input class="submit" type="submit" name="submit_first" id="submit_first" value="" />
            </div>


            <!-- #second_step -->
            <div id="second_step">
                <h1>SIGN UP FOR A FREE <span>FACELINK</span> ACCOUNT</h1>
                

                <div class="form">
                    <input type="text" name="first_name" id="firstname" value="first name" />
                    <label for="firstname"> <h4 style="color:#a90329;">First Name</h4>Letters only </label>
                    <input type="text" name="last_name" id="lastname" value="last name" />
                    <label for="lastname"> <h4 style="color:#a90329;">Last Name </h4> Letters only </label>
                    <input type="text" name="email" id="email" value="" />

                    <label for="email"> <h4 style="color:#a90329;">Email address. </h4> Example admin@facelink.com </label>
                    
                </div>      <!-- clearfix --><div class="clear"></div><!-- /clearfix -->
                <input class="back" type="button" value="" />
                <input class="submit" type="submit" name="submit_second" id="submit_second" value="" />
            </div>


            <!-- #third_step -->
            <div id="third_step">
                <h1>SIGN UP FOR A FREE <span>FACELINK</span> ACCOUNT</h1>

                <div class="form">
                    <select id="age" name="age">
                        <option> 0 - 17</option>
                        <option>18 - 25</option>
                        <option>26 - 40</option>
                        <option>40+</option>
                    </select>
                    <label for="age"><h4 style="color:#a90329;">My age range.</h4> </label> <!-- clearfix --><div class="clear"></div><!-- /clearfix -->

                    <select id="gender" name="gender">
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                    <label for="gender"><h4 style="color:#a90329;">I am </h4></label> <!-- clearfix --><div class="clear"></div><!-- /clearfix -->

                    <select id="country" name="country">
                        <option value="India">India</option>
                        <option value="bangladesh">Bangladesh</option>
                        <option value="united states">United States</option>
                        <option value="srilanka">Srilanka</option>
                        <option value="other">Other</option>
                    </select>
                    <label for="country"><h4 style="color:#a90329;">My country</h4> </label> <!-- clearfix --><div class="clear"></div><!-- /clearfix -->
                    <input type="hidden" name="subjoin" value="1">

                </div>      <!-- clearfix --><div class="clear"></div><!-- /clearfix -->
                <input class="back" type="button" value="" />
                <input class="submit" type="submit" name="submit_third" id="submit_third" value="" />
            </div>


            <!-- #fourth_step -->
            <div id="fourth_step">
                <h1>SIGN UP FOR A FREE <span>FACELINK</span> ACCOUNT</h1>

                <div class="form">
                    <h2>Summary</h2>

                    <table>
                        <tr><td>Username</td><td></td></tr>
                        <tr><td>Password</td><td></td></tr>
                        <tr><td>Email</td><td></td></tr>
                        <tr><td>Name</td><td></td></tr>
                        <tr><td>Age</td><td></td></tr>
                        <tr><td>Gender</td><td></td></tr>
                        <tr><td>Country</td><td></td></tr>
                    </table>
                </div>      <!-- clearfix --><div class="clear"></div><!-- /clearfix -->
                <input class="back" type="button" value="" />
                <input class="send submit" type="submit" name="submit_fourth" id="submit_fourth" value="" />
            </div>

        </form>

	</div>
	<div id="progress_bar">
        <div id="progress"></div>
        <div id="progress_text">0% Complete</div>
	</div>

            
             
         </div>
         
			
	 <div class="left">
         
         <h1>WATCH A DEMO VIDEO</h1>
         <div class="demo">
         <a href="#" title="Watch a demo vedio"  rel="bookmark" class="video">
             <img src="images/flink1.PNG" alt="watch a demo vedio" class="visual-medium thumbnail" /><span> </span> </a>
         </div>  
     </div>
	 </div>
         </div>


     </div><!-- .wrap -->
     </div><!-- #main -->
 
		
		

	

	<div id="subsidiary-container">



		<div class="wrap">



			<div id="sidebar-subsidiary" class="sidebar">



				

				<div id="text-3" class="widget widget_text widget-widget_text"><div class="widget-wrap widget-inside"><h3 class="widget-title">About Me</h3>			<div class="textwidget"><p><img class="thumbnail alignleft" src="images/panna.png" alt="" width="60" height="60"> A person is like a book, don't judge by its cover or you'll be mistaken, read too fast you'll skip the good parts, don't hate it cause it could be a best seller ...

Web is my home and I love PHP and have been messing around with it for some time now.
You can contact me at panna35cs@gmail.com </p>
</div> 
		</div></div><div id="visual-categories-3" class="widget categories widget-categories"><div class="widget-wrap widget-inside"><h3 class="widget-title">ABOUT</h3><ul class="xoxo categories"><li class="cat-item cat-item-121"><a href="#" title="">About Us</a></li><li class="cat-item cat-item-114"><a href="#" title="">Contact Us</a></li><li class="cat-item cat-item-119"><a href="#" title="">Help</a></li><li class="cat-item cat-item-104"><a href="#" title="">Blog</a></li><li class="cat-item cat-item-115"><a href="#" title="">Home</a></li><li class="cat-item cat-item-105"><a href="#" title="">Privacy Policy</a></li><li class="cat-item cat-item-1"><a href="" title="">Contribute</a></li></ul><!-- .xoxo .categories --></div></div><div id="linkcat-2" class="linkcat widget bookmarks widget-bookmarks"><div class="linkcat widget-wrap widget-inside"><h3 class="widget-title">IMPORTANT LINKS</h3><ul class='xoxo blogroll'><li><a href="#"><span>Documentation</span></a></li><li><a href="#"><span>Developers</span></a></li><li><a href="#"><span>Suggest Ideas</span></a></li><li><a href="#"><span>Support Forum</span></a></li><li><a href="#"><span>Advertise</span></a></li><li><a href="#"><span>Credits</span></a></li><li><a href="#"><span>Our API</span></a></li></ul></div></div>

				

			</div><!-- #sidebar-subsidiary .sidebar -->



		</div><!-- .wrap -->



	</div><!-- #subsidiary-container -->



	

 
		
		<div id="footer"> 
 
			
			<div class="wrap"> 
 
				<p class="copyright">Copyright &#169; 2011 <a class="site-link" href="index.php" title="Facelink" rel="home"><span>Facelink</span></a>.</p>
				
			</div><!-- .wrap --> 
 
			
		</div><!-- #footer --> 
 
		
	</div><!-- #container --> 
 
	
<div id="wp-admin-bar">
<div class="padder">
<a href="index.php" id="admin-bar-logo">FaceLink</a>
   <ul class="main-nav">
       <li class="bp-login no-arrow"> <a href="login.php"> <h4 style="color:#ffffff, font-size:12px;">LogIn </h4> </a>
       
   </li>
   <li class="bp-register no-arrow"><a href="#"> REGISTER NOW &nbsp; </a> </li>
   <li class="bp-search-box"> <a href="#"> Search </a>
       <ul class="search-form">
       <form id="searchForm" method="get" action="search.php">
       <div class="in">
       <input type="text" name="search" class="search-txt" value="Hit enter to search" /> &nbsp;
       <input type="submit" class="search-button" value="" />
       </div>
       </form>
       </ul>
   </li>
   <li class="align-right" id="bp-adminbar-visitrandom-menu">
   <a href="#">Welcome Guest</a>
        <ul class="random-list">
        <li><a href="#">Visit our blog</a></li>
        <li class="alt"><a href="#">Need Help?</a></li>
        <li><a href="#">Contact Us</a></li>
        </ul>
	</li>
        </ul>
</div>
</div><!-- #wp-admin-bar -->
 
<script type="text/javascript" src="js/jquery.main.js"></script>
<?php
  }
?>
</body> 
</html>
