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
</x-layout>

