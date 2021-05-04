@extends('layouts.app')

@section('content')

<div class="m-auto text-left w-4/5">
    <div class="py-15">
        <h1 class="text-6xl">
            {{ $post->title}}
        </h1>
    </div>
</div>

<div class="m-auto pt-20 w-4/5">
    <div class="relative h-80 m-8 overflow-hidden rounded-lg bg-indigo-500">
        
        <img src="{{ asset('images/' . $post->image_path) }}" class="object-cover min-w-full h-full" alt="" srcset="">
        
    </div>
    <span class="text-gray-500">
        By <span class="font-bold italic text-gray-800">
           {{$post->user->name}} 
        </span>, Created on {{ date('jS M Y', strtotime($post->updated_at))}}
    </span>

    

    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        {{ $post->description}}
    </p>
</div>

@endsection