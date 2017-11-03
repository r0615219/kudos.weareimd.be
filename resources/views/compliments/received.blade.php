@extends('master')
  
@section('content')

   <div class="jumbotron">
      <h1 class="display-3">Received compliments</h1>
      <hr class="my-4">
      <p>Did you smile today?</p>
      <p class="lead">
         Go to <a href="/compliments/given">given compliments</a>
      </p>
   </div>

   <div class="usersFlex">

      @foreach ($posts as $post)

         @include('compliments.posts')

      @endforeach

   </div>
   
@endsection
