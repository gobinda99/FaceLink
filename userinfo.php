<?php

include("include/session.php");
?>

<html>
<title> User Info</title>
<body>

<?php
/* Requested Username error checking */
$req_user = trim($_GET['user']);
if(!$req_user || strlen($req_user) == 0 ||
   !eregi("^([0-9a-z])+$", $req_user) ||
   !$database->usernameTaken($req_user)){
   die("Username not registered");
}

/* Logged in user viewing own account */
if(strcmp($session->username,$req_user) == 0){
   echo "<h1>My Account</h1>";
}
/* Visitor not viewing own account */
else{
   echo "<h1>User Info</h1>";
}

/* Display requested user information */
$req_user_info = $database->getUserInfo($req_user);

/* Username */
echo "<b>Username: ".$req_user_info['username']."</b><br>";

/* Email */
echo "<b>Email:</b> ".$req_user_info['email']."<br>";


/* If logged in user viewing own account, give link to edit */
if(strcmp($session->username,$req_user) == 0){
   echo "<br><a href=\"useredit.php\">Edit Account Information</a><br>";
}

/* Link back to main */
echo "<br>Back To [<a href=\"main.php\">Main</a>]<br>";

?>

</body>
</html>
