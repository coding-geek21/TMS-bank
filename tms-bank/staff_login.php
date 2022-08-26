<?php
session_start();
if(isset($_SESSION['staff_login'])){
	
	header('location:staff_profile.php') ;
	
}
?>
<html>
    <head>
    <title>Staff Page</title>
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
                <h3>Staff Login</h3>
                <br><br>
                <div class="form-group">
                    <label for="email">Staff ID:</label>
                    <input type="text" name="staff_id" required  class="form-control" id="email">
                </div>
                <br>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" name="password" required class="form-control" id="pwd">
                </div>
                <br><br>
                <button type="submit" class="btn btn-primary" name="staff_login-btn">Login</button>
            </form>
            <div class="mt-5 col-lg-3"></div>

        </div>
        <?php include 'staff_login_process.php'?> 
        <?php include 'footer.php' ?>
    </body>
</html>