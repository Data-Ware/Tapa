@extends('dashboard.master')
@section('content')
<div class="col-md-9">

{{ Form::open(array('url' => 'users/' . $userx->id, 'method' =>'put'))}}

 <h1>Edit User {{ $userx->id }}</h1>
    
     <div>   
            {{ Form::label('username', 'Username:') }}
            {{ Form::text('username', $userx->username) }}
        <br>
            {{ Form::label('password', 'Password:') }}
            {{ Form::text('password', $userx->password) }}
         <br>
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name', $userx->name) }}
         <br>
            {{ Form::label('role_id', 'Role:') }}
            {{ Form::text('role_id', $userx->role_id) }}
        <br>
           
    </div>        
            {{ Form::submit('Save!', array('class' => 'btn btn-success')) }}
    {{ Form::close() }}


</div>

@stop