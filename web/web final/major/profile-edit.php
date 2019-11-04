<?php $title = "Job Recommendations | EDIT-PROFILE"; ?>
<?php include("includes/header.php"); ?>

<?php include("includes/nav.php"); ?>

<?php

$user = new User();
$userDetail = new UserDetail();

$username = $_GET['username'];
$username = trim($_GET['username']);

if($_SESSION['username'] != $username) {
	$rvar = 'profile-edit.php?username=' . $_SESSION['username'];
	redirect($rvar);
}

$user_detail_id = "";

if(isset($username)) {
	
	$findByUsername = $user->findUserByUsername($username); // Checking for Username.
	
	$content = "username";
	$dcont = "user_id";
	
	if(!$findByUsername) {
	echo "<h2>Nothing Here!..</h2>";
	exit();
}
else {
	$u = $user->find_by_content($content, $username);
	$d = $userDetail->find_by_content($dcont, $u->user_id);
	
// Getting the users Table Primary Key which is foreign in users_detail Table. 
	$getUser_id = $u->user_id;
	
	$userdetailid_content = "userdetail_id";
	
	
	$user_detail_id = $userDetail->findDetailIdById($getUser_id);
	
	
	
	if(isset($_POST['saveUsersDetails'])) {
		$fullName = $_POST['inputName'];
		$fatherName = $_POST['inputFather'];
		$motherName = $_POST['inputMother'];
		$email = $_POST['inputEmail'];
		$college = $_POST['inputCollege'];
		$addressLineOne = $_POST['inputAddress'];
		$addressLineTwo = $_POST['inputAddress2'];
		$city = $_POST['inputCity'];
		$state = $_POST['inputState'];
		$zipcode = $_POST['inputZip'];
		
		
		if(!$user_detail_id) {
			if($userDetail) {
				$userDetail->user_fullname = $fullName;
				$userDetail->user_fathername = $fatherName;
				$userDetail->user_mothername = $motherName;
				$userDetail->user_email = $email;
				$userDetail->user_college = $college;
				$userDetail->user_address_lineone = $addressLineOne;
				$userDetail->user_address_linetwo = $addressLineTwo;
				$userDetail->user_address_city = $city;
				$userDetail->user_address_state = $state;
				$userDetail->user_address_zipcode = $zipcode;
				$userDetail->user_id = $getUser_id;
				
				$userDetail->saveDetail();
				$session->message("The user has been created");
				$redirectVar = "profile-details.php?username=" . $u->username;
				redirect($redirectVar);
			}
			
		} else {
			
			$upasc = UserDetail::find_by_contents($userdetailid_content, $user_detail_id);
			
			$upasc->user_fullname = $fullName;
			$upasc->user_fathername = $fatherName;
			$upasc->user_mothername = $motherName;
			$upasc->user_email = $email;
			$upasc->user_college = $college;
			$upasc->user_address_lineone = $addressLineOne;
			$upasc->user_address_linetwo = $addressLineTwo;
			$upasc->user_address_city = $city;
			$upasc->user_address_state = $state;
			$upasc->user_address_zipcode = $zipcode;
		
			$upasc->saveDetail();
			$session->message("The user has been updated");
			$redirectVar = "profile-details.php?username=" . $u->username;
			redirect($redirectVar);
		}
		
	}
	
			
}
	
}


?>

<main>
	<div class="container hero-el">

	</div>
	<div class="container">
		<div class="basic-detail-container" id="basic-detail-box">
			<div class="form-header">
				<div class="form-text">Basic Details:-</div>
				<div class="edit-update-btn">
					<!--
					<form method="POST">
						<btn class="btn btn-default" name="saveUsersDetails">Save <span></span></btn>
					</form>
-->
				</div>
			</div>
			<div class="form-container">
				<form method="post">
					<div class="form-group">
						<label for="inputName">Full Name</label>
						<input type="text" name="inputName" class="form-control" id="inputName" placeholder="Full Name" value="<?php echo $d->user_fullname; ?>">
					</div>
					<div class="form-row">
						<!--
							<div class="form-group col-md-6">
								<label for="inputFirstName">First Name</label>
								<input type="text" class="form-control" id="inputFirstName" placeholder="Fisrt Name">
							</div>
							<div class="form-group col-md-6">
								<label for="inputLastName">Last Name</label>
								<input type="text" class="form-control" id="inputLastName" placeholder="Last Name">
							</div>
