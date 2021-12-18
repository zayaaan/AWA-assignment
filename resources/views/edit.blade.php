@extends('layouts.app')

@section('content')

<div class="">
	<div class="sm:max-w-lg w-full p-10 bg-white rounded-xl z-10 mt-10 mx-10 mb-10">
		<div class="text-center">
			<h2 class="mt-5 text-3xl font-bold text-gray-900">
				Edit Post!
			</h2>
			<!-- <p class="mt-2 text-sm text-gray-400">Lorem ipsum is placeholder text.</p> -->
		</div>
        <form class="mt-8 space-y-3" action="{{route('post.update')}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" name="id" value="{{$post->id}}">
                    <div class="grid grid-cols-1 space-y-2">
                        <label class="text-sm font-bold text-gray-500 tracking-wide">Title</label>
                            <input class="text-base p-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500" type="text" name="name" placeholder="name" value="{{$post->name}}">
                    </div>
                    
                    <div class="grid grid-cols-1 space-y-2">
                        <label class="text-sm font-bold text-gray-500 tracking-wide">Description</label>
                            <input class="text-base p-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500" type="text" name="detail" placeholder="details" value="{{$post->detail}}">
                    </div>

                    <fieldset class="w-full space-y-1 dark:text-coolGray-100">
                    <label for="files" class="block text-sm font-medium">Attachments</label>
                    <div class="flex">
                        <input type="file" name="image" id="files" class="px-8 py-12 border-2 border-dashed rounded-md dark:border-coolGray-700 dark:text-coolGray-400 dark:bg-coolGray-800" value="{{$post->image}}">
                        
                    </div>
                    </fieldset>
                        <p class="text-sm text-gray-300">
                            <span>File type: doc,pdf,types of images</span>
                        </p>
                    <div>
                        <button type="submit" class="my-5 w-full flex justify-center bg-gray-700 text-gray-100 p-4  rounded-full tracking-wide
                                    font-semibold  focus:outline-none focus:shadow-outline hover:bg-blue-600 shadow-lg cursor-pointer transition ease-in duration-300">
                        Update
                    </button>
                    </div>
        </form>
	</div>  
</div>

 

@endsection