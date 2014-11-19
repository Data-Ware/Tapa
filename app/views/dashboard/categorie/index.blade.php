@extends('dashboard.master')
@section('content')
<div class="col-md-9">
	<h2>Categorie-Management</h2>
	<div>
	<a href="{{ URL::to('categorie/create') }}" class="btn btn-success glyphicon glyphicon-plus-sign"> Add</a>
	</div>

	<div class="table-responsive">
              <table class="table table-striped table-hover tablesorter">
                <thead>
                  <tr>
                    <th>Cat ID <i class="fa fa"></i></th>
                    <th>Categories Description<i class="fa fa"></i></th>
                    <th>Edit <i class="fa fa"></i></th>
                    <th>Delete <i class="fa fa"></i></th>
                  </tr>
                </thead>
                <tbody>


			@foreach($cat as $c)
			<tr>
				<td>{{ $c->id_cat }}</td>
				<td>{{ $c->desc }}</td>



				<td><a href="{{ URL::to('categorie/'. $c->id_cat.'/edit') }}" class="btn btn-primary btn-xs glyphicon glyphicon-pencil">Edit

				<td>

					{{ Form::open(array('url' => 'categorie/' . $c->id_cat)) }}

					<button class='btn btn-danger btn-xs' type='submit'>
					{{ Form::hidden('_method', 'DELETE') }}
					<i value="delete" onClick="return confirm('Are you sure?');"><span class="fa fa-times"></span> Delete</button>

					{{ Form::close() }}
				</td>
			</tr>
			@endforeach

</div>
@stop