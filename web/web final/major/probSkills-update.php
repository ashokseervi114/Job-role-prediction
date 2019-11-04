<?php $title = "Job Recommendations | EDIT-PROFILE"; ?>
<?php include("includes/header.php"); ?>

<?php include("includes/nav.php"); ?>


<?php

$user = new User();
$userDetail = new UserDetail();
$acadDetail = new AcadPer();
$probDetail = new ProblemSol();

$username = $_GET['username'];
$username = trim($_GET['username']);


if($_SESSION['username'] != $username) {
	$rvar = 'profile-details.php?username=' . $_SESSION['username'];
	redirect($rvar);
}

$prob_detail_Id = "";

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
	$prbd = $probDetail->find_by_content($dcont, $u->user_id);

	
// Getting the users Table Primary Key which is foreign in academics Table. 
	$getUser_id = $u->user_id;
// Getting the usersdetail Table Primary Key which is also a foriegn in academics Table.
	$getUserdetails_id = $d->userdetail_id;
	
	$prob_detail_Id_content = "id";

	$prob_detail_Id = $probDetail->findDetailIdById($getUser_id);
	
	if(isset($_POST['saveProbDetails'])) {
		
		$logicalQuo = $_POST['logicalQuo'];
		$hackathon = $_POST['hackathon'];
		$codeSkill = $_POST['codeSkill'];
		$talentTest = $_POST['talentTest'];
		$memoryCap = $_POST['memoryCap'];
		$olympd = $_POST['olympd'];
		
		if(!$prob_detail_Id) {
			if($probDetail) {
				$probDetail->logical_quo_rates = $logicalQuo;
				$probDetail->hackathons_rates = $hackathon;
				$probDetail->code_skill_rates = $codeSkill;
				$probDetail->talent_test_rates = $talentTest;
				$probDetail->memory_capability_rates = $memoryCap;
				$probDetail->olympiads_rates = $olympd;
				$probDetail->user_id = $getUser_id;
				
				$probDetail->save();
				$session->message("The Academics details has been submitted");
				$redirectVar = "profile-details.php?username=" . $u->username;
				redirect($redirectVar);
			}
	} 
		else {
			$proaded = ProblemSol::find_by_contents($prob_detail_Id_content, $prob_detail_Id);
			
			$proaded->logical_quo_rates = $logicalQuo;
			$proaded->hackathons_rates = $hackathon;
			$proaded->code_skill_rates = $codeSkill;
			$proaded->talent_test_rates = $talentTest;
			$proaded->memory_capability_rates = $memoryCap;
			$proaded->olympiads_rates = $olympd;
			
			$proaded->save();
			
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

	<div class="acadPer-detail-container" id="acadPer-details-box">
		<div class="form-header">
			<div class="form-text">Academic's Percentage :-</div>
			<div class="edit-update-btn">
				<!--				<a class="btn btn-default">Edit <span></span></a>-->
			</div>
		</div>
		<div class="form-container">
			<form method="post">
				<div class="form-row">
							<div class="form-group col-md-6">
								<label for="logicalQuo">Logical quotient rating</label>
								<input type="number" name="logicalQuo" class="form-control" id="logicalQuo" placeholder="" value="<?php echo (isset($prbd->logical_quo_rates) ? $prbd->logical_quo_rates : "" ) ?>">
							</div>
							<div class="form-group col-md-6">
								<label for="hackathon">Hackathon's rating</label>
								<input type="number" name="hackathon" class="form-control" value="<?php echo (isset($prbd->hackathons_rates) ? $prbd->hackathons_rates : "" ) ?>">
							</div>
							<div class="form-group col-md-6">
								<label for="codeSkill">Coding skills rating</label>
								<input type="number" name="codeSkill" class="form-control" value="<?php echo (isset($prbd->code_skill_rates) ? $prbd->code_skill_rates : "" ) ?>">
							</div>
							<div class="form-group col-md-6">
								<label for="talentTest">Talent test ratings</label>
								<input type="number" name="talentTest" class="form-control" value="<?php echo (isset($prbd->talent_test_rates) ? $prbd->talent_test_rates : "" ) ?>">
							</div>
							<div class="form-group col-md-6">
								<label for="memoryCap">Memory capabilties rating</label>
								<input type="text"  name="memoryCap" class="form-control" value="<?php echo (isset($prbd->memory_capability_rates) ? $prbd->memory_capability_rates : "" ) ?>">
							</div>
							<div class="form-group col-md-6">
								<label for="olympd">Olympiads rating</label>
								<input type="text" name="olympd" class="form-control" value="<?php echo (isset($prbd->olympiads_rates) ? $prbd->olympiads_rates : "" ) ?>">
							</div>
						</div>
				<div class="form-group">
					<button type="submit" name="saveProbDetails" class="btn btn-primary rbtn-primary float-right">Save</button>
				</div>
			</form>
		</div>
	</div>
	<div class="push" style="margin-bottom: 60px;"></div>
</main>
