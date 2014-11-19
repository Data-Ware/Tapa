
@extends('dashboard.master')
@section('content')
<div class="col-md-9">
	<h2>Item with ID {{ $item->id_item }}</h2>
	<strong>Item Description: </strong> {{ $item->desc }}
</div>
	
@stop