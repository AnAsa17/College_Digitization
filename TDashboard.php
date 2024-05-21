<?php
    session_start();
    $con=mysqli_connect("localhost","root","","college_digitization")or die("not connected");
    $sql = "SELECT * FROM login";
    $r = mysqli_query($con,$sql);

    // Another database
    $ass = "SELECT COUNT(*) AS total_entries FROM assignment";
    $result = mysqli_query($con,$ass);

    //Project Database
    $pro = "SELECT COUNT(*) AS totall_entries FROM project";
    $prores = mysqli_query($con,$pro);

    //Student Database
    $stud = "SELECT COUNT(*) AS student FROM login";
    $studres = $prores = mysqli_query($con,$stud);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="CSS/index.css">
    <title>Teacher Dashboard</title>
</head>
<body>

        <section id="sidebar">
            <a href="#" class="brand">Teacher</a>
            <ul class="side-menu">
                <li><a href="TDashboard.php" class="active"><i class='bx bxs-dashboard' ></i>Dashboard</a></li><br>
                <!-- <li class="divider">Main</li> -->
                <li>
                    <a href="TAssignment.php" ><i class='bx bxs-book-bookmark'></i></i></i>Assignment<i></i></a>
                    <!-- <ul class="side-dropdown">
                    </ul> -->
                  </li>  
                
                <li>
                    <a href="TProject.php" ><i class='bx bxs-notepad'></i></i>Project<i></i></a>
                    <ul class="side-dropdown">
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
                        <li><a href="Tlogout.php"><i class='bx bxs-log-out-circle' ></i>Logout</a></li>
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
                                        if($result)
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
                                        if($result)
                                        {
                                            $row = mysqli_fetch_assoc($result);
                                            $total = $row["total_entries"];
                                        
                                    ?>
                                    <h2>Assignment</h2>
                                    <h3><?php echo $total;?></h3>
                                    <?php }?>
                                </div>
                                <img src="images/Assignment.png" class="nicon" alt="">
                                <!-- <i class="bx bx-trending-up icon"></i> -->
                            </div>
                            <!-- <span class="progress" data-val="50"></span>
                            <span class="label">50%</span> -->
                        </div>

                        <div class="card">
                            <div class="head">
                                <div>
                                <?php 
                                        if($result)
                                        {
                                            $row = mysqli_fetch_assoc($prores);
                                            $totall = $row["totall_entries"];
                                        
                                    ?>
                                    <h2>Project</h2>
                                    <<h3><?php echo $totall;?></h3>
                                    <?php }?>
                                </div>
                                <img src="images/Project.png" class="nicon" alt="">
                                <!-- <i class="bx bx-trending-up icon"></i> -->
                            </div>
                            <!-- <span class="progress" data-val="50"></span>
                            <span class="label">50%</span> -->
                        </div>
                    </div>
                    <section class="attendance">
                        <div class="attendance-list">
                            <h2> Student List</h2>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Admission ID</th>
                                        <th>Name</th>
                                        <th>Course</th>
                                        <th>Year</th>
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
                                    </tr>

                                    <tr>
                                        <td><?php echo $u['AID'];?></td>
                                        <td><?php echo $u['FName'];?></td>
                                        <td><?php echo $u['Courses'];?></td>
                                        <td><?php echo $u['Year'];?></td>
                                    </tr>

                                    <tr>
                                        <td><?php echo $u['AID'];?></td>
                                        <td><?php echo $u['FName'];?></td>
                                        <td><?php echo $u['Courses'];?></td>
                                        <td><?php echo $u['Year'];?></td>
                                    </tr>

                                    <tr>
                                        <td><?php echo $u['AID'];?></td>
                                        <td><?php echo $u['FName'];?></td>
                                        <td><?php echo $u['Courses'];?></td>
                                        <td><?php echo $u['Year'];?></td>
                                    </tr>

                                    <tr>
                                        <td><?php echo $u['AID'];?></td>
                                        <td><?php echo $u['FName'];?></td>
                                        <td><?php echo $u['Courses'];?></td>
                                        <td><?php echo $u['Year'];?></td>
                                    </tr>


                                    <tr>
                                        <td><?php echo $u['AID'];?></td>
                                        <td><?php echo $u['FName'];?></td>
                                        <td><?php echo $u['Courses'];?></td>
                                        <td><?php echo $u['Year'];?></td>
                                    </tr>
                                                <?php } ?>
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
