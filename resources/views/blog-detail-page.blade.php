<x-layout>
    <article id="{{ $post->id }}">
        <h2>
            {{ $post->title }}
        </h2>
        <div>
            {{$post->description}}
        </div>

        <div><a href="/blog-posts">Back</a>

        </div>
    </article>

</x-layout>

