<?php
session_start();
// function sessionStart($lifetime,$path,$domain,$secure,$httpOnly)
// {
//     session_set_cookie_params($lifetime,$path,$domain,$secure,$httpOnly);
//     session_start();
// }
// sessionStart(0,'index.php','localhost',false,true);
// $_SESSION['id']=101;
$name=$_POST['uname'];
$password=$_POST['password'];
$con=mysqli_connect('localhost','root','','myproject');
$query="select * from user where name='$name' and password='$password'";
$res=mysqli_query($con,$query);
if(mysqli_num_rows($res)>0)
{
    $_SESSION['uname']=$name;
    header("location:index.php");
}
?>
