@extends('layouts.app')

@section('content')

<div class="m-auto text-left w-4/5">
    <div class="py-15">
        <h1 class="text-6xl">
            Create Posts
        </h1>
    </div>
</div>

@if($errors->any())
    <div class="m-auto w-4/5">
        <ul>
            @foreach($errors->all() as $error)
                <li class="mb-4 bg-red-700 w-1/5 text-gray-50 py-4 rounded-2xl">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif

<div class="w-4/5 m-auto pt-20">
    <form action="/blog" method="POST" enctype="multipart/form-data">
        @csrf
            <input type="text" name="title" placeholder="...Title" class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none">
            <textarea name="description" placeholder="Description..." id="" cols="30" rows="10" class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none"></textarea>
            <div class="bg-gray-lighter pt-15">
                <label for="" class="w-44 flex flex-col items-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                    <span class="mt-2 text-base leading-normal">
                        Select a file
                    </span>
                    <input type="file" name="image" class="opacity-0">
                </label>
            </div>

            <button class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                Submit Post
            </button>
    </form>
</div>




@endsection