<div>
    @if (session()->has('message'))
        <div class="bg-green-500 text-white p-4 mb-4">
            {{ session('message') }}
        </div>
    @endif


        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-gray-700 rounded-lg shadow">
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-white">
                        Create New Product
                    </h3>
                    <button wire:click='$parent.createUserPopup' type="button" class="text-gray-400 bg-transparent hover:bg-gray-600 hover:text-white rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-toggle="crud-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <form wire:submit.prevent="createUser" class="p-4 md:p-5">
                    <div class="mt-4">
                        <x-label for="name" value="{{ __('Name') }}" class="block mb-2 text-sm font-medium text-white" />
                        <x-input id="name" class="bg-gray-600 border border-gray-500 text-white text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" type="text" wire:model.defer="name" required />
                        @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
            
                    <div class="mt-4">
                        <x-label for="surname" value="{{ __('Surname') }}" class="block mb-2 text-sm font-medium text-white" />
                        <x-input id="surname" class="bg-gray-600 border border-gray-500 text-white text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" type="text" wire:model.defer="surname" />
                        @error('surname') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
            
                    <div class="mt-4">
                        <x-label for="email" value="{{ __('Email') }}" class="block mb-2 text-sm font-medium text-white" />
                        <x-input id="email" class="bg-gray-600 border border-gray-500 text-white text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" type="email" wire:model.defer="email" />
                        @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
            
                    <div class="mt-4">
                        <x-label for="password" value="{{ __('Password') }}" class="block mb-2 text-sm font-medium text-white" />
                        <x-input id="password" class="bg-gray-600 border border-gray-500 text-white text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" type="password" wire:model.defer="password" required />
                        @error('password') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
            
                    <div class="mt-4">
                        <x-label for="profile_photo" value="{{ __('Profile Photo') }}" class="block mb-2 text-sm font-medium text-white" />
                        <x-input id="profile_photo" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" type="file" wire:model="profile_photo" />
                        @error('profile_photo') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
            
                    <div class="mt-4">
                        <x-label for="role" value="{{ __('Role') }}" class="block mb-2 text-sm font-medium text-white" />
                        <select id="role" class="bg-gray-600 border border-gray-500 text-white text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" wire:model.defer="role" required>
                            <option value="">{{ __('Select Role') }}</option>
                            @foreach ($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                        @error('role') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
            
                    <div class="mt-4">
                        <x-button class="bg-gray-600 hover:bg-gray-900 text-white font-bold py-2 px-4 rounded">
                            {{ __('Create User') }}
                        </x-button>
                    </div>
                </form>
            
            </div>
        </div>
    </div>
    

</div>