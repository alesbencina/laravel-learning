<div>
    <article
            class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl"
            data-id="{{ $post->id }}">
        <div class="py-6 px-5 lg:flex">
            <div class="flex-1 lg:mr-8">
                <img src="./images/illustration-1.png" alt="Blog Post illustration" class="rounded-xl">
            </div>

            <div class="flex-1 flex flex-col justify-between">
                <header class="mt-8 lg:mt-0">
                    <div class="space-x-2">
                        @foreach($post->tag as $tag)
                            <a href="/tag/{{ $tag->url_alias }}"
                               class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                               style="font-size: 10px">
                                {{ $tag->name }}
                            </a>
                        @endforeach

                    </div>

                    <div class="mt-4">
                        <h1 class="text-3xl">
                            {{ $post->title }}
                        </h1>

                        <span class="mt-2 block text-gray-400 text-xs">
                        Published <time>{{ $post->created_at->diffForHumans() }}</time>
                    </span>
                    </div>
                </header>

                <div class="text-sm mt-2">
                    {{ $post->description }}
                </div>

                <footer class="flex justify-between items-center mt-8">
                    <div class="flex items-center text-sm">
                        <img src="./images/lary-avatar.svg" alt="Lary avatar">
                        <div class="ml-3">
                            <a class="font-bold"
                               href="/authors/{{$post->author->username}}">Author: {{$post->author->name}}</a>
                        </div>
                    </div>

                    <div class="hidden lg:block">
                        <a href="/blog/{{ $post->url_alias }}"
                           class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                        >Read More</a>
                    </div>
                </footer>
            </div>
        </div>
    </article>

</div>