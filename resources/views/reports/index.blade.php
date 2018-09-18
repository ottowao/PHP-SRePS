<!DOCTYPE html>
<html>
<head>
	<title>Sales Reports</title>
	<link href="{{asset('css/app.css')}}" rel="stylesheet">
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-inverse">
			<div class="navbar-header">
				<a class="navbar-brand" href="{{URL::to('/')}}">Back to Home</a>
			</div>
		</nav>

		<!-- will be used to show any messages -->
		@if (Session::has('message'))
			<div class="alert alert-info">
				{{Session::get('message') }}
			</div>
		@endif

		{{ HTML::ul($errors->all()) }}

		<h1>Generate report</h1>
		<div class="jumbotron text-center">
			{{ Form::open(array('url' => 'reports/view', 'class' => 'pull-right')) }}
				{{ Form::label('select_from', 'Select From') }}
				{{ Form::date('select_from', null, array('class' => 'form-control')) }}

				{{ Form::label('select_to', 'Select To') }}
				{{ Form::date('select_to', null, array('class' => 'form-control')) }}

				</br>

				{{ Form::submit('Go', array('class' => 'btn btn-small btn-block btn-info')) }}
			{{ Form::close() }}
		</div>

		<h1>Export CSV</h1>
		<div class="jumbotron text-center">
			{{ Form::open(array('url' => 'reports/csv', 'class' => 'pull-right')) }}
				{{ Form::label('select_from', 'Select From') }}
				{{ Form::date('select_from', null, array('class' => 'form-control')) }}

				{{ Form::label('select_to', 'Select To') }}
				{{ Form::date('select_to', null, array('class' => 'form-control')) }}

				</br>

				{{ Form::submit('Download (TODO)', array('class' => 'btn btn-small btn-block btn-info')) }}
			{{ Form::close() }}
		</div>

		</br>

		<h1>Low Stock Items</h1>
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>Name</th>
					<th>Stock</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
      			@foreach($items as $key => $value)
					<tr>
						<td>{{ $value->name }}</td>
						<td>{{ $value->stock }}</td>
						<td>
							<!-- show, edit, and delete buttons -->
							<a class="btn btn-small btn-block btn-primary" href="">Buy (TODO)</a>
						</td>
					</tr>
      			@endforeach
			</tbody>
		</table>
	</div>
</body>
</html>