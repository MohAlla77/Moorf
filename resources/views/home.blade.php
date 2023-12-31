<x-app-layout>
    @section('hero')
        <div class="w-full text-center py-32">
            <h1 class="text-2xl md:text-3xl font-bold text-center lg:text-5xl text-gray-700">
                Welcome to <span class="text-indigo-900 ">&lt;Moorf&gt;</span> <span class="text-gray-900"> News</span>
            </h1>
            <p class="text-gray-500 text-lg mt-1">We move Fast....</p>

        </div>
    @endsection
    <div class="mb-10 w-full">
        <div class="mb-16">
            <h2 class="mt-16 mb-5 text-3xl text-indigo-900 font-bold">Featured Posts</h2>
            <div class="w-full">
                <div class="grid grid-cols-3 gap-10 w-full">
                    @foreach ($featuredPost as $post)
                        <div class="md:col-span-1 col-span-3">
                            <x-Post.post-card :post="$post" />
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
        <hr>

        <h2 class="mt-16 mb-5 text-3xl text-indigo-900 font-bold">Latest Posts</h2>
        <div class="w-full mb-5">
            <div class="grid grid-cols-3 gap-10 w-full">
                @foreach ($featuredPost as $post)
                    <div class="md:col-span-1 col-span-3">
                        <x-Post.post-card :post="$post" />
                    </div>
                @endforeach
            </div>

        </div>

    </div>

</x-app-layout>
