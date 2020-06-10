<x-section>
    <x-form class="p-4" action="{{ action([\App\User\Controllers\UserSitesController::class, 'index']) }}">
        <legend>Create a new Content entry</legend>
        <x-button>{{ __('Create') }}</x-button>
    </x-form>
</x-section>
