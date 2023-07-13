<div>
    @foreach($comments as $comment)
        @livewire('frontend.comment.teaser', ['comment' => $comment])
    @endforeach
</div>
