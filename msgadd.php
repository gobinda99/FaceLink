<?php
/**
 * index.php
 *
 *Facelink home page with registration and login form
 *
 * Written by: Monideep a.k.a. deep The Grandmaster of PHP
 *
 */


include_once 'include/session.php';

$uid=$_REQUEST['fun'];

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
$sen=$session->username;
$rec=$_REQUEST['fun'];
$m=$_REQUEST['m'];
$t=time()+330*60;

mysql_query("insert into scrap values('$sen','$sen','$rec','$m',$t)");
$_SESSION['y']="Message has been sent";
header("Location: fmessage.php?fun=$rec");




?>






<?php

        }
?>