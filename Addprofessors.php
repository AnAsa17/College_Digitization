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
$msg8="";
$msg9="";
$msg10="";

if(isset($_POST["btn"]))
{
    
    $TID = $_POST["TID"];
    $TName = $_POST["TName"];
    $TGender = $_POST["TGender"];
    $TMobile = $_POST["TMobile"];
    $JDate = $_POST["JDate"];
    $Qualification = $_POST["Qualification"];
    $Experiance = $_POST["Experiance"];
    $TEmail = $_POST["TEmail"];
    $TPassword = $_POST["TPassword"];
    $Address = $_POST["Address"];

    if(empty($TID))
    {
  
     $msg1="Please Enter field";
    }
        else if(!preg_match("/^[0-9]*$/",$TID))
        {
            $msg1= "Only Digits are Allowed";
        }
    if(empty($TName))
    {
     $msg2="Please Enter field";
    }
    if(empty($TGender))
    {
     $msg3="Please Enter field";
    }
    if(preg_match('/^[0-9]{10}+$/', $TMobile)) 
    {
        $msg4="Valid Phone Number";
    } 
    else 
    {
        $msg4="Invalid Phone Number";
    }
    if(empty($JDate))
    {
  
     $msg5="Please Enter field";
    }
    if(empty($Qualification))
    {
  
     $msg6="Please Enter field";
    } 
    if(empty($Experiance))
    {
  
     $msg7="Please Enter field";
    }

    if(empty($TEmail))
    {
  
     $msg8="Please Enter field";
    }
    else if(!preg_match('/@.+\..+$/',$TEmail))
    {
          $msg8= "Please Enter Valid Email ID";
    }

    $number = preg_match('@[0-9]@', $TPassword);
    $uppercase = preg_match('@[A-Z]@', $TPassword);
    $lowercase = preg_match('@[a-z]@', $TPassword);
    $specialChars = preg_match('@[^\w]@', $TPassword);
    if((strlen($TPassword) < 8) || (!$number) || (!$uppercase) || (!$lowercase )|| (!$specialChars)) 
    {
        $msg9= "Password must be at least 8 characters contain at least one number, one upper case letter, one lower case letter and one special character.";
    }
    if(empty($Address))
    {
     $msg10="Please Enter field";
    }
    else
    {
        $sql = "INSERT INTO teacher(TID,TName,TGender,TMobile,JDate,Qualification,Experiance,TEmail,TPassword,Address) values('$TID','$TName','$TGender','$TMobile','$JDate','$Qualification','$Experiance','$TEmail','$TPassword','$Address')";
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
                    <h1 class="title">Registration</h1>
                    <ul class="bredcrumbs">
                        <li><a href="#">Home</a></li>
                        <li class="divider">/</li>
                        <li><a href="#" class="active">Professors</a></li>
                    </ul>
<!----------------------------------------------------------------- Input Feilds ----------------------------------------------->
                <div id="boxx">
                    <div class="container">
                     <div class="title">Registration</div>
                        <form method="post">
                            <div class="user-details">
                                <div class="input-box">
                                    <span class="details">Teacher ID</span>
                                    <input type="text" name="TID" id="" placeholder="Teacher ID" >
                                    <span style="color: red;"><?php echo $msg1;?></span>
                                </div>

                                <div class="input-box">
                                    <span class="details">Teacher Name</span>
                                    <input type="text" name="TName" id="" placeholder="Teacher Name" >
                                    <span style="color: red;"><?php echo $msg2;?></span>
                                </div>

                                <div class="input-box">
                                    <span class="details">Gender</span>
                                    <select name="TGender" id="gen">
                                        <option value="select">select</option>
                                        <option value="Male" >Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Female">Female</option>
                                    </select>
                                    <span style="color: red;"><?php echo $msg3;?></span>
                                    <!-- <input type="text" name="TName" id="" placeholder="Teacher Name" required> -->
                                </div>

                                <div class="input-box">
                                    <span class="details">Mobile</span>
                                    <input type="number" name="TMobile" placeholder="Enter Phone" id=""  >
                                    <span style="color: red;"><?php echo $msg4;?></span>
                                </div>

                                <div class="input-box">
                                    <span class="details">Joining Date</span>
                                    <input type="date" name="JDate" id="">
                                    <span style="color: red;"><?php echo $msg5;?></span>
                                </div>

                                <div class="input-box">
                                    <span class="details">Qualification</span>
                                    <input type="text" name="Qualification" placeholder="Enter Qualification" id=""  >
                                    <span style="color: red;"><?php echo $msg6;?></span>
                                </div>

                                <div class="input-box">
                                    <span class="details">Experiance</span>
                                    <input type="text" name="Experiance" placeholder="Enter Experiance" id=""  >
                                    <span style="color: red;"><?php echo $msg7;?></span>
                                </div>

                                <div class="input-box">
                                    <span class="details"></span>
                                    <input type="hidden" >
                                </div>

                                <!-------------- Login details ------------->
                            <div class="logindet">
                                <div class="title">Login Details</div>
                            </div>
                                <div class="input-box">
                                    <span class="details">Email ID</span>
                                    <input type="email" name="TEmail" placeholder="Enter Email" id="" >
                                    <span style="color: red;"><?php echo $msg8;?></span>
                                </div>
                                
                                <div class="input-box">
                                    <span class="details">Password</span>
                                    <input type="password" name="TPassword" placeholder="Enter Password" id="" >
                                    <span style="color: red;"><?php echo $msg9;?></span>
                                </div>
                                
                                <div class="input-box">
                                    <!-- <span class="details">Experiance</span> -->
                                    <input type="hidden">
                                </div>
                                
                                <!------------------ Login details ------------->
                                <!------------------- Address details ------------->

                                <div class="logindet">
                                    <div class="title">Address</div>
                                </div>
                                <div class="input-box add">
                                    <span class="details">Address</span>
                                    <input type="text" name="Address" placeholder="Enter Address">
                                    <span style="color: red;"><?php echo $msg10;?></span>
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



