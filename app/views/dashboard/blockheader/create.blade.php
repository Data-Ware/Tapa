@extends('dashboard.master')
@section('content')
<div class="col-md-9">

	<h2>New block header </h2>
	{{ Form::open(array('url' => 'blockheader')) }}

		<div>
			{{ Form::label('item', 'Header:') }}
			{{ Form::text('header') }}

			{{ Form::label('item', 'Sub-Header:') }}
			{{ Form::text('sub_header') }}

			{{ Form::label('item', 'Price Desc:') }}
			{{ Form::text('price') }}

			<br>

			{{ Form::label('block', 'Select the block') }}
			{{ Form::select('id_block', $block, Input::old('id_block')) }}

		</div>

	{{ Form::submit('Save!', array('class' => 'btn btn-success')) }}
	{{ Form::close() }}
</div>
	@stop