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

if(strstr($_FILES['f']['type'],"image")){
	if($_FILES['f']['size']<300*1024){
		$fname=$un.rand(1000,999999).str_replace(' ','_',$_FILES['f']['name']);
		$path="album/".$fname;
		if(move_uploaded_file($_FILES['f']['tmp_name'],$path)){
			mysql_query("insert into photo values('$session->username','$fname')");
			$_SESSION['msg']="Image  uploaded sucessfully";
			header("Location: photo.php");
		}
		else{
			$_SESSION['msg']="Temporary Problem, Try Later";
			header("Location: photo.php");
		}
	}
	else{
		$_SESSION['msg']="Image size must be less than 300 kb";
		header("Location: photo.php");
	}
}
else{
	$_SESSION['msg']="Select an image only";
	header("Location: photo.php");
}
















?>

<?php
        }

?>