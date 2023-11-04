<div class="container mx-auto space-y-10 px-4 py-8 lg:space-y-16 lg:px-8 lg:py-16 xl:max-w-7xl">
    <div class="bg-gray-50 shadow-sm dark:bg-gray-900/50">
        <div class="mx-auto w-full max-w-7xl px-4 py-2 lg:px-8 lg:py-5">
           <x-form wire:submit="save">
    <x-input label="Name" wire:model="name" />
    <x-input label="Amount" wire:model="amount" prefix="USD" money hint="It submits an unmasked value" />
    <x-slot:actions>
        <x-button label="Cancel" />
        <x-button label="Click me!" class="btn-primary" type="submit" spinner="save" />
    </x-slot:actions>
</x-form>
        </div>
    </div>

</div>
