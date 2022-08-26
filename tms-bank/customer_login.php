<?php
ob_start();
session_start();
if(isset($_SESSION['customer_login'])){
	
	header('location:customer_profile.php') ;
	
}


 ?>
<html>
<head>
    <title>Login Page</title>
  
    <link rel="stylesheet" type="text/css" href="css/customer_login.css" />
    <style>
        .flex-wrapper {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
            justify-content: space-between;
        }
    </style>
    </head>
    <body class="flex-wrapper">
        
	    <?php include 'header.php' ?>
        <br><br>
        <div class="container mt-5 row">
            <div class="mt-5 col-lg-3"></div>

            <form method="post" class="col-lg-6 col-sm-12">
                <h3>Login</h3>
                <br><br>
                <div class="form-group">
                    <label for="email">Customer ID</label>
                    <input type="text" name="customer_id" required  class="form-control">
                </div>
                <br>
                <div class="form-group">
                    <label for="pwd">Password</label>
                    <input type="password" name="password" required class="form-control" id="pwd">
                </div>
                <br><br>
                <button type="submit" class="btn btn-primary" name="login-btn">Login</button>
                <a href="cust_forgetpass.php" class="help m-2"><label class="label_help" >Forgot Password ?</label></a>
            </form>
            <div class="mt-5 col-lg-3"></div>

        </div>
        
        
        <?php include 'footer.php' ?>
    </body>
</html> 

<?php include 'customer_login_process.php'?>

