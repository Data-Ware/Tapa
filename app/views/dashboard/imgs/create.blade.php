@extends('dashboard.master')
@section('content')
<div class="col-md-9">
<h1>testing head</h1>

	<h2>Upload Image to Gallery sdsds</h2>
	{{ Form::open(array ('url' => 'imgs','files' => true)) }}
		<div>
			<li>
			{{ Form::label('imgs', 'Image Title: ') }}
			{{ Form::text('imgs') }}
			</li><br>
			<li>
			{{ Form::label('img', 'Choose an image to upload ') }}
			{{ Form::file('img')}}
			</li><br>
			{{ Form::label('block', 'Select the block') }}
			{{ Form::select('id_block', $block, Input::old('id_block')) }}


		</div>
		{{ Form::submit('Upload image') }}
	{{ Form::close() }}
</div>
@stop