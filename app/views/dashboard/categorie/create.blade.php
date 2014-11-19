@extends('dashboard.master')
@section('content')
<div class="col-md-9">

	<h2>Create new Categorie </h2>
	{{ Form::open(array('url' => 'categorie')) }}
		<div>
			{{ Form::label('categorie', 'Enter Description:') }}
			{{ Form::text('cat') }}
		</div>
	
	{{ Form::submit('Save!', array('class' => 'btn btn-success')) }}	
	{{ Form::close() }}
</div>
	@stop