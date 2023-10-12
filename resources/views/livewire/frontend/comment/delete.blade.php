<div>
    <form id="delete-comment" wire:submit="destroy">
        @csrf
        <div class="mb-6">
            <div class="flex justify-end mt-6 pt-6 border-t border-gray-200">
                <x-submit-button>Delete comment</x-submit-button>
            </div>
        </div>
    </form>
</div>
