<div>
    <form>
        @csrf
        <div>
            <x-label for="name" value="{{ __('Name') }}" />
            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
        </div>

        <div class="mt-4">
            <x-label for="surname" value="{{ __('Surname') }}" />
            <x-input id="surname" class="block mt-1 w-full" type="text" name="surname" :value="old('surname')" autofocus  />
        </div>

        <div class="mt-4">
            <x-label for="email" value="{{ __('Email') }}" />
            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
        </div>

        <div class="mt-4">
            <x-label for="password" value="{{ __('Password') }}" />
            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
        </div>

        <div class="mt-4">
            <x-label for="role" value="{{ __('Role') }}" />
            <x-input id="role" class="block mt-1 w-full" type="role" name="role" required />
        </div>
    </form>
</div>
