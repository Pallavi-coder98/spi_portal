<?php
session_start();
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
<?php
// if($_SESSION['user']=="")
// {
//     session_destroy();
//     header("location:index.php");
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="header.css">
    <style>
        ul{
            padding: 15px;
            overflow: auto;
            background-color: blue;
            
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
    
  
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Students', 'status'],
          ['Approved',     <?php
                        $con=mysqli_connect('localhost','root','','myproject');
                        $query="select * from tbl_form where status='Y'";
                        $result = mysqli_query($con,$query);
                        $res = mysqli_num_rows($result);
                        echo $res;
                        ?>],
          ['Not Approved',      <?php
                        $con=mysqli_connect('localhost','root','','myproject');
                        $query="select * from tbl_form where status='N'";
                        $result = mysqli_query($con,$query);
                        $res = mysqli_num_rows($result);
                        echo $res;
                        ?>],
          
        ]);

        var options = {
          title: 'Students Detail',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
    
  
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Registered','Approved','Not Approved' ],
          ['2022', 10, 4, 2],
          ['2023',<?php
                        $con=mysqli_connect('localhost','root','','myproject');
                        $query="select * from tbl_registered";
                        $result = mysqli_query($con,$query);
                        $res = mysqli_num_rows($result);
                        echo $res;
                        ?> ,<?php
                        $con=mysqli_connect('localhost','root','','myproject');
                        $query="select * from tbl_form where status='Y'";
                        $result = mysqli_query($con,$query);
                        $res = mysqli_num_rows($result);
                        echo $res;
                        ?> , <?php
                        $con=mysqli_connect('localhost','root','','myproject');
                        $query="select * from tbl_form where status='N'";
                        $result = mysqli_query($con,$query);
                        $res = mysqli_num_rows($result);
                        echo $res;
                        ?>],
          ['2024', 0, 0, 0],
          
        ]);

        var options = {
          chart: {
            title: 'Reporting'
             
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
</head>
<body>
    <?php include("header.php"); 
    ?>
    <div class="row">
        <div class="col-sm-3">
            <?php include("navbar.php"); ?>
        </div>
        <div class="col-sm-9">
            <div class="row">
                <div class="col-sm-3">
                    <div class="well" style="background-color: aqua;text-align:center;">
                        <h3>Registered</h3>
                        <?php
                        $con=mysqli_connect('localhost','root','','myproject');
                        $query="select * from tbl_registered";
                        $result = mysqli_query($con,$query);
                        $res = mysqli_num_rows($result);
                        echo $res;
                        ?>
                    </div>
                    
                </div>
                <div class="col-sm-3">
                    <div class="well" style="background-color:green;text-align:center;">
                        <h3>Approved</h3>
                        <?php
                        $con=mysqli_connect('localhost','root','','myproject');
                        $query="select * from tbl_form where status='Y'";
                        $result = mysqli_query($con,$query);
                        $res = mysqli_num_rows($result);
                        echo $res;
                        ?>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="well" style="background-color: orangered;text-align:center;">
                        <h3>Not Approved</h3>
                        <?php
                        $con=mysqli_connect('localhost','root','','myproject');
                        $query="select * from tbl_form where status='N'";
                        $result = mysqli_query($con,$query);
                        $res = mysqli_num_rows($result);
                        echo $res;
                        ?>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="well" style="background-color: brown;text-align:center;">
                        <h3>Reported</h3>
                        <?php
                        $con=mysqli_connect('localhost','root','','myproject');
                        $query="select * from tbl_form";
                        $result = mysqli_query($con,$query);
                        $res = mysqli_num_rows($result);
                        echo $res;
                        ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="well">
                    <div id="piechart_3d" style="width: 250px; height: 200px;background-color: bisque;align:center;"></div>

                    </div>

                </div>
                <div class="col-sm-6">
                    <div class="well" style="background-color: grey;align:center;">
                    <div id="columnchart_material" style="width: 300px; height: 200px;"></div>

                    </div>

                </div>
            </div>
            <div class="row">
            <table style="margin-top:20px;" class="table table-stripped" border="2px">
                
                <tr>
                
                    <th>Name</th>
                    <th>College</th>
                    <th>Email</th>
                    <th>Mobile</th>
                </tr>
            
            
                <tr>
                <?php
                $con = mysqli_connect('localhost','root','','myproject');
                $query = "select * from tbl_registered";
                $result = mysqli_query($con,$query);
                while($row = mysqli_fetch_assoc($result)){
                ?>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['college'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['mobile'];?></td>
                </tr>
                <?php
                };
                
            ?>

            
        </table>
            </div>
        </div>
    </div>
    
</body>
</html>