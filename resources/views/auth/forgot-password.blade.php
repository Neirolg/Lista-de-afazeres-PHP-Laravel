@include('layouts.app')

<x-guest-layout>
    <div class="-my-20">
    <x-jet-authentication-card>
        <x-slot name="logo">
        <img src="{{ asset('/logo/todolist230x90.png') }}" />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600 text-justify">
            {{ __('Esqueceu sua senha? Não tem problemas. Apenas nos informe seu endereço de email e nós o enviaremos um link para redefinir sua senha e o permitirá escolher uma nova.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Enviar Email') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
    </div>
</x-guest-layout>