-->
						<div class="form-group col-md-6">
							<label for="inputFather">Father's Name</label>
							<input type="text" name="inputFather" class="form-control" id="inputFather" placeholder="Father's Name" value="<?php echo $d->user_fathername; ?>">
						</div>
						<div class="form-group col-md-6">
							<label for="inputMother">Mother's Name</label>
							<input type="text" name="inputMother" class="form-control" id="inputMother" placeholder="Mother's Name" value="<?php echo $d->user_mothername; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail">Email</label>
						<input type="email" name="inputEmail" class="form-control" id="inputEmail" placeholder="Email" value="<?php echo $d->user_email; ?>">
					</div>
					<div class="form-group">
						<label for="inputCollege">College</label>
						<input type="text" name="inputCollege" class="form-control" id="inputCollege" placeholder="College" value="<?php echo $d->user_college; ?>">
					</div>
					<div class="form-group">
						<label for="inputAddress">Address</label>
						<input type="text" name="inputAddress" class="form-control" id="inputAddress" placeholder="1234 Main St" value="<?php echo $d->user_address_lineone; ?>">
					</div>
					<div class="form-group">
						<label for="inputAddress2">Address 2</label>
						<input type="text" name="inputAddress2" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" value="<?php echo $d->user_address_linetwo; ?>">
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="inputCity">City</label>
							<input type="text" name="inputCity" class="form-control" id="inputCity" value="<?php echo $d->user_address_city; ?>">
						</div>
						<div class="form-group col-md-4">
							<label for="inputState">State</label>
							<select id="inputState" name="inputState" class="form-control">
								<option selected value="<?php echo $d->user_address_state; ?>"><?php echo $d->user_address_state; ?></option>
								<option>...</option>
								<option value="Andhra Pradesh">Andhra Pradesh</option>
								<option value="Arunachal Pradesh">Arunachal Pradesh</option>
								<option value="Assam">Assam</option>
								<option value="Bihar">Bihar</option>
								<option value="Chhattisgarh">Chhattisgarh</option>
								<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
								<option value="Daman and Diu">Daman and Diu</option>
								<option value="Delhi">Delhi</option>
								<option value="Goa">Goa</option>
								<option value="Gujarat">Gujarat</option>
								<option value="Haryana">Haryana</option>
								<option value="Himachal Pradesh">Himachal Pradesh</option>
								<option value="Jammu and Kashmir">Jammu and Kashmir</option>
								<option value="Jharkhand">Jharkhand</option>
								<option value="Karnataka">Karnataka</option>
								<option value="Kerala">Kerala</option>
								<option value="Madhya Pradesh">Madhya Pradesh</option>
								<option value="Maharashtra">Maharashtra</option>
								<option value="Manipur">Manipur</option>
								<option value="Meghalaya">Meghalaya</option>
								<option value="Mizoram">Mizoram</option>
								<option value="Nagaland">Nagaland</option>
								<option value="Orissa">Orissa</option>
								<option value="Puducherry">Puducherry</option>
								<option value="Punjab">Punjab</option>
								<option value="Rajasthan"> Rajasthan</option>
								<option value="xtsss">Sikkim</option>
								<option value="Tamil Nadu">Tamil Nadu</option>
								<option value="Telangana">Telangana</option>
								<option value="Tripura">Tripura</option>
								<option value="Uttar Pradesh">Uttar Pradesh</option>
								<option value="Uttarakhand">Uttarakhand</option>
								<option value="West Bengal">West Bengal</option>
							</select>
						</div>
						<div class="form-group col-md-2">
							<label for="inputZip">Zip</label>
							<input type="text" name="inputZip" class="form-control" id="inputZip" value="<?php echo $d->user_address_zipcode; ?>">
						</div>
					</div>
					<div class="form-group">
						<button type="submit" name="saveUsersDetails" class="btn btn-primary rbtn-primary float-right">Save</button>
					</div>
				</form>
			</div>
		</div>

		<!--			School & College History-->
		<div class="xx-detail-container"></div>
		<!--	Academic's Details -->
		
		
		
		<!--			Extra Curicullar-->

	</div>
</main>

<?php include("includes/actfooter.php"); ?>
