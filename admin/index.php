<?php
error_reporting(0);
$msg = $_REQUEST['msg'];
if($msg==1){
    $err = "*Invalid Email or Password!";
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-image: url("wall1.jpg");
        }
        #loginpage {
            box-shadow: 5px 5px 5px 0px grey;
            
        }
        h2 {
            color:green;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-4">

            </div>
            <div class="col-sm-4" id="loginpage" style="height: 300px;text-align: center;background-color:pink;border-radius:10px;box-shadow:5px 5px 5px 0px grey;">
                <h2>Admin Login</h2>
                <form action="login_data.php" method="post" class="form-control" enctype="multipart/form-data">
                    <span style="color:red;"><?php echo $err;?></span>
                    <input type="email" class="form-control mt-3 py-2" name="email" id="email" placeholder="Enter Your Email">
                    <input type="password" class="form-control mt-3 py-2" name="password" id="password" placeholder="Enter Your Password">
                    <button type="submit" onclick="location.href='http://localhost/myproject/admin.php'"  class="btn btn-primary  mt-3 form-control">Login</button>

                    
                </form>
                <button style="background-color: orangered;" class="btn" onclick="location.href='http://localhost/myproject/index.php'">BackToHome</button>
            
                
            </div>
        </div>
    </div>
    
</body>
</html>