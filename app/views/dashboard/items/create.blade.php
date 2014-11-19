@extends('dashboard.master')
@section('content')
<div class="col-md-9">

	<h2>Create New Item on the menu </h2>
	{{ Form::open(array('url' => 'items')) }}
		<div>
			{{ Form::label('item', 'Enter Description:') }}
			{{ Form::textarea('item') }}

		</div>


		{{ Form::label('block', 'Select the block') }}
		{{ Form::select('id_block', $block, Input::old('id_block')) }}

	{{ Form::submit('Save', array('class' => 'btn btn-success')) }}
	{{ Form::close() }}
</div>
	@stop