@extends('master')
  
@section('content')

    <div class="jumbotron">

        <div class="profileHead">
            <img class="card-img-top" src="{{ $user->avatar }}" alt="{{ $user->name }}">
            <h1>{{ $user->name }}</h1>
        </div>

        <hr/>

        <h2>Leave a compliment</h2>

        <form method="POST" action="/users/{{ $user->id  }}/compliments">

            {{ csrf_field() }}

            <div class="form-group">
                <input type="text" class="form-control" id="body" name="body" aria-describedby="complimentHelp" placeholder="Hey! I think I like you ;) x">
                <small id="complimentHelp" class="form-text text-muted">Be the reason for someones smile!</small>
            </div>
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>

            @include('layouts.errors')

        </form>

    </div>

    <div class="usersFlex">

        @foreach ($user->compliment as $post)

            @include('compliments.posts')

        @endforeach

    </div>


@endsection