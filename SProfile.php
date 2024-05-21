<?php
session_start();
$con=mysqli_connect("localhost","root","","college_digitization")or die("not connected");
$sql = "SELECT * FROM login";
$r=mysqli_query($con,$sql);


//     $AID = $_POST["AID"];
//     $FName = $_POST["FName"];
//     $Gender = $_POST["Gender"];
//     $DOB = $_POST["DOB"];
//     $MoNumber = $_POST["MoNumber"];
//     $Caste = $_POST["Caste"];
//     $Rel = $_POST["Rel"];
//     $ADMDate = $_POST["ADMDate"];
//     $BGroup = $_POST["BGroup"];
//     $Courses = $_POST["Courses"];
//     $Year = $_POST["Year"];
//     $Mother = $_POST["Mother"];
//     $Father = $_POST["Father"];
//     $MNumber = $_POST["MNumber"];
//     $SEmail = $_POST["SEmail"];
//     $Address = $_POST["Address"];
// }  
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

    <title>Student</title>
</head>
<body>

        <section id="sidebar">
            <a href="#" class="brand"><i class='bx bxs-smile'></i>Admin</a>
            <ul class="side-menu">
                <li><a href="SDashboard.php" class="active"><i class='bx bxs-dashboard' ></i>Dashboard</a></li><br>
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
                                    <?php
                                        while($u=mysqli_fetch_array($r))
                                        {
                                    ?>
                                    <span class="details">Admission ID</span>
                                    <input type="text" name="AID" value="<?php echo $AID; ?>"disabled>
                                </div>

                                <div class="input-box">
                                    <span class="details">Full name</span>
                                    <input type="text" name="FName" value="<?php echo $FName; ?>"disabled>
                                </div>

                                <div class="input-box">
                                    <span class="details">Gender</span>
                                    <select name="Gender" id="Gender" value="<?php echo $Gender; ?>"disabled>
                                        <option value="select">Select</option>
                                        <option value="Male" >Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Female">Other</option>
                                    </select>
                                </div>

                               
                                <div class="input-box">
                                    <span class="details">Date of Birth</span>
                                    <input type="date" name="DOB" value="<?php echo $DOB; ?>"disabled >
                                </div>
                                
                                <div class="input-box">
                                    <span class="details">Mobile</span>
                                    <input type="number" name="MoNumber" value="<?php echo $MoNumber; ?>"disabled >
                                </div>

                                <div class="input-box">
                                    <span class="details">Caste</span>
                                    <select name="Caste" value="<?php echo $Caste; ?>"disabled>
                                        <option value="Select">Select</option>
                                        <option value="OPEN" >OPEN</option>
                                        <option value="OBC">OBC</option>
                                        <option value="VJ">VJ</option>
                                        <option value="NT" >NT</option>
                                    </select>
                                </div>

                                <div class="input-box">
                                    <span class="details">Religion</span>
                                    <input type="text" name="Rel" value="<?php echo $Rel; ?>"disabled>
                                </div>

                                 <div class="input-box">
                                    <span class="details">Admission Date</span>
                                    <input type="date" name="ADMDate" value="<?php echo $ADMDate; ?>"disabled  >
                                </div>

                                <div class="input-box">
                                    <span class="details">Blood Group</span>
                                    <select name="BGroup"value="<?php echo $BGroup; ?>"disabled>
                                        <option value="Select">Select</option>
                                        <option value="A" >A</option>
                                        <option value="B">B</option>
                                        <option value="AB">AB</option>
                                        <option value="O" >O</option>
                                    </select>
                                </div>
      
                                <div class="input-box">
                                    <span class="details">Courses</span>
                                    <select name="Courses" value="<?php echo $Courses; ?>"disabled>
                                        <option value="Select">Select</option>
                                        <option value="BCA" >BCA</option>
                                        <option value="BSC-Comp.Sci" >BSC-Comp.Sci</option>
                                        <option value="BBA">BBA</option>
                                    </select>
                                </div>

                                <div class="input-box">
                                    <span class="details">Year</span>
                                    <select name="Year" value="<?php echo $Year; ?>"disabled>
                                        <option value="Select">Select</option>
                                        <option value="First" >First</option>
                                        <option value="Second" >Second</option>
                                        <option value="Third">Third</option>
                                    </select>
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
                                    <input type="text" name="Mother" value="<?php echo $Mother; ?>"disabled>
                                </div>
                                
                                <div class="input-box">
                                    <span class="details">Father Name</span>
                                    <input type="text" name="Father" value="<?php echo $Father; ?>"disabled >
                                </div>
                                
                                <div class="input-box">
                                    <span class="details">Mobile Number</span>
                                    <input type="number" name="MNumber" value="<?php echo $MNumber; ?>"disabled >
                                    <span style="color: red;"><?php echo $msg14;?></span>
                                </div>
                    <!------------------------------------- END Parent Details END -------------------->
                                <!-------------- -----------------Login details -------------->
                            <div class="logindet">
                                <div class="title">Login Details</div>
                            </div>
                                <div class="input-box">
                                    <span class="details">Email ID</span>
                                    <input type="text" name="SEmail" value="<?php echo $SEmail; ?>"disabled>
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
                                    <input type="text" name="Address" value="<?php echo $Address; ?>"disabled  >

                                    <?php }?>
                                </div>
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




