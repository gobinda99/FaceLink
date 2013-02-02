<?php
/**
 * index.php
 *
 *Facelink home page with registration and login form
 *
 * Written by: Monideep a.k.a. deep The Grandmaster of PHP
 *
 */


include_once 'session.php';



    
                $u_first_name=$_POST[u_first_name];
                $u_last_name=$_POST['u_last_name'];
               
                $u_gender=$_POST['u_gender'];
                $u_country=$_POST['u_country'];
                $u_about=$_POST['u_about'];
                $u_city=$_POST['u_city'];
                $u_town=$_POST['u_town'];
                $u_language=$_POST['u_language'];
                
                



                $insert="UPDATE users SET first_name='$u_first_name',last_name='$u_last_name',gender='$u_gender',country='$u_country' WHERE username='$session->username'";
                $up=mysql_query($insert);
               $insert2="UPDATE profile SET about='$u_about', city='$u_city',town='$u_town',language='$u_language' where uname='$session->username'";
               $up2=mysql_query($insert2);

               if(! $up && ! $up2)
               {
                   $_SESSION['profile_err']="Error occoured during the update process!! try again later";
               }

               else{
                   $_SESSION['profile_err']="Your profile has been successfully updated";

               }

               header("location:edit_profile.php");
            










        
        ?>
