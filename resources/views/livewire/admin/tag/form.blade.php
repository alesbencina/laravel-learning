<div>
    <form wire:submit.prevent="store">
        @csrf
        <div class="row">
            <div class="col-lg-2 col-md-2">
                <div class="form-group">
                    <label for="title" class="form-control-label">{{ __('Name') }}</label>
                    <input class="form-control"
                           type="text"
                           placeholder="title"
                           id="title"
                    >
                    @error('title') <span class="text-danger">{{ $message }}</span>@enderror
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
