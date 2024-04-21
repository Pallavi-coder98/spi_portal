<?php
session_start();
if(isset($_SESSION['uname'])=="")
{
    header("location:ulog.php");
}else{
    echo $_SESSION['uname'];
}
// function sessionStart($lifetime,$path,$domain,$secure,$httpOnly)
// {
//     session_set_cookie_params($lifetime,$path,$domain,$secure,$httpOnly);
//     session_start();
// }
// sessionStart(0,'index.php','localhost',false,true);
// $_SESSION['id']=101;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>userpage</title>
</head>
<body>
    <h1>Welcome USer</h1>
    <a href="logout.php">Logout</a>
</body>
</html>