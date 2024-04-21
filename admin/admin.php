<?php
session_start();
if(isset($_SESSION['user'])==""){
    header("location:index.php");
}
echo (time()- $_SESSION["login_time"]);
 
// To check if session is started.
if(isset($_SESSION["user"]))
{
    if((time()-$_SESSION["login_time"])>121) 
    {
        
        session_destroy();
        header("Location:index.php");
    }
}
else
{
    header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    .header{
            position: fixed;
            text-align: center;
            width: 100%;
        }
        .header .container-fluid {
            background-color: #f1f1f1;
            
        }
        img {
            height: 100px;
            width: 150px;
        }
        ul{
            padding: 15px;
            overflow: auto;
            background-color: blue;
            margin-top: 110px;
            height: 400px;

        }
        li{
            text-align: center;
            display: block;
            border: 2px solid red;

        }
        li a{
            text-decoration: none;
            padding: 8px 16px;
            color: white;

        }
        li a:active{
            background-color: green;
        }
        li a:hover{
            background-color: grey;
            color: white;
        }
    </style>
</head>
<body>
    
    <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-4">
                        <img src="spi_logo.png">
                    </div>
                    <div class="col-sm-4">
                        <h2>Softpro Learning Center</h2>
                        <h3>A Unit Of Softpro Group Of Companies</h3>
                    </div>
                    <div class="col-sm-4">
                        <button onclick="location.href='http://localhost/myproject/admin/index.php'">Admin Login</button>
                    </div>
                </div>
            </div>
        </div>
    
    <div class="container-fluid" >
    <div class="row">
        <div class="col-sm-4" style="margin-top: 120px;">
        <?php
        include("navbar.php");
        ?>
        </div>
        <div class="col-sm-8" style=" margin-top:150px;">
            <table border="5px solid grey" width="100%">
                <form action="connect.php" method="post" class="form-control">
                    <tr><td>Name</td><td><input type="text" name="name" id="name" placeholder="Enter the name" class="form-control"></td></tr>
                    <tr><td>College</td><td><input type="text" name="college" id="college" placeholder="Enter college name" class="form-control"></td></tr>
                    <tr><td>Email</td><td><input type="email" name="email" id="email" placeholder="Enter Email address" class="form-control"></td></tr>
                    <tr><td>Mobile</td><td><input type="number" name="mobile" id="mobile" placeholder="Enter mobile number" maxlength="10" minlength="10" class="form-control"></td></tr>
                    <tr>
                        <td><label for="course">Course</label></td>
                        <td>
                            
                        <select name="course" class="form-control" id="course">
                        <option value="">Select Course</option>
                        <option value="Diploma">Diploma</option>
                        <option value="B.tech">B.tech</option>
                        <option value="PGDCA">PGDCA</option>
                    </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="branch">Branch</label></td>
                        <td>
                            
                        <select name="branch" class="form-control" id="branch">
                        <option value="">Select Branch</option>
                        <option value="Computer Science Engineering">Computer Science Engineering</option>
                        <option value="Electronics Engineering">Electronics Engineering</option>
                        <option value="Electrical Engineering">Electrical Engineering</option>
                    </select>

                        </td>
                    </tr>
                    <tr><td></td><td><input class="btn btn-success" style="color:yellow;" type="submit" value="Submit"></td></tr>
                </form>
            </table>
        
            <form class="mt-5" method="post">
                <table>
                    <tr>
                        <td>
                        <select name="course" class="form-control" id=" course">
                        <option value="">Select Course</option>
                        <option value="Diploma">Diploma</option>
                        <option value="B.tech">B.tech</option>
                        <option value="PGDCA">PGDCA</option>
                    </select>
                        </td>
                        <td>
                            <select name="branch" class="form-control" id="branch">
                        <option value="">Select Branch</option>
                        <option value="Computer Science Engineering">Computer Science Engineering</option>
                        <option value="Electronics Engineering">Electronics Engineering</option>
                        <option value="Electrical Engineering">Electrical Engineering</option>
                    </select>
                        </td>
                    
                    <td>
                        <input type="submit" value="Search" name="search">
                    </td>
                    </tr>
                    
                </table>
            </form>
    
            <table border="5px solid blue" style="margin-top:20px;" class="table table-stripped">
                
                    <tr>
                    
                        <td>Name</td>
                        <td>College</td>
                        <td>Email</td>
                        <td>Mobile</td>
                        <td>Course</td>
                        <td>Branch</td>
                    </tr>
                
                
                    <tr>
                    <?php
                    if(isset($_POST['search'])){
                    $course=$_POST['course'];
                    $branch=$_POST['branch'];
                    $con = mysqli_connect('localhost','root','','myproject');
                    if(isset($_POST['course']) and isset($_POST['branch'])){
                    $query1="select * from tbl_form where course='$course' and branch='$branch'";
                    $res=mysqli_query($con,$query1);
                    while($row=mysqli_fetch_assoc($res)){
                            
                    ?>
                        <tr>
                                <td><?php echo $row['name'];?></td>
                                <td><?php echo $row['college'];?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><?php echo $row['mobile'] ?></td>
                                <td><?php echo $row['course'];?></td>
                                <td><?php echo $row['branch'];?></td>
                        </tr>
                    <?php
                            }
                    }
                }
                    
                    ?>
                    
                </table>
        </div>
        
    </div>
    </div>

    
        
    
    
    
</body>
</html>