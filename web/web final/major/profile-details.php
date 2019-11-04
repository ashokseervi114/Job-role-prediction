<?php $title = "Job Recommendations | EDIT-PROFILE"; ?>
<?php include("includes/header.php"); ?>

<?php include("includes/nav.php"); ?>
	
<?php 

$user = new User();
$userDetail = new UserDetail();
$acadDetail = new AcadPer();
$commDetail = new CommSkills();
$probDetail = new ProblemSol();
$intDetail = new Interest();
$knowlDetail = new KnowSkills();
$selfDetail = new SelfManage();
$teamDetail = new Teamwork();



$username = $_GET['username'];
$username = trim($_GET['username']);


if($_SESSION['username'] != $username) {
	$rvar = 'profile-details.php?username=' . $_SESSION['username'];
	redirect($rvar);
}

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
	$ad = $acadDetail->find_by_content($dcont, $u->user_id);
	$cmmd = $commDetail->find_by_content($dcont, $u->user_id);
	$prbd = $probDetail->find_by_content($dcont, $u->user_id);
	$ind = $intDetail->find_by_content($dcont, $u->user_id);
	$knd = $knowlDetail->find_by_content($dcont, $u->user_id);
	$sld = $selfDetail->find_by_content($dcont, $u->user_id);
	$tmd = $teamDetail->find_by_content($dcont, $u->user_id);
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
						<a href="profile-edit.php?username=<?php echo $u->username; ?>#basic-detail-box" class="btn btn-default">Edit <span></span></a>
					</div>
				</div>
				<div class="form-container">
					<form>
						<div class="form-group">
							<label for="inputName">Full Name</label>
							<input type="text" readonly class="form-control" id="inputName" placeholder="Full Name" value="<?php echo $d->user_fullname; ?>">
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
								<input type="text" readonly class="form-control" id="inputFather" placeholder="Father's Name" value="<?php echo $d->user_fathername; ?>">
							</div>
							<div class="form-group col-md-6">
								<label for="inputMother">Mother's Name</label>
								<input type="text" readonly class="form-control" id="inputMother" placeholder="Mother's Name" value="<?php echo $d->user_mothername; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail">Email</label>
							<input type="email" readonly class="form-control" id="inputEmail" placeholder="Email"  value="<?php echo $d->user_email; ?>">
						</div>
						<div class="form-group">
							<label for="inputCollege">College</label>
							<input type="text" readonly class="form-control" id="inputCollege" placeholder="College" value="<?php echo $d->user_college; ?>">
						</div>
						<div class="form-group">
							<label for="inputAddress">Address</label>
							<input type="text" readonly class="form-control" id="inputAddress" placeholder="1234 Main St" value="<?php echo $d->user_address_lineone; ?>">
						</div>
						<div class="form-group">
							<label for="inputAddress2">Address 2</label>
							<input type="text" readonly class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" value="<?php echo $d->user_address_linetwo; ?>">
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="inputCity">City</label>
								<input type="text" readonly class="form-control" id="inputCity" value="<?php echo $d->user_address_city; ?>">
							</div>
							<div class="form-group col-md-4">
								<label for="inputState">State</label>
								<input type="text" readonly class="form-control" id="inputState" value="<?php echo $d->user_address_state; ?>">
							</div>
							<div class="form-group col-md-2">
								<label for="inputZip">Zip</label>
								<input type="text" readonly class="form-control" id="inputZip" value="<?php echo $d->user_address_zipcode; ?>">
							</div>
						</div>
					</form>
				</div>
			</div>

			<!--			School & College History-->
			<div class="xx-detail-container"></div>
			<!--	Academic's Details -->
			
			
			<?php include("academics.php"); ?>

			
<!--			Extra Curicullar-->

	
		</div>
	</main>
	
<?php include("includes/actfooter.php"); ?>
