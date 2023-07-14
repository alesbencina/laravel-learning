<div>
    <div class="col-lg-2 col-md-2">
            @error('file')
            <div class="alert alert-danger show">{{ $message }}</div>
            @enderror
            <input type="file" wire:model="file" class="form-control">
            <button class="btn btn-primary mt-2" wire:click.prevent="upload()">Upload</button>

            @if(session('success_msg'))
                File uploaded.
            @endif

        @if($fileModel)
            <div class="preview">
                <img src="{{ asset($fileModel->path) }}">
            </div>
        @endif
    </div>
</div>
