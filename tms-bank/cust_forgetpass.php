<html>
<head>
<title>Forget Password</title>
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
    <br><br><br>

<div class="row" style="width:100%;">
    <div class="col-lg-4"></div>
    <div class="col-lg-4">
	<form method="POST">
    <input type="text" name="cust_id" class="form-control" placeholder="Customer ID" required /><br>
	<input type="text" class="form-control" name="dbt_crd" placeholder="Debit Card Number" required /><br>
	<input type="text" class="form-control" name="dbt_crdpin" placeholder="Debit Card Pin"required /><br>
	<input type="text" class="form-control" name="mobile_no" placeholder="Registerd Mobile no" required /><br>
	<input type="submit" class="btn btn-primary" name="sendotp" value="Submit"><br>
    <form>
    </div>
    <div class="col-lg-4"></div>
</div>
<?php 
include 'footer.php';
if(isset($_POST['sendotp'])){
	session_start();
	include 'cust_forgetpass_validate.php';

}


?>
</body>
</html>
