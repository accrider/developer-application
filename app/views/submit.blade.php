<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>RT Application Submission</title>
	<link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
	<style>
		.page-header h1 {
			position: relative;
		}
		.page-header small {
			position: absolute;
			bottom: 4px;
		}
	</style>
</head>
<body>
	<div class="container">

		<div class="page-header">
			<h1><img src="/images/logo.png" alt="Logo"> <small>Developer Application</small></h1>
		</div>
	
		@if (isset($info))
			<div role="alert" class="alert alert-info">{{ $info }}</div>
		@endif

		@if (isset($error))
			<div role="alert" class="alert alert-danger">{{ $error }}</div>
		@endif

		{{ Form::open([ 'route' => 'app.submit', 'method' => 'post', 'role' => 'form', 'files' => true ]) }}

		<fieldset>
			<legend>Personal Details</legend>

			<div class="form-group">
				{{ Form::label('name', 'Name') }}
				{{ Form::text('name', null, [ 'class' => 'form-control', 'required' => true ]) }}
			</div>

			<div class="form-group">
				{{ Form::label('email', 'Email Address') }}
				{{ Form::text('email', null, [ 'class' => 'form-control', 'required' => true ]) }}
			</div>

		</fieldset>

		<fieldset>
			<legend>Documents</legend>

			<div class="form-group">
				{{ Form::label('cover_letter', 'Cover Letter') }}
				{{ Form::file('cover_letter') }}
			</div>

			<div class="form-group">
				{{ Form::label('resume', 'Resume') }}
				{{ Form::file('resume') }}
			</div>

		</fieldset>

		{{ Form::submit('Send', [ 'class' => 'btn btn-lg btn-primary btn-block' ]) }}

		{{ Form::close() }}
	</div>
	<!-- <script src="/bootstrap/js/bootstrap.js"></script> -->
</body>
</html>
