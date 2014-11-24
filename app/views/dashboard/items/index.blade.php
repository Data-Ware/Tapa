
@extends('dashboard.master')
@section('content')
<div class="col-md-9" >
	<h2>Items-Management</h2>
	<div>
	<a href="{{ URL::to('items/create') }}" class="btn btn-success glyphicon glyphicon-plus-sign"> Add</a>
	</div>

	<div class="table-responsive">
              <table class="table table-striped table-hover tablesorter table-bordered ">
                <thead>
                  <tr>
                    <th>ID <i class="fa fa"></i></th>

                   	<th>Items Description <i class="fa fa"></i></th>
                    <th>Edit <i class="fa fa"></i></th>
                    <th>Delete <i class="fa fa"></i></th>
                  </tr>
                </thead>
                <tbody>

			@foreach($items as $item)
			<tr>
				<td>{{ $item->id_item }}</td>
				<td>{{ $item->desc }}</td>



				<td><a href="{{ URL::to('items/'. $item->id_item.'/edit') }}" class="btn btn-primary btn-xs glyphicon glyphicon-pencil">Edit



				<td>

					{{ Form::open(array('url' => 'items/' . $item->id_item)) }}

					<button class='btn btn-danger btn-xs' type='submit'>
					{{ Form::hidden('_method', 'DELETE') }}
					<i value="delete" onClick="return confirm('Are you sure?');"><span class="fa fa-times"></span> Delete</button>

					{{ Form::close() }}
				</td>
			@endforeach
			</tr>
		</tbody>

</div>
@stop