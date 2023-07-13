<x-layouts.app>
    {{ $tag->name }}
    @foreach($posts as $post)
        <article id="{{ $post->id }}">
            <h2>
                {{ $post->title }}
            </h2>

            <a href="/blog/{{ $post->url_alias }}">{{ $post->title }}</a>
        </article>
    @endforeach
</x-layouts.app>

