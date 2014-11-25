@extends('dashboard.master')
@section('content')

<div class="col-md-9" >
    <h2>Users-Management</h2>
    <div>
    <a href="{{ URL::to('users/create') }}" class="btn btn-success glyphicon glyphicon-plus-sign"> Add</a>
    </div>

    <div class="table-responsive">
              <table class="table table-striped table-hover tablesorter table-bordered ">
                <thead>
                  <tr>
                    <th>Username <i class="fa fa"></i></th>
                    <th>Name <i class="fa fa"></i></th>
                    <th>Edit <i class="fa fa"></i></th>
                    <th>Delete <i class="fa fa"></i></th>
                  </tr>
                </thead>
                <tbody>

            @foreach($users as $user)
            <tr>
                <td>{{ $user->username }}</td>
                <td>{{ $user->name }}</td>



                <td><a href="{{ URL::to('users/'. $user->id .'/edit') }}" class="btn btn-primary btn-xs glyphicon glyphicon-pencil">Edit



                <td>

                    {{ Form::open(array('url' => 'users/' . $user->id)) }}

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