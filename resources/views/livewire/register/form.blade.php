    <div class="max-w-lg mx-auto mt-10">
        <h1 class="text-center font-bold text-xl ">User registration livewire</h1>
        <form class="mt-10 bg-gray-50 p-6 rounded-xl" wire:submit.prevent="registerUser">
            @csrf
            <div class="mb-6">
                <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    Name
                </label>
                <input class="border border-gray-400 p-2 w-full rounded"
                       type="text"
                       name="name"
                       id="name"
                       value="{{ old('name') }}"
                       required
                       wire:model.defer="name"
                >
                @error('name')
                <p class="text-red-500 text-xs mt2"> {{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    Username
                </label>
                <input class="border border-gray-400 p-2 w-full rounded"
                       type="text"
                       name="username"
                       id="username"
                       required
                       value="{{ old('username') }}"
                       wire:model.defer="username"
                >
                @error('username')
                <p class="text-red-500 text-xs mt2"> {{ $message }}</p>
                @enderror
            </div>

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
                       wire:model.defer="email"
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
                       wire:model.defer="password"
                >
                @error('password')
                <p class="text-red-500 text-xs mt2"> {{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button
                        type="submit"
                        class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                >
                    Register
                </button>
            </div>
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <li class="text-red-500 text-xs">{{ $error }}</li>
                @endforeach
            @endif
        </form>
    </div>

