@extends('layouts.app')

@section('content')
   <div class="flex justify-center">
    <div class="w-8/12">
        <div class="p-6">
            <h1 class="text-2xl font-medium mb-1">{{$user->name}}</h1>
            <p>Postado {{$posts->count()}} {{Str::plural('post', $posts->count())}}
                and received {{$user->receivedLikes->count()}} Likes</p>
        </div>

    <div class="w-8/12 bg-white p-6 rounded-lg">
        @if ($posts->count())
        @foreach($posts as $post)
        <x-post :post="$post"/>
        @endforeach
        {{$posts->links()}}
        @else
        <p>nao existe nada</p>
        @endif
       </div>
   </div> 
@endsection