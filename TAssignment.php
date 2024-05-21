<?php
    session_start();
    $con=mysqli_connect("localhost","root","","college_digitization")or die("not connected");
    $sql = "SELECT * FROM assignment";
    $r = mysqli_query($con,$sql);
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
                <li><a href="index.html" class="active"><i class='bx bxs-dashboard' ></i>Dashboard</a></li><br>
                <!-- <li class="divider">Main</li> -->
                <li>
                    <a href="#" ><i class='bx bxs-book-bookmark'></i></i></i>Assignment<i></i></a>
                    <ul class="side-dropdown">
                    </ul>
                  </li>  
                
                <li>
                    <a href="#" ><i class='bx bxs-notepad'></i></i>Project<i></i></a>
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
                    <section class="attendance">
                        <div class="attendance-list">
                            <h2> Assignment List</h2>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Assignment ID</th>
                                        <th>Assignment Name</th>
                                        <th>Subject</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <?php
                                            while($u=mysqli_fetch_array($r))
                                            {

                                            
                                        ?>
                                        <td><?php echo $u['ASSID'];?></td>
                                        <td><?php echo $u['AName'];?></td>
                                        <td><?php echo $u['Subject'];?></td>
                                        <td><?php echo $u['fl'];?></td>
                                    </tr>

                                    <tr>
                                        <td><?php echo $u['ASSID'];?></td>
                                        <td><?php echo $u['AName'];?></td>
                                        <td><?php echo $u['Subject'];?></td>
                                        <td><?php echo $u['fl'];?></td>
                                    </tr>

                                    <tr>
                                        <td><?php echo $u['ASSID'];?></td>
                                        <td><?php echo $u['AName'];?></td>
                                        <td><?php echo $u['Subject'];?></td>
                                        <td><?php echo $u['fl'];?></td>
                                    </tr>

                                    <tr>
                                        <td><?php echo $u['ASSID'];?></td>
                                        <td><?php echo $u['AName'];?></td>
                                        <td><?php echo $u['Subject'];?></td>
                                        <td><?php echo $u['fl'];?></td>
                                    </tr>

                                    <tr>
                                        <td><?php echo $u['ASSID'];?></td>
                                        <td><?php echo $u['AName'];?></td>
                                        <td><?php echo $u['Subject'];?></td>
                                        <td><?php echo $u['fl'];?></td>
                                    </tr>


                                    <tr>
                                        <td><?php echo $u['ASSID'];?></td>
                                        <td><?php echo $u['AName'];?></td>
                                        <td><?php echo $u['Subject'];?></td>
                                        <td><?php echo $u['fl'];?></td>
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
