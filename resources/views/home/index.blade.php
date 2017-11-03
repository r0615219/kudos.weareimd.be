@extends('master')
  
@section('content')

    <div class="jumbotron">
        <h1 class="display-3">Hello, kudos!</h1>
        <p class="lead">Kudos.weareimd.be is a easy way to connect with other students by giving them simple compliments.</p>
        <hr class="my-4">
        <p>Be the reason for someones smile today!</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="/compliments/given" role="button">Given compliments</a>
            <a class="btn btn-primary btn-lg" href="/compliments/received" role="button">Received compliments</a>
        </p>
    </div>

   <div class="usersFlex">

      @foreach ($posts as $post)

         @include('compliments.posts')

      @endforeach

   </div>
   
@endsection