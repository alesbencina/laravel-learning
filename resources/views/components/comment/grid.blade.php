@props(['comments'])

@foreach($comments as $comment)
    <x-comment.single :comment="$comment"/>
@endforeach
