@extends('layouts.app')

@section('content')
	<div class="container hero-el">

	</div>
	<div class="container">
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
	</div>