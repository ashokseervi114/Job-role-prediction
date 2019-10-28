@extends('layouts.app')

@section('content')

	<div class="container hero-el">

		</div>
		<div class="container">
			<div class="basic-detail-container" id="basic-detail-box">
				<div class="form-header">
					<div class="form-text">Basic Details:-</div>
					<div class="edit-update-btn">
						<a href="#basic-detail-box" class="btn btn-default">Edit <span></span></a>
					</div>
				</div>
				<div class="form-container">
					<form>
						<div class="form-group">
							<label for="inputName">Full Name</label>
							<input type="text" readonly class="form-control" id="inputName" placeholder="Full Name" value="">
						</div>
						<div class="form-row">
							<!--
							<div class="form-group col-md-6">
								<label for="inputFirstName">First Name</label>
								<input type="text" class="form-control" id="inputFirstName" placeholder="Fisrt Name">
							</div>
							<div class="form-group col-md-6">
								<label for="inputLastName">Last Name</label>
								<input type="text" class="form-control" id="inputLastName" placeholder="Last Name">
							</div>
-->
							<div class="form-group col-md-6">
								<label for="inputFather">Father's Name</label>
								<input type="text" readonly class="form-control" id="inputFather" placeholder="Father's Name" value="">
							</div>
							<div class="form-group col-md-6">
								<label for="inputMother">Mother's Name</label>
								<input type="text" readonly class="form-control" id="inputMother" placeholder="Mother's Name" value="">
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail">Email</label>
							<input type="email" readonly class="form-control" id="inputEmail" placeholder="Email"  value="">
						</div>
						<div class="form-group">
							<label for="inputCollege">College</label>
							<input type="text" readonly class="form-control" id="inputCollege" placeholder="College" value="">
						</div>
						<div class="form-group">
							<label for="inputAddress">Address</label>
							<input type="text" readonly class="form-control" id="inputAddress" placeholder="1234 Main St" value="">
						</div>
						<div class="form-group">
							<label for="inputAddress2">Address 2</label>
							<input type="text" readonly class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" value="">
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="inputCity">City</label>
								<input type="text" readonly class="form-control" id="inputCity" value="">
							</div>
							<div class="form-group col-md-4">
								<label for="inputState">State</label>
								<select id="inputState" class="form-control">
									<option value=""></option>
								</select>
							</div>
							<div class="form-group col-md-2">
								<label for="inputZip">Zip</label>
								<input type="text" readonly class="form-control" id="inputZip" value="">
							</div>
						</div>
					</form>
				</div>
			</div>

			<!--			School & College History-->
			<div class="xx-detail-container"></div>
			<!--	Academic's Details -->
			<div class="academic-detail-container" id="academic-detail-box">
				<div class="form-header">
					<div class="form-text">Academic's Detail :-</div>
					<div class="edit-update-btn">
						<a class="btn btn-default" href="#academic-detail-box">Edit <span></span></a>
					</div>
				</div>
				<div class="form-container">
					<form>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="operatingSystem">Academic Percentage in Operating System</label>
								<input type="number" readonly class="form-control" id="operatingSystem" placeholder="">
							</div>
							<div class="form-group col-md-6">
								<label for="linuxAd">Academic Percentage in Linux Administration</label>
								<input type="number" readonly class="form-control" id="linuxAd" placeholder="">
							</div>
							<div class="form-group col-md-6">
								<label for="javaBeginner">Academic Percentage in Java Programming</label>
								<input type="number" readonly class="form-control" id="linux-ad" placeholder="">
							</div>
							<div class="form-group col-md-6">
								<label for="python">Academic Percentage in Python</label>
								<input type="number" readonly class="form-control" id="python" placeholder="">
							</div>
							<div class="form-group col-md-6">
								<label for="cpp">Academic Percentage in C++</label>
								<input type="number" readonly class="form-control" id="cpp" placeholder="">
							</div>
							<div class="form-group col-md-6">
								<label for="progInC">Academic Percentage in C</label>
								<input type="number" readonly class="form-control" id="progInC" placeholder="">
							</div>
						</div>
					</form>
				</div>
			</div>
			
<!--			Extra Curicullar-->
	
		</div>

@endsection