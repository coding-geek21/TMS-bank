<html>
    <head><title>My Profile</title>
    <link rel="stylesheet" type="text/css" href="customer-details.css" />
    <style>
    </style>

</head>
<body>
    <?php include 'header.php';
          include 'customer_profile_header.php' ?>
          <?php 
        $cust_id= $_SESSION['customer_Id'];
        include 'db_connect.php'; 
        $sql="SELECT * FROM bank_customers where Customer_ID= '$cust_id' ";
		$result = $conn->query($sql);
        $row = $result->fetch_assoc();
 
    ?>
<div class="cust_myacc_container">
    <div class="accdet">
        <label>Name : <?php echo $row['Username']; ?> </label>
        <label>Sex : <?php echo $row['Gender']; ?> </label>
        <label>Mobile No : <?php echo $row['Mobile_no']; ?> </label>
        <label>Addresss : <?php echo $row['Home_Addr']; ?> </label>
        <label>Currency : <?php echo 'INR' ; ?> </label>
        <label>Country : <?php echo $row['Country']; ?> </label>
        <label>State : <?php echo $row['State']; ?> </label>
        <label>City : <?php echo $row['City']; ?> </label>
        <label>Pin Code : <?php echo $row['Pin_code']; ?> </label>
        <label>Account Opening Date : <?php echo $row['Ac_Opening_Date']; ?> </label>
    </div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>