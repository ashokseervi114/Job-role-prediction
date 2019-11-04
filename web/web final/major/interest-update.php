<?php $title = "Job Recommendations | EDIT-PROFILE"; ?>
<?php include("includes/header.php"); ?>

<?php include("includes/nav.php"); ?>


<?php

$user = new User();
$userDetail = new UserDetail();
$acadDetail = new AcadPer();
$intDetail = new Interest();


$username = $_GET['username'];
$username = trim($_GET['username']);


if($_SESSION['username'] != $username) {
	$rvar = 'profile-details.php?username=' . $_SESSION['username'];
	redirect($rvar);
}

$intrst_detail_Id = "";

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
	$ind = $intDetail->find_by_content($dcont, $u->user_id);


	
// Getting the users Table Primary Key which is foreign in academics Table. 
	$getUser_id = $u->user_id;
// Getting the usersdetail Table Primary Key which is also a foriegn in academics Table.
	$getUserdetails_id = $d->userdetail_id;
	
	$intrst_detail_Id_content = "id";

	$intrst_detail_Id = $intDetail->findDetailIdById($getUser_id);
	
	if(isset($_POST['saveIntrstDetails'])) {
		
		$careerPref = $_POST['careerPref'];
		$nextStep = $_POST['nextStep'];
		$typeComp = $_POST['typeComp'];
		
		
		
		if(!$intrst_detail_Id) {
			if($intDetail) {
				$intDetail->interest_career_area = $careerPref;
				$intDetail->job_higherStudies = $nextStep;
				$intDetail->company_interest = $typeComp;
				$intDetail->user_id = $getUser_id;
				
				$intDetail->save();
				$session->message("The Academics details has been submitted");
				$redirectVar = "profile-details.php?username=" . $u->username;
				redirect($redirectVar);
			}
	} 
		else {
			$intrstaded = Interest::find_by_contents($intrst_detail_Id_content, $intrst_detail_Id);
			
			$intrstaded->interest_career_area = $careerPref;
			$intrstaded->job_higherStudies = $nextStep;
			$intrstaded->company_interest = $typeComp;
			
			$intrstaded->save();
			
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

	<div class="commskilldetails" id="comm-details-box">
		<div class="form-header">
			<div class="form-text">Self Managemnet :- </div>
			<div class="edit-update-btn">
				<!--				<a class="btn btn-default">Edit <span></span></a>-->
			</div>
		</div>
		<div class="form-container">
			<form method="post">
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="careerPref">What type of career area you prefer</label>
						<input type="text" name="careerPref" class="form-control" id="operatingSystem" placeholder="" value="<?php echo (isset($ind->interest_career_area) ? $ind->interest_career_area : "" ) ?>">
					</div>
					<div class="form-group col-md-6">
						<label for="nextStep">Job or Higher Studies</label>
						<input type="text" name="nextStep" class="form-control" value="<?php echo (isset($ind->job_higherStudies) ? $ind->job_higherStudies : "" ) ?>">
					</div>
					<div class="form-group col-md-6">
						<label for="typeComp">What type of industry or company you prefer</label>
						<input type="text" name="typeComp" class="form-control" value="<?php echo (isset($ind->company_interest) ? $ind->company_interest : "" ) ?>">
					</div>
				</div>
				<div class="form-group">
					<button type="submit" name="saveIntrstDetails" class="btn btn-primary rbtn-primary float-right">Save</button>
				</div>
			</form>
		</div>
	</div>
	<div class="push" style="margin-bottom: 60px;"></div>
</main>
