<?php $title = "Job Recommendations | EDIT-PROFILE"; ?>
<?php include("includes/header.php"); ?>

<?php include("includes/nav.php"); ?>


<?php

$user = new User();
$userDetail = new UserDetail();
$acadDetail = new AcadPer();
$teamDetail = new Teamwork();



$username = $_GET['username'];
$username = trim($_GET['username']);


if($_SESSION['username'] != $username) {
	$rvar = 'profile-details.php?username=' . $_SESSION['username'];
	redirect($rvar);
}

$tmwork_detail_Id = "";

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
	$tmd = $teamDetail->find_by_content($dcont, $u->user_id);


	
// Getting the users Table Primary Key which is foreign in academics Table. 
	$getUser_id = $u->user_id;
// Getting the usersdetail Table Primary Key which is also a foriegn in academics Table.
	$getUserdetails_id = $d->userdetail_id;
	
	$tmwork_detail_Id_content = "id";

	$tmwork_detail_Id = $teamDetail->findDetailIdById($getUser_id);
	
	if(isset($_POST['savetmworkDetails'])) {
		
		$elderInput = $_POST['elderInput'];
		$gamesInput = $_POST['gamesInput'];
		$behaviourIn = $_POST['behaviourIn'];
		$skillIn = $_POST['skillIn'];
		$hardworkIn = $_POST['hardworkIn'];
		$teamworkIn = $_POST['teamworkIn'];
		
		
		
		if(!$tmwork_detail_Id) {
			if($teamDetail) {
				$teamDetail->senior_older_input = $elderInput;
				$teamDetail->interested_in_games = $gamesInput;
				$teamDetail->behaviour_input = $behaviourIn;
				$teamDetail->management_tech_input = $skillIn;
				$teamDetail->hard_smart_worker = $hardworkIn;
				$teamDetail->worked_as_team = $teamworkIn;
				$teamDetail->user_id = $getUser_id;
				
				$teamDetail->save();
				$session->message("The Academics details has been submitted");
				$redirectVar = "profile-details.php?username=" . $u->username;
				redirect($redirectVar);
			}
	} 
		else {
			$tmwaded = Teamwork::find_by_contents($tmwork_detail_Id_content, $tmwork_detail_Id);
			
			$tmwaded->senior_older_input = $elderInput;
			$tmwaded->interested_in_games = $gamesInput;
			$tmwaded->behaviour_input = $behaviourIn;
			$tmwaded->management_tech_input = $skillIn;
			$tmwaded->hard_smart_worker = $hardworkIn;
			$tmwaded->worked_as_team = $teamworkIn;
			
			$tmwaded->save();
			
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
			<div class="form-text">Teamwork Skills :-</div>
			<div class="edit-update-btn">
				<!--				<a class="btn btn-default">Edit <span></span></a>-->
			</div>
		</div>
		<div class="form-container">
			<form method="post">
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="elderInput">What seniors or elders says</label>
						<input type="text" name="elderInput" class="form-control" id="operatingSystem" placeholder="" value="<?php echo (isset($tmd->senior_older_input) ? $tmd->senior_older_input : "" ) ?>">
					</div>
					<div class="form-group col-md-6">
						<label for="gamesInput">Interest in games</label>
						<input type="text" name="gamesInput" class="form-control" value="<?php echo (isset($tmd->interested_in_games) ? $tmd->interested_in_games : "" ) ?>">
					</div>
					<div class="form-group col-md-6">
						<label for="behaviourIn">Type of behaviour</label>
						<input type="text" name="behaviourIn" class="form-control" value="<?php echo (isset($tmd->behaviour_input) ? $tmd->behaviour_input : "" ) ?>">
					</div>
					<div class="form-group col-md-6">
						<label for="skillIn">Skill Type </label>
						<input type="text" name="skillIn" class="form-control" value="<?php echo (isset($tmd->management_tech_input) ? $tmd->management_tech_input : "" ) ?>">
					</div>
					<div class="form-group col-md-6">
						<label for="hardworkIn">Harworking capabilities</label>
						<input type="text" name="hardworkIn" class="form-control" value="<?php echo (isset($tmd->hard_smart_worker) ? $tmd->hard_smart_worker : "" ) ?>">
					</div>
					<div class="form-group col-md-6">
						<label for="teamworkIn">Teamwork Project, If any</label>
						<input type="text" name="teamworkIn" class="form-control" value="<?php echo (isset($tmd->worked_as_team) ? $tmd->worked_as_team : "" ) ?>">
					</div>
				</div>
				<div class="form-group">
					<button type="submit" name="savetmworkDetails" class="btn btn-primary rbtn-primary float-right">Save</button>
				</div>
			</form>
		</div>
	</div>
	<div class="push" style="margin-bottom: 60px;"></div>
</main>
