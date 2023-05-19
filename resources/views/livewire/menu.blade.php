<div>
    @foreach($menuLinks as $link)
        <a class="text-xs font-bold uppercase ml-4" href="{{ $link['url'] }}">{{ $link['name'] }}</a>
    @endforeach
</div>
