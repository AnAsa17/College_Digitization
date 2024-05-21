<!-- Admin -->
<?php
    session_start();
    $con = mysqli_connect("localhost","root","","college_digitization")or die("Unable to Connect");
    $sql = "SELECT * FROM login";
    $r = mysqli_query($con,$sql);
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
    <link rel="stylesheet" href="CSS/index.css">
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
                        <li><a href="Afees.php">Add Fees</a></li>
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
                    <img src="images/login.png" >
                    <ul class="profile-link">
                        <li><a href="#"><i class='bx bxs-user-circle icon' ></i>profile</a></li>
                        <li><a href="Alogout.php"><i class='bx bxs-log-out-circle' ></i>Logout</a></li>
                    </ul>
                </div>
            </nav>
            <!-- main -->
                <main>
                    <!-- bredcrumbs -->
                    <h1 class="title">Dashboard</h1>
                    <ul class="bredcrumbs">
                        <li><a href="#">Student</a></li>
                        <li class="divider">/</li>
                        <li><a href="#" class="active">All Student</a></li>
                    </ul>
                     <!-- bredcrumbs -->
                    <div class="prolist">
                        <h2>Student List</h2>
                    </div>
                    <section class="attendance">
                            
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Student Name</th>
                                        <th>Course</th>
                                        <th>Year</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php
                                            while($u=mysqli_fetch_array($r))
                                            {

                                            
                                        ?>
                                        <td><?php echo $u['AID'];?></td>
                                        <td><?php echo $u['FName'];?></td>
                                        <td><?php echo $u['Courses'];?></td>
                                        <td><?php echo $u['Year'];?></td>
                                        <td><?php echo $u['SEmail'];?></td>
                                        <td><input type="button" class="btn btn-primary" value="Edit"> <span><input type="button" value="Delete" class="btn btn-primary"></span></td>
                                    </tr>

                                    <tr>
                                        <td><?php echo $u['AID'];?></td>
                                        <td><?php echo $u['FName'];?></td>
                                        <td><?php echo $u['Courses'];?></td>
                                        <td><?php echo $u['Year'];?></td>
                                        <td><?php echo $u['SEmail'];?></td>
                                        <td><input type="button" class="btn btn-primary" value="Edit"> <span><input type="button" value="Delete" class="btn btn-primary"></span></td>
                                    </tr>

                                    <tr>
                                        <td><?php echo $u['AID'];?></td>
                                        <td><?php echo $u['FName'];?></td>
                                        <td><?php echo $u['Courses'];?></td>
                                        <td><?php echo $u['Year'];?></td>
                                        <td><?php echo $u['SEmail'];?></td>
                                        <td><input type="button" class="btn btn-primary" value="Edit"> <span><input type="button" value="Delete" class="btn btn-primary"></span></td>
                                    </tr>

                                    <tr>
                                        <td><?php echo $u['AID'];?></td>
                                        <td><?php echo $u['FName'];?></td>
                                        <td><?php echo $u['Courses'];?></td>
                                        <td><?php echo $u['Year'];?></td>
                                        <td><?php echo $u['SEmail'];?></td>
                                        <td><input type="button" class="btn btn-primary" value="Edit"> <span><input type="button" value="Delete" class="btn btn-primary"></span></td>
                                    </tr>

                                    <tr>
                                        <td><?php echo $u['AID'];?></td>
                                        <td><?php echo $u['FName'];?></td>
                                        <td><?php echo $u['Courses'];?></td>
                                        <td><?php echo $u['Year'];?></td>
                                        <td><?php echo $u['SEmail'];?></td>
                                        <td><input type="button" class="btn btn-primary" value="Edit"> <span><input type="button" value="Delete" class="btn btn-primary"></span></td>
                                    </tr>

                                    <tr>
                                        <td><?php echo $u['AID'];?></td>
                                        <td><?php echo $u['FName'];?></td>
                                        <td><?php echo $u['Courses'];?></td>
                                        <td><?php echo $u['Year'];?></td>
                                        <td><?php echo $u['SEmail'];?></td>
                                        <td><input type="button" class="btn btn-primary" value="Edit"> <span><input type="button" value="Delete" class="btn btn-primary"></span></td>
                                    </tr>
                                    <?php }?>   
                                </tbody>
                            </table>
                    </section>
                </main>
            <!-- main -->
        </section>

    
    

        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <script src="script.js"></script>
        
</body>
</html>
