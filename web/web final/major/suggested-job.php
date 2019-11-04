
<?php

$user = new User();
$userDetail = new UserDetail();
$jobDetail = new Job();

if(isset($_SESSION['username'])) {
	
$content = "username";
$username = $_SESSION['username'];
$dcont = "user_id";

$u = $user->find_by_content($content, $username);
$jobsd = $jobDetail->find_by_content($dcont, $u->user_id);
		
//To find job_role_id From jobs_profile
$job_role_id = $jobsd->job_role_id;
		
$jobRole = $jobDetail->findJobByJobRoleId($job_role_id);
} 
?>


<div class="suggested-job">
	<p class="text-bold font-italic text-underline">Suggested Job Role</p>
	<div class="jbrole-cont">
		<img src="" alt="" class="role-img">
		<div class="role-text text-500">
			<?php echo (isset($jobRole) ? $jobRole : "" ) ?>
		</div>
	</div>
</div>
