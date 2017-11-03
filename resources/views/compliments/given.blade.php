@extends('master')
  
@section('content')

   <div class="jumbotron">
      <h1 class="display-3">Given compliments</h1>
      <hr class="my-4">
      <p>Did you make someone smile today?</p>
      <p class="lead">
         Go to <a href="/compliments/received">received compliments</a>
      </p>
   </div>

   <div class="usersFlex">

      @foreach ($posts as $post)

         @include('compliments.posts')

      @endforeach

   </div>
   
@endsection
