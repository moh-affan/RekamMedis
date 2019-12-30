<?php
session_start();
include "koneksi.php";
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Puskesmas</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="logo.png">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body class="bg-dark">


    <div class="">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <h3><font color="#F8F8FF">PUSAT KESEHATAN MASYARAKAT</font></h3>
                        <h2><font color="#F8F8FF">SOCAH</font></h2>
                </div>
                <div class="login-logo">

                        <img class="align-content" src="images/logo.png" alt="">                    
                </div>
                <div class="login-form">
                    <form action="cek_login.php" method="post">
                        <div class="alert alert-light" role="alert" >
                            <?php  
                                if(isset($_GET['pesan'])){
                                        if($_GET['pesan']=="gagal"){
                                            echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
                                        }
                                    }
                                ?>
                        </div>
                        <div class="form-group">

                            <label>Email address</label>
                            <input type="text" name="USERNAME" class="form-control" placeholder="Username" required>
                        </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="Password" name="PASSWORD" class="form-control" placeholder="Password" required>
                        </div>
                                <div class="checkbox">
                                    <label>
                                <input type="checkbox"> Remember Me
                            </label>
                                </div>
                                <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                                &nbsp;
                                <a type="button" class="btn btn-primary btn-lg btn-block" href="pasien">Login Pasien</a>

                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


</body>

</html>
