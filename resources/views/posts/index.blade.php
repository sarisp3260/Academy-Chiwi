@extends('layouts.app')

@section('content')
    <div class="w-full h-3/4">
        <div class="flex flex-col items-start p-6 gap-2 lg:flex-row">
            @auth
                <form action="{{ route('posts') }}" method="post" class="w-full h-fit mb-4 bg-white p-6 rounded-lg lg:w-1/2">
                    @csrf
                    <div class="mb-4">
                    
                        <label for="title" class="text-slate-500 md:text-lg mr-4">Title
                        <input type="text" name="title" id="title" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('title') border-red-500 @enderror" placeholder="Write a title"/></label>
                        
                        @error('title')
                            <div class="text-red-500 text-sm">
                                {{ $message }}
                            </div>
                        @enderror

                        <label for="participants" class="text-slate-500 md:text-lg">Number
                        <input type="number" name="participants" id="participants" class="w-full bg-gray-100 border-2 p-4 rounded-lg @error('participants') border-red-500 @enderror" placeholder="50"/></label>

                        @error('participants')
                            <div class="text-red-500 text-sm">
                                {{ $message }}
                            </div>
                        @enderror

                        <label for="body" class="text-slate-500 md:text-lg mt-4">Body
                        <textarea name="body" id="body" cols="30" rows="2" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('body') border-red-500 @enderror" placeholder="Write something!"></textarea></label>

                        @error('body')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                    <div class="flex items-center justify-between">
                        <button type="reset" class="bg-slate-500 text-white px-4 py-2 rounded font-medium">Clear</button>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium">Post</button>
                    </div>
                </form>
            @endauth

            <div class="scroll w-full h-fit pb-32 sm:pb-12">
                <div class="grid grid-cols-1 grid-rows-auto place-items-center sm:grid-cols-2 xl:grid-cols-3">
                    @if ($posts->count())
                    @foreach ($posts as $post)
                        <x-post :post="$post" />
                    @endforeach
                </div>
                <div>
                    {{ $posts->links() }}
                </div>
            </div>
            @else
                <p>There are no posts</p>
            @endif
        </div>
    </div>
@endsection