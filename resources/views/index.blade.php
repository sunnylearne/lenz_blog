@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Do you want to be a developer?
                </h1>
                <a class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase" href="/blog">
                    Read More
                </a>
            </div>       
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://cdn.pixabay.com/photo/2015/02/02/11/09/office-620822_1280.jpg" width="700" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Struggling to be a better web developer
            </h2>

            <p class="py-8 text-gray-500 text-l">
                Below are some articles which are my personal experince
                in the Web development journey and i think you will find 
                them handy too.
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
                Several years ago, i was like you,naive,confused and intimidated
                by numerous languages and getting started as a developer.
                But yours is different now,because you have this blog as a guide.
                You could change your world by just clicking below...
            </p>

            <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find out more
            </a>
        </div>
    </div>

    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l">
            I'm an expert in...
        </h2>

        <span class="font-extrabold block text-4xl py-1">
            Front End Development
        </span>

        <span class="font-extrabold block text-4xl py-1">
            Photography
        </span>

        <span class="font-extrabold block text-4xl py-1">
            Cinematography
        </span>

        <span class="font-extrabold block text-4xl py-1">
            Backend Development 
        </span>
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>

        <h2 class="text-4xl font-bold py-10">
            Recent Post
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
            Listed below are latest blog posts as at the time of your visit. You can consume them now that they are still hot.

        </p>
    </div>
    
    <div class="sm:grid grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppeercase text-xs">
                    {{ $latest_posts->title}}
                </span>
                <h3 class="text-xl font-bold py-10">
                {{ substr($latest_posts->description, 0, 100)}}...
                </h3>
                <a href="/blog/{{$latest_posts->slug}}" class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Find out more  
                </a>
            </div>
        </div>

        <div>
            <img src="{{ asset('images/' . $latest_posts->image_path)}}" width="700" alt="">
        </div>
    </div>

@endsection