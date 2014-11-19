@extends('dashboard.master')
@section('content')
<div class="col-md-9">

	<h2>Assign catergory to new block</h2>
	{{ Form::open(array('url' => 'block')) }}

	{{ Form::label('cat', 'Select the catergory') }}
	{{ Form::select('id_cat', $cat, Input::old('id_cat')) }}

	{{ Form::submit('Save', array('class' => 'btn btn-success')) }}
	{{ Form::close() }}
</div>
@stop