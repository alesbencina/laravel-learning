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
                                        name="description"
                                        wire:model="description"
                                        wire:key="ckeditor-1"
                                        x-data
                                        x-init="
                                          CKEDITOR.replace('description');
                                          CKEDITOR.instances.description.on('change', function() {
                                            $dispatch('input', this.getData());
                                          });"
                                ></textarea>

                                @error('description') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
