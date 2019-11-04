<?php $title = "Job Recommendations | EDIT-PROFILE"; ?>
<?php include("includes/header.php"); ?>

<?php include("includes/nav.php"); ?>


<?php

$user = new User();
$userDetail = new UserDetail();
$acadDetail = new AcadPer();
$selfDetail = new SelfManage();


$username = $_GET['username'];
$username = trim($_GET['username']);


if($_SESSION['username'] != $username) {
	$rvar = 'profile-details.php?username=' . $_SESSION['username'];
	redirect($rvar);
}

$selfmng_detail_Id = "";

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
	$sld = $selfDetail->find_by_content($dcont, $u->user_id);



	
// Getting the users Table Primary Key which is foreign in academics Table. 
	$getUser_id = $u->user_id;
// Getting the usersdetail Table Primary Key which is also a foriegn in academics Table.
	$getUserdetails_id = $d->userdetail_id;
	
	$selfmng_detail_Id_content = "id";

	$selfmng_detail_Id = $selfDetail->findDetailIdById($getUser_id);
	
	if(isset($_POST['saveSlfDetails'])) {
		
		$sysWork = $_POST['sysWork'];
		$slfLearn = $_POST['slfLearn'];
		$bookInst = $_POST['bookInst'];
		$relStatus = $_POST['relStatus'];
		$jobStatus = $_POST['jobStatus'];
		$introvert = $_POST['introvert'];
		
		
		
		if(!$selfmng_detail_Id) {
			if($selfDetail) {
				$selfDetail->longer_work_OnSystem = $sysWork;
				$selfDetail->self_learning_capabilities = $slfLearn;
				$selfDetail->books_interest = $bookInst;
				$selfDetail->relationship_status = $relStatus;
				$selfDetail->salary_status = $jobStatus;
				$selfDetail->introvert_status = $introvert;
				$selfDetail->user_id = $getUser_id;
				
				$selfDetail->save();
				$session->message("The Academics details has been submitted");
				$redirectVar = "profile-details.php?username=" . $u->username;
				redirect($redirectVar);
			}
	} 
		else {
			$slmnaded = SelfManage::find_by_contents($selfmng_detail_Id_content, $selfmng_detail_Id);
			
			$slmnaded->longer_work_OnSystem = $sysWork;
			$slmnaded->self_learning_capabilities = $slfLearn;
			$slmnaded->books_interest = $bookInst;
			$slmnaded->relationship_status = $relStatus;
			$slmnaded->salary_status = $jobStatus;
			$slmnaded->introvert_status = $introvert;
			
			$slmnaded->save();
			
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
								<label for="sysWork">Worked on system, How much longer</label>
								<input type="number" name="sysWork" class="form-control" id="sysWork" placeholder="" value="<?php echo (isset($sld->longer_work_OnSystem) ? $sld->longer_work_OnSystem : "" ) ?>">
							</div>
							<div class="form-group col-md-6">
								<label for="slfLearn">Self learning or self taught capabilities</label>
								<input type="text" name="slfLearn" class="form-control" value="<?php echo (isset($sld->self_learning_capabilities) ? $sld->self_learning_capabilities : "" ) ?>">
							</div>
							<div class="form-group col-md-6">
								<label for="bookInst">Books Interest, If yes What type</label>
								<input type="text" name="bookInst" class="form-control" value="<?php echo (isset($sld->books_interest) ? $sld->books_interest : "" ) ?>">
							</div>
							<div class="form-group col-md-6">
								<label for="relStatus">Relationship Status</label>
								<input type="text" name="relStatus" class="form-control" value="<?php echo (isset($sld->relationship_status) ? $sld->relationship_status : "" ) ?>">
							</div>
							<div class="form-group col-md-6">
								<label for="jobStatus">Job Status</label>
								<input type="text" name="jobStatus" class="form-control" value="<?php echo (isset($sld->salary_status) ? $sld->salary_status : "" ) ?>">
							</div>
							<div class="form-group col-md-6">
								<label for="introvert">Are you an introvert?</label>
								<input type="text" name="introvert" class="form-control" value="<?php echo (isset($sld->introvert_status) ? $sld->introvert_status : "" ) ?>">
							</div>
						</div>
				<div class="form-group">
					<button type="submit" name="saveSlfDetails" class="btn btn-primary rbtn-primary float-right">Save</button>
				</div>
			</form>
		</div>
	</div>
	<div class="push" style="margin-bottom: 60px;"></div>
</main>
