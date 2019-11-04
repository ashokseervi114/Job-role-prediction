<?php $title = "Job Recommendations | Create-Academics"; ?>
<?php include("includes/header.php"); ?>

<?php include("includes/nav.php"); ?>


<?php

$user = new User();
$userDetail = new UserDetail();
$acadDetail = new Acad();

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
	
	if(isset($_POST['saveAcadDetails'])) {
		
		$os = $_POST['opsys'];
		$linux = $_POST['linuxad'];
		$java = $_POST['java'];
		$cpp = $_POST['cpp'];
		$pinc = $_POST['pic'];
		$python = $_POST['python'];
		$webprog = $_POST['webprog'];
		$network = $_POST['network'];
		
		if(!$acad_detail_Id) {
			if($acadDetail) {
				$acadDetail->operating_system = $os;
				$acadDetail->linux_administration = $linux;
				$acadDetail->java = $java;
				$acadDetail->cpp = $cpp;
				$acadDetail->c = $pinc;
				$acadDetail->python = $python;
				$acadDetail->web_programming = $webprog;
				$acadDetail->network = $network;
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

	<div class="academic-detail-container" id="academic-detail-box">
		<div class="form-header">
			<div class="form-text">Academic's Detail :-</div>
			<div class="edit-update-btn">
<!--				<a class="btn btn-default">Edit <span></span></a>-->
			</div>
		</div>
		<div class="form-container">
			<form method="post">
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="operatingSystem">Academic Percentage in Operating System</label>
						<input type="number" class="form-control" name="opsys" id="operatingSystem" placeholder="">
					</div>
					<div class="form-group col-md-6">
						<label for="linuxAd">Academic Percentage in Linux Administration</label>
						<input type="number" class="form-control" name="linuxad" id="linuxAd" placeholder="">
					</div>
					<div class="form-group col-md-6">
						<label for="javaBeginner">Academic Percentage in Java Programming</label>
						<input type="number" class="form-control" name="java" id="linux-ad" placeholder="">
					</div>
					<div class="form-group col-md-6">
						<label for="cpp">Academic Percentage in C++</label>
						<input type="number" class="form-control" name="cpp" id="cpp" placeholder="">
					</div>
					<div class="form-group col-md-6">
						<label for="progInC">Academic Percentage in C</label>
						<input type="number" class="form-control" name="pic" id="progInC" placeholder="">
					</div>
					<div class="form-group col-md-6">
						<label for="python">Academic Percentage in Python</label>
						<input type="number" class="form-control" name="python" id="python" placeholder="">
					</div>
					<div class="form-group col-md-6">
						<label for="webprog">Academic Percentage in Web Programming</label>
						<input type="number" class="form-control" name="webprog" id="webprog" placeholder="">
					</div>
					<div class="form-group col-md-6">
						<label for="network">Academic Percentage in Network</label>
						<input type="number" class="form-control" name="network" id="network" placeholder="">
					</div>
					
				</div>
				<div class="form-group">
						<button type="submit" name="saveAcadDetails" class="btn btn-primary rbtn-primary float-right">Save</button>
					</div>
			</form>
		</div>
	</div>
	<div class="push" style="margin-bottom: 60px;"></div>
</main>
