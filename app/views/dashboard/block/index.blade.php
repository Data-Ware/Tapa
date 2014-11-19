@extends('dashboard.master')
@section('content')
<div class="col-md-9">
	<h2>Block-Management</h2>
	<div>
	<a href="{{ URL::to('block/create') }}" class="btn btn-success glyphicon glyphicon-plus-sign"> Add</a>
	</div>
	<table border="1">
		<thead>
			<tr>
				<th> Block ID </th>
				<th> Cat ID </th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			@foreach($items as $i)
			<tr>
				<td>{{ $i->id_block }}</td>
				<td>{{ $i->id_cat }}</td>

				

				<td><a href="{{ URL::to('block/'. $i->id_block.'/edit') }}" class="btn btn-primary btn-xs glyphicon glyphicon-pencil">Edit
			
				<td>
					
					{{ Form::open(array('url' => 'block/' . $i->id_block)) }}
					<button class='btn btn-danger btn-xs' type='submit'>
					{{ Form::hidden('_method', 'DELETE') }}
					<i class='glyphicon glyphicon-trash'></i> Delete
	    			</button>
					{{ Form::close() }}
				</td>
			</tr>
			@endforeach
		
</div>
@stop