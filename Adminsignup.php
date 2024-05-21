<?php
    $con=mysqli_connect("localhost","root","","college_digitization")or die("not connected");
    if(isset($_POST["btn"]))
    {
        
        $ADMID = $_POST["ADMID"];
        $Name = $_POST["Name"];
        $Email = $_POST["Email"];
        $APassword = $_POST["APassword"];
        $sql = "INSERT INTO Alogin(ADMID,Name,Email,APassword) values ('$ADMID','$Name','$Email','$APassword')";
            //echo $sql;exit;
            $r=mysqli_query($con,$sql);
            if($r)
            {
                echo '<script type="text/JavaScript">
                alert("Data Inserted Succesfully");
                </script>';
            }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        /* body{background-color: blueviolet;} */
        body{background-image: url(img.jpg); background-repeat: no-repeat;}
        /* #main{height: 730px;width: 100%;background-color:blueviolet;} */
        .login{
            height: 450px;
            width: 400px;
            background-color: aliceblue;
            /* background-image: url(image.jpg); */
            margin-left: 35%;
            margin-top: 10%;
            background-color: transparent 2px;
            /* border: 2px solid black; */
            box-shadow: 3px;
            border-radius: 20px;
        }
        .form-floating{width: 70%;margin-left: 15%; }
        .btn{margin-left:25% ;width: 200px;}
        .btn_a{float: left;margin-left: 5%;}
        .btn_b{float: left; margin-left: 33%;}
    </style>
</head>
<body>
      <div class="login shadow-lg">
        
            <center><h1>Admin</h1></center>
            <form method="post">
                <div class="form-floating mb-3 mt-3">
                    <input type="text" class="form-control" id="AD" placeholder="Enter Admin ID" name="ADMID">
                    <label for="AD">Enter Admin ID</label>
                </div>

                <div class="form-floating mb-3 mt-3">
                    <input type="text" class="form-control" id="Name" placeholder="Enter Name" name="Name">
                    <label for="Name">Enter Name</label>
                </div>
                <div class="form-floating mb-3 mt-3">
                    <input type="email" class="form-control" id="email" placeholder="Enter Public Kay" name="Email">
                    <label for="email">Enter Email </label>
                </div>

                <div class="form-floating mb-3 mt-3">
                    <input type="password" class="form-control" id="email" placeholder="Enter Password" name="APassword">
                    <label for="email">Enter Password </label>
                </div>
                <input type="submit" class="btn btn-primary" name="btn" value="SIGN UP">
            </form>
        </div>  

        
</body>
</html>
