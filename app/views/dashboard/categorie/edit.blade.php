@extends('dashboard.master')
@section('content')
<div class="col-md-9">

{{ Form::open(array('url' => 'categorie/' . $cat->id_cat, 'method' =>'put')) }} 
<h2>Item with ID {{ $cat->id_cat }}</h2>

	<div>
		{{ Form::label('cat', 'Enter Description:') }}
		{{ Form::text('cat', $cat->desc) }}
	</div>
	
	{{ Form::submit('Save!', array('class' => 'btn btn-success')) }}
	{{ Form::close() }}

</div>
@stop