	
<?php 
		if(isset($_POST['approve_cust'])){
		

			$application_no  = $_SESSION['application_no'];
			$sql = "SELECT * from pending_accounts Where Application_no = '$application_no' ";
			$result = $conn->query($sql);
			if($result->num_rows > 0){
			$row = $result->fetch_assoc();
			$name = $row['Name'];
			$gender = $row['Gender'];
			$mob_no =$row['Mobile_no'];
			$pan = $row['PAN'];
			$dob = 	$row['DOB'];
			$email = $row['Email_id'];     
			$home_addr = $row['Home_Addr'];
			$office_addr =	$row['Office_Addr'];
			$country = $row['Country'];
			$state=	$row['State'];
			$city =	$row['City'];
			$pin = 	$row['Pin'];
			$nominee_name =$row['Nominee_name'];
			$nominee_acno= $row['Nominee_ac_no'];
			$acc_type =	$row['Account_type'];
	
	
			include 'db_connect.php';
			$sql = "SELECT MAX(Customer_ID) AS Last_Customer FROM bank_customers";
			$result = $conn->query($sql);
			if($result->num_rows > 0){
			$row = $result->fetch_assoc();
			$Last_customer_ID = rand(100,1000);
			$ifsc = 1011;
			$customer_id = $ifsc.$Last_customer_ID + 1;
			$branch = "Demo Branch";
			$acc_no = $ifsc.mt_rand(01,99).$customer_id;
	
			date_default_timezone_set('Asia/Kolkata'); 
			$ac_opening_date = date("d/m/y h:i:s A");
				
			$conn->autocommit(FALSE);
	
			$sql1 = " INSERT INTO bank_customers (
			Username,
			Gender,
			Customer_ID,
			Account_no,
			Branch,
			IFSC_Code,
			Mobile_no,
			PAN,
			DOB,
			Email_ID,
			Home_Addr,
			Office_Addr,
			Country,
			State,
			City,
			Pin_code,
			Nominee_name,
			Nominee_ac_no,
			Account_type,
			Ac_Opening_Date,
			Account_Status)
	
			VALUES (
			'$name',
			'$gender',				
			'$customer_id',
			'$acc_no',
			'$branch ',
			'$ifsc',
			'$mob_no',
			'$pan',
			'$dob',
			'$email',     
			'$home_addr',
			'$office_addr',
			'$country',
			'$state',
			'$city',
			'$pin',
			'$nominee_name',
			'$nominee_acno',
			'$acc_type',
			'$ac_opening_date',
			'ACTIVE') ";
	
					$sql2 = "DELETE FROM pending_accounts Where Application_no = '$application_no' ";

					$sql3 = "CREATE TABLE passbook_$customer_id
					(id INT(255) AUTO_INCREMENT PRIMARY KEY, 
					Transaction_id VARCHAR(255) NULL,
					Transaction_date VARCHAR(255) NULL,
					Description VARCHAR(255) NULL,
					Cr_amount VARCHAR(255) NULL,
					Dr_amount VARCHAR(255) NULL,
					Net_Balance VARCHAR(255) NULL,
					Remark VARCHAR(255) NULL)";

					$sql4 = "CREATE TABLE beneficiary_$customer_id (id INT(255) AUTO_INCREMENT PRIMARY KEY, 
					Beneficiary_name VARCHAR(255) NULL,
					Beneficiary_ac_no VARCHAR(255) NULL,
					IFSC_code VARCHAR(255) NULL,
					Account_type VARCHAR(255) NULL,
					Status VARCHAR(255) NULL,
					Date_added VARCHAR(255) NULL)";

					

					if($conn->query($sql1) == TRUE && $conn->query($sql2) == TRUE  && $conn->query($sql3) == TRUE  && $conn->query($sql4) == TRUE){
						
						$transaction_id = mt_rand(100,999).mt_rand(1000,9999).mt_rand(10,99);

						$sql = "INSERT into passbook_$customer_id (Transaction_id,Transaction_date,Description,Cr_Amount,Dr_Amount,Net_Balance) 
						VALUES ('$transaction_id','$ac_opening_date','Account Opening','0','0','0') ";
						$conn->query($sql);
					
					$conn->commit();

			

						echo '<script>alert("Account Created Successfully\n\nAccount no :'.$acc_no.'\n\nHint : Get Debit Card then register e-banking")</script>';
				
				}
				else
						{
	
							
							echo "Error Creating Account<br><br>".$conn->error;	
							$conn->rollback();	
							
	
				}
		}
		else{

			echo $sql."<br><br>".$conn->error;

		}
	}

	else{

		echo '<script>alert("Application not found")</script>';

	
	}
}
		
?>