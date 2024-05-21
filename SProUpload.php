<?php
    session_start();
    $con=mysqli_connect("localhost","root","","college_digitization")or die("not connected");
    // $msg1="";
    // $msg2="";
    // $msg3="";
    // $msg4="";
    // $msg5="";
    // $msg6="";

    if(isset($_POST["btn"]))
    {
    
        $PNO = $_POST["PNO"];
        $PName = $_POST["PName"];
        $Subject = $_POST["Subject"];
        $i = $_FILES["fl"]["name"];
        $a = "/opt/lampp/htdocs/fpro/data/".$i;

        $sql = "INSERT INTO project(PNO,PName,Subject,fl) values ('$PNO','$PName','$Subject','$i')";
            $x = move_uploaded_file($_FILES["fl"]["tmp_name"],$a);
                if($a)
                {
                    echo '<script type="text/JavaScript">
                    alert("File Upload Succssfully");
                    </script>';
                }
            //echo $sql;exit;
            $r=mysqli_query($con,$sql);
            if($r)
            {
                echo '<script type="text/JavaScript">
                alert("Data Inserted Succesfully");
                </script>';
            }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
   <link rel="stylesheet" href="CSS/Addprof.css">
    <link rel="stylesheet" href="CSS/main.css">
    <title>Student</title>
</head>
<body>

    <section id="sidebar">
        <a href="#" class="brand">Student</a>
        <ul class="side-menu">
            <li><a href="index.html" class="active"><i class='bx bxs-dashboard' ></i>Dashboard</a></li><br>
            <!-- <li class="divider">Main</li> -->
            <li>
                <a href="#" ><i class='bx bx-group'></i></i>Student<i class='bx bx-chevron-right' ></i></a>
                <ul class="side-dropdown">
                    <li><a href="">Student Profiles</a></li>
                </ul>
            </li>

            <li>
                <a href="#" ><i class='bx bx-rupee' ></i>Fees<i class='bx bx-chevron-right' ></i></a>
                <ul class="side-dropdown">
                    <li><a href="#">Fee Recipt</a></li>
                </ul>
            </li>

            <li>
                <a href="#" ><i class='bx bxs-note' ></i>Assignments<i class='bx bx-chevron-right' ></i></a>
                <ul class="side-dropdown">
                    <li><a href="SAssUpload.php"><i class='bx bx-upload' ></i>Upload</a></li>
                </ul>
            </li>

            <li>
                <a href="#" ><i class='bx bxl-product-hunt'></i>Projects<i class='bx bx-chevron-right' ></i></a>
                <ul class="side-dropdown">
                    <li><a href="SProUpload.php"><i class='bx bx-upload' ></i>Upload</a></li>
                </ul>
            </li>  
        </ul>
    </section>



    <!-- Navbar -->
    <section id="content">
        <nav>
        <!-- Navbar -->
        <marquee behavior="" direction=""><i class='bx bxs-bell-ring'></i> &nbsp;Admission open for BCA</marquee>
            <span class="divider"></span>
            <div class="profile">
                <img src="images/login.png">
                <ul class="profile-link">
                    <li><a href="#"><i class='bx bxs-user-circle icon' ></i>profile</a></li>
                    <li><a href="Slogout.php"><i class='bx bxs-log-out-circle' ></i>Logout</a></li>
                </ul>
            </div>
        </nav>
            <!-- main -->
                <main>
                    <h1 class="title">Upload Project</h1>
                    <ul class="bredcrumbs">
                        <li><a href="#">Home</a></li>
                        <li class="divider">/</li>
                        <li><a href="#" class="active">Projects</a></li>
                    </ul>
<!----------------------------------------------------------------- Input Feilds ----------------------------------------------->
                <div id="boxx">
                    <div class="container">
                     <div class="title">Upload</div>
                        <form method="post" enctype="multipart/form-data">
                            <div class="user-details">
                                <div class="input-box">
                                    <span class="details">Project No.</span>
                                    <input type="text" name="PNO" id="" placeholder="Project Number">
                                </div>

                                <div class="input-box">
                                    <span class="details">Project Name</span>
                                    <input type="text" name="PName" id="" placeholder="Enter Project Name">
                                    <span style="color: red;"><?php echo $msg10;?></span>
                                </div>

                                <div class="input-box">
                                    <span class="details">Subject</span>
                                    <input type="text" name="Subject" id="" >
                                    <span style="color: red;"><?php echo $msg10;?></span>
                                </div>

                                
                                <div class="input-box">
                                    <span class="details">Upload</span>
                                    <input type="file" name="fl" id=""  required>
                                    <span style="color: red;"><?php echo $msg10;?></span>
                                </div>

                                <div class="input-box">
                                    <span class="details"></span>
                                    <input type="hidden" >
                                </div>
                            </div>
                            <div class="button">
                                <input type="submit" value="submit" name="btn">
                            </div>
                                
                            </div>
                        </form>
                    </div>
                </div>               
<!------------------------------------------------------------ close Input Feilds -------------------------------------------->

                </main>
            <!-- main -->
        </section>

        <script src="script.js"></script>
</body>
</html>



