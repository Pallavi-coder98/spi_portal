<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How to get data dynamically</title>
</head>
<body>
    <div class="row">
        
        <?php
        $con=mysqli_connect('localhost','root','','myproject');
        $query="select * from tbl_form";
        $res=mysqli_query($con,$query);
        if(mysqli_num_rows($res))
        {
            while($row=mysqli_fetch_assoc($res))
            {
                ?>
                
                <img src="http://localhost/myproject/upload/photo/<?php echo $row['photo_name']; ?>" height="100" width="100" style="margin-left:20px" />


                <?php
            }
        }


?>
        </form>
    </div>
    
</body>
</html>