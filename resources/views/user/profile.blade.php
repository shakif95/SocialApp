@extends('layouts.app')

<style type="text/css">
	.profile-img{
		max-width:150px;
		border: 5px solid #fff;
		border-radius: 100%;
		box-shadow: 0 2px 2px rgba(0, 0, 0, 0.3);
	}
</style>


@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
				<div class="panel-body text-center">
					<img class="profile-img" src="https://pickaface.net/gallery/avatar/Opi51c7dccf270e0.png">
					<h1>{{ $user->name }}</h1>
					<h4>{{ $user->email }}</h4>
					<h4>{{ $user->dob->age }} years</h4>
					<button type="button" class="btn btn-primary">Follow</button>
				</div>
			</div>
		</div>
		
	</div>

@endsection