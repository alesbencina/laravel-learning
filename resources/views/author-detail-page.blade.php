<x-layout>
    <div>
        <h1>Author: {{$author->name}}</h1>
    </div>
        @foreach($posts as $post)
            <article id="{{ $post->id }}">
                <h2>
                    {{ $post->title }}
                </h2>

                <a href="/blog-posts/{{ $post->url_alias }}">{{ $post->title }}</a>
                <p>
                    <a href="/tag/{{ $post->tag->url_alias }}">{{ $post->tag->name }}</a>
                </p>
            </article>
        @endforeach

</x-layout>

