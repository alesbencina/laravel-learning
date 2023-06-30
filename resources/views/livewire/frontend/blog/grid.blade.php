<div>
    @if($posts->count() > 1)
        <div class="lg:grid lg:grid-cols-6">
            @foreach($posts as $post)
                @livewire('frontend.blog.component.blog-teaser', ['post' => $post, 'loopIteration' => $loop->iteration ])
            @endforeach
        </div>
    @endif

</div>
