<div class="p-4 max-w-xl mx-auto bg-white shadow rounded">

    @if (session()->has('message'))
        <div class="bg-green-100 text-green-700 p-2 mb-4 rounded">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="submit">
        <div class="mb-4">
            <label class="block text-sm font-medium">Bien immobilier</label>
            <select wire:model="property_id" class="w-full border rounded px-2 py-1">
                <option value="">-- Choisir un bien --</option>
                @foreach ($properties as $property)
                    <option value="{{ $property->id }}">{{ $property->name }}</option>
                @endforeach
            </select>
            @error('property_id') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium">Date de début</label>
            <input type="date" wire:model="start_date" class="w-full border rounded px-2 py-1">
            @error('start_date') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium">Date de fin</label>
            <input type="date" wire:model="end_date" class="w-full border rounded px-2 py-1">
            @error('end_date') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="bg-primary text-white px-4 py-2 rounded">
            Réserver
        </button>
    </form>
</div>
