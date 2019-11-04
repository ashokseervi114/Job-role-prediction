<?php $title = "Job Recommendations | LOGIN"; ?>
    <?php include("includes/actheader.php"); ?>
 
 
<?php

$user = new User();


if(isset($_POST['submit'])) {
    
$email = trim($_POST['email']);
//$username = trim($_POST['username']);

$password = trim($_POST['password']);
    
$findByEmail = $user->findUserByEmail($email); // Checking for User email.
//$finByUser = $user->findUserByUsername($username); // Checking for Username.

    if($findByEmail != null && $findByEmail == $email) {
        
		$user_found = $user->attest_user($findByEmail, $password);
        
		if($user_found) {
			$session->login($user_found);
			if(isset($_SESSION['url'])) {
				$url = $_SESSION['url']; // holds url for last page visited.
			}
				else {
					$url = "index.php"; // default page for 
				}
			redirect($url);
        }
        else {
			$the_message = "Your Email or Password are incorrect";
        }
    }
 
} else {
	$the_message = "";
	$email = "";
	$password = "";
}
    
	

?>
<?php include("includes/nav.php"); ?>

	<main>
		<div class="container mt-5">
			<div class="row ml-30 mr-30">
				<div class="col-md-7">
					<div class="container">
						<img src="img/undraw_authentication_fsn5.svg" alt="" class="reg-img">
					</div>
				</div>
				<div class="col-md-5">
				<div class="context"></div>
					<div class="container form-cont-login">
						<h2 class="form-head">Login</h2>
						<form enctype="" method="post">
							<div class="form-group row">
								<label for="email" class="col-sm-4 col-form-label">Email</label>
								<div class="col-sm-8">
									<input type="email" class="form-control" placeholder="Email" id="email" name="email" value="<?php echo htmlentities($email); ?>">
								</div>
							</div>
							<div class="form-group row">
								<label for="password" class="col-sm-4 col-form-label">Password</label>
								<div class="col-sm-8">
									<input type="password" class="form-control" placeholder="Password" id="password" name="password">
								</div>
							</div>
							<div class="form-group row">
								<div class="col-sm-12">
									<button type="submit" name="submit" class="btn btn-primary rbtn-primary float-right">Login</button>
								</div>
							</div>
						</form>
						<div class="context"></div>
					</div>
				</div>
			</div>
		</div>
	</main>

<!--<h4 class="bg-danger"><?php //echo $the_message; ?></h4>-->
<?php include("includes/actfooter.php"); ?>
