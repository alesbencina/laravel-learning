<div>
    <article class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <section class="flex items-center gap-4">
            <img src="https://i.pravatar.cc/50" alt="Author Picture" class="w-12 h-12 rounded-full">
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

        @auth
            <div class="col-span-8 col-start-5 mt-10 space-y-6 max-w-4xl mx-auto">
                <x-comment.form :post="$post"/>
            </div>
        @endauth
        @if ($comments->count() >= 1)
            <div class="col-span-8 col-start-5 mt-10 space-y-6 max-w-4xl mx-auto">
                <x-comment.grid :comments="$comments"/>
            </div>
        @else
            <div>
                No comments yet.
            </div>
        @endif
    </article>
    <script>hljs.highlightAll();</script>
</div>
