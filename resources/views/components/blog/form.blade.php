<form wire:submit.prevent="store">
    @csrf

    <div class="row justify-content-md-center ">
        <div class="col-lg-10 col-md-10">
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
            <div class="form-group">
                <label for="description" class="form-control-label">{{ __('Description') }}</label>
                {{-- Use wire-ignore for ckeditor, because it dissapears--}}
                <div wire:ignore>
                         <textarea
                                 class="ckeditor form-control"
                                 id="ckeditor"
                                 wire:model="description"
                                 name="description"
                         >
                             {{ $description }}
                         </textarea>
                </div>

                @error('description') <span class="text-danger">{{ $message }}</span>@enderror
            </div>

            <div class="form-group">
                <label for="title" class="form-control-label">{{ __('Summary') }}</label>

                <textarea
                        class="form-control"
                        id="summary"
                        wire:model="summary"
                        name="summary"
                >{{ $summary }}</textarea>
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

        </div>
        <div class="col-lg-2 col-md-2 position-sticky top-20 z-index-sticky align-self-start card p-3">
            <div class="form-group">

                <div class="form-check form-switch">
                    <input wire:model="status"
                           class="form-check-input"
                           type="checkbox"
                           id="status"
                           name="status"
                           checked="">
                    <label class="form-check-label" for="status">{{ __('Publication status')}}</label>
                </div>

                @error('status') <span class="text-danger">{{ $message }}</span>@enderror
                <small>{{ __('Publish or unpublish blog post.')}}</small>
            </div>

            <div class="form-group">
                <label for="slug" class="form-control-label">{{ __('URL alias') }}</label>
                <input class="form-control"
                       type="url_alias"
                       placeholder="URL alias"
                       id="url_alias"
                       wire:model="url_alias"
                >
                @error('url_alias') <span class="text-danger">{{ $message }}</span>@enderror
                <small>{{ __('The blog post URL alias. Enter the url link without special characters.')}}</small>
            </div>

            <div class="form-group">
                <div class="right-0">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>