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
        <input
                type="file"
                wire:model.defer="file"
                wire:change="upload"
                class="form-control"
        >
        <div x-show="isUploading">
            <progress max="100" x-bind:value="progress"></progress>
        </div>
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
