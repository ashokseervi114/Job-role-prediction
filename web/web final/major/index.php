<?php $title = "Job Recommendations | HOME"; ?>
<?php include("includes/header.php"); ?>

<?php include("includes/main_nav.php"); ?>
<div class="section ">
	<div class="pg-header">
	</div>
	<div class="container text-center bg-text">
		<h2>Job Recommend</h2>
		<p>Lorem ipsum dolor sit amet, consectetur <br>adipisicing elit. Doloremque, eveniet, sequi.</p>
		<a href="#pablo" class="btn btn-info btn-lg mr-3">
			Read More
		</a>
	</div>

	<div class="container mt-30">
		<div class="row justify-content-center">
			<div class="col-lg-6 mb-7 text-center">
				<h2 class="fs-3 fs-sm-4 text-underline mb-3 text-bold">find the right path</h2>
				<p class="text-500 font-italic">Update your skills, get the best suitable jobs that you suits you, apply and start working.</p>
			</div>
		</div>
	</div>

	<div class="bg-ee pt-15 pb-15 mt-30">
		<div class="container subs">
			<div class="subscribe-line">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<h4 class="title mt-0">Get new recommendation every Week!</h4>
							<p class="description">
								Join our newsletter and get news in your inbox every week! We hate spam too, so no worries about this.
							</p>
						</div>
						<div class="col-md-6">
							<div class="card card-plain card-form-horizontal">
								<div class="card-body">
									<form method="" action="">
										<div class="row">
											<div class="col-sm-8">
												<div class="input-group">
													<input type="text" class="form-control" placeholder="Your Email...">
												</div>
											</div>
											<div class="col-sm-4">
												<button type="button" class="btn btn-primary btn-round btn-block">Subscribe</button>
											</div>
										</div>
									</form>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<?php include("suggested-job.php"); ?>
	</div>

</div>


<footer class="footer footer-white">
	<div class="container">
		<a class="footer-brand" href="#">Job Recomendation</a>
		<ul class="pull-center">
			<li>
				2019 &copy; Major Project
			</li>
		</ul>
		<ul class="pull-right">
			<li>
				<a href="#" class="nav-link">
					About
				</a>
			</li>
			<li>
				<a href="#" class="nav-link">
					Blog
				</a>
			</li>

		</ul>


	</div>
</footer>
</body>

</html>
