<html>
    <head><title>Customer Details</title>
    
    <link rel="stylesheet" type="text/css" href="main.css" />
    <style>
        .flex-wrapper {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
            justify-content: space-between;
        }
    </style>   

      <?php include 'header.php' ?>
    
    
    </head>
  
    
    <body class="flex-wrapper">

    <?php include 'staff_profile_header.php' ?>
    
    <div class="view_cust_byac_container_outer">
    <form method="POST" >
        <div class="form-group text-center" style="width:50%;margin-left:auto;margin-right:auto;">
            <input name="account_no" placeholder="Customer Account No" class="form-control"><br>
            <button type="submit" name="submit_view" class="btn btn-primary">Submit</button>
        </div>
    </form>
    </div>
    
    <?php 

    if(isset($_POST['submit_view'])){
        $cust_ac=$_POST['account_no'];
        include 'db_connect.php'; 
        $sql="SELECT * FROM bank_customers where Account_no= '$cust_ac'";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
        $row = $result->fetch_assoc();

	    echo '<div class="view_cust_byac_container_inner">
            <div class="cust_details">
                <h3 class="heading" style="margin-left:20px";>Customer Details</h3>
                <br>
                <div class="row" style="width:100%";>
                    <div class="col-lg-6" style="margin-left:20px";>
                        <p>Customer Id : '.$row['Customer_ID'].'</p>
                        <p>Account Number : '.$row['Account_no'].'</p>
                        <p>Account Name : '.$row['Username']. '</p>
                        <p>Account Type : '.$row['Account_type']. '</p>
                        <p>IFSC Code : '.$row['IFSC_Code']. '</p>
                        <p>Branch : '.$row['Branch'].'</p>
                    </div>
                    <div class="col-lg-5">
                        <p>Available Balance : Rs '.$row['Current_Balance'].'</p>
                        <p>Mobile No : '.$row['Mobile_no'].'</p>
                        <p>Debit Card No : '.$row['Debit_Card_No'].'</p>
                        <p>Nominee Name : '.$row['Nominee_name'].'</p>
                        <p>Nominee Ac/no : '.$row['Nominee_ac_no'].'</p>
                        <p>Email Id : '.$row['Email_ID'].'</p>
                    </div>
                </div>
            </div>
            </div>'; 
    
    }

    else{

        echo '<script>alert("Customer not found")</script>';
    }
}
    
    ?>
    
    <?php include 'footer.php' ?>

    </body>
</html>