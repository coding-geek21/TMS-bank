<?php
ob_start();
include 'header.php';
include 'customer_profile_header.php' ;
if($_SESSION['customer_login'] != true){

	header('location:customer_login.php');
	return 0;
	}
?>
<html>
<head>
<title>Fund Transfer</title>
<style>
#customer_profile .link4{

background-color: rgba(5, 21, 71,0.4);

}
    </style>
 </head>
<body>


    <div class="fundtransfer_conainer row" style="width:100%;">
   
        <br>
		<div class="col-lg-3" ></div>
        <div class="fund_transfer col-lg-6"><br><br>
		<h4>IMPS (24x7 Instant Payment)</h4><br><br>

			<div class="beneficiary_btn">
				<form id="form1" method="post">
					<a href="add_beneficiary.php"><input class="beneficiary btn btn-primary" type="submit" name="add_beneficiary" value="Add beneficiary"></a>
					<input class="beneficiary btn btn-primary" type="submit" name="delete_beneficiary" value="Delete beneficiary">
					<input class="beneficiary btn btn-primary" type="submit" name="view_beneficiary" value="View beneficiary">
			</div>
	</form>
					<br>
					<form id="form2" method="post">
					<select name ="beneficiary" required class="form-control" >
					<option class="default" value=""  disabled selected>Select Beneficiery</option>

					<?php

		include 'db_connect.php';
		$cust_id = $_SESSION['customer_Id']; 
		$sql = "SELECT * from beneficiary_$cust_id ";
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc()){
							
						echo '
						'; ?>
						
		 <option value="<?php echo $row['Beneficiary_ac_no']; ?>"> <?php echo
		  $row['Beneficiary_name']."-".$row['Beneficiary_ac_no']; ?> </option>
					
		<?php } ?>
				</select><br>
				<input type="text" class="form-control" name="trnsf_amount" placeholder="Amount" required><br>
				<input type="text" class="form-control" name="trnsf_remark" placeholder="Remark"><br>
				<input type="submit" class="btn btn-success" name="fnd_trns_btn" value="Send"><br>
		</div>
		</form>
		<div class="col-lg-3"></div>
    </div>
             

    </body>
    <?php include 'footer.php' ; ?>
</html>

<?php

if(isset($_POST['add_beneficiary'])){

	header("location:add_beneficiary.php");
}

if(isset($_POST['delete_beneficiary'])){

	header("location:delete_beneficiary.php");
}

if(isset($_POST['view_beneficiary'])){

	header("location:view_beneficiary.php");

}
?>

<?php 

if(isset($_POST['fnd_trns_btn'])){

	$_SESSION['trnsf_remark'] = $_POST['trnsf_remark'];

	if(!is_numeric($_POST['trnsf_amount'])){

		echo '<script>alert("Invalid amount")</script>';
	}
	
	else{ 

		
	$sender_ac_no = $_SESSION['Account_No'];	

	$_SESSION['trnsf_amount'] = $trnsf_amount = $_POST['trnsf_amount'];	

	include 'db_connect.php';

	$_SESSION['beneficiary_ac_no'] = $beneficiary_ac_no = $_POST['beneficiary'];
	
	$sql = "SELECT * FROM bank_customers WHERE Account_no = '$sender_ac_no' " ;
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	$_SESSION['sender_mob'] = $sender_mob = $row['Mobile_no'];
	$sender_name = $row['Username'];
	if($row['Current_Balance'] < $trnsf_amount){

		echo '<script>alert("Insufficient balance")
					   location="fund_transfer.php";		
						</script>';

	}

	else {

		$_SESSION['fund_trnsfer_otp'] = $otp_fund_trnsfer = mt_rand(100,999).mt_rand(100,999);


		
			$_SESSION['ref_no'] = $ref_no = mt_rand(1000,9999);
			
		header("Location:fund_transfer_otp.php");
	}
}

}

	
?>