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
                        <div class="col-md-6">
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
                            {{--                            Use wire-ignore for ckeditor, because it dissapears--}}
                            <div wire:ignore class="form-group">
                                <label for="description" class="form-control-label">{{ __('Description') }}</label>
                                <textarea
                                        class="ckeditor form-control"
                                        id="ckeditor"
                                        wire:model="description"
                                >{{ $description }}</textarea>

                                @error('description') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="d-flex justify-content-between">
                                <button wire:click="backToOverview" class="btn btn-simple">Back to overview</button>

                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </div>


                    </div>

                </form>

            </div>
        </div>
    </div>
</div>

<script>
    ClassicEditor.create(document.querySelector('#ckeditor'), {
        codeBlock: {
            languages: [
                // Do not render the CSS class for the plain text code blocks.
                { language: 'plaintext', label: 'Plain text', class: '' },

                // Use the "php-code" class for PHP code blocks.
                { language: 'php', label: 'PHP', class: 'php-code' },

                // Use the "js" class for JavaScript code blocks.
                // Note that only the first ("js") class will determine the language of the block when loading data.
                { language: 'javascript', label: 'JavaScript', class: 'language-html' },

                // Python code blocks will have the default "language-python" CSS class.
                { language: 'python', label: 'Python' }
            ]
        }
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
