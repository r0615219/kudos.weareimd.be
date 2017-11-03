@extends('master')
  
@section('content')

    <div class="usersFlex">
      
      @foreach ($users as $user)

               <div class="card" style="width: 15rem;">
                   <img class="card-img-top" src="{{ $user->avatar }}" alt="{{ $user->name }}">
                   <div class="card-body">
                       <a href="/users/{{ $user->id }}">
                           <h4 class="card-title">{{ $user->name }}</h4>
                       </a>
                   </div>
               </div>
       
       @endforeach

    </div>



@endsection