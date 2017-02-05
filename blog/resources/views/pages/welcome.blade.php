@extends('layouts.main')
    
@section('title', '| Home Page')


@section('content')
    <div class="row">
        
        <div class="col-md-12">
            <div class="jumbotron">
                <h1>Welcome to my blog</h1>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, suscipit obcaecati odit quia esse alias? Accusamus, in ex pariatur quae error, qui atque repellendus rerum libero a quaerat sequi dolorum.</p>
                <p><a href="#" class="btn btn-primary btn lg" role="button">Popular Post</a></p>
            </div>
        </div>  
    </div>
    <div class="row">
        <div class="col-md-8" >
          @forelse($post as $post)
             <div class="post">
                 <h3>{{$post ->title}}</h3>
                 <p>{{substr($post->body,0, 300)}}{{strlen($post->body)>300?" ..." : ""}}</p>
                 <a href="{{url('blog/'.$post->slug)}}" class="btn btn-primary">Read More</a>
             </div>
          @empty
            <h1>No Post</h1> 
          @endforelse
        </div>
        <div class="col-md-3 col-md-offset-1" >
           <h2>Sidebar</h2>
        </div>
    </div>
@endsection