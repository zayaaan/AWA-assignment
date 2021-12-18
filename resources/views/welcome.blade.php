@extends('layouts.app')

@section('content')

<!-- <div class="background-image grid grid-cols-1 m-auto">
    <div class="flex text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center ">
            <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                Do you want to post? 
            </h1>
            <a 
                href="/blog"
                class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                read more
            </a>

        </div>
    </div>
</div> -->

@foreach($posts as $post)
<div class="pt-7 pb-7">
<div class="max-w-2xl mx-auto overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
        <img class="object-cover w-full h-64" src="{{asset('/storage/postfolder/'.$post->image)}}">

        <div class="p-6">
            <div>
                <a href="{{route('post.show',['id'=>$post->id])}}" class="px-2 py-1 text-xs font-bold text-white uppercase transition-colors duration-200 transform bg-gray-800 rounded dark:bg-gray-700 hover:bg-gray-700 dark:hover:bg-gray-600 focus:outline-none focus:bg-gray-700 dark:focus:bg-gray-600">Edit</a>
                    <button type="submit" class="px-2 py-1 text-xs font-bold text-white uppercase transition-colors duration-200 transform bg-gray-800 rounded dark:bg-gray-700 hover:bg-gray-700 dark:hover:bg-gray-600 focus:outline-none focus:bg-gray-700 dark:focus:bg-gray-600">Delete</button>
                <a href="#" class="block mt-2 text-2xl font-semibold text-gray-800 dark:text-white hover:text-gray-600 hover:underline">{{($post->name)}}</a>
                <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">{{($post->detail)}}</p>
            </div>
            <div class="mt-4">
                <div class="flex items-center">
                    <div class="flex items-center">
                        <!-- <img class="object-cover h-10 rounded-full" src="https://images.unsplash.com/photo-1586287011575-a23134f797f9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=48&q=60" alt="Avatar"> -->
                        <a href="" class="mx-2 font-semibold text-gray-700 dark:text-gray-200">By: {{$post->users->name}} </a>
                    </div>
                    <!-- <span class="mx-1 text-xs text-gray-600 dark:text-gray-300">21 SEP 2015</span> -->
                    <a href="" class="px-2 py-1 text-xs font-semibold text-white uppercase transition-colors duration-200 transform bg-gray-800 rounded hover:bg-gray-700 dark:hover:bg-gray-600 focus:bg-gray-700 dark:focus:bg-gray-600 focus:outline-none">Comment</a>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endforeach
@endsection