<?php 
session_start();
if($_SESSION['staff_login'] != true)
{
	
	 header('location:staff_login.php');

}	

?>

<html>   
    <body>		
	<?php	
		include 'db_connect.php';
        
        $staff_id = $_SESSION['staff_id'];
		$sql="SELECT * FROM bank_staff WHERE Staff_id= '$staff_id' ";
        $result=$conn->query($sql);
        if($result->num_rows > 0)
		$row = $result->fetch_assoc();

	?>
    <br><br>
       <div class="head container mt-5">
            <h4>Welcome <?php echo $_SESSION['staff_name']; ?></label><h6 class="lstlogin">Last login : <?php echo $row['Last_login']  ; ?> </h4>
            <a class="staff_home" href="staff_profile.php"><input type="button" name="home" value="Home"></a>
            <a class="staff_logout" href="staff_logout.php"><input type="button" name="logout_btn" value="Logout"></a>
        
        </div>
    <br><br>
    </body>
</html>