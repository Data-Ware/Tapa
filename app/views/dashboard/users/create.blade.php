@extends('dashboard.master')
@section('content')
<div class="col-md-9">
<h1>Create User</h1>

{{ Form::open(array('route' => 'users.store')) }}
    <ul>

       
            {{ Form::label('username', 'Username:') }}
            {{ Form::text('username') }}
       <br>
            {{ Form::label('password', 'Password:') }}
            {{ Form::password('password') }}
       <br> 
            {{ Form::label('password', 'Confirm Password:') }}
            {{ Form::password('password_confirmation') }}
        <br>      
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name') }}
        <br>
          
            {{ Form::label('role_id', 'Role:') }}
            {{ Form::text('role_id') }}

             
               
        <br>
            {{ Form::submit('Submit', array('class' => 'btn')) }}
       
    </ul>
{{ Form::close() }}

@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif

@stop
