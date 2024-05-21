<?php
    session_start();
    $con = mysqli_connect("localhost","root","","college_digitization")or die("Unable to Connect");
    $sql = "SELECT * FROM teacher";
    $r = mysqli_query($con,$sql);


    //Student Database
    $stud = "SELECT COUNT(*) AS student FROM login";
    $studres = $prores = mysqli_query($con,$stud);

    //Teacher Database
    $teach = "SELECT COUNT(*) AS teacher FROM teacher";
    $teache = $prores = mysqli_query($con,$teach);

     // Fee databse
     $fe = "SELECT COUNT(*) AS fee FROM fees";
     $q = $prores=mysqli_query($con,$fe);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
                        <li><a href="Afees.php">Add Fees Details</a></li>
                    </ul>
                </li> 
            </ul>
        </section>



        <!-- Navbar -->
        <section id="content">
            <!-- Navbar -->
            <nav>
                <marquee behavior="" direction=""><i class='bx bxs-bell-ring'></i> &nbsp;Admission open for BCA</marquee>
                <!-- <h3>Name:<h3>Ankush</h3></h3> -->
                <span class="divider"></span>
                <div class="profile">
                    <img src="images/login.png" alt="aa">
                    <ul class="profile-link">
                        <li><a href="#"><i class='bx bxs-user-circle icon' ></i>profile</a></li>
                        <li><a href="Alogout.php"><i class='bx bxs-log-out-circle' ></i>Logout</a></li>
                    </ul>
                </div>
            </nav>
            <!-- main -->
                <main>
                    <h1 class="title">Dashboard</h1>
                    <ul class="bredcrumbs">
                        <li><a href="#">Home</a></li>
                        <li class="divider">/</li>
                        <li><a href="#" class="active">Dashboard</a></li>
                    </ul>
                    <div class="info-data">
                        <div class="card">
                            <div class="head">
                                <div>
                                <?php 
                                        if($studres)
                                        {
                                            $row = mysqli_fetch_assoc($studres);
                                            $totalll = $row["student"];
                                        
                                    ?>
                                    <h2>Students</h2>
                                    <h3><?php echo $totalll;?></h3>
                                    <?php }?>
                                </div>
                                <img src="images/graduated.jpeg" class="nicon" >
                                <!-- <i class="bx bx-trending-up icon"></i> -->
                            </div>
                            <!-- <span class="progress" data-val="50"></span>
                            <span class="label">50%</span> -->
                        </div>

                        <div class="card">
                            <div class="head">
                                <div>
                                    <h2>Total Courses</h2>
                                    <h3>1</h3>
                                </div>
                                <img src="images/online-learning.jpeg" class="nicon" alt="">
                                <!-- <i class="bx bx-trending-up icon"></i> -->
                            </div>
                            <!-- <span class="progress" data-val="50"></span>
                            <span class="label">50%</span> -->
                        </div>

                        <div class="card">
                            <div class="head">
                                <div>
                                <?php 
                                        if($teache)
                                        {
                                            $row = mysqli_fetch_assoc($teache);
                                            $totaal = $row["teacher"];
                                        
                                    ?>
                                    <h2>Teachers</h2>
                                    <h3><?php echo $totaal;?></h3>
                                    <?php }?>
                                </div>
                                <img src="images/teacher.jpeg" class="nicon" alt="">
                                <!-- <i class="bx bx-trending-up icon"></i> -->
                            </div>
                            <!-- <span class="progress" data-val="50"></span>
                            <span class="label">50%</span> -->
                        </div>

                        <div class="card">
                            <div class="head">
                                <div>
                                    <h2>Revenue</h2>
                                    <h3>15000</h3>
                                </div>
                                <img src="images/rupee.jpeg" class="nicon" alt="">
                                <!-- <i class="bx bx-trending-up icon"></i> -->
                            </div>
                            <!-- <span class="progress" data-val="50"></span>
                            <span class="label">50%</span> -->
                        </div>
                    </div>
                    <div class="data">
                        <div class="content-data">
                            <div class="head">
                                <h3>OverView</h3>
                            </div>
                            <div class="chart">
                                <div id="chart"></div>
                            </div>
                        </div>


                        <div class="content-data">
                            <div class="head">
                                <h3>Student</h3>
                            </div>
                            <div class="chart">
                                <div id="chart1"></div>
                            </div>
                        </div>
                    </div>

                    <section class="attendance">
                        <div class="attendance-list">
                            <h2>Proffessor List</h2>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Mobile</th>
                                        <th>Qualification</th>
                                        <th>Expericance</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        while($y=mysqli_fetch_array($r))
                                        {

                                       
                                    ?>
                                    <tr>
                                        <td><?php echo $y['TID'];?></td>
                                        <td><?php echo $y['TName'];?></td>
                                        <td><?php echo $y['TMobile'];?></td>
                                        <td><?php echo $y['Qualification'];?></td>
                                        <td><?php echo $y['Experiance'];?></td>
                                    </tr>

                                    <tr>
                                        <td><?php echo $y['TID'];?></td>
                                        <td><?php echo $y['TName'];?></td>
                                        <td><?php echo $y['TMobile'];?></td>
                                        <td><?php echo $y['Qualification'];?></td>
                                        <td><?php echo $y['Experiance'];?></td>
                                    </tr>

                                    <tr>
                                        <td><?php echo $y['TID'];?></td>
                                        <td><?php echo $y['TName'];?></td>
                                        <td><?php echo $y['TMobile'];?></td>
                                        <td><?php echo $y['Qualification'];?></td>
                                        <td><?php echo $y['Experiance'];?></td>
                                    </tr>

                                    <tr>
                                        <td><?php echo $y['TID'];?></td>
                                        <td><?php echo $y['TName'];?></td>
                                        <td><?php echo $y['TMobile'];?></td>
                                        <td><?php echo $y['Qualification'];?></td>
                                        <td><?php echo $y['Experiance'];?></td>
                                    </tr>

                                    <tr>
                                        <td><?php echo $y['TID'];?></td>
                                        <td><?php echo $y['TName'];?></td>
                                        <td><?php echo $y['TMobile'];?></td>
                                        <td><?php echo $y['Qualification'];?></td>
                                        <td><?php echo $y['Experiance'];?></td>
                                    </tr>

                                    <tr>
                                        <td><?php echo $y['TID'];?></td>
                                        <td><?php echo $y['TName'];?></td>
                                        <td><?php echo $y['TMobile'];?></td>
                                        <td><?php echo $y['Qualification'];?></td>
                                        <td><?php echo $y['Experiance'];?></td>
                                    </tr>
                                    <?php  }?>
                                </tbody>
                            </table>
                        </div>
                    </section>
                </main>
            <!-- main -->
        </section>

    
    

        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <script src="script.js"></script>
        
</body>
</html>
