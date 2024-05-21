<?php
    session_start();
    $con = mysqli_connect("localhost","root","","college_digitization")or die("Unable to Connect");

    if(isset($_POST["slogin"]))
    {
        $AID =$_POST["AID"];
        $SPassword =$_POST["SPassword"];

        $sql = "SELECT * FROM student where AID='$AID' and SPassword='$SPassword'";
        //echo $sql;exit;
        $r = mysqli_query($con,$sql);
        $s = mysqli_fetch_array($r);
        
        if($s)
        {
            $_SESSION['x']=$_POST['AID'];
            header("Location:SDashboard.php");
        }
        else
        {
            echo "Wrong Password";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
    <style>
        *{
            margin: 0;
        }
        #main{
            height:800px ;
            width: 100%;
            background-color: aqua;
        }
        .one{
            height: 800px;
            width: 50%;
            background-image: url(images/loginimg.jpeg);
            background-position: inherit;
            background-position: center;
            background-size: cover;
            float: left;
        }
        .two{
            height: 800px;
            width: 50%;
            background-color: white;
            float: left;
        }
        .title{
            height: 40px;
            width: 100%;
            /* background-color: blanchedalmond; */
            justify-content: center;
            
        }
        .title > h1{
            margin-top: 90px;
            font-size: 35px;
            font-weight: 500;
            margin-left: 120px;
        }
        .account{
            height: 30px;
            width: 100%;
            /* background-color: blueviolet; */
            margin-top: 20px;
            
        }
        .account > h4{
            font-size: 20px;
            font-weight: 300;
            font-family: Georgia, 'Times New Roman', Times, serif;
            margin-left: 120px;
        }
        .head{
            height: 50px;
            width: 100%;
            /* background-color: aqua; */
            margin-top: 10px;
        }
        .head >h1{
            font-size: 30px;
            font-weight: 400;
            font-family: Georgia, 'Times New Roman', Times, serif;
            margin-left: 120px;
        }


        /* Input Feild */
    .container form .user-details{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin: 20px 0 12px 0;
    }
    .user-details .input-box .details{
        display: block;
        font-weight: 500;
        margin-bottom: 5px;
    }
    .user-details .input-box input{
        height: 50px;
        width: 60%;
        font-size: 20px;
        outline: none;
        border-radius: 5px;
        border: 2px solid grey;
        /* padding-left: 15px; */
        transition: all 0.3s ease;
        margin-left: 120px;
        margin-top: 30px;
        padding-left: 20px;
    }
    .user-details .input-box input:focus,
    .user-details .input-box input:valid{
        border-color: #1775F1;
    }

    /* Check box */
    .user-details .input-check input{
        margin-left: 120px;
        margin-top: 30px;
        height: 20px;
        width: 20px;
    }
    .user-details .input-check .Forgot{
        margin-left: 30%;
        font-size: 18px;
    }
    .user-details .input-check .Forgot a{
        text-decoration: none;
        color: #1775F1;
        font-weight: 400;
    }
    form .button{
        height: 55px;
        margin: 45px 0;
    }
    form .button input{
        height: 100%;
        width: 61%;
        outline: none;
        color: white;
        border: none;
        font-size: 18px;
        font-weight: 500;
        border-radius: 5px;
        letter-spacing: 1px;
        background: #236fd3;
        cursor: pointer;
        margin-left: 120px;
        box-shadow: inherit;
    }
    .logo{
        height: 60px;
        width: 60px;
        margin-left:40%;
        margin-top: 10px;
    }
    </style>
</head>
<body>
    <div id="main">
        <div class="one"></div>
        <div class="two">
            <div class="logo">
                <img src="images/MVPLogo.png" alt="">
            </div>
            <div class="title">
                <h1>Welcome to CMCS COLLEGE</h1><br>
            </div><br>
            <!-- <div class="">
                <button type="button" class="btn btn-primary" style="margin-left: 190px;">Student</button>
                <button type="button" class="btn btn-primary" style="margin-left: 30px;">Professor</button>
                <button type="button" class="btn btn-primary" style="margin-left: 30px;">Admin</button>
                
            </div> -->

            <div class="head">
                <h1>Student Login</h1>
            </div>

            <div class="log">
                <form method="post">
                    <div class="user-details">
                        <div class="input-box">
                            <!-- <span class="details">Teacher ID</span> -->
                            <input type="text" name="AID" id="" placeholder="Admission ID" >
                        </div>

                        <div class="input-box">
                            <!-- <span class="details">Teacher ID</span> -->
                            <input type="password" name="SPassword" id="" placeholder="Password" required >
                        </div>

                        <div class="input-check">
                            <!-- <span class="details">Teacher ID</span> -->
                            <input type="checkbox"> Remember me <span class="Forgot"><a href="#">Forgot Password?</a></span> 
                        </div>

                        <div class="button">
                            <input type="submit" value="Login" name="slogin">
                        </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script>
    
</script>
</html>