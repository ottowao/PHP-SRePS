<!DOCTYPE html>
<html>
<head>
	<title>Edit Item</title>
	<link href="{{asset('css/app.css')}}" rel="stylesheet">
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-inverse">
			<div class="navbar-header">
				<a class="navbar-brand" href="{{URL::to('items')}}">Back to Items</a>
			</div>
			<ul class="nav navbar-nav">
				<li>
					<a href="{{URL::to('items/create')}}">Create a Item</a>
				</li>
			</ul>
		</nav>

		<h1>Edit {{ $item->name }}</h1>

		<!-- if there are creation errors, they will show here -->
		{{ HTML::ul($errors->all()) }}

		{{ Form::model($item, array('route' => array('items.update', $item->id), 'method' => 'PUT')) }}
			<div class="form-group">
				{{ Form::label('name', 'Item Name') }}
				{{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('category', 'Item Category') }}
				{{ Form::select('category', $categories, null, ['class' => 'form-control']) }}
			</div>

			<div class="form-group">
				{{ Form::label('description', 'Item Description') }}
				{{ Form::text('description', Input::old('description'), array('class' => 'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('stock', 'Item Stock') }}
				{{ Form::text('stock', Input::old('stock'), array('class' => 'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('cost', 'Item Cost') }}
				{{ Form::text('cost', Input::old('cost'), array('class' => 'form-control')) }}
			</div>

			{{ Form::submit('Edit the Item!', array('class' => 'btn btn-primary')) }}
		{{ Form::close() }}
	</div>
</body>
</html>
