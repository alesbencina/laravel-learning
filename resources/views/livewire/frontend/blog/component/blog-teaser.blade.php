<div class="py-6 px-5 {{ $class }}">
    <div class="flex-1 lg:mr-8">
        <div class="relative h-0" style="padding-bottom: 66.67%;">
            <img src="{{ asset($post->files->first()->path) }}" alt="Blog Post illustration"
                 class="absolute inset-0 object-cover w-full h-full rounded-xl">
        </div>
    </div>

    <div class="flex flex-col justify-between">
        <header>
            <div class="mt-4">
                <div class="text-3xl">
                    {{ $post->title }}
                </div>

                <span class="mt-2 block text-gray-400 text-xs">
                        Published <time>{{ $post->created_at->diffForHumans() }}</time>
                    </span>
            </div>
        </header>

        <div class="space-x-2 mt-4 h-15 min-h-full">
            {{ $post->summary }}
        </div>

        <div class="space-x-2 mt-4 mb-4 flex">
            @livewire('frontend.tags.teaser', ['tags' => $post->tag])
        </div>

        <footer class="flex justify-end items-center">
            <div>
                <a href="/blog/{{ $post->url_alias }}"
                   class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                >Read More</a>
            </div>

        </footer>

    </div>
</div>
