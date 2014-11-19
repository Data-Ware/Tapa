@extends('dashboard.master')
@section('content')
<div class="col-md-9">

{{ Form::open(array('url' => 'items/' . $item->id_item, 'method' =>'put')) }} 
<h2>Item with ID {{ $item->id_item }}</h2>

	<div>
		{{ Form::label('item', 'Enter Description:') }}
		{{ Form::textarea('item', $item->desc) }}
	</div>
	
	{{ Form::submit('Save!', array('class' => 'btn btn-success')) }}
	{{ Form::close() }}

</div>
@stop