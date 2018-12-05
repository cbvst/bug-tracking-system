@extends('layout/master')

@section('body-part')
	<div style="background: red;height: 300px;width: 500px;margin:0px auto;font-size: 100px;text-align:center;">
		This is a controller
	</div>
	
		{{ $name }}  <!-- output => vikas singh<script>alert('hello');</script>  -->
		<br>
		{!! $name !!}  <!-- output => vikas singh and run alert script -->
		<br>
		@{{ $name }} <!-- output => {{ $name }} -->
		<br>
		<?php  $error="data not found"; ?>
		<b>
			@if($name=='vikas singh')
				{{ $name }}
			@elseif($name=='vikas')
				{{ $name }}
			@else
				{{ $error }}
			@endif
		</b>
	<a href="showthis">Click here</a>
@endsection