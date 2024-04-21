<?php
$name = $_POST['name'];
$college = $_POST['college'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$con = mysqli_connect('localhost','root','','myproject');
$query = "insert into tbl_registered (name,college,email,mobile) values('$name','$college','$email','$mobile')";
$result = mysqli_query($con,$query);
header("location:admin.php");

?>