<?php $title = "Job Recommendations | EDIT-PROFILE"; ?>
<?php include("includes/header.php"); ?>

<?php include("includes/nav.php"); ?>


<?php

$user = new User();
$userDetail = new UserDetail();
$acadDetail = new AcadPer();
$commDetail = new CommSkills();


$username = $_GET['username'];
$username = trim($_GET['username']);


if($_SESSION['username'] != $username) {
	$rvar = 'profile-details.php?username=' . $_SESSION['username'];
	redirect($rvar);
}

$comm_detail_Id = "";

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
	$cmmd = $commDetail->find_by_content($dcont, $u->user_id);

	
// Getting the users Table Primary Key which is foreign in academics Table. 
	$getUser_id = $u->user_id;
// Getting the usersdetail Table Primary Key which is also a foriegn in academics Table.
	$getUserdetails_id = $d->userdetail_id;
	
	$comm_detail_Id_content = "id";

	$comm_detail_Id = $commDetail->findDetailIdById($getUser_id);
	
	if(isset($_POST['saveCommDetails'])) {
		
		$publicSpeaking = $_POST['publicSpeaking'];
		$readWrite = $_POST['readWrite'];
		
		
		if(!$comm_detail_Id) {
			if($commDetail) {
				$commDetail->public_speaking = $publicSpeaking;
				$commDetail->reading_and_writing_skill = $readWrite;
				$commDetail->user_id = $getUser_id;
				
				$commDetail->save();
				$session->message("The Academics details has been submitted");
				$redirectVar = "profile-details.php?username=" . $u->username;
				redirect($redirectVar);
			}
	} 
		else {
			$commaded = CommSkills::find_by_contents($comm_detail_Id_content, $comm_detail_Id);
			
			$commaded->public_speaking = $publicSpeaking;
			$commaded->reading_and_writing_skill = $readWrite;
			
			$commaded->save();
			
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
			<div class="form-text">Communication Skills :- </div>
			<div class="edit-update-btn">
				<!--				<a class="btn btn-default">Edit <span></span></a>-->
			</div>
		</div>
		<div class="form-container">
			<form method="post">
				<div class="form-row">
							<div class="form-group col-md-6">
								<label for="publicSpeaking">Public Speaking Skills</label>
								<input type="text" name="publicSpeaking" class="form-control" id="operatingSystem" placeholder="" value="<?php echo (isset($cmmd->public_speaking) ? $cmmd->public_speaking : "" ) ?>">
							</div>
							<div class="form-group col-md-6">
								<label for="readWrite">Read and Writing Skills</label>
								<input type="text" name="readWrite" class="form-control" value="<?php echo (isset($cmmd->reading_and_writing_skill) ? $cmmd->reading_and_writing_skill : "" ) ?>">
							</div>
						</div>
				<div class="form-group">
					<button type="submit" name="saveCommDetails" class="btn btn-primary rbtn-primary float-right">Save</button>
				</div>
			</form>
		</div>
	</div>
	<div class="push" style="margin-bottom: 60px;"></div>
</main>
