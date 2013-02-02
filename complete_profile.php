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
  else 


 if(isset($_SESSION['regsuccess'])){

?>

<?php
$uname= $_SESSION['reguname'];
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
     <div style="padding:0 10px 10px 15px;font-size:16px; color:#006699;" >
         <?php echo "Registered.&nbsp;"."Thank you"."&nbsp;"."<b>".$uname."</b>"."&nbsp;".",your data has been  added to our database."."<br/>"."Now complete your profile"; ?>
     </div>
     <form action="profile_process.php" method="POST" enctype="multipart/form-data">
     <table border="0" cellspacing="0">
     <tr>
         <td> Current City: </td>
         <td> <input type="text" name="city" value="" id="" class="t" /> </td>
     </tr>

     <tr>
         <td>Hometown: </td>
         <td> <input type="text" name="town" value="" id="" class="t"> </td>
     </tr>

     <tr>
         <td>Birthday: </td>
         <td> <select name="month" id="">
              <option value="january">January</option>
              <option value="february">February</option>
              <option value="march">March</option>
              <option value="april">April</option>
              <option value="May">May</option>
              <option value="June">June</option>
              <option value="July">July</option>
              <option value="August">August</option>
              <option value="september">September</option>
              <option value="october">October</option>
              <option value="november">November</option>
              <option value="december">December</option>

              </select> &nbsp;

              <select name="day" id="">

              <option value="1" selected="1">1</option>
              <option value="2" selected="2">2</option>
              <option value="3" selected="3">3</option>
              <option value="4" selected="4">4</option>
              <option value="5" selected="5">5</option>
              <option value="6" selected="6">6</option>
              <option value="7" selected="7">7</option>
              <option value="8" selected="8">8</option>
              <option value="9" selected="9">9</option>
              <option value="10" selected="10">10</option>
              <option value="11" selected="11">11</option>
              <option value="12" selected="12">12</option>
              <option value="13" selected="13">13</option>
              <option value="14" selected="14">14</option>
              <option value="15" selected="15">15</option>
              <option value="16" selected="16">16</option>
              <option value="17" selected="17">17</option>
              <option value="18" selected="18">18</option>
              <option value="19" selected="19">19</option>
              <option value="20" selected="20">20</option>
              <option value="21" selected="21">21</option>
              <option value="22" selected="22">22</option>
              <option value="23" selected="23">23</option>
              <option value="24" selected="24">24</option>
              <option value="25" selected="25">25</option>
              <option value="26" selected="26">26</option>
              <option value="27" selected="27">27</option>
              <option value="28" selected="28">28</option>
              <option value="29" selected="29">29</option>
              <option value="31" selected="31">30</option>

              </select> &nbsp;

              <select name="year" id="">
              <option value="2011">2011</option>
              <option value="2010">2010</option>
              <option value="2009">2009</option>
              <option value="2008">2008</option>
              <option value="2007">2007</option>
              <option value="2006">2006</option>
              <option value="2005">2005</option>
              <option value="2004">2004</option>
              <option value="2003">2003</option>
              <option value="2002">2002</option>
              <option value="2001">2001</option>
              <option value="2000">2000</option>
              <option value="1999">1999</option>
              <option value="1998">1998</option>
              <option value="1997">1997</option>
              <option value="1996">1996</option>
              <option value="1995">1995</option>
              <option value="1994">1994</option>
              <option value="1993">1993</option>
              <option value="1992">1992</option>
              <option value="1991">1991</option>
              <option value="1990" selected="1">1990</option>
              <option value="1989">1989</option>
              <option value="1988">1988</option>
              <option value="1987">1987</option>
              <option value="1986">1986</option>
              <option value="1985">1985</option>
              <option value="1984">1984</option>
              <option value="1983">1983</option>
              <option value="1982">1982</option>
              <option value="1981">1981</option>
              <option value="1980">1980</option>
              
              </select>


         </td>
     </tr>
     <tr>
         <td> Interested In: </td>
         <td> <input type="checkbox" name="interest1" value="Women" id="" /> &nbsp;Women &nbsp; &nbsp;
             <input type="checkbox" name="interest2" id="" value="men" /> &nbsp; Men
         </td>
     </tr>
     <tr>
     <td> Upload Your photo </td>
     <td> <input type="file" name="f" />  </td>
     </tr>

     <tr>
         <td> Languages </td>
         <td> <input type="text" name="language" value="" id=""  class="t"/> </td>
     </tr>

     <tr>
         <td> About Me </td>
         <td><textarea cols="30" rows="4" name="about" id="update" maxlength="200" class="t" > </textarea> </td>
     </tr>

     <tr>
         <td> &nbsp;</td>
         <td> <input type="submit" name="complete_profile" id="" value="Update Profile" class="b" /></td>
     </tr>

     <tr>
     <td> </td> <td> <input type="hidden" name="uname" value="<?php echo $uname;  ?>" /> </td>
     </tr>
     
     </table>
     </form>
     </div>
     </div>
     </div>

     </div>



    <div id="footer">
<div class="wrap">
<p>copyright  &copy Monideep Purkayastha </p>
</div><!-- .wrap -->
</div><!-- #footer -->


<div id="wp-admin-bar">
<div class="padder">
<a href="index.php" id="admin-bar-logo">FaceLink</a>
   <ul class="main-nav">
   <li class="bp-login"> <a href="#">Log In  </a>
       <ul class="log-form">
       <form action="secured/login_process.php" name="login_form" method="POST">
       <label class="lll"> User Name: </label>
       <input type="text" name="user_email" value="" id="user_email" class="txt-login" />
       <label class="lll"> Password: </label>
       <input type="password" name="user_password" value="" id="user_password" class="txt-login" />
       <input type="submit" name="login" value="Log In" class="login_button">
       <a href="secured/forgot_pass.php"> <label class="lll"> Forgot Password? </label> </a>
       </form>
       </ul>
   </li>
   <li class="bp-register no-arrow"><a href="secured/register.php"> REGISTER NOW &nbsp; </a> </li>
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
   <a href="#">MEMBER DETAILS</a>
        <ul class="random-list">
        <li><a href="#">Random Member</a></li>
        <li class="alt"><a href="#">Random Group</a></li>
        <li><a href="http://devpress.com/demo/visual/blogs/?random-blog">Random Blog</a></li>
        </ul>
	</li>
        </ul>
</div>
</div><!-- #wp-admin-bar -->























</body>
</html>





<?php
unset($_SESSION['regsuccess']);
 }
?>


