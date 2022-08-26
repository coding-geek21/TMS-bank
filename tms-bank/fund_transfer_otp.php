<html>
	<head><title>OTP Verification</title>
	</head>
<body>
	<?php include 'header.php' ; 
			include 'customer_profile_header.php'; 
			$sender_mob = $_SESSION['sender_mob'];
			$hidden_mob_no = substr($sender_mob, 0, 3)."XXXX".substr($sender_mob, 7, 10);
			$ref_no = $_SESSION['ref_no'];
	
	?>
	<label class="OTP_msg">OTP with Ref no.<?php echo $ref_no." sent to <b>".$hidden_mob_no."</b> please verify to complete your transaction <br><br> *OTP :".$_SESSION['fund_trnsfer_otp']."" ; ?></label>

		<div class="fund_transfer_otp_container">
		<form method="post">
		<input type="text" name="otpcode" placeholder="OTP Code">
		<input type="submit" name="verify-btn" value="Verify">
		</form>
		</div>
	<?php include 'footer.php' ;  ?>
</body>
</html>

<?php 
?>


<?php
echo $_SESSION['fund_trnsfer_otp'];
if(isset($_POST['verify-btn'])){


    $otpcode = $_POST['otpcode']; 

    if($otpcode == $_SESSION['fund_trnsfer_otp']){                       

     $sender_ac_no = $_SESSION['Account_No'];	
     
     $trnsf_amount = $_SESSION['trnsf_amount'];  
    $beneficiary_ac_no = $_SESSION['beneficiary_ac_no'];                  

    
    include 'db_connect.php';
  
	$sql = "SELECT * FROM bank_customers WHERE Account_no = $beneficiary_ac_no ";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	$receiver_ac_no = $row['Account_no'];
	$receiver_custmr_id = $row['Customer_ID'];
	$receiver_name = $row['Username'];
	$receiver_ifsc= $row['IFSC_Code'];
	$receiver_mob = $row['Mobile_no'];
	$receiver_netbal = $row['Current_Balance'] + $trnsf_amount;
	$receiver_passbk = "passbook_".$receiver_custmr_id;
	
	
	$sql = "SELECT * FROM bank_customers WHERE Account_no = '$sender_ac_no' " ;
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	$sender_custmr_id = $row['Customer_ID'];
	$sender_name = $row['Username'];
	$sender_ifsc = $row['IFSC_Code'];
	$sender_mob = $row['Mobile_no'];
	$sender_ac_no = $row['Account_no'];
	$sender_netbal = $row['Current_Balance'] - $trnsf_amount;
	$sender_passbk = "passbook_".$sender_custmr_id;


	$conn->autocommit(FALSE);
	
	$sql1 = "Update bank_customers SET Current_Balance = '$receiver_netbal' WHERE bank_customers.Account_no = '$receiver_ac_no '";
	
	
	$sql2 = "Update bank_customers SET Current_Balance ='$sender_netbal'  WHERE bank_customers.Account_no = '$sender_ac_no' ";
	
	
		$transaction_id = mt_rand(100,999).mt_rand(1000,9999).mt_rand(10,99);
		

		date_default_timezone_set('Asia/Kolkata'); 
		$transaction_date = date("d/m/y h:i:s A");
		
		$remark = $_SESSION['trnsf_remark'];                                    
		$Transac_description = $receiver_name ."/".$receiver_ac_no."/".$receiver_ifsc;
		
		$sql3 = "INSERT INTO $sender_passbk(Transaction_id,Transaction_date,Description,Cr_amount,Dr_amount,Net_Balance,Remark)
		VALUES ('$transaction_id','$transaction_date','$Transac_description','0','$trnsf_amount','$sender_netbal','$remark')";
			
		
		$Transac_description = $sender_name."/".$sender_ac_no."/".$sender_ifsc;
		
		$sql4 = "INSERT INTO $receiver_passbk (Transaction_id,Transaction_date,Description,Cr_amount,Dr_amount,Net_Balance,Remark)
		VALUES ('$transaction_id','$transaction_date','$Transac_description','$trnsf_amount','0','$receiver_netbal','$remark')";
		
  
	if($conn->query($sql1) == TRUE && $conn->query($sql2) == TRUE &&  $conn->query($sql3) == TRUE && $conn->query($sql4) == TRUE ){
				
			$conn->commit();

				date_default_timezone_set('Asia/Kolkata'); 
				$date_time = date("d/m/y h:i:s A");

            unset($_SESSION['fund_trnsfer_otp']);
            unset($_SESSION['trnsf_amount']);
            unset($_SESSION['beneficiary_ac_no']);
            unset($_SESSION['trnsf_remark']);

			echo '<script>alert("Transaction Successful!")
			location="fund_transfer.php"</script>';
							
		}	

		else{
			
			
			echo "Transaction failed!\nPlease contact bank<br>".$conn->error;
			$conn->rollback();
		
			
        }
        
    }

    else{

        echo '<script>alert("Incorrect OTP\n\nPlease try again")</script>';
    }



}

?>
