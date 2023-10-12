@section('meta_title', $post->title . ' - AB Blog')
@section('meta_description', $post->summary)

<div>
    <article class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <section class="flex items-center gap-4">
            <div>
                <p class="font-medium text-gray-700">{{ $post->author->name }}</p>
                <p class="text-sm text-gray-500">{{ $post->created_at->diffForHumans() }}</p>
            </div>
        </section>

        <section class="mt-8 ck-content">
            @isset($post->tag)
                <div class="space-x-2 mt-4 mb-4 flex">
                    @livewire('frontend.tags.teaser', ['tags' => $post->tag])
                </div>
            @endisset

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
    <script type="application/ld+json">
    {
        "@context": "https://schema.org/",
        "@type": "Blog",
        "@id": "https://dataliberate.com/blog/",
        "mainEntityOfPage": "https://dataliberate.com/blog",
        "name": "Ales Bencina Blog",
        "description": "Thoughts about technologies that are happening in my career path",
        "publisher": {
            "@type": "Organization",
            "@id": "https://dataliberate.com",
            "name": "Ales Bencina",
            "logo": {
                "@type": "ImageObject",
                "@id": "https://dataliberate.com/wp-content/uploads/2011/12/Data_Liberate_Logo-200.png",
                "url": "https://dataliberate.com/wp-content/uploads/2011/12/Data_Liberate_Logo-200.png",
                "width": "600",
                "height": "60"
            }
        },
        "blogPost": [
            {
                "@type": "BlogPosting",
                "@id": "https://dataliberate.com/2019/05/14/library-metadata-evolution-final-mile/#BlogPosting",
                "mainEntityOfPage": "{{ $post->title }}",
                "headline": "{{ $post->title }}",
                "name": "{{ $post->title }}",
                "description": "{{ $post->summary }}",
                "datePublished": "2019-05-14",
                "dateModified": "2019-05-14",
                "author": {
                    "@type": "Person",
                    "@id": "https://dataliberate.com/author/richard-wallis/#Person",
                    "name": "Ales Bencina"
                },
                "image": {
                    "@type": "ImageObject",
                    "@id": "https://dataliberate.com/wp-content/uploads/2019/05/Metadata_Evolution_the_Final_Mile.jpg",
                    "url": "https://dataliberate.com/wp-content/uploads/2019/05/Metadata_Evolution_the_Final_Mile.jpg",
                    "height": "362",
                    "width": "388"
                },
                "url": "https://dataliberate.com/2019/05/14/library-metadata-evolution-final-mile/",
                "keywords": [
                    "rust",
                    "programming",
                    "software development"
                ]
            }
            ]
    }
    </script>
</div>
