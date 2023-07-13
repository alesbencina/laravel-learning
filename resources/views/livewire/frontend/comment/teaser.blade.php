<article class="flex bg-gray-100 border border-gray-200 p-6 rounded-xl space-x-4 m-2">
    <div class="flex-shrink-0">
        <img src="https://i.pravatar.cc/{{ $comment->id }}" alt="" width="60" height="60" class="rounded-xl">
    </div>

    <div>
        <header class="mb-4">
            <h3 class="font-bold">{{$comment->user->name}}</h3>

            <p class="text-xs">
                Posted
                <time>{{$comment->created_at->format('F j, Y, g:i a')}}</time>
            </p>
        </header>

        <p>
            {{ $comment->body }}
        </p>
    </div>
    @auth
        @livewire('frontend.comment.delete', ['comment' => $comment])
    @endauth
</article>
