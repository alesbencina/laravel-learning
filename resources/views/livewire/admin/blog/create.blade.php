<div class="blog-create">
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h6 class="mb-0">{{ __('Create blog post') }} </h6>
            </div>
            <div class="card-body pt-4 p-3">
                <div>
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>
                @include('components.blog.form')

                <div>
                    <button wire:click="backToOverview" class="btn">Back to overview</button>
                </div>
            </div>
        </div>
    </div>

</div>

@include('components.ckeditor.ckeditor',['ckeditorSelector' => '#ckeditor', 'field' => 'description'])
