	<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top no-box">
		<a class="navbar-brand" href="index.php">Job Recommendation</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
<!--
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>

			</ul>
-->
			<ul class="navbar-nav ml-auto mr-3">
				<?php
			if(!$session->is_signed_in()) { 
				echo "<li class='nav-item mr-2'>
					<a class='nav-link btn btn-outline-dark btn-sig' href='register.php'>Sign Up</a>
				</li>";
				echo "<li class='nav-item'>
					<a class='nav-link btn btn-outline-success btn-log' href='login.php'>Login</a>
				</li>";
			}
			else {
				if(isset($_SESSION['username'])) {
					echo "<li class='nav-item dropdown' style='margin-right: 60px;'>
        <a class='nav-link dropdown-toggle item-a border-box link-box-style af-logged' style='line-height:inherit!important;' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>". 
          $_SESSION['username'] .
        "</a>
        <div class='dropdown-menu' aria-labelledby='navbarDropdown' style='right:0!important; left:auto;'>
		  <a class='dropdown-item' href='index.php'>Home</a>
		  <div class='dropdown-divider'></div>
          <a class='dropdown-item' href='profile.php?username=" . $_SESSION['username'] . "'>Profile</a>
          <a class='dropdown-item' href='#'>Jobs</a>
          <div class='dropdown-divider'></div>
          <a class='dropdown-item' href='logout.php'>Log Out</a>
        </div>
		
      </li>";
				}
			}
			?>
			</ul>
		</div>
	</nav>
