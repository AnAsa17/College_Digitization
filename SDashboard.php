<?php
    session_start();
    $con = mysqli_connect("localhost","root","","college_digitization")or die("Unable to Connect");
    $sql = "SELECT * FROM login";
    $r = mysqli_query($con,$sql);



    // Another databse
    $fe = "SELECT * FROM fees";
    $q = mysqli_query($con,$fe);

    // Assignment database
    $ass = "SELECT COUNT(*) AS total_entries FROM assignment";
    $result = mysqli_query($con,$ass);

    //Project Database
    $pro = "SELECT COUNT(*) AS totall_entries FROM project";
    $prores = mysqli_query($con,$pro);

    $sqql = "SELECT * FROM project";
    $rr = mysqli_query($con,$sqql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="CSS/StudentDasbord.css">
    <title>Student Dashboard</title>
</head>
<body>

        <section id="sidebar">
            <a href="#" class="brand">Student</a>
            <ul class="side-menu">
                <li><a href="SDashboard.php" class="active"><i class='bx bxs-dashboard' ></i>Dashboard</a></li><br>
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
            <!-- Navbar -->
            <nav>
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
                    <?php
                        while($u=mysqli_fetch_array($r))
                        {

                        
                    ?>
                    <h1 class="title">Welcome:<?php echo $u['FName'];?></h1> 
                    <ul class="bredcrumbs">
                        <li><a href="#">Home</a></li>
                        <li class="divider">/</li>
                        <li><a href="#" class="active">Dashboard</a></li>
                    </ul>
                    <div class="info-data">
                        <div class="card">
                            <div class="head">
                                <div>
                                    <h3>Admission ID</h3>
                                    <h3><?php echo $u['AID'];?></h3>
                                </div>
                                <img src="images/graduated.jpeg" class="nicon" >     <?php }?>
                                <!-- <i class="bx bx-trending-up icon"></i> -->
                            </div>
                            <!-- <span class="progress" data-val="50"></span>
                            <span class="label">50%</span> -->
                        </div>

                        <div class="card">
                            <div class="head">
                                <div>
                                    <?php
                                    while($p=mysqli_fetch_array($q))
                                    {

                                    
                                    ?>
                                    <h3>Remaining Fees</h3>
                                    <h3><?php echo $p['RFees'];?></h3>
                                    <?php }?>
                                </div>
                                <img src="images/rupee.jpeg" class="nicon" alt="">
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
                                            $totalll = $row["total_entries"];
                                        
                                    ?>
                                    <h3>Assignments</h3>
                                    <h3><?php echo $totalll;?></h3>
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
                                    <h3>Projects</h3>
                                    <h3><?php echo $totall;?></h3>
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
                            <h2>Projects Uploads</h2>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Project Name</th>
                                        <th>Subject</th>
                                        <th>Uploded</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                    <tr>
                                    <?php
                                        while($uu=mysqli_fetch_array($rr))
                                        {

                                            
                                        ?>
                                        <td><?php echo $uu['PNO'];?></td>
                                        <td><?php echo $uu['PName'];?></td>
                                        <td><?php echo $uu['Subject'];?></td>
                                        <td><?php echo $uu['fl'];?></td>
                                    </tr> <?php }?>

                                    <tr>
                                        <td><?php echo $uu['PNO'];?></td>
                                        <td><?php echo $uu['PName'];?></td>
                                        <td><?php echo $uu['Subject'];?></td>
                                        <td><?php echo $uu['fl'];?></td>
                                    </tr>

                                    <tr>
                                        <td><?php echo $uu['PNO'];?></td>
                                        <td><?php echo $uu['PName'];?></td>
                                        <td><?php echo $uu['Subject'];?></td>
                                        <td><?php echo $uu['fl'];?></td>
                                    </tr>

                                    <tr>
                                        <td><?php echo $uu['PNO'];?></td>
                                        <td><?php echo $uu['PName'];?></td>
                                        <td><?php echo $uu['Subject'];?></td>
                                        <td><?php echo $uu['fl'];?></td>
                                    </tr>

                                    
                                    
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
