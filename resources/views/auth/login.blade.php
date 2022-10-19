@include('layouts.navbar')

<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
        <img src="{{ asset('/logo/todolist.png') }}" />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
    

        <form method="POST" action="{{ route('login') }}">
            @csrf
            
            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-min" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Senha') }}" />
                <x-jet-input id="password" class="block mt-1 w-min" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Lembrar-me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Esqueceu sua senha?') }}
                    </a>
                @endif

                <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-2">
                                <button type="button" class="btn btn-outline-dark">
                                    Entrar
                                </button>
                            </div>
                        </div>
            </div>
        </form>
    </x-jet-authentication-card>
    </div>
</x-guest-layout>

