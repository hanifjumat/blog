@extends('layouts.main')
    
    
@section('title', '| Content Page')


@section('content')
<div class="row">
        <div class="col-md-12">
            <h1>Contact Me</h1>
            <hr>

           <form action="">
               <div class="form-group">
                   <label for="" name="email">Email:</label>
                   <input type="email" name="email" class="form-control">
               </div>

               <div class="form-group">
                   <label for="" name="subject">Subject:</label>
                   <input type="subject" name="subject" class="form-control">
               </div>

               <div class="form-group">
                   <label for="" name="message">Message:</label>
                   <textarea type="message" name="message" class="form-control">Type your Message Here...</textarea>


               </div>
               <input type="submit" value=" Send Message" class="btn btn-success">
           </form>
        </div>
      
    </div>
@endsection

