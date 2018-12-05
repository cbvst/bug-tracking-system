<form method="post" action="{{ route('hellostore') }}">
	{{ csrf_field()  }}
	<!-- csrf (Cross Site Request Forgery) -->
	<!-- you can bypass token from http/middleware/verifycsrftoken  passing name of view -->
<!-- @csrf  for latest version  -->

	Enter your Name : <br>
	<input type="text" name="name">
	<br>
	Enter Email : <br>
	<input type="email" name="email">
	<br>
	<input type="submit">
</form>
@if($errors->any())  <!-- for showing errors from validation -->
	@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
	@endforeach
@endif