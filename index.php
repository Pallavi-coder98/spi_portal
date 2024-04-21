<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    
    
    <style>
        .header{
            position: fixed;
            text-align: center;
            width: 100%;
        }
        .content{
            padding-top:170px;
            background-image: url("bg1.jpg");
            
        }
        .header .container-fluid {
            background-color: #f1f1f1;
            
        }
        img {
            height: 100px;
            width: 150px;
        }
        h3 {
            color: orange;
        }
        button{
            margin-top: 20px;
            background-color: orangered;
            border-radius: 8px;
        }
        .topnav{
            overflow:hidden;
            background-color: blue;
        }
        .topnav a{
            display:block;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            size: 17px;
            float: left;
            color: white;
        }
        .topnav a:hover{
            background-color: orangered;
        }
        .flex-container{
            display: flex;
            background-color: white;
        }
        .flex-container .card{
            margin: 15px;
            border-radius: 10px;
            width:100%;
            box-shadow: 5px 5px 5px 0px grey;
        }
        .flex-container .card img{
            height:200px;
            width: 100%;
            border-radius: 10px;
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
        <div class="topnav">
            <a href="#">Home</a>
            <a href="#">AboutSPI</a>
            <a href="#">ST2023</a>
            <a href="#">Technologies</a>
            <a href="#">ContactUs</a>
            <a href="/myproject/user/ulog.php">Login</a>
            
                        
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
                
                    <div class="col-sm-6 mt-5">
                    <iframe width="460" height="315" src="https://www.youtube.com/embed/qlXZlOw7C4c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="col-sm-6 mt-5 ps-5 " >
                    
                        <h1>Softpro Summer Training Pre-Reporting Portal</h1>
                        <h2>Softpro Welcomes all the trainees to the biggest summer training festival 2023</h2>
                        <p>For any help and assistance, call us on:</p>
                        <p>7080462022,7080102006</p>
                    
                    </div>
                
            </div>
            
        </div>
    </div>
    <div class="container-fluid" style="background-color: blue; height:150px;text-align:center;">
        <h2 class="mt-5 p-5" style="color:white;">Please Fill the Pre-Reporting Form</h2>
    </div>
    <div class="container">
        <h2>Pre-Reporting Form</h2>
        <p>Only those students who have registered for summer tarining in softpro india are eligible to fill this form.(केवल वे छात्र जिन्होंने सॉफ्टप्रो इंडिया में ग्रीष्मकालीन प्रशिक्षण के लिए पंजीकरण कराया है, वे ही इस फॉर्म को भरने के पात्र हैं)</p>
        <form action="code.php" class="form-control" enctype="multipart/form-data" method="post">
            <div class="row" style="margin-bottom: 10px;">
            <span id="msg"></span><br><br>
                <div class="col-sm-6" >

                    <input type="number" name="mobile" class="form-control" id="mobile" maxlength="10" minlength="10" placeholder="Enter Registered Mobile Number" required>
                </div>
                <div class="col-sm-6">
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter Registered Email Address" required>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-sm-6">
                    <input type="text" name="college" class="form-control" id="college" placeholder="Your college" required>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-6">
                    <input type="text" name="guardian_name" class="form-control" id="guardian_name" placeholder="Guardian Name" required>
                </div>
                <div class="col-sm-6">
                    <input type="text" name="guardian_mobile" class="form-control" id="guardian_mobile" placeholder="Guardian Mobile Number" required>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-6">
                    <select name="course" class="form-control" id=" course">
                        <option value="">Select Course</option>
                        <option value="Diploma">Diploma</option>
                        <option value="B.tech">B.tech</option>
                        <option value="PGDCA">PGDCA</option>
                    </select>
                </div>
                <div class="col-sm-6">
                <select name="branch" class="form-control" id="branch">
                        <option value="">Select Branch</option>
                        <option value="Computer Science Engineering">Computer Science Engineering</option>
                        <option value="Electronics Engineering">Electronics Engineering</option>
                        <option value="Electrical Engineering">Electrical Engineering</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-6">
                        <select name="year" class="form-control" id="year">
                            <option value="">Select Year</option>
                            <option value="1st Year">1st Year</option>
                            <option value="2nd Year">2nd Year</option>
                            <option value="3rd year">3rd Year</option>
                            <option value="4th year">4th Year</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                    <select name="gender" class="form-control" id="gender">
                            <option value="">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Others">Others</option>
                        </select>
                </div>

            </div>
            <div class="row mt-3">
                <div class="col-sm-6">
                        <select name="technology" class="form-control" id="technology">
                            <option value="">Select technology</option>
                            <option value="Python with Django">Python with Django</option>
                            <option value="PHP with Laravel/CI">PHP with Laravel/CI</option>
                            <option value=".Net">.Net</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                    <select name="rdate" class="form-control" id="rdate">
                            <option value="">Select Reporting Date</option>
                            <option value="9 July 2023">9 July 2023</option>
                            <option value="12 July 2023">12 July 2023</option>
                            
                        </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-6">
                        <select name="accommodation" class="form-control" id="accommodation">
                            <option value="">Select type of accommodation</option>
                            <option value="Hostel">Hostel</option>
                            <option value="Room">Room</option>
                            <option value="Self-Arrangement">Self-Arrangement</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                    <select name="mess" class="form-control" id="mess">
                            <option value="">Would Like to Avail mess Facility?</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                            
                        </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-6">
                    <label for="photo">**Upload Your Passport Size Photo in JPG/JPEG/PNG Format only</label>
                    <input type="file" name="photo" class="form-control" id="photo" accept="image/jpg, image/jpeg, image/png" placeholder="Upload Your Passport Size Photo" required>
                </div>
                <div class="col-sm-6">
                    <label for="aadhar">**Upload Your Aadhar Card in JPG/JPEG/PNG Format only</label>
                    <input type="file" name="aadhar" class="form-control" id="aadhar" accept="image/jpg, image/jpeg, image/png" placeholder="Upload Your Passport Size Photo" required>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-6">
                    <label for="marksheet">**Upload Your Marksheet in PDF Format only</label>
                    <input type="file" name="marksheet" class="form-control" id="marksheet" accept=".pdf" placeholder="Upload Your Marksheet" required>
                </div>
                <div class="col-sm-6 mt-4">
                    <select name="district" id="district" class="form-control">
                        <option value="">Select Your Home District</option>
                        <option value="Lucknow">Lucknow</option>
                        <option value="Varanasi">Varanasi</option>
                        <option value="Ayodhya">Ayodhya</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-6">
                    <input type="number" name="pincode" id="pincode" class="form-control" placeholder="Enter Your Pin Code" maxlength="6" required>
                </div>
                <div class="col-sm-6">
                    <textarea name="address" id="address" class="form-control"  rows="3" placeholder="Enter Your Address" required></textarea>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-sm-12">
                    <input type="checkbox" name="checkbox" id="checkbox" required>
                    <label for="checkbox">
                    I hereby declare that the details mentioned above in the form are true as per my knowledge & I give my concern to join Summer Training 2022 at Softpro India on the selected date & time as per my choice.
                    </label>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-sm-4"></div>
                <div class="col-sm-4" >
                    <input style="background-color: orangered;" type="submit" name="submit" value="submit" class="form-control">
                </div>
                <div class="col-sm-4"></div>
            </div>


        </form>
    </div>
    <div class="container mt-5" style="text-align: center;" >
        <h2 style="color: orangered;">Testimonials</h2>
        <h2 style="color: blue;">200000+  Students Love Us</h2>
        <div class="flex-container">
            <div class="row" style="width:100%;">
        
            <div class="col-sm-3 ps-2"><img src="2.png"></div>
            <div class="col-sm-3 ps-2"><img src="Testimonial.png"></div>
            <div class="col-sm-3 ps-2"><img src="Testimonial2.png"></div>
            <div class="col-sm-3 ps-2"><img src="Testimonial3.png"></div>
            </div>
        </div>

    </div>
    <div class="container-fluid mt-5" style="text-align: center; background-color: antiquewhite;">
        <h4>Not yet registered for Summer Training 2023, kindly register today to be a part of Team Softpro.</h4>
        <h5>ग्रीष्मकालीन प्रशिक्षण 2023 के लिए अभी तक पंजीकृत नहीं है, कृपया टीम सॉफ्टप्रो का हिस्सा बनने के लिए आज ही पंजीकरण करें।</h5>
        <a class="btn btn-primary" target="_blank" href='https://trainingatsoftpro.com/'>Register Now</a>
    </div>
    <div class="footer mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4">
                    <img src="spi_logo.png">
                </div>
                <div class="col-sm-4">
                    <display style="font-weight: bolder;font-size:25px;">Softpro Summer Training 2023 Pre-Reporting Portal</display>
                    <p>Launched by Softpro India, the largest learning center of North India imparted training to more than 200000+ Engineers till date.</p>
                    <p>&copy 2022-<?php echo date("Y");?>Designed and Developed by Akash at Softpro India.</p>
                </div>
                <div class="col-sm-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227818.9558169173!2d80.85155270934592!3d26.85040879059681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39995750b309aba5%3A0x1021eb2a5d7f3f1f!2sSoftpro%20House!5e0!3m2!1sen!2sin!4v1673506389982!5m2!1sen!2sin" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/query/3.4.1/jquery.min.js"></script>
    <script>
            $("#mobile").on("keyup",function(){
                let mobile=$(this).val();
                $.ajax({
                 url:"stu_ajax.php",
                 type:"POST",
                 data:{mobile},
                 
                 success: function(res){
                    console.log(res);
                    if(res.status == false){
                        $("#msg").html("You are not eligible for filling this form!")
                        setTimeout(function(){
                            $('#msg').fadeOut();
                            },5000);                      
                        $("#msg").removeClass("alert-success");
                        $("#msg").addClass("alert-danger");
                        $("#msg").html(res.message);
                        $("#name").val("");
                        $("#email").val("");
                        $("#college").val("");
                        $("#submit").attr("disabled", true);
                        
                        
                   }else{
                    $("#msg").html("You are eligible for filling this form!")
                    setTimeout(function(){
                            $('#msg').fadeOut();
                            },5000);
                    $("#msg").removeClass("alert-danger");
                    $("#msg").addClass("alert-success");
                    $("#name").val(res[0].name);
                    $("#email").val(res[0].email);
                    $("#college").val(res[0].college);
                    $("#submit").attr("disabled", false);
                   }
                 }   
                });
            });
        </script>
    

    
</body>
</html>