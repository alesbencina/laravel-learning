<div class="row">
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h6 class="mb-0">{{ __('Edit blog post') }} </h6>
            </div>
            <div class="card-body pt-4 p-3">
                <div>
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>

                <form wire:submit.prevent="update">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label for="title" class="form-control-label">{{ __('Title') }}</label>
                                <input class="form-control"
                                       type="text"
                                       placeholder="title"
                                       id="title"
                                       wire:model="title"
                                >
                                @error('title') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            {{-- Use wire-ignore for ckeditor, because it dissapears--}}
                            <div wire:ignore class="form-group">
                                <label for="description" class="form-control-label">{{ __('Description') }}</label>
                                <textarea
                                        class="ckeditor form-control"
                                        id="ckeditor"
                                        wire:model="description"
                                >{{ $description }}</textarea>

                                @error('description') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                            <div class="form-group">
                                <label for="title" class="form-control-label">{{ __('Summary') }}</label>
                                
                                <textarea
                                        class="form-control"
                                        id="summary"
                                        wire:model="summary"
                                >{{ $description }}</textarea>
                                <small>{{ __('The text used on the blog teasers overview and seo description metatag.')}}</small>
                                @error('summary') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                            <div class="form-group">
                                <label for="title" class="form-control-label">{{ __('Tags') }}</label>
                                <select
                                data-te-select-init
                                    name="tags" 
                                    id="tags" 
                                    multiple
                                    class="form-control"
                                >
                                    <option value="volvo">Volvo</option>
                                    <option value="saab">Saab</option>
                                    <option value="opel">Opel</option>
                                    <option value="audi">Audi</option>
                                </select>
                                @error('tags') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                            <div class="form-group">

                                <div class="form-check form-switch">
                                    <input wire:model="status" class="form-check-input" type="checkbox" id="status"
                                           checked="">
                                    <label class="form-check-label" for="rememberMe">Published</label>
                                </div>

                                @error('status') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                            <div class="d-flex justify-content-between">
                                <div>
                                    <button wire:click="backToOverview" class="btn btn-simple">Back to overview</button>
                                    <a href="/blog-posts/{{ $slug }}" class="btn btn--tiny" target="_blank">View on
                                        frontend</a>

                                </div>

                                <div class="right-0">
                                    <button type="submit" class="btn btn-success">Save</button>
                                </div>

                            </div>
                        </div>

                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
<script>

    document.addEventListener('DOMContentLoaded', () => {
        // Scroll on top when the node is updated.
        Livewire.on('gotoTop', () => {
            window.scrollTo({
                top: 15,
                left: 15,
                behaviour: 'smooth'
            })
        });

    });
    ClassicEditor.create(document.querySelector('#ckeditor'), {
        simpleUpload: {
            uploadUrl: "{{route('file.upload', ['_token' => csrf_token() ])}}",
        },
        codeBlock: {
            languages: [
                // Use the "php-code" class for PHP code blocks.
                {language: 'php', label: 'PHP', class: 'php-code'},
                {language: 'plaintext', label: 'Plain text', class: ''},

                // Use the "js" class for JavaScript code blocks.
                // Note that only the first ("js") class will determine the language of the block when loading data.
                {language: 'javascript', label: 'JavaScript', class: 'language-html'},

            ]
        },
    })
        .then(editor => {
            editor.model.document.on('change:data', () => {
            @this.set('description', editor.getData());
            });
        })
        .catch(error => {
            console.error(error);
        });


</script>

