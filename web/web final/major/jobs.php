<?php include("includes/header.php"); ?>

<?php include("includes/nav.php"); ?>

<?php

$user = new User();
$userDetail = new UserDetail();
$job = new Job();

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

$all_jobs = $job->findAllJobs();
	
$user_detail_id = "";
	
	
}