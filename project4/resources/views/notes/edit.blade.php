@extends('layouts.base')
@section('content')

<div class="container">
	<h1>Edit Note</h1>
	<form action="{{route('notes.update',$note->id)}}"  method="POST">
	{{csrf_field()}}
	{{method_field('PUT')}}
		<div class="form-group">
			<label for="title">
				Note Title
			</label>
			<input class="form-control" type="text" name="title">
		</div>

		<div class="form-group">
			<label for="body">
				Note Body
			</label>
			<input class="form-control" type="text" name="body">
		</div>


	<input class="btn btn-primary pull-left" type="submit" value="Done"></input>
	</form>	
</div>
	
@endsection