<div>
    <main class="max-w-lg mx-auto mt-10">
        <h1 class="text-center font-bold text-xl ">Login</h1>
        <form wire:submit="login" class="mt-10 bg-gray-50 p-6 rounded-xl">
            @csrf
            <div class="mb-6">
                <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    Email
                </label>
                <input class="border border-gray-400 p-2 w-full rounded"
                       type="email"
                       name="email"
                       id="email"
                       value="{{ old('email') }}"
                       required
                       wire:model.live="email"
                >
                @error('email')
                <p class="text-red-500 text-xs mt2"> {{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    Password
                </label>
                <input class="border border-gray-400 p-2 w-full rounded"
                       type="password"
                       name="password"
                       id="password"
                       required
                       wire:model.live="password"
                >
                @error('password')
                <p class="text-red-500 text-xs mt2"> {{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button type="submit"
                        class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                >
                    Login
                </button>
            </div>
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <li class="text-red-500 text-xs">{{ $error }}</li>
                @endforeach
            @endif
        </form>
    </main>
</div>
