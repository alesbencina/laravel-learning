<x-layout>

    @foreach($posts as $post)
        <article id="{{ $post->id }}">
            <h2>
                {{ $post->title }}
            </h2>
            <div>
                <a href="/authors/{{$post->author->username}}">Author: {{$post->author->name}}</a>
            </div>

            <div>
                <a href="/blog-posts/{{ $post->url_alias }}">{{ $post->title }}</a>
            </div>

            <div>
                <span>Tags:</span>
                <div class="tags">
                    <a href="/tag/{{ $post->tag->url_alias }}">{{ $post->tag->name }}</a>
                </div>
            </div>
        </article>
    @endforeach

        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
            <x-post-teaser-featured />
            <div class="lg:grid lg:grid-cols-3">
                <x-post-teaser/>
                <x-post-teaser/>
                <x-post-teaser/>
            </div>


            <div class="lg:grid lg:grid-cols-2">
                <x-post-teaser/>
                <x-post-teaser/>
            </div>

        </main>


</x-layout>

