<head>
    <style>
        input:-webkit-autofill, 
input:-webkit-autofill:hover,  
input:-webkit-autofill:focus,
input:-webkit-autofill:visited, 
input:-webkit-autofill:link, 
input:-webkit-autofill:active  { 
    transition: background-color 5000s ease-in-out 0s; 
    -webkit-text-fill-color: #5a318d !important;
    -webkit-font-size: 1rem !important;
    font-size: 1rem !important;
  }
  .mt-4{
    font-size: 1rem !important;
  }
    </style>
</head>
<x-header>
</x-header>
<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" style="font-size: 1rem !important; color: #5a318d;" :value="__('Логин')" />
            <x-text-input id="name" class="block mt-1 w-full" style="font-size: 1rem !important; color: #5a318d;" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" style="font-size: 1rem !important; color: #5a318d;" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" style="font-size: 1rem !important; color: #5a318d;" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" style="font-size: 1rem !important; color: #5a318d;" :value="__('Пароль')" />

            <x-text-input id="password"  class="block mt-1 w-full" style="font-size: 1rem !important; color: #5a318d;"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" style="font-size: 1rem !important; color: #5a318d;" :value="__('Подтвердите пароль')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" style="font-size: 1rem !important; color: #5a318d;"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a style="color: #5a318d;" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Уже зарегестрированы?') }}
            </a>

            <x-primary-button class="ms-4" style="background-color: #5a318d;">
                {{ __('Регистрация') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
