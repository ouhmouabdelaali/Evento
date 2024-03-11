<div>
    <form wire:submit.prevent="submitForm" class="mt-6 space-y-6">
        @csrf

        <div>
            <x-input-label for="title" :value="__('Title')" />
            <x-text-input id="title" wire:model.defer="title" class="mt-1 block w-full" />
            @error('title') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div>
            <x-input-label for="description" :value="__('Description')" />
            <textarea id="description" wire:model.defer="description" class="mt-1 block w-full" rows="4"></textarea>
            @error('description') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div>
    <x-input-label for="date" :value="__('Date')" />
    <input id="date" type="date" wire:model.defer="date" class="mt-1 block w-full" />
    @error('date') <span class="text-red-500">{{ $message }}</span> @enderror
</div>


        <div>
            <x-input-label for="location" :value="__('Location')" />
            <x-text-input id="location" wire:model.defer="location" class="mt-1 block w-full" />
            @error('location') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div>
            <x-input-label for="category_id" :value="__('Category')" />
            <select id="category_id" wire:model.defer="category_id" class="mt-1 block w-full">
                <option value="">Select Category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div>
            <x-input-label for="seats_available" :value="__('Seats Available')" />
            <x-number-input id="seats_available" wire:model.defer="seats_available" class="mt-1 block w-full" />
            @error('seats_available') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>
            @if (session('message'))
                <p class="text-sm text-gray-600 dark:text-gray-400">{{ session('message') }}</p>
            @endif
        </div>
    </form>
</div>
