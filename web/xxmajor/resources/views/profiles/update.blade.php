@extends('layouts.app')

@section('content')
	<div class="container hero-el">

	</div>
	<div class="container">
		<div class="basic-detail-container" id="basic-detail-box">
			<div class="form-header">
				<div class="form-text">Basic Details:-</div>
				<div class="edit-update-btn">
					<!--
					<form method="POST">
						<btn class="btn btn-default" name="saveUsersDetails">Save <span></span></btn>
					</form>
-->
				</div>
			</div>
			<div class="form-container">
				<form method="post">
					<div class="form-group">
						<label for="inputName">Full Name</label>
						<input type="text" name="inputName" class="form-control" id="inputName" placeholder="Full Name" value="">
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
							<input type="text" name="inputFather" class="form-control" id="inputFather" placeholder="Father's Name" value="">
						</div>
						<div class="form-group col-md-6">
							<label for="inputMother">Mother's Name</label>
							<input type="text" name="inputMother" class="form-control" id="inputMother" placeholder="Mother's Name" value="">
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail">Email</label>
						<input type="email" name="inputEmail" class="form-control" id="inputEmail" placeholder="Email" value="">
					</div>
					<div class="form-group">
						<label for="inputCollege">College</label>
						<input type="text" name="inputCollege" class="form-control" id="inputCollege" placeholder="College" value="">
					</div>
					<div class="form-group">
						<label for="inputAddress">Address</label>
						<input type="text" name="inputAddress" class="form-control" id="inputAddress" placeholder="1234 Main St" value="">
					</div>
					<div class="form-group">
						<label for="inputAddress2">Address 2</label>
						<input type="text" name="inputAddress2" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" value="">
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="inputCity">City</label>
							<input type="text" name="inputCity" class="form-control" id="inputCity" value="">
						</div>
						<div class="form-group col-md-4">
							<label for="inputState">State</label>
							<select id="inputState" name="inputState" class="form-control">
								<option selected value=""></option>
								<option>...</option>
								<option value="Andhra Pradesh">Andhra Pradesh</option>
								<option value="Arunachal Pradesh">Arunachal Pradesh</option>
								<option value="Assam">Assam</option>
								<option value="Bihar">Bihar</option>
								<option value="Chhattisgarh">Chhattisgarh</option>
								<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
								<option value="Daman and Diu">Daman and Diu</option>
								<option value="Delhi">Delhi</option>
								<option value="Goa">Goa</option>
								<option value="Gujarat">Gujarat</option>
								<option value="Haryana">Haryana</option>
								<option value="Himachal Pradesh">Himachal Pradesh</option>
								<option value="Jammu and Kashmir">Jammu and Kashmir</option>
								<option value="Jharkhand">Jharkhand</option>
								<option value="Karnataka">Karnataka</option>
								<option value="Kerala">Kerala</option>
								<option value="Madhya Pradesh">Madhya Pradesh</option>
								<option value="Maharashtra">Maharashtra</option>
								<option value="Manipur">Manipur</option>
								<option value="Meghalaya">Meghalaya</option>
								<option value="Mizoram">Mizoram</option>
								<option value="Nagaland">Nagaland</option>
								<option value="Orissa">Orissa</option>
								<option value="Puducherry">Puducherry</option>
								<option value="Punjab">Punjab</option>
								<option value="Rajasthan"> Rajasthan</option>
								<option value="xtsss">Sikkim</option>
								<option value="Tamil Nadu">Tamil Nadu</option>
								<option value="Telangana">Telangana</option>
								<option value="Tripura">Tripura</option>
								<option value="Uttar Pradesh">Uttar Pradesh</option>
								<option value="Uttarakhand">Uttarakhand</option>
								<option value="West Bengal">West Bengal</option>
							</select>
						</div>
						<div class="form-group col-md-2">
							<label for="inputZip">Zip</label>
							<input type="text" name="inputZip" class="form-control" id="inputZip" value="">
						</div>
					</div>
					<div class="form-group">
						<button type="submit" name="saveUsersDetails" class="btn btn-primary rbtn-primary float-right">Save</button>
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
					<a class="btn btn-default">Edit <span></span></a>
				</div>
			</div>
			<div class="form-container">
				<form>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="operatingSystem">Academic Percentage in Operating System</label>
							<input type="number" class="form-control" id="operatingSystem" placeholder="">
						</div>
						<div class="form-group col-md-6">
							<label for="linuxAd">Academic Percentage in Linux Administration</label>
							<input type="number" class="form-control" id="linuxAd" placeholder="">
						</div>
						<div class="form-group col-md-6">
							<label for="javaBeginner">Academic Percentage in Java Programming</label>
							<input type="number" class="form-control" id="linux-ad" placeholder="">
						</div>
						<div class="form-group col-md-6">
							<label for="python">Academic Percentage in Python</label>
							<input type="number" class="form-control" id="python" placeholder="">
						</div>
						<div class="form-group col-md-6">
							<label for="cpp">Academic Percentage in C++</label>
							<input type="number" class="form-control" id="cpp" placeholder="">
						</div>
						<div class="form-group col-md-6">
							<label for="progInC">Academic Percentage in C</label>
							<input type="number" class="form-control" id="progInC" placeholder="">
						</div>
					</div>
				</form>
			</div>
		</div>

		<!--			Extra Curicullar-->

	</div>
@endsection
