@props(['post'])
<div class="">
    <a href="{{route('posts.show', $post->slug)}}">
        <div>
            <img class="w-full rounded-xl" src="{{ $post->image }}">
        </div>
    </a>
    <div class="mt-3">
        <div class="flex items-center mb-2">

            <p class="text-gray-500 text-sm">{{ $post->published_at }}</p>
        </div>
        <a href='{{route('posts.show', $post->slug)}}' class="text-xl font-bold text-gray-900">{{ $post->title }}</a>
    </div>

</div>
