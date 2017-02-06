@extends('layouts.main')

@section('title', '| View Post')

@section('content')
	<div class="row">
		<div class="col-md-8">
			<h1>{{$post->title}}</h1>
			<p class="lead"> {{$post ->body}}</p>
		</div>

		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<label>Url Slug: </label>
					<p><a href="{{url('blog/'.$post->slug)}}">{{url($post->slug)}}</a></p>
					<p><a href="{{route('blog.single',$post->slug)}}">{{url($post->slug)}}</a></p>
				</dl>
				
				<dl class="dl-horizontal">
					<label>Category: </label>
					<p>{{$post->category->name}}</p>
				</dl>

				<dl class="dl-horizontal">
					<label>Create At: </label>
					<p>{{date('M j, Y h:i a ',strtotime($post->created_at))}}</p>
				</dl>

				<dl class="dl-horizontal">
					<label>Last Updated At: </label>
					<p>{{date('M j, Y h:i a ',strtotime($post->created_at))}}</p>
				</dl>
				<hr>

				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('posts.edit','Edit',array($post->id),array('class'=>'btn btn-primary btn-block')) !!}


					</div>
					<div class="col-sm-6">

						{!! Form::open(['route'=>['posts.destroy',$post->id],'method'=>'DELETE']) !!}
			
						{!! Form::submit('Delete', ['class'=>'btn btn-danger btn-block']) !!}
						
						{!! Form::close() !!}

						
					</div>
				</div>

					<div class="row">
						<div class="col-md-12">
							{!! Html::linkRoute('posts.index','<< See All Posts <<',[],['class' =>'btn btn-default btn-block', 'style'=>'margin-top:18px;']) !!}

						</div>
					</div>

			</div>	
		</div>
	</div>


	
@endsection