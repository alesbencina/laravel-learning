<div>
    <article class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <section class="flex items-center gap-4">
            <div>
                <p class="font-medium text-gray-700">{{ $post->author->name }}</p>
                <p class="text-sm text-gray-500">{{ $post->created_at->diffForHumans() }}</p>
            </div>
        </section>

        <section class="mt-8 ck-content">
            <h1 class="text-3xl font-bold mb-4">{{ $post->title }}</h1>
            <p class="text-gray-700 mb-6">
                {!! $post->description !!}
            </p>
        </section>
        <div class="col-span-8 col-start-5 mt-10 space-y-6 max-w-4xl mx-auto">

        @auth
                @livewire('frontend.comment.form', ['post' => $post], key('form-'. $post->id))
        @endauth
        @if ($post->comments->count() >= 1)
                @livewire('frontend.comment.grid', ['postId' => $post->id], key('grid-'.$post->id))
        @else
            <div>
                No comments yet.
            </div>
        @endif
        </div>

    </article>
    <script>hljs.highlightAll();</script>
</div>
