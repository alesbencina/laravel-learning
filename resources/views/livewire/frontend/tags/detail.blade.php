
@section('meta_title', $tag->name . ' - AB Blog')
@section('meta_description', $tag->name)

<div class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
    <h1 class="text-3xl font-bold mb-4">{{ $tag->name }}</h1>
    <p class="text-gray-700 mb-6">
        description
        {{ $tag->name }}
    </p>
    @livewire('frontend.blog.grid', ['all' => FALSE, 'posts' => $posts])
</div>
