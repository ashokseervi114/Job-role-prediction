@extends('layouts.app')

@section('content')
	

	<br>
	<div class="container">
			<div class="user-detail">
				<div class="container row">
					<div class="col-md-4 text-center">
						<div class="img-div">
							<img src="../img/default-profile.png" alt="user-img" class="user-img">
						</div>
							<div>
								<a class="btn btn-primary up-profile" href="{{ route('profile-create') }}">
								Update Profile
							</a>
							</div>
					</div>
					<div class="col-md-8">
						<div class="container">
							<div class="profile-head">
						<h2 class="username">{{ $profileUser->username }}</h2>
						<span class="small">{{ $profileUser->email }}</span>
					</div>
					<div class="profile-basic">
						<form>
							<div class="form-group row">
								<label for="staticName" class="col-sm-2 col-form-label">Name</label>
								<div class="col-sm-10">
									<input type="text" readonly class="form-control-plaintext" id="staticName" value="{{ $profileUser->name }}">
								</div>
							</div>
							<div class="form-group row">
								<label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
								<div class="col-sm-10">
									<input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $profileUser->email }}">
								</div>
							</div>
							<div class="form-group row">
								<label for="staticCollege" class="col-sm-2 col-form-label">College</label>
								<div class="col-sm-10">
									<input type="text" readonly class="form-control-plaintext" id="staticCollege" value="">
								</div>
							</div>
						</form>
					</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="push" style="margin-bottom: 89px;"></div>
@endsection