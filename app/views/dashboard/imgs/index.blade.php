@extends('dashboard.master')
@section('content')
<div class="container">
<h2><strong>Images-Managerment</strong></h2>
<div class="col-md-9">
<div>
<a href="{{ URL::to('imgs/create') }}" class="btn btn-success glyphicon glyphicon-plus-sign"> Add</a>
</div>
@foreach($imgs as $img)
	<div class="img col-xs-3">
	<p>{{ $img->desc }}</p>



	<a title="{{$img->title}}" href="{{$img->a_path}}"><img src="{{$img->img_path}}" alt="{{$img->alt}}" width="120" height="95"></a>





	{{ Form::open(array('url' => 'imgs/' . $img->id)) }}
	<button class='btn btn-danger ' type='submit'>
	</button>
	{{ Form::hidden('_method', 'DELETE') }}
						<i class='glyphicon glyphicon-trash'></i> Delete</button>

	{{ Form::close() }}












	</div>



@endforeach
</div>
@stop
