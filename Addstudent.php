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
$msg11="";
$msg12="";
$msg13="";
$msg14="";
$msg15="";
$msg16="";
$msg17="";

if(isset($_POST["btn"]))
{
    
    $AID = $_POST["AID"];
    $FName = $_POST["FName"];
    $Gender = $_POST["Gender"];
    $DOB = $_POST["DOB"];
    $MoNumber = $_POST["MoNumber"];
    $Caste = $_POST["Caste"];
    $Rel = $_POST["Rel"];
    $ADMDate = $_POST["ADMDate"];
    $BGroup = $_POST["BGroup"];
    $Courses = $_POST["Courses"];
    $Year = $_POST["Year"];
    $Mother = $_POST["Mother"];
    $Father = $_POST["Father"];
    $MNumber = $_POST["MNumber"];
    $SEmail = $_POST["SEmail"];
    $SPassword = $_POST["SPassword"];
    $Address = $_POST["Address"];


        if(empty($AID))
        {
         $msg1="Please Enter field";
        }
            else if(!preg_match("/^[0-9]*$/",$AID))
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
        if(empty($Gender))
        {
         $msg3="Please Enter field";
        }
        if(empty($DOB))
        {
         $msg4="Please Enter field";
        }

        if(!preg_match('/^[0-9]{10}+$/', $MoNumber)) 
        {
            $msg5="Valid Phone Number";
        } 
        else 
        {
            $msg5="Invalid Phone Number";
        }
        if(empty($Caste))
        {
         $msg6="Please Enter field";
        }
        if(empty($Rel))
        {
         $msg7="Please Enter field";
        } 
        if(empty($ADMDate))
        {
         $msg8="Please Enter field";
        }

        if(empty($BGroup))
        {
         $msg9="Please Enter field";
        }

        if(empty($Courses))
        {
         $msg10="Please Enter field";
        }


        if(empty($Year))
        {
         $msg11="Please Enter field";
        }


        if(empty($Mother))
        {
         $msg12="Please Enter field";
        }

        if(empty($Father))
        {
         $msg13="Please Enter field";
        }
    
        if(!preg_match('/^[0-9]{10}+$/', $MNumber)) 
        {
            $msg14="Valid Phone Number";
        } 
        else 
        {
            $msg14="Invalid Phone Number";
        }
       
        if(empty($SEmail))
        {
      
         $msg15="Please Enter field";
        }
        else if(!preg_match('/@.+\..+$/',$SEmail))
        {
              $msg15= "Please Enter Valid Email ID";
        }
        $number = preg_match('@[0-9]@', $SPassword);
        $uppercase = preg_match('@[A-Z]@', $SPassword);
        $lowercase = preg_match('@[a-z]@', $SPassword);
        $specialChars = preg_match('@[^\w]@', $SPassword);
        if((strlen($SPassword) < 8) || (!$number) || (!$uppercase) || (!$lowercase )|| (!$specialChars)) 
        {
            $msg16= "Password must be at least 8 characters contain at least one number, one upper case letter, one lower case letter and one special character.";
        }
        if(empty($Address))
        {
         $msg17="Please Enter field";
        }

        else
        {
            $sql = "INSERT INTO student(AID,FName,Gender,DOB,MoNumber,Caste,Rel,ADMDate,BGroup,Courses,Year,Mother,Father,MNumber,SEmail,SPassword,Address) values ('$AID','$FName','$Gender','$DOB','$MoNumber','$Caste','$Rel','$ADMDate','$BGroup','$Courses','$Year','$Mother','$Father','$MNumber','$SEmail','$SPassword','$Address')";
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
    <link rel="stylesheet" href="CSS/stud.css">
    <link rel="stylesheet" href="CSS/main.css">
    <link rel="stylesheet" href="CSS/Addprof.css">
    <link rel="stylesheet" href="CSS/StudentDasboard.css">

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
                        <li><a href="#"><i class='bx bxs-log-out-circle' ></i>Logout</a></li>
                    </ul>
                </div>
            </nav>
            <!-- main -->
                <main>
                    <h1 class="title">Registration</h1>
                    <ul class="bredcrumbs">
                        <li><a href="#">Student</a></li>
                        <li class="divider">/</li>
                        <li><a href="#" class="active">Add Students</a></li>
                    </ul>
<!----------------------------------------------------------------- Input Feilds ----------------------------------------------->
                    <div id="boxx">
                    <div class="container">
                     <div class="title">Student Information</div>
                        <form method="post">
                            <div class="user-details">

                                <div class="input-box">
                                    <span class="details">Admission ID</span>
                                    <input type="text" name="AID" placeholder="Enter Admission ID" id="AID"  >
                                    <span style="color: red;"><?php echo $msg1;?></span>
                                </div>

                                <div class="input-box">
                                    <span class="details">Full name</span>
                                    <input type="text" name="FName" id="FName" placeholder="Enter Full Name" >
                                    <span style="color: red;"><?php echo $msg2;?></span>
                                </div>

                                <div class="input-box">
                                    <span class="details">Gender</span>
                                    <select name="Gender" id="Gender">
                                        <option value="select">Select</option>
                                        <option value="Male" >Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Female">Other</option>
                                    </select>
                                    <span style="color: red;"><?php echo $msg3;?></span>
                                </div>

                               
                                <div class="input-box">
                                    <span class="details">Date of Birth</span>
                                    <input type="date" name="DOB" id="DOB"  >
                                    <span style="color: red;"><?php echo $msg4;?></span>
                                </div>
                                
                                <div class="input-box">
                                    <span class="details">Mobile</span>
                                    <input type="number" name="MoNumber" placeholder="Enter Phone Number" id="MoNumber"  >
                                    <span style="color: red;"><?php echo $msg5;?></span>
                                </div>

                                <div class="input-box">
                                    <span class="details">Caste</span>
                                    <select name="Caste" id="Caste">
                                        <option value="Select">Select</option>
                                        <option value="OPEN" >OPEN</option>
                                        <option value="OBC">OBC</option>
                                        <option value="VJ">VJ</option>
                                        <option value="NT" >NT</option>
                                    </select>
                                    <span style="color: red;"><?php echo $msg6;?></span>
                                </div>

                                <div class="input-box">
                                    <span class="details">Religion</span>
                                    <input type="text" name="Rel" placeholder="Enter Religion" id="Rel"  >
                                    <span style="color: red;"><?php echo $msg7;?></span>
                                </div>

                                 <div class="input-box">
                                    <span class="details">Admission Date</span>
                                    <input type="date" name="ADMDate" id="ADMDate"  >
                                    <span style="color: red;"><?php echo $msg8;?></span>
                                </div>

                                <div class="input-box">
                                    <span class="details">Blood Group</span>
                                    <select name="BGroup" id="BGroup">
                                        <option value="Select">Select</option>
                                        <option value="A" >A</option>
                                        <option value="B">B</option>
                                        <option value="AB">AB</option>
                                        <option value="O" >O</option>
                                    </select>
                                    <span style="color: red;"><?php echo $msg9;?></span>
                                </div>
      
                                <div class="input-box">
                                    <span class="details">Courses</span>
                                    <select name="Courses" id="Courses">
                                        <option value="Select">Select</option>
                                        <option value="BCA" >BCA</option>
                                        <option value="BSC-Comp.Sci" >BSC-Comp.Sci</option>
                                        <option value="BBA">BBA</option>
                                    </select>
                                    <span style="color: red;"><?php echo $msg10;?></span>
                                </div>

                                <div class="input-box">
                                    <span class="details">Year</span>
                                    <select name="Year" id="Year">
                                        <option value="Select">Select</option>
                                        <option value="First" >First</option>
                                        <option value="Second" >Second</option>
                                        <option value="Third">Third</option>
                                    </select>
                                    <span style="color: red;"><?php echo $msg11;?></span>
                                </div>
                               <div class="input-box">
                                    <input type="hidden">
                                </div>
                                
                                <!------------------------------ Parent Details ---------------------->
                                <div class="logindet">
                                    <div class="title">Parent's Details</div>
                                </div>
                                <div class="input-box add">
                                    <span class="details">Mother Name</span>
                                    <input type="text" name="Mother" placeholder="Enter Mother Name" id="Mother"  >
                                    <span style="color: red;"><?php echo $msg12;?></span>
                                </div>
                                
                                <div class="input-box">
                                    <span class="details">Father Name</span>
                                    <input type="text" name="Father" placeholder="Enter Father Name" id="Father"  >
                                    <span style="color: red;"><?php echo $msg13;?></span>
                                </div>
                                
                                <div class="input-box">
                                    <span class="details">Mobile Number</span>
                                    <input type="number" name="MNumber" placeholder="Enter Mobile Number" id="MNumber"  >
                                    <span style="color: red;"><?php echo $msg14;?></span>
                                </div>
                    <!------------------------------------- END Parent Details END -------------------->
                                <!-------------- -----------------Login details -------------->
                            <div class="logindet">
                                <div class="title">Login Details</div>
                            </div>
                                <div class="input-box">
                                    <span class="details">Email ID</span>
                                    <input type="text" name="SEmail" placeholder="Enter Email" id="SEmail"  >
                                    <span style="color: red;"><?php echo $msg15;?></span>
                                </div>
                                
                                <div class="input-box">
                                    <span class="details">Password</span>
                                    <input type="password" name="SPassword" placeholder="Enter Password" id="SPassword"  >
                                    <span style="color: red;"><?php echo $msg16;?></span>
                                </div>
                                
                                
                                <div class="input-box">
                                    <!-- <span class="details">Experiance</span> -->
                                    <input type="hidden" >
                                </div>
                                
                                <!-------------- Login details ------------->


                                <!-------------- Address details ------------->

                                <div class="logindet">
                                    <div class="title">Address</div>
                                </div>
                                <div class="input-box add">
                                    <span class="details">Address</span>
                                    <input type="text" name="Address" placeholder="Enter Address" id="Address"  >
                                    <span style="color: red;"><?php echo $msg17;?></span>
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




