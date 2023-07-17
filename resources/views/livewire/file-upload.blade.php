<div>
    <div
            x-data="{ isUploading: false, progress: 0 }"
            x-on:livewire-upload-start="isUploading = true"
            x-on:livewire-upload-finish="isUploading = false"
            x-on:livewire-upload-error="isUploading = false"
            x-on:livewire-upload-progress="progress = $event.detail.progress"
            class="col-lg-2 col-md-2"
    >
        @error('file')
        <div class="alert alert-danger show">{{ $message }}</div>
        @enderror
        <input type="file" wire:model="file" class="form-control">
        <button class="btn btn-primary mt-2" wire:click.prevent="upload()">Upload</button>
        <div x-show="isUploading">
            <progress max="100" x-bind:value="progress"></progress>
        </div>
        @if(session('success_msg'))
            File uploaded.
        @endif

        @if($fileModel)
            <div class="preview">
                <img src="{{ asset($fileModel->path) }}" class="h-auto max-w-xs" width="250px">
            </div>
        @endif
    </div>
</div>
