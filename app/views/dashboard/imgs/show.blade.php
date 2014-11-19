@extends('dashboard.master')
@section('content')
<div class="container">

<h2><strong>Gallery</strong></h2>
<div class="col-md-9">
<div class="img col-xs-3">
	<p>{{ $imgs->desc }}</p>
	 <a target=" " href=" "><img src="{{$imgs->img_path}}" alt="{{$imgs->img_path}}" width="120" height="95"></a>
	</div>

</div>
@stop
