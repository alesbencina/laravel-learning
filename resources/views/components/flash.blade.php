
@if(session()->has('success'))
    <div class="fixed bottom-3 right-3 text-white bg-blue-500 py-2 px-4 text-sm rounded-xl">
        <p>
            {{ session('success') }}
        </p>
    </div>
@endif
