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
include_once 'session.php';
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

mysql_query("insert into frnd values('$session->username','$fun','no')");
$_SESSION['frnd_msg']="Request has been sent";
header("Location: friend.php?fun=$fun");

?>



<?php

        }
?>