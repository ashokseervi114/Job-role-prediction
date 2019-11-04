<?php $title = "Job Recommendations | Create-Academics"; ?>
<?php include("includes/header.php"); ?>

<?php include("includes/nav.php"); ?>


<?php

$user = new User();
$userDetail = new UserDetail();
$acadDetail = new AcadPer();

$username = $_GET['username'];
$username = trim($_GET['username']);


if($_SESSION['username'] != $username) {
	$rvar = 'profile-details.php?username=' . $_SESSION['username'];
	redirect($rvar);
}

$acad_detail_Id = "";

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

	
// Getting the users Table Primary Key which is foreign in academics Table. 
	$getUser_id = $u->user_id;
// Getting the usersdetail Table Primary Key which is also a foriegn in academics Table.
	$getUserdetails_id = $d->userdetail_id;

	$acad_detail_Id = $acadDetail->findDetailIdById($getUser_id);
	
	if(isset($_POST['saveAcadPerDetails'])) {
		
		$os = $_POST['operatingSystem'];
		$algorithm = $_POST['algorithm'];
		$progConcept = $_POST['progConcept'];
		$softEngineering = $_POST['softEngineering'];
		$comNetwork = $_POST['comNetwork'];
		$electSub = $_POST['electSub'];
		$compArch = $_POST['compArch'];
		$maths = $_POST['maths'];
		$commSkill = $_POST['commSkill'];
		
		if(!$acad_detail_Id) {
			if($acadDetail) {
				$acadDetail->operating_system_per = $os;
				$acadDetail->algorithm_per = $algorithm;
				$acadDetail->programming_concept_per = $progConcept;
				$acadDetail->software_eng_per = $softEngineering;
				$acadDetail->computer_net_per = $comNetwork;
				$acadDetail->electronics_per = $electSub;
				$acadDetail->computer_arch_per = $compArch;
				$acadDetail->mathematics_per = $maths;
				$acadDetail->communication_per = $commSkill;
				$acadDetail->user_id = $getUser_id;
				
				$acadDetail->save();
				$session->message("The Academics details has been submitted");
				$redirectVar = "profile-details.php?username=" . $u->username;
				redirect($redirectVar);
			}
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
						<label for="operatingSystem">Academic Percentage in Operating System</label>
						<input type="number" class="form-control" id="operatingSystem" placeholder="" name="operatingSystem" value="">
					</div>
					<div class="form-group col-md-6">
						<label for="algorithm">Academic Percentage in Algorithm</label>
						<input type="number" class="form-control" id="algorithm" placeholder="" value="" name="algorithm">
					</div>
					<div class="form-group col-md-6">
						<label for="progConcept">Academic Percentage in Programming Concept</label>
						<input type="number" class="form-control" id="progConcept" placeholder="" value="" name="progConcept">
					</div>
					<div class="form-group col-md-6">
						<label for="softEngineering">Academic Percentage Software Engineering</label>
						<input type="number" name="softEngineering" class="form-control" id="softEngineering" placeholder="" value="">
					</div>
					<div class="form-group col-md-6">
						<label for="comNetwork">Academic Percentage in Computer Network</label>
						<input type="number" name="comNetwork" class="form-control" id="comNetwork" placeholder="" value="">
					</div>
					<div class="form-group col-md-6">
						<label for="electSub">Academic Percentage in Electronics Subject</label>
						<input type="number" name="electSub" class="form-control" id="electSub" placeholder="" value="">
					</div>
					<div class="form-group col-md-6">
						<label for="compArch">Academic Percentage in Computer Architecture</label>
						<input type="number" name="compArch" class="form-control" id="compArch" placeholder="" value="">
					</div>
					<div class="form-group col-md-6">
						<label for="maths">Academic Percentage in Mathematics</label>
						<input type="number" name="maths" class="form-control" id="maths" placeholder="" value="">
					</div>
					<div class="form-group col-md-6">
						<label for="commSkill">Academic Percentage in Communication Skills</label>
						<input type="number" name="commSkill" class="form-control" id="commSkill" placeholder="" value="">
					</div>
				</div>
				<div class="form-group">
					<button type="submit" name="saveAcadPerDetails" class="btn btn-primary rbtn-primary float-right">Save</button>
				</div>
			</form>
		</div>
	</div>
	<div class="push" style="margin-bottom: 60px;"></div>
</main>
