<?php
session_start();
if(!isset($_SESSION["userid"])) {
    header("Location: http://localhost/trial1/material-pro/material/login_test.php");
    exit;
}
include_once("config.php");
$id=$_SESSION['userid'];
$sql="SELECT * FROM usermaster where id='$id'";
$run=mysqli_query($conn,$sql);
$result=mysqli_fetch_assoc($run);

$username=$result['username'];
$email=$result['useremail'];

?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from wrappixel.com/demos/admin-templates/material-pro/material/pages-error-503.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 Dec 2017 18:12:59 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Logout</title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header card-no-border">
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper" class="error-page">
        <div class="error-box">
            <div class="error-body text-center">
                <h2>Successfully Logged Out</h2>
                <?php   
                 $time1=time();
    $query = "UPDATE usermaster SET `lastlogouttime`='$time1'  where `id`='$id'";
mysqli_query($conn,$query);
mysqli_close($conn); 
session_destroy();

?>
                <a href="login_test.php" class="btn btn-info btn-rounded waves-effect waves-light m-b-40">Login Again</a> </div>
            <footer class="footer text-center">© 2017 Material Pro.</footer>
        </div>
    </section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
</body>


<!-- Mirrored from wrappixel.com/demos/admin-templates/material-pro/material/pages-error-503.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 Dec 2017 18:12:59 GMT -->
</html>
