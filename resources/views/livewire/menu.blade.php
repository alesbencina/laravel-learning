<div>
    @foreach($menuLinks as $link)
        <a class="text-xs font-bold uppercase" href="{{ $link['url'] }}">{{ $link['name'] }}</a>
    @endforeach
</div>
