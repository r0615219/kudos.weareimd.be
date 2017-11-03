@extends('master')
  
@section('content')
   
   <h1>Welcome world!</h1>

   <div class="usersFlex">

      @foreach ($posts as $post)

         @include('compliments.posts')

      @endforeach

   </div>
   
@endsection