<?php

include("include/session.php");
?>

<?php

if($session->logged_in){
   header('location:home.php');
   exit;

   if($session->isAdmin()){
      header('location:admin/admin.php');
      exit;
   }

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
                <li id="menu-item-575" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-575"><a href="index.php">Home</a></li>
                <li id="menu-item-332" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-332"><a href="#">About Us</a></li>
                <li id="menu-item-330" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-330"><a href="#">Blog</a></li>
                <li id="menu-item-328" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-328"><a href="#">Help</a></li>
                <li id="menu-item-5"   class="menu-item menu-item-type-custom menu-item-object-custom menu-item-431"><a href="#">Contact Us</a> </li>
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
         <h1>WATCH A DEMO VIDEO</h1>
         <div class="demo">
         <a href="#" title="Watch a demo vedio"  rel="bookmark" class="video">
             <img src="images/flink.PNG" alt="watch a demo vedio" class="visual-medium thumbnail" /><span> </span> </a>
         </div>  
     </div>

     <div class="left">
     <div class="logg">
     <h1>&nbsp; &nbsp;LOG IN TO YOUR <span>FACELINK</span> ACCOUNT</h1>

     <div class="login-error">

     

     <?php
    /**
     * User not logged in, display the login form.
     * If user has already tried to login, but errors were
     * found, display the total number of errors.
     * If errors occurred, they will be displayed.
     */
if($form->num_errors > 0){
   echo "<h4 style='color:#ff0000 ;padding:5px 8px;'>".$form->num_errors." error(s) found</h4>";
}
?>
     </div>

    <form id=""action="process.php" method="POST">
    <table border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td> <label for="username"> User Name: </label> </td>
        <td> <input type="text" class="txt" id="" name="user" value="<?php echo $form->value("user"); ?>"/> </td></tr>
     <tr> <td> </td>  <td><?php echo "<h4>". $form->error("user")."</h4>"; ?> </td></tr>
    
    <tr>
        <td><label for="password">Password: </label> </td>
        <td><input type="password" class="txt" id="" name="pass" value="<?php echo $form->value("pass");?>" /></td> </tr>
        <tr><td></td><td><?php echo "<h4>". $form->error("pass")."</h4>"; ?></td> </tr>
    
    <tr>
        <td> <input type="checkbox"  name="remember" <?php if($form->value("remember") != ""){ echo "checked"; } ?> > &nbsp; Remember me</td>
        <td> <input type="submit" class="login_button2"id="" value="Login" /></td>
    </tr>
    <tr> <td></td><td><input type="hidden" name="sublogin" value="1"> </td> </tr>
    <tr> <td>[<a href="forgotpass.php">Forgot Password?</a>] </td>
         <td>Not registered? <a href="index.php">Sign-Up!</a></td>
    </tr>
    </table>
    </form>

    </div>
    </div>
    </div>
    </div
    </div>










     <div id="footer">
     <div class="wrap">
    <p class="copyright">copyright  &copy Monideep Purkayastha </p>
     </div><!-- .wrap -->
     </div><!-- #footer -->
     </div><!-- #container -->

     <div id="wp-admin-bar">
<div class="padder">
<a href="index.php" id="admin-bar-logo">FaceLink</a>
   <ul class="main-nav">
   
   <li class="bp-register no-arrow"><a href="index.php"> REGISTER NOW &nbsp; </a> </li>
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
   <a href="#">Welcome guest</a>
        <ul class="random-list">
        <li><a href="#">Random Member</a></li>
        <li class="alt"><a href="#">Random Group</a></li>
        <li><a href="http://devpress.com/demo/visual/blogs/?random-blog">Random Blog</a></li>
        </ul>
	</li>
        </ul>
</div>
</div><!-- #wp-admin-bar -->
<?php
}
?>
</body>

</html>