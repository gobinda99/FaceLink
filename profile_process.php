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

if(! isset($_POST['complete_profile'])){
    header('location:complete_profile.php');
}
else{

    $city=$_POST['city'];
    $town=$_POST['town'];
    $month=$_POST['month'];
    $day=$_POST['day'];
    $year=$_POST['year'];
    $interest1=$_POST['interest1'];
    $interest2=$_POST['interest2'];
    $language=$_POST['language'];
    $about=$_POST['about'];
    $uname=$_POST['uname'];



   $q="INSERT INTO profile(profile_id, city, town, month, day, year, interest1, interest2,language,about,uname) values('','$city','$town','$month','$day','$year','$interest1','$interest2','$language','$about','$uname')";
    $result=mysql_query($q);
   $_SESSION['city']=$city;
   $_SESSION['town']=$town;
   $_SESSION['month']=$month;
   $_SESSION['day']=$day;
   $_SESSION['year']=$year;
   $_SESSION['language']=$language;
   $_SESSION['about']=$about;
   $_SESSION['interest1']=$interest1;
   $_SESSION['interest2']=$interest2;

    $_SESSION['cprofile']=true;

 

    $temp=$_FILES['f']['tmp_name'];
    $target="profile/$uname.jpg";
    move_uploaded_file($temp,$target);

    header('location:login.php');

}


?>
