@extends('layouts.app')

@section('content')
   <div class="flex justify-center">
       <div class="w-8/12 bg-white p-6 rounded-lg">
        <form action="{{route('posts')}}" method="post">          
@csrf
@auth
    <div class="mb-4">
        <label for="name" class="sr-only">Topico</label>
        <textarea name="body" id="body" cols="30" rows="4"
         class="bg-gray-100 border-2  w-full p-4 rounded-lg @error('body') border-red-500  @enderror"  placeholder="Faca uma postagem">
        </textarea>
        @error('body')
        <div class="text-red-500 mt-2 text-sm">
        {{$message}}
        </div>    
        @enderror        
    </div>
       
       <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded front-medium w-full">postagem</button>
            </div>
        </form>
@endauth
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