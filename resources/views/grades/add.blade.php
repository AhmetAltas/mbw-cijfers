@extends('layouts.app')

@section('content')

<div class="container">
<form method="POST" action="{{route('grades.store')}}">
		
	@csrf
		<div class="form-group">
			<p>Student: </p>
			<select class="form-control">
				@foreach($grades as $grade)
      			<option>{{$grade->user_id}}</option>
      			@endforeach
    		</select>
		</div>
		<div class="form-group">
			<p>Vak: </p>
			<input class="form-control" type="text" name="subject">
		</div>
		<div class="form-group">
			<p>Toets naam: </p>
			<input class="form-control" type="text" name="test">
		</div>
		<div class="form-group">
			<p>Cijfer: </p>
			<input class="form-control" type="number" name="grade">
		</div>
		<div class="form-group">
			<p>Omschrijving: </p>
			<input class="form-control" type="text" name="description">
		</div>
		<button type="submit" class="btn btn-primary">
			{{__('submit') }}
		</button>

	</form>
</div>
@endsection	