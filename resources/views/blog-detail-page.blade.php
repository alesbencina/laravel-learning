<x-layout>
    <article id="{{ $post->id }}">
        <h2>
            {{ $post->title }}
        </h2>
        <a href="/author/{{$post->author->username}}">Blog post by: {{$post->author->name}}</a>
        <div>
            <code>
                Output dangerous. For printing html from db table.
            </code>
            <br>
            {!! $post->description !!}
        </div>
        <p>
            <a href="/tag/{{ $post->tag->url_alias }}">{{ $post->tag->name }}</a>
        </p>
        <div><a href="/blog-posts">Back</a>

        </div>
    </article>

</x-layout>

