<div>
    <form id="create-comment" wire:submit="create">
        @csrf
        <div class="mb-6">
            <header class="flex items-center">
                <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}"
                     alt=""
                     width="40"
                     height="40"
                     class="rounded-full">

                <h2 class="ml-4">Want to participate?</h2>
            </header>

            <div class="mt-6">
                <textarea
                        name="body"
                        class="w-full text-sm focus:outline-none focus:ring"
                        rows="5"
                        placeholder="Quick, thing of something to say!"
                        required
                        wire:model.live="body"
                ></textarea>
                <div> @error('body'){{ $message }}@enderror </div>

            </div>

            <div class="flex justify-end mt-6 pt-6 border-t border-gray-200">
                <button
                        type="submit"
                        class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                >
                    Post comment
                </button>
            </div>

        </div>
    </form>
</div>
