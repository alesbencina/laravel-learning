<x-layout>

    @foreach($posts as $post)
        <article id="{{ $post->id }}">
            <h2>
                {{ $post->title }}
            </h2>

            <a href="/blog-posts{{ $post->url_alias }}">{{ $post->title }}</a>
        </article>
    @endforeach
</x-layout>

