<div>
    <article
            class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl"
            data-id="{{ $post->id }}">
        <div class="py-6 px-5 lg:flex">
            <div class="flex-1 lg:mr-8">
                <img src="{{ asset($post->files->first()->path) }}" alt="Blog Post illustration" class="rounded-xl">
            </div>

            <div class="flex-1 flex flex-col justify-between">
                <header class="mt-8 lg:mt-0">
                    <div class="mt-4">
                        <h1 class="text-3xl">
                            {{ $post->title }}
                        </h1>

                        <span class="mt-2 block text-gray-400 text-xs">
                        Published <time>{{ $post->created_at->diffForHumans() }}</time>
                    </span>
                    </div>
                </header>

                <div class="text-md mt-2">
                    {{ $post->summary }}
                </div>
                <div>
                    @livewire('frontend.tags.teaser', ['tags' => $post->tag])

                    <footer class="flex justify-end">
                        <div class="hidden lg:block">
                            <a href="/blog/{{ $post->url_alias }}"
                               class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                            >Read More</a>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </article>

</div>
