@foreach($comments as $key => $comment)
    @livewire('frontend.comment.teaser', ['comment' => $comment], key($key))
@endforeach
