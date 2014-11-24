@extends('dashboard.master')
@section('content')
<div class="col-md-9">
	<h2>Block-Management</h2>
	<div>
	<a href="{{ URL::to('block/create') }}" class="btn btn-success glyphicon glyphicon-plus-sign"> Add</a>
	</div>

	<div class="table-responsive">
              <table class="table table-striped table-hover tablesorter">
                <thead>
                  <tr>
                    <th>Block ID  <i class="fa fa"></i></th>
                    <th>Cat ID <i class="fa fa"></i></th>
                    <th> <i class="fa fa"></i></th>
                    <th>Delete <i class="fa fa"></i></th>
                    
                  </tr>
                </thead>
                <tbody>
	
			@foreach($items as $i)
			<tr>
				<td>{{ $i->id_block }}</td>
				<td>{{ $i->id_cat }}</td>

				

				<td>
			
				<td>
					
					{{ Form::open(array('url' => 'block/' . $i->id_block)) }}
					<button class='btn btn-danger btn-xs' type='submit'>
					{{ Form::hidden('_method', 'DELETE') }}
					<i value="delete" onclick="confirm('Are you sure you want to remove?');"><span class="fa fa-times"></span> Delete</button>

					{{ Form::close() }}
				</td>
			</tr>
			@endforeach
		
</div>
@stop