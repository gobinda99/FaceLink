<?php
/**
 * index.php
 *
 *Facelink home page with registration and login form
 *
 * Written by: Monideep a.k.a. deep The Grandmaster of PHP
 *
 */


include_once 'includes/functions.php';
include_once 'includes/tolink.php';
include_once 'includes/time_stamp.php';

$uid=$_REQUEST['fun'];
$Wall = new Wall_Updates();
$updatesarray=$Wall->Updates($uid);
?>


<?php
if(!$session->logged_in){
header("location:index.php");
}

    else
        if($session->logged_in)
        {
        ?>


<?php
$fun=$_REQUEST['fun'];
$r = mysql_query("SELECT * FROM users WHERE username='$fun'") or die(mysql_error());
	$rr=mysql_fetch_array($r);
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
<link rel="stylesheet" href="css/home.css" type="text/css" media="all" />
<link href="css/wall.css" rel="stylesheet" type="text/css">
<meta name='robots' content='noindex,nofollow' />
<meta name="generator" content="Facelink|| Simplify your digital life" />
<meta name="template" content="Facelink" />
<meta name="copyright" content="Copyright (c) 2011" />
<meta name="description" content="Private Social Network" />

<link rel='index' title='Facelink' href='index.php' />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/jquery.inputfocus-0.9.min.js"></script>
<script type="text/javascript" src="js/jquery.oembed.js"></script>
<script type="text/javascript" src="js/wall.js"></script>

</head>

<body>

<div id="wp-admin-bar">
<div class="padder">
<a href="index.php" id="admin-bar-logo">FaceLink</a>
<ul class="main-nav">
    <?php if($session->isAdmin()){?>
    <li class="a-left no-arrow"> <a href="admin/admin.php">ADMIN </a></li>   <?php }?>
   <li class="a-left no-arrow"> <a href="home.php">HOME </a></li>
   <li class="a-left no-arrow"> <a href="profile.php">PROFILE </a> </li>
   <li class="a-left no-arrow"> <a href="friends.php"> FRIENDS </a> </li>
   <li class="a-left no-arrow"> <a href="photos.php">PHOTOS </a> </li>
   <li class="a-left no-arrow"> <a href="message.php"> MESSAGE </a> </li>
   <li class="search-home no-arrow">
       <div class="outer">
       <form method="get" id="seacrh-h"action="search.php">
       <input type="text" class="blink" name="search" value="hit enter to search" /> &nbsp;
       <input type="submit" name="search-submit" value="" class="s-h-b"  />
       </form>
       </div>

   </li>

   <li class="notify"><a href="#"> NOTIFICATIONS </a> </li>
   <li class="align-right" id="bp-adminbar-visitrandom-menu">
   <a href="#">ACCOUNT</a>
        <ul class="account">
        <li><a href="#"> Welcome <?php echo $session->username;  ?> </a></li>
        <li class="alt"><a href="#">Edit Profile</a></li>
        <li><a href="#">Delete Account</a></li>
        <li> <?php echo "<a href=\"process.php\">Logout</a>"; ?> </li>
        </ul>
	</li>
        </ul>
</div>
</div><!-- #wp-admin-bar -->

<div id="home">
<div class="wrap">

<div id="l">

<div class="profile_pic">
<img src="profile/<?php echo $fun; ?>.jpg" height="150" width="140" alt="profile picture" />
</div>

<div class="profile_name">
    <a href="home.php">
<?php echo $fun;  ?> </a>
</div>


<div class="friend_request">



    <?php

				  $qq=mysql_query("select * from frnd where un='$session->username;' and fun='$fun'");
				  if(mysql_num_rows($qq)==0){
				  ?>


<?php
if(isset($_SESSION['frnd_msg'])){

echo $_SESSION['frnd_msg'];
}
else{
?>
    <form action="fadd.php" method="post">
				   <input name="fun" type="hidden" value="<?php echo $fun ?>" />
				   <input name="" type="submit" value="Add as a Friend" />
    </form>

    <?php } ?>

    <?php } ?>

</div>

<div class="message">
<a href="fmessage.php?fun=<?php echo $fun ?>">Message Book</a>
</div>
<div class="link">
<img src="images/home.png" alt="home" width="32" height="32" class="home_img" /> <a href="home.php">  My Home </a> <br/>
<img src="images/profile.png" alt="profile" width="32" height="32" class="home_img" /> <a href="profile.php">  My Profile </a> <br/>
<img src="images/friend.png" alt="friend" width="32" height="32" class="home_img" /> <a href="friend.php">  My Friends </a> <br/>
<img src="images/photo.png" alt="Photo" width="32" height="32" class="home_img" /> <a href="photo.php">  My Photos </a> <br/>
<img src="images/message.png" alt="message" width="32" height="32" class="home_img" /> <a href="message.php">   Messages </a> <br/>


</div>

</div>
<div id="r">

<div class="friend_list" style="padding:20px;">
<h3 style="text-align:left; padding-left:20px;"> Friends </h3>
<table>
<?php
$qq=mysql_query("select fun from frnd where un='$fun' and status='yes'");
while($rrr=mysql_fetch_array($qq)){
$x=$rrr[0];
$qr=mysql_query("select * from users where username='$x'");
 while($rs=mysql_fetch_array($qr)){
?>
<tr>
<td><a href="friend.php?fun=<?php echo $rs['username'] ?>"> <img src="profile/<?php echo $rs['username'] ?>.jpg" width="80" height="60" /></a></td>
					<td><?php echo $rs['first_name'] ?> &nbsp; <?php echo $rs['last_name'] ?><br />
					<?php echo $rs['email'] ?><br />

					<?php echo $rs['country'] ?><hr />

					</td>
					</tr>
					<?php
					}

				  }
				  ?>
</table>

</div>

</div>


<div id="wall_container">
<div id="updateboxarea">
<h4>What's up?</h4>
<form method="post" action="">
<textarea cols="30" rows="4" name="update" id="update" maxlength="200" ></textarea>
<br />
<input type="submit"  value=" Update "  id="update_button"  class="update_button"/>
</form>
</div>
<div id='flashmessage'>
<div id="flash" align="left"  ></div>
</div>
<div id="content">

<?php include('load_messages.php'); ?>

</div>

</div>

















</div>
</div>








<div id="footer">
<div class="wrap">
<p class="copyright">copyright  &copy Monideep Purkayastha </p>

</div><!-- .wrap -->
</div><!-- #footer -->






























<?php
        }
?>