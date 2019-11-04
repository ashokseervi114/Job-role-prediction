 <?php $title = "Job Recommendations | REGISTER"; ?>
 <?php include("includes/actheader.php"); ?>


 <?php



$user = new User();


if(isset($_POST['create'])) {

	$email = $_POST['email'];
	$password = trim($_POST['password']);
	$confirmPassword = trim($_POST['confirm_password']);
	$username = $_POST['username'];
	$number = $_POST['mobile'];
	$mobile = (string)$number;
    
    
if($password != $confirmPassword){
    redirect('register.php');
}

$findEmail = $user->findUserByEmail($email);

$findUser = $user->findUserByUsername($username);

if($findUser || $findEmail){
     redirect('register.php');
    exit();
}
      
if($user) {
    
$user->username = $username;
    
$hashed = password_hash($password, PASSWORD_DEFAULT);
    
$user->password = $hashed;
$user->email = $email;
$user->mobile = $mobile;

$user->save();
redirect("login.php");

}
}


?>


<?php include("includes/nav.php"); ?>

 <main>
 	<div class="container mt-5">
 		<div class="row ml-30 mr-30">
 			<div class="col-md-7">
 				<div class="container">
 					<img src="img/undraw_Login_v483.svg" alt="" class="reg-img">
 				</div>
 			</div>
 			<div class="col-md-5">
 				<div class="context"></div>
 				<div class="container form-cont">
 					<h2 class="form-head">Register</h2>
 					<form enctype="" method="post">
 						<div class="form-group row">
 							<label for="email" class="col-sm-4 col-form-label">Email</label>
 							<div class="col-sm-8">
 								<input type="email" class="form-control" placeholder="Email" id="email" name="email">
 							</div>
 						</div>
 						<div class="form-group row">
 							<label for="password" class="col-sm-4 col-form-label">Password</label>
 							<div class="col-sm-8">
 								<input type="password" class="form-control" placeholder="Password" id="password" name="password">
 							</div>
 						</div>
 						<div class="form-group row">
 							<label for="password" class="col-sm-4 col-form-label">Confirm Password</label>
 							<div class="col-sm-8">
 								<input type="password" class="form-control" placeholder="Password" id="password" name="confirm_password">
 							</div>
 						</div>
 						<div class="form-group row">
 							<label for="username" class="col-sm-4 col-form-label">Username</label>
 							<div class="col-sm-8">
 								<input type="text" class="form-control" placeholder="Username" id="username" name="username">
 							</div>
 						</div>
 						<div class="form-group row">
 							<label for="mobile" class="col-sm-4 col-form-label">Mobile</label>
 							<div class="col-sm-8">
 								<input type="number" class="form-control" placeholder="Mobile" id="mobile" name="mobile">
 							</div>
 						</div>
 						<div class="form-group row">
 							<div class="col-sm-12">
 								<button type="submit" name="create" class="btn btn-primary rbtn-primary float-right">Register</button>
 							</div>
 						</div>
 					</form>
 					<div class="context"></div>
 				</div>
 			</div>
 		</div>
 	</div>
 </main>

 <?php include("includes/actfooter.php"); ?>
