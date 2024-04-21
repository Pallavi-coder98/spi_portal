<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View All Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        table{
        table-layout: revert;
        }
    

        .header{
            
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

       
    </style>
</head>
<body>
    
        <?php
        include("header.php"); 
        ?>
    
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <form action="" method="post">
                    <input type="text" name="name" />
                    <input type="submit" value="find" name="find" />
                </form>
                <?php
                if(isset($_POST['find'])){
                    $name=$_POST['name'];
                    $con = mysqli_connect('localhost','root','','myproject');
                    $query="select * from tbl_form where name='$name'";
                    
                        ?>
                        <table>
                            <thead>
                            <tr>
                <th>sr. No</th>
                <th>Mobile No</th>
                <th>Email</th>
                <th>Name</th>
                <th>College</th>
                <th>Course</th>
                <th>Branch</th>
                <th>Year</th>
                <th>Gender</th>
                <th>Technology</th>

            </tr>
                            </thead>
                            <tbody>
                                <?php
                                $res=mysqli_query($con,$query);
                    while($row=mysqli_fetch_assoc($res)){
                        ?>
                                <tr>
                                    <td><?php echo $row['id']  ?></td>
                                    <td><?php echo $row['mobile']  ?></td>
                                    <td><?php echo $row['email']  ?></td>
                                    <td><?php echo $row['name']  ?></td>
                                    <td><?php echo $row['college']  ?></td>
                                    <td><?php echo $row['course']  ?></td>
                                    <td><?php echo $row['branch']  ?></td>
                                    <td><?php echo $row['year']  ?></td>
                                    <td><?php echo $row['gender']  ?></td>
                                    <td><?php echo $row['technology']  ?></td>

                                </tr>
                            </tbody>
                        </table>

                 <?php   
                }                  
                } 
                ?>
                
                
                
                
            <table class="table table-stripped" style="width:50%;">
            
            <tr>
                <th>sr. No</th>
                <th>Mobile No</th>
                <th>Email</th>
                <th>Name</th>
                <th>College</th>
                <th>Guardian Name</th>
                <th>Guardian Mobile</th>
                <th>Course</th>
                <th>Branch</th>
                <th>Year</th>
                <th>Gender</th>
                <th>Technology</th>
                <th>Reporting Date</th>
                <th>Accommodation</th>
                <th>Mess</th>
                <th>Photo</th>
                <th>Aadhar</th>
                <th>Marksheet</th>
                <th>District</th>
                <th>Pin Code</th>
                <th>Address</th>
                <th>Checkbox</th>

            </tr>
            
            <tbody>
                <?php
                $con = mysqli_connect('localhost','root','','myproject');
                $query = "select * from tbl_form";
                $result = mysqli_query($con,$query);
                $i=1;
                while($row = mysqli_fetch_assoc($result)){ ?>
                <tr>
                    <td><?php echo $i;?><input type="hidden" name="id" value="<?php echo $row['id'];?>"></td>
                    <td><?php echo $row['mobile'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['college'] ?></td>
                    <td><?php echo $row['guardian_name'] ?></td>
                    <td><?php echo $row['guardian_mobile'] ?></td>
                    <td><?php echo $row['course'] ?></td>
                    <td><?php echo $row['branch'] ?></td>
                    <td><?php echo $row['year'] ?></td>
                    <td><?php echo $row['gender'] ?></td>
                    <td><?php echo $row['technology'] ?></td>
                    <td><?php echo $row['rdate'] ?></td>
                    <td><?php echo $row['accommodation'] ?></td>
                    <td><?php echo $row['mess'] ?></td>
                    <td><?php echo $row['photo_name'] ?></td>
                    <td><?php echo $row['aadhar_name'] ?></td>
                    <td><?php echo $row['marksheet_name'] ?></td>
                    <td><?php echo $row['district'] ?></td>
                    <td><?php echo $row['pincode'] ?></td>
                    <td><?php echo $row['address'] ?></td>
                    <td><?php echo $row['checkbox'] ?></td>
                    
                </tr>
                <?php
                $i++;
                } ?>        
                
                
            </tbody>
        </table>

            </div>
        </div>
        

    </div>

    
</body>
</html>