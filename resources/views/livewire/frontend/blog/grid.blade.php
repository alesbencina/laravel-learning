<div>
    @if($posts->count() > 1)
        <div class="lg:grid lg:grid-cols-6">
            @foreach($posts as $post)
                @livewire('frontend.blog.component.blog-teaser', ['post' => $post, 'loopIteration' => $loop->iteration ])
            @endforeach
        </div>
    @else
        <p>There's current no blog post related with the term.</p>
    @endif

</div>
