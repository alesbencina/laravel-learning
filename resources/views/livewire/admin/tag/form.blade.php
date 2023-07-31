<div>
    <form wire:submit.prevent="store">
        @csrf
        <div class="row">
            <div class="col-lg-2 col-md-2">
                <div class="form-group">
                    <label for="name" class="form-control-label">{{ __('Tag name') }}</label>
                    <input class="form-control"
                           type="text"
                           placeholder="name"
                           wire:model="tag.name"
                    >
                    @error('tag.name') <span class="text-danger">{{ $message }}</span>@enderror
                </div>

                <div class="form-group">
                    <label for="url_alias" class="form-control-label">{{ __('URL alias') }}</label>
                    <input class="form-control"
                           type="text"
                           placeholder="url_alias"
                           wire:model="tag.url_alias"
                    >
                    @error('tag.url_alias') <span class="text-danger">{{ $message }}</span>@enderror
                </div>

                <div class="form-group">
                    <label>{{ __('Logo') }}</label>
                    @livewire('file-upload', ['fileModel' => $fileModel, 'width' => 100, 'height' => 100])
                </div>

            </div>
            <div class="form-group">
                <div class="right-0">
                    <button class="btn btn-success">Save</button>
                </div>
            </div>
        </div>
    </form>

</div>
