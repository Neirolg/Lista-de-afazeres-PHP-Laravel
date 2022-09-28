<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
        <img src="{{ asset('/logo/todolist230x90.png') }}" />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __(' Antes de cotinuar, verifique seu endereço de email entrando no link que nós acabamos de te enviar.  Se você não recebeu o email, nós o enviaremos outro.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __(' Um novo link de verificação foi enviado para o endereço de email que você informou nas configurações de usuário.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-jet-button type="submit">
                        {{ __('Reenviar email de verificação') }}
                    </x-jet-button>
                </div>
            </form>

            <div>
                <a
                    href="{{ route('profile.show') }}"
                    class="underline text-sm text-gray-600 hover:text-gray-900"
                >
                    {{ __('Editar Perfil') }}</a>

                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf

                    <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 ml-2">
                        {{ __('Sair') }}
                    </button>
                </form>
            </div>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
