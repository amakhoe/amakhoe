@props(['post' => $post])

<div>
    <a href="{{route('user.posts', $post->user)}}" class="font-bold">{{$post->user->name}}</a>
    <span class="text-gray-600 text-sm">{{$post->created_at->diffForHumans()}}</span>
    <p class="mb-2">{{$post->body}}</p>
     
  
    @can('delete', $post)
     <form action="{{ route('posts.destroy', $post) }}" method="POST" class="mr-1">
         @csrf
         @method('DELETE')
  <button type="submit" class="bg-red-500 text-white w-full px-1 py-1">Delete</button>
  </form>
    @endcan


    <div class="flex items-center">
        @auth
        @if (!$post->likedBy(auth()->user()))
        <form action="{{ route('posts.likes', $post) }}" method="POST" class="mr-1">
         @csrf
         <button type="submit" class="bg-blue-500 rounded text-white w-full px-4 py-3">like</button>
        </form>
        @else
        <form action="{{ route('posts.likes', $post) }}" method="POST" class="mr-1">
         @csrf
         @method('DELETE')
         <button type="submit" class="bg-red-500 rounded text-white w-full px-4 py-3">nao gosto</button>
        </form>
        @endif
        @endauth
        <span>{{$post->likes->count()}}</span>
    </div>

 </div>