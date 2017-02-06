@extends('layouts.base')

@section('content')
	<div class="container">

		<div class="row">
			<h2 class="display-3">
				{{$note->title}}
			</h2>

			<p>
				{{$note->body}}
			</p>
		</div>


	</div>

@endsection