<x-layouts.app>
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @include("_blog-post-header",['tags','authors'])

        @if ($posts->count())
            <x-blog-posts-grid :posts="$posts"/>
        @else
            <div>No posts</div>
        @endif
    </main>

</x-layouts.app>
