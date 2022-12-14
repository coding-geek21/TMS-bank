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
	<div class="row" style="width:100%;">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">   
            <form method="post">
				<input type="text" class="form-control"   name="customer_account_no" placeholder="Customer A/c No" required><br>
				<input type="text" class="form-control"  name="credit_amount" placeholder="Amount" required><br>
				<input type="submit" name="credit_btn" value="Credit" >
				</form><br>
            </form>
        </div>
        <div class="col-lg-4"></div>
    </div>
<?php include'footer.php'; ?>
</body>
</html>


<?php 
if(isset($_POST['credit_btn'])){

    $cust_ac_no = $_POST['customer_account_no'];
    $credit_amount = $_POST['credit_amount'];

	if(!is_numeric($_POST['credit_amount'])){

		echo '<script>alert("Invalid amount")</script>';
	}
	
	else{ 
    
	include 'db_connect.php';

	$sql = "SELECT * FROM bank_customers WHERE Account_no = $cust_ac_no ";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
    $row = $result->fetch_assoc();
	$customer_ac_no = $row['Account_no'];
	$customer_id = $row['Customer_ID'];
	$customer_name = $row['Username'];
	$customer_ifsc= $row['IFSC_Code'];
	$customer_mob = $row['Mobile_no'];
	$customer_netbal = $row['Current_Balance'] + $credit_amount;
	$customer_passbk = "passbook_".$customer_id;
	

    
		$transaction_id = mt_rand(100,999).mt_rand(1000,9999).mt_rand(10,99);
		

		date_default_timezone_set('Asia/Kolkata'); 
		$transaction_date = date("d/m/y h:i:s A");
		
		$remark = "Cash Deposit";
			
        $Transac_description = "Cash Deposit/".$transaction_id;
		
		date_default_timezone_set('Asia/Kolkata'); 
		$date_time = date("d/m/y h:i:s A");

        $conn->autocommit(FALSE);
	
	$sql1 = "Update bank_customers SET Current_Balance = '$customer_netbal' WHERE bank_customers.Account_no = '$customer_ac_no '";
		
	$sql2 = "INSERT INTO $customer_passbk (Transaction_id,Transaction_date,Description,Cr_amount,Dr_amount,Net_Balance,Remark)
	VALUES ('$transaction_id','$transaction_date','$Transac_description','$credit_amount','0','$customer_netbal','$remark')";
		
  
	if($conn->query($sql1) == TRUE && $conn->query($sql2) == TRUE ){
				
			$conn->commit();
		


	
			echo '<script>alert("Amount credited Successfully to customer account")</script>';
							
		}	

		else{
			
			
			echo '<script>alert("Transaction failed\n\nReason:\n\n'.$conn->error.'")</script>';
			$conn->rollback();
		
			
        }
    }

    else{

        echo '<script>alert("Incorrect Account Number")</script>';
    }

	}
	

			
	}
	
?>