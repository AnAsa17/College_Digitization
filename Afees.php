<?php
session_start();
$con=mysqli_connect("localhost","root","","college_digitization")or die("not connected");
$msg1="";
$msg2="";
$msg3="";
$msg4="";
$msg5="";
$msg6="";
$msg7="";
if(isset($_POST["btn"]))
{
    
    $RNO = $_POST["RNO"];
    $FName = $_POST["FName"];
    $Courses = $_POST["Courses"];
    $Year = $_POST["Year"];
    $TFees = $_POST["TFees"];
    $PFees = $_POST["PFees"];
    $RFees = $_POST["RFees"];

    if(empty($RNO))
    {
     $msg1="Please Enter field";
    }
        else if(!preg_match("/^[0-9]*$/",$RNO))
        {
            $msg1= "Only Digits are Allowed";
        }
        if(empty($FName))
        {
         $msg2="Please Enter field";
        }
        else if(!preg_match("/^[a-zA-Z]*$/",$FName))
        {
            $msg2= "Only Letters and White space are Allowed";
        }
        if(empty($Courses))
        {
         $msg3="Please Enter field";
        }
        if(empty($Year))
        {
         $msg4="Please Enter field";
        }
        if(empty($TFees))
        {
            $msg5="Please Enter field";
        }
        else if(!preg_match("/^[0-9]*$/",$TFees))
        {
            $msg5= "Only Digits are Allowed";
        }
        if(empty($PFees))
        {
            $msg6="Please Enter field";
        }
        else if(!preg_match("/^[0-9]*$/",$PFees))
        {
            $msg6= "Only Digits are Allowed";
        }
        if(empty($RFees))
        {
            $msg7="Please Enter field";
        }
        else if(!preg_match("/^[0-9]*$/",$RFees))
        {
            $msg7= "Only Digits are Allowed";
        }
        else{
            $sql = "INSERT INTO fees(RNO,FName,Courses,Year,TFees,PFees,RFees) values ('$RNO','$FName','$Courses','$Year','$TFees','$PFees','$RFees')";
            //echo $sql;exit;
            $r=mysqli_query($con,$sql);
            if($r)
            {
                echo '<script type="text/JavaScript">
                alert("Data Inserted Succesfully");
                </script>';
            }
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
    <title>Admin</title>
</head>
<body>

        <section id="sidebar">
            <a href="#" class="brand"><i class='bx bxs-smile'></i>Admin</a>
            <ul class="side-menu">
                <li><a href="ADashboard.php" class="active"><i class='bx bxs-dashboard' ></i>Dashboard</a></li><br>
                <!-- <li class="divider">Main</li> -->
                <li>
                    <a href="#" ><i class='bx bx-group'></i></i>Professors<i class='bx bx-chevron-right' ></i></a>
                    <ul class="side-dropdown">
                        <li><a href="Allprof.php">All Professors</a></li>
                        <li><a href="Addprofessors.php">Add Professors</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#" ><i class='bx bx-group'></i></i>Student<i class='bx bx-chevron-right' ></i></a>
                    <ul class="side-dropdown">
                        <li><a href="AllStudent.php">All Students</a></li>
                        <li><a href="Addstudent.php">Add Students</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" ><i class='bx bx-rupee' ></i></i>Fees<i class='bx bx-chevron-right' ></i></a>
                    <ul class="side-dropdown">
                        <li><a href="Afees.php">Add Fees Details</a></li>
                    </ul>
                </li>
                
                <li>
                    <a href="#" ><i class='bx bxs-notification'></i></i>Notification<i class='bx bx-chevron-right' ></i></a>
                    <ul class="side-dropdown">
                        <li><a href="#">Add Notice</a></li>
                    </ul>
                </li>  
            </ul>
        </section>



        <!-- Navbar -->
        <section id="content">
            <!-- Navbar -->
            <nav>
            <marquee behavior="" direction=""><i class='bx bxs-bell-ring'></i> &nbsp;Admission open for BCA</marquee>
                <span class="divider"></span>
                <div class="profile">
                    <img src="images/login.png">
                    <ul class="profile-link">
                        <li><a href="#"><i class='bx bxs-user-circle icon' ></i>profile</a></li>
                        <li><a href="Alogout.php"><i class='bx bxs-log-out-circle' ></i>Logout</a></li>
                    </ul>
                </div>
            </nav>
            <!-- main -->
                <main>
                    <h1 class="title">Add Fees</h1>
                    <ul class="bredcrumbs">
                        <li><a href="#">Fees</a></li>
                        <li class="divider">/</li>
                        <li><a href="#" class="active">Fees</a></li>
                    </ul>
<!----------------------------------------------------------------- Input Feilds ----------------------------------------------->
                    <div id="boxx">
                    <div class="container">
                     <div class="title">Add Fees</div>
                        <form method="post">
                            <div class="user-details">

                                <div class="input-box">
                                    <span class="details">Recipt No.</span>
                                    <input type="text" name="RNO" placeholder="Enter Admission ID" id=""  required>
                                    <span style="color: red;"><?php echo $msg1;?></span>
                                </div>

                                <div class="input-box">
                                    <span class="details">Full Name</span>
                                    <input type="text" name="FName" id="" placeholder="Enter First Name" required>
                                    <span style="color: red;"><?php echo $msg2;?></span>
                                </div>

                                <div class="input-box">
                                    <span class="details">Courses</span>
                                    <select name="Courses">
                                        <option value="Select">Select</option>
                                        <option value="BSC-Comp.Sci" >BSC-Comp.Sci</option>
                                    </select>
                                    <span style="color: red;"><?php echo $msg3;?></span>
                                </div>

                                <div class="input-box">
                                    <span class="details">Year</span>
                                    <select name="Year">
                                        <option value="Select">Select</option>
                                        <option value="First" >First</option>
                                        <option value="Second" >Second</option>
                                        <option value="Third">Third</option>

                                    </select>
                                    <span style="color: red;"><?php echo $msg4;?></span>
                                </div>

                                <div class="input-box">
                                    <span class="details">Total Course Fees</span>
                                    <input type="text" name="TFees" placeholder="Total Course Fees" id=""  required>
                                    <span style="color: red;"><?php echo $msg5;?></span>
                                </div>

                                <div class="input-box">
                                    <span class="details">Paid Amount</span>
                                    <input type="text" name="PFees" placeholder="Paid Amount" id=""  required>
                                    <span style="color: red;"><?php echo $msg6;?></span>
                                </div>


                                <div class="input-box">
                                    <span class="details">Remaining Amount</span>
                                    <input type="text" name="RFees" placeholder="Remaining Amount" id=""  required>
                                    <span style="color: red;"><?php echo $msg7;?></span>
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



