<?php 
session_start();
if($_SESSION['customer_login'] != true)
{
	
	 header('location:customer_login.php');

}	

?>

<html>
    <head>
    
    <style>
        .flex-wrapper {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
            justify-content: space-between;
        }
    
        #home, #logout{

            background-color:rgba(5, 21, 71,0.9);
            border:none;
            padding:5px;
            width:70px;
            color:white;
            cursor:pointer;
            box-shadow:2px 2px 6px rgba(5, 21, 71,0.9);
            transition-duration: 0.6s;
        }

        .profile_nav {
            background-color: rgb(107, 172, 192);
            overflow: auto;
            width: 100%;
            margin-top: 5px;
            margin-left: 0px;
        }
        .profile_nav ul li {
            float: left;
            padding: 1%;
            width: 150px;
            list-style: none;
            margin-left: 5.5%;
            color: white;
            text-align: center;
        }

        .profile_nav ul li:hover {
            background-color: rgba(5, 21, 71, 0.4);
        }
        .profile_nav ul li a {
            color: white;
            text-decoration: none;
        }
	</style>
	</head>
    
<body class="flex-wrapper">
 					
	<?php	
		include 'db_connect.php';
		
		$customer_id=$_SESSION['customer_Id'];
		$sql="SELECT * FROM bank_customers WHERE Customer_ID='$customer_id'";
		$result=$conn->query($sql);
		if($result->num_rows > 0)
		$row = $result->fetch_assoc();

	?>
    <br><br>
        <div class="head container mt-5">
            <h4>Welcome <?php echo $_SESSION['Username']; ?></h4><h6 class="lstlogin">Last login : <?php echo $row['Last_Login'] ?> </h6>
            <a class="cust_home" href="customer_profile.php"><input type="button" name="home" value="Home" id="home"></a>
            <a class="cust_logout" href="customer_logout.php"><input type="button" name="logout_btn" value="Logout" id="logout"></a>
        </div>
    <br><br>
        
        <div class="profile_nav">
            <ul>
                <a href="customer_profile_myacc.php"><li class="link1">My Account</li></a>
                <a href="customer_profile_myprofile.php"><li class="link2">My Profile</li></a>
                <a href="customer_pass_change.php"><li class="link3">Change Password</li></a>
                <a href="fund_transfer.php"><li class="link4">Fund Transfer</li></a>
                <a href="cust_statement.php"><li class="link5">Statement</li></a>
            </ul>
        </div>

    </body>
</html>