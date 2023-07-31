<div>
    <div class="space-x-2 mt-4 mb-4 flex">
        @foreach($tags as $tag)
            <a href="/tag/{{ $tag->url_alias }}" class="self-center">
                @if(count($tag->files) > 0)
                    <img src="{{ asset($tag->files()->first()->path) }}" alt="" class="p-1" width="45" height="45">
                @endif
            </a>
        @endforeach
    </div>
</div>
