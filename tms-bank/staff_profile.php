<?php ob_start(); ?>

<html>
<head><title>Staff Home</title>
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
<?php
	include 'header.php' ;
	include 'staff_profile_header.php' ;?>
	<br><br>
        <div class="container mt-2 row">
            <div class="col-lg-2"></div>
			<form method="post" class="col-lg-8 col-sm-12">
				<div class="staff_options">
					<button type="submit" class="btn btn-primary m-3" name="viewdet">View Active Customer</button>
					<button type="submit" class="btn btn-danger m-3" name="view_cust_by_ac">View Customer by A/c No</button>
					<button type="submit" class="btn btn-warning m-3" name="apprvac">Approve Pending Account</button>
					<button type="submit" class="btn btn-info m-3" name="del_cust">Delete Customer A/c</button>	
					<button type="submit" class="btn btn-success m-3" name="credit_cust_ac">Credit Customer</button>	
				</div>
			</form>

         
            <div class="mt-5 col-lg-2"></div>

        </div>
    <br><br>    
	

<?php include 'footer.php'; ?>
</body>
</html>


<?php

if(isset($_POST['viewdet'])){
	
	
		header('location:active_customers.php');
}

if(isset($_POST['view_cust_by_ac'])){
	
	header('location:view_customer_by_acc_no.php');
	
}
if(isset($_POST['apprvac'])){
	
	header('location:pending_customers.php');
	
}
if(isset($_POST['del_cust'])){
	
	
	header('location:delete_customer.php');
}
if(isset($_POST['credit_cust_ac'])){
	
	
	header('location:credit_customer_ac.php');
}

?>
