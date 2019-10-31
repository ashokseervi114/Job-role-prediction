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
				<form action="/profiles" method="POST">
					@csrf
					<div class="form-group">
						<label for="fullname">Full Name</label>
						<input type="text" name="fullname" class="form-control" id="fullname" placeholder="Full Name" value="">
					</div>
					<h2 class="username">{{ $profilesUser->fullname }}</h2>
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
							<label for="fathername">Father's Name</label>
							<input type="text" name="fathername" class="form-control" id="fathername" placeholder="Father's Name" value="">
						</div>

						<div class="form-group col-md-6">
							<label for="mothername">Mother's Name</label>
							<input type="text" name="mothername" class="form-control" id="mothername" placeholder="Mother's Name" value="">
						</div>
					</div>
					{{-- <div class="form-group">
						<label for="inputEmail">Email</label>
						<input type="email" name="inputEmail" class="form-control" id="inputEmail" placeholder="Email" value="">
					</div> --}}
					<div class="form-group">
						<label for="college">College</label>
						<input type="text" name="college" class="form-control" id="college" placeholder="College" value="">
					</div>
					<div class="form-group">
						<label for="address_line_one">Address</label>
						<input type="text" name="address_line_one" class="form-control" id="address_line_one" placeholder="1234 Main St" value="">
					</div>
					<div class="form-group">
						<label for="address_line_two">Address 2</label>
						<input type="text" name="address_line_two" class="form-control" id="address_line_two" placeholder="Apartment, studio, or floor" value="">
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="address_city">City</label>
							<input type="text" name="address_city" class="form-control" id="address_city" value="">
						</div>
						<div class="form-group col-md-4">
							<label for="address_state">State</label>
							<select id="address_state" name="address_state" class="form-control">
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
							<label for="address_zip">Zip</label>
							<input type="text" name="address_zip" class="form-control" id="address_zip" value="">
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
		<a href="#AddAcadLinkHere">Add Acads Link Here.</a>

		<!--			Extra Curicullar-->

	</div>
@endsection
