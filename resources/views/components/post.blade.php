@props(['post' => $post])

<div class="bg-white rounded-lg flex flex-col items-center mb-4 w-fit h-fit mx-3">
    <picture class="w-full h-64 md:h-52">
        <img class="w-full h-full rounded-t-lg" src="https://cdn.pixabay.com/photo/2016/02/11/14/59/fruits-1193727_960_720.png" alt="">
    </picture>
    <span class="text-gray-600 text-sm mt-3">{{ $post->created_at->diffForHumans() }}</span>

    <span class="text-xl font-semibold mb-2">{{ $post->title }}</span>
    <p class="mb-2">{{ $post->body }}</p>

    <div class="flex flex-wrap items-center gap-2">
        @can('delete', $post)
            <form action="{{ route('posts.destroy', $post) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class=""><img class="w-8" src="https://cdn-icons.flaticon.com/png/512/5676/premium/5676047.png?token=exp=1650583122~hmac=fedaeda21d9dd4851410a1afb82f1358" alt=""></button>
            </form>
        @endcan
        @can('delete', $post)
            <form action="{{ route('posts.destroy', $post) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class=""><img class="w-8" src="https://cdn-icons.flaticon.com/png/512/2213/premium/2213475.png?token=exp=1650583153~hmac=3fcc47f9b20f9da63f3e3545290318e3" alt=""></button>
            </form>
        @endcan

        <div class="flex items-center">
            @auth
                @if (!$post->likedBy(auth()->user()))
                    <form action="{{ route('posts.likes', $post) }}" method="post" class="">
                        @csrf
                        <button type="submit" class="bg-blue-500 px-3 py-1 text-white rounded-l-lg">Reserve
                        </button>
                    </form>
                @else
                    <form action="{{ route('posts.likes', $post) }}" method="post" class="">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-400 px-3 py-1 text-white rounded-l-lg">Cancel
                        </button>
                    </form>
                @endif
            @endauth

            <span class="border-2 border-slate-200 py-0.5 px-2 rounded-r-lg">{{ $post->likes->count() }} {{ Str::plural('Reservation', $post->likes->count()) }}</span>

        </div>

    </div>
    <div class="info bg-teal-500 text-white w-full py-2 mt-5 flex items-center justify-center gap-5 rounded-b-lg">
        <div class="item-info flex flex-col items-center">
            <span class="font-bold">User name</span>
            <a href="{{ route('users.posts', $post->user) }}">{{ $post->user->name }}</a>    
        </div>
        <div class="item-info flex flex-col items-center">
            <span class="font-bold">Number</span>
            <p>{{ $post->participants }}</p>
        </div>
        <div class="item-info flex flex-col items-center">
            <span class="font-bold">Favorite {{ $post->favorite }}</span>
            {{-- @if (!$post->likedBy(auth()->user()))
              <img class="w-5" src="https://cdn-icons-png.flaticon.com/512/1946/1946408.png" alt="">
            @else
                <img class="w-5" src="https://cdn-icons.flaticon.com/png/512/2550/premium/2550357.png?token=exp=1650576494~hmac=b6ad5c74307f8fd42624c80fcaccb65a" alt="">
            @endif --}}
            <img class="w-5" src="https://cdn-icons.flaticon.com/png/512/2550/premium/2550357.png?token=exp=1650576494~hmac=b6ad5c74307f8fd42624c80fcaccb65a" alt="">
        </div>
    </div>
</div>