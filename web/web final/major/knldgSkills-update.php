<?php $title = "Job Recommendations | EDIT-PROFILE"; ?>
<?php include("includes/header.php"); ?>

<?php include("includes/nav.php"); ?>


<?php

$user = new User();
$userDetail = new UserDetail();
$acadDetail = new AcadPer();
$knowlDetail = new KnowSkills();

$username = $_GET['username'];
$username = trim($_GET['username']);


if($_SESSION['username'] != $username) {
	$rvar = 'profile-details.php?username=' . $_SESSION['username'];
	redirect($rvar);
}

$knowl_detail_Id = "";

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
	$knd = $knowlDetail->find_by_content($dcont, $u->user_id);

	
// Getting the users Table Primary Key which is foreign in academics Table. 
	$getUser_id = $u->user_id;
// Getting the usersdetail Table Primary Key which is also a foriegn in academics Table.
	$getUserdetails_id = $d->userdetail_id;
	
	$knowl_detail_Id_content = "id";

	$knowl_detail_Id = $knowlDetail->findDetailIdById($getUser_id);
	
	if(isset($_POST['saveKnowlDetails'])) {
		
		$courseTaken = $_POST['courseTaken'];
		$certification = $_POST['certification'];
		$workshop = $_POST['workshop'];
		$interestedSub = $_POST['interestedSub'];
		
		if(!$knowl_detail_Id) {
			if($knowlDetail) {
				$knowlDetail->extra_course = $courseTaken;
				$knowlDetail->certifications = $certification;
				$knowlDetail->workshops = $workshop;
				$knowlDetail->intersted_subject = $interestedSub;
				$knowlDetail->user_id = $getUser_id;
				
				$knowlDetail->save();
				$session->message("The Academics details has been submitted");
				$redirectVar = "profile-details.php?username=" . $u->username;
				redirect($redirectVar);
			}
	} 
		else {
			$knoaded = KnowSkills::find_by_contents($knowl_detail_Id_content, $knowl_detail_Id);
			
			$knoaded->extra_course = $courseTaken;
			$knoaded->certifications = $certification;
			$knoaded->workshops = $workshop;
			$knoaded->intersted_subject = $interestedSub;
			
			$knoaded->save();
			
			$session->message("The Academics details has been updated");
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

	<div class="knowSkilldetails" id="know-details-box">
		<div class="form-header">
			<div class="form-text">Knowledge Skills :-</div>
			<div class="edit-update-btn">
				<!--				<a class="btn btn-default">Edit <span></span></a>-->
			</div>
		</div>
		<div class="form-container">
			<form method="post">
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="courseTaken">Online(Extra) Courses Taken</label>
						<input type="number" name="courseTaken" class="form-control" id="operatingSystem" placeholder="" value="<?php echo (isset($knd->extra_course) ? $knd->extra_course : "" ) ?>">
					</div>
					<div class="form-group col-md-6">
						<label for="certification">Certifications</label>
						<input type="number" name="certification" class="form-control" value="<?php echo (isset($knd->certifications) ? $knd->certifications : "" ) ?>">
					</div>
					<div class="form-group col-md-6">
						<label for="workshop">Workshop's Attended</label>
						<input type="number" name="workshop" class="form-control" value="<?php echo (isset($knd->workshops) ? $knd->workshops : "" ) ?>">
					</div>
					<div class="form-group col-md-6">
						<label for="interestedSub">Interested Subject's</label>
						<input type="number" name="interestedSub" class="form-control" value="<?php echo (isset($knd->intersted_subject) ? $knd->intersted_subject : "" ) ?>">
					</div>
				</div>
				<div class="form-group">
					<button type="submit" name="saveKnowlDetails" class="btn btn-primary rbtn-primary float-right">Save</button>
				</div>
			</form>
		</div>
	</div>
	<div class="push" style="margin-bottom: 60px;"></div>
</main>
