<?php ob_start() ?>

<html>
<head>
    <title>Registration Form</title>
    
	<?php include 'header.php';  ?>
    </head>
    <body>
		<br><br>
        <div class="container mt-5 row">
            <div class="mt-5 col-lg-3"></div>
            <form method="post" class="col-lg-6 col-sm-12">
			<h3>New Account Opening Form</h3>
                <br><br>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" required class="form-control" id="name">
                </div>
                <br>
                <div class="form-group">
				<label for="name">Gender</label>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
						<label class="form-check-label" for="flexRadioDefault1">
						Male
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
						<label class="form-check-label" for="flexRadioDefault1">
						Female
					</label>
					</div>
                </div>
				<br>
				<div class="form-group">
                    <label>Mobile Number</label>
                    <input class="form-control" type="text" name="mobile" placeholder="Mobile no" required>
                </div>
				<br>
				<div class="form-group">
                    <label>Email id</label>
                    <input class="form-control" type="email" name="email" required>
                </div>
				<br>
				<div class="form-group">
                    <label>Date of Birth</label>
					<input class="form-control" type="text" name="dob" placeholder="Date of Birth" onfocus="(this.type='date')" required />
                </div>
				<br>
				<div class="form-group">
                    <label>PAN Number</label>
					<input class="form-control" type="text" nname="pan_no" placeholder="PAN Number" required />
                </div><br>
				<div class="form-group">
                    <label>Address</label>
					<input class="form-control" name="homeaddrs" placeholder="Home Address" required  />
                </div><br>
				<div class="form-group">
                    <label>Office Address</label>
					<input class="form-control" name="officeaddrs" placeholder="Office Address" required   />
                </div><br>
				<div class="form-group">
                    <label>Country</label>
					<input class="form-control" type="text" name="country"  required />
                </div><br>
				<div class="form-group">
                    <label>State</label>
					<input class="form-control" type="text" name="state" required />
                </div><br>
				<div class="form-group">
                    <label>City</label>
					<input class="form-control" type="text" name="city" required />
                </div><br>
				<div class="form-group">
                    <label>Pin Code</label>
					<input  class="form-control"  type="text" name="pin" placeholder="Pin Code" required />
				</div><br>
				<div class="form-group">
                    <label>Nominee Name</label>
					<input  class="form-control" type="text" name="nominee_name" placeholder="Nominee Name (If any)" />
                </div><br>
				<div class="form-group">
                    <label>Nominee Account no</label>
					<input  class="form-control" type="text" name="nominee_ac_no" placeholder="Nominee Account no"  />
                </div><br>
				<div class="form-group">
                    <label>Account Type</label>
					<select name ="acctype" required >
					  <option class="default" value="" disabled selected>Account Type</option>
					  <option value="Saving">Saving</option>
					  <option value="Current">Current</option>
					</select>
                </div><br>
                <br>
                <button type="submit" class="btn btn-primary"  name="submit">Submit</button>
            </form>
            <div class="mt-5 col-lg-3"></div>
        </div>	
		<?php include 'footer.php' ?>	
	</body>
</html>


<?php 

if(isset($_POST['submit'])){

	session_start();
	$_SESSION['$cust_acopening'] = TRUE;
	$_SESSION['cust_name']=$_POST['name'];
	$_SESSION['cust_gender']=$_POST['gender'];
	$_SESSION['cust_mobile']=$_POST['mobile'];
	$_SESSION['cust_email']=$_POST['email'];
	$_SESSION['cust_landline']=$_POST['landline'];
	$_SESSION['cust_dob']=$_POST['dob'];
	$_SESSION['cust_pan=']=$_POST['pan_no'];
	$_SESSION['cust_citizenship']=$_POST['citizenship'];
	$_SESSION['cust_homeaddrs']=$_POST['homeaddrs'];
	$_SESSION['cust_officeaddrs']=$_POST['officeaddrs'];
	$_SESSION['cust_country']=$_POST['country'];
	$_SESSION['cust_state']=$_POST['state'];
	$_SESSION['cust_city']=$_POST['city'];
	$_SESSION['cust_pin']=$_POST['pin'];
	$_SESSION['arealoc']=$_POST['arealoc'];
	$_SESSION['nominee_name']=$_POST['nominee_name'];
	$_SESSION['nominee_ac_no']=$_POST['nominee_ac_no'];
	$_SESSION['cust_acctype']=$_POST['acctype'];
	
	header('location:cust_regfrm_confirm.php');
	
	
}

?>