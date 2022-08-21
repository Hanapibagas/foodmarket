<x-jet-action-section>
    <x-slot name="title">
        {{ __('Delete Account') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Permanently delete your account.') }}
    </x-slot>

    <x-slot name="content">
        <form method="POST" action="{{ route('logout') }}" x-data>
            @csrf

            <x-jet-danger-button href="{{ route('logout') }}"
                     @click.prevent="$root.submit();">
                {{ __('Log Out') }}
            </x-jet-danger-button>
        </form>
    </x-slot>
</x-jet-action-section>
