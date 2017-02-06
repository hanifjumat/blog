@extends('layouts.main')
    
    
@section('title', '| Create New Post')

@section('content')
 	<div class="row">
 		<div class="col-md-8 col-md-offset-2">
 			<h1>Create New Post	</h1>
 			<hr>
 				{!! Form::open(array('route'=>'posts.store')) !!}
 					{!! Form::label('title', 'Title: ') !!}
 					{!! Form::text('title', null,array('class'=>'form-control')) !!}

 					<br>

					{!! Form::label('slug','Slug: ', []) !!}
					{!! Form::text('slug',null, ['class'=>'form-control']) !!}

					<br>

					{!! Form::label('categories','Category: ', []) !!}
					<select name="category_id" id="" class="form-control">
						@foreach($categories as $category)
							<option value="{{$category->id}}">{{$category->name}}</option>

						@endforeach
					</select>
					<br>

 					{!! Form::label('body', 'Body: ') !!}
 					{!! Form::textarea('body', null,array('class'=>'form-control')) !!}
 					
 					<br>

 					{!! Form::submit('Create Post', array('class'=>' btn btn-success btn-lg btn-block ', 'style'=>'margin-top:5px;')) !!}
 				{!! Form::close() !!}
 		</div>
 	</div>
   
@endsection
