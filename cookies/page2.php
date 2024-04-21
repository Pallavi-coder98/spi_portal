<?php
/**
* Cookie demonstration.
**/

if(!empty($_POST["remember"])) {
	setcookie ("username",$_POST["username"],time()+ 3600);
	setcookie ("password",$_POST["password"],time()+ 3600);
	echo "Cookies Set Successfully"."<br/>";
    //echo $_COOKIE['username']."<br/>";
    //echo $_COOKIE['password'];
} else {
	setcookie("username","");
	setcookie("password","");
	echo "Cookies Not Set";
}

?>

<p><a href="page1.php"> Go to Login Page </a> </p>