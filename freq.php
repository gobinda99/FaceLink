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
$d=$_REQUEST['d'];
if($d=='y'){
	mysql_query("insert into frnd values('$session->username','$fun','yes')");
 	mysql_query("update frnd set status='yes' where fun='$session->username' and un='$fun' and status='no'");
	//echo "done";
}
else if($d=='n'){
	mysql_query("delete from frnd where fun='$session->username' and un='$fun' and status='no'");
	//echo "delete";
}
//echo mysql_error();
header("Location: home.php");

?>


<?php
        }
?>