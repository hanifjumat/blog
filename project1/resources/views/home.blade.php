@extends('layout')
@section('header')


@stop
@section('content')

	<div class="jumbotron" style="margin-top:50px;margin-bottom:0px; height:40%;">
	  	<div class="row">
	  		<div class="col-md-6 col-md-offset-3 " style="margin-top: 100px;">
	  			<h1>Bootstrap Tutorial</h1> 
	    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi cumque, natus perferendis in explicabo nihil autem mollitia inventore sapiente provident totam ipsam minima praesentium suscipit quisquam voluptate, id vitae nisi!</p> 
	  		</div>
	  	</div>
  	</div>
  	<div id="section-login" class="container-fluid">
	  <div class="jumbotron pull-bottom" style="background:transparent !important;height:40%;">
	    <div class="row">
	  		<div class="col-md-6 col-md-offset-3 ">
	  			<form>
				    <div class="form-group">
						<div class="text-center">
							<img class="profile-img" src="http://pre04.deviantart.net/239a/th/pre/i/2014/106/6/c/random_logo_by_criticl-d7eqdvw.png" alt="">
							
						</div>	
				     		<label for="email">Email:</label>
								<input type="email" class="form-control" id="email" placeholder="Enter email">
							    </div>
							    <div class="form-group">
							      <label for="pwd">Password:</label>
							      <input type="password" class="form-control" id="pwd" placeholder="Enter password">
							    </div>
							    <div class="checkbox">
							      <label><input type="checkbox"> Remember me</label>
							    </div>
							    <button type="submit" class="btn btn-default">Submit</button>
				  </form>
	  		</div>
	  	</div>
	  </div>
	</div>
@stop