@extends('dashboard.master')
@section('content')
<div class="col-md-9">
	<h2>BlockHeader-Management</h2>
	<div>
	<a href="{{ URL::to('blockheader/create') }}" class="btn btn-success glyphicon glyphicon-plus-sign"> Add</a>
	</div>
	<div class="table-responsive">
             <table class="table table-striped table-hover tablesorter table-bordered ">
                <thead>
                  <tr>
                    <th>ID <i class="fa fa"></i></th>
                    <th>Header  <i class="fa fa"></i></th>
                    <th>Sub_header <i class="fa fa"></i></th>
                    <th>Relate block <i class="fa fa"></i></th>
                    <th> <i class="fa fa"></i></th>
                    <th>Edit <i class="fa fa"></i></th>
                    <th>Delete <i class="fa fa"></i></th>
                  </tr>
                </thead>
                <tbody>

	
			@foreach($items as $i)
			<tr>
				<td>{{ $i->id }}</td>
				<td>{{ $i->header }}</td>
				<td>{{ $i->sub_header }}</td>
				<td>{{ $i->price }}</td>
				<td>{{ $i->id_block }}</td>

				
				<td><a href="{{ URL::to('blockheader/'. $i->id.'/edit') }}" class="btn btn-primary btn-xs glyphicon glyphicon-pencil">Edit
			
				<td>
					
					{{ Form::open(array('url' => 'blockheader/' . $i->id)) }}
					<button class='btn btn-danger btn-xs' type='submit'>
					
					{{ Form::hidden('_method', 'DELETE') }}
					<i value="delete" onclick="confirm('Are you sure you want to remove?');"><span class="fa fa-times"></span> Delete</button>


					{{ Form::close() }}
				</td>
			</tr>
			@endforeach
		
</div>
@stop