@extends('dashboard.master')
@section('content')
<div class="col-md-9">

{{ Form::open(array('url' => 'blockheader/' . $item->id, 'method' =>'put')) }} 
<h2>Edit BlockHeader {{ $item->id }}</h2>

	<div>
		{{ Form::label('header', 'Header:') }}
		{{ Form::text('header', $item->header) }}
		{{ Form::label('sub_header', 'Sub-Header:') }}
		{{ Form::text('sub_header', $item->sub_header) }}
		{{ Form::label('price', 'Price:') }}
		{{ Form::text('price', $item->price) }}

		




	</div>
	
	{{ Form::submit('Save!', array('class' => 'btn btn-success')) }}
	{{ Form::close() }}

</div>
@stop