@extends('layouts.app')

@section('content')
   <div class="flex justify-center">
       <div class="w-8/12 bg-white p-6 rounded-lg">
        <form action="{{route('registrar')}}" method="post">          
@csrf
    <div class="mb-4">
        <label for="name" class="sr-only">Nome</label>
        <input type="text" name="name" id="nome" placeholder="Teu nome" class="bg-gray-100 border-2 @error('name') w-full @enderror p-4 rounded-lg" value="{{old('nome')}}">
        @error('name')
        <div class="text-red-500 mt-2 text-sm">
        {{$message}}
        </div>    
        @enderror        
    </div>

    <div class="mb-4">
        <label for="name" class="sr-only">Username</label>
        <input type="text" name="username" id="Username" placeholder="Teu Username" class="bg-gray-100 border-2 @error('username')  w-full p-4 rounded-lg @enderror" value="{{old('Username')}}">
        @error('username')
        <div class="text-red-500 mt-2 text-sm">
        {{$message}}
        </div>    
        @enderror
    </div>
            
    <div class="mb-4">
        <label for="name" class="sr-only">Email</label>
        <input type="email" name="email" id="email" placeholder="Teu Email"
         class="bg-gray-100 border-2 @error('email')  w-full p-4 rounded-lg @enderror" value="{{old('email')}}">
        @error('email')
        <div class="text-red-500 mt-2 text-sm">
        {{$message}}
        </div>    
        @enderror
            
            </div>
            
            <div class="mb-4">
                <label for="Passsword" class="sr-only">Password</label>
                <input type="password" name="password" id="Password" placeholder="Teu Password" 
                class="bg-gray-100 @error('password') border-2  w-full p-4 rounded-lg @enderror" value="">

                @error('password')
            <div class="text-red-500 mt-2 text-sm">
            {{$message}}
            </div>    
            @enderror
            </div>
            
            <div class="mb-4">
                <label for="name" class="sr-only">Confirmar Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="confirmar" 
                class="bg-gray-100 border-2 @error('password_confirmation') w-full p-4 @enderror rounded-lg" value="">

                @error('password_confirmation')
            <div class="text-red-500 mt-2 text-sm">
            {{$message}}
            </div>    
            @enderror
            </div>
           
            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded front-medium w-full">Registrar</button>
            </div>
        </form>
       </div>
   </div> 
@endsection