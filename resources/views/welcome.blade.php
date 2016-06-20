@extends('layout')

@section('header')
<title>Welcome</title>
@endsection    

@section('content')
<div class="row">
	<div class="col-md-6 col-md-offset-3">

		<h1>	Welcome please register!	</h1>
	
	{{--   You can uncomment this to see all registered users
	<h1>All users</h1>

	 @foreach ($user1s as $user1)
		<div>
			{{ $user1->name }}
		</div>
	
	@endforeach
	--}}

		<hr>
		<h3>Fill in required informations</h3>
	
		<form  method="POST" action=" "> 
				<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
	
			<ul class="list-group" >

			
				<li  >
				NAme
				<div class="form-group" title="email" >
					<textarea name="name" class="form-control" >
					
					</textarea>
				</div>
				</li  >

				<li>Email
				<div class="form-group" > 
					<textarea name="email"  class="form-control" >
					
					</textarea>
				</div>
				</li>

				
					<div class="form-group" >
					<button class="btn btn-primary">Register</button>
					</div>
				
			
			</ul>
		</form>
	</div>
</div>
@stop