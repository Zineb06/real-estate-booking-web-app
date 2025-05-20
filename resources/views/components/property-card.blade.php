<!-- resources/views/components/property-card.blade.php -->
<div class="bg-white shadow rounded-xl overflow-hidden">
    <div class="p-4">
        <h2 class="text-lg font-bold text-primary">{{ $name }}</h2>
        <p class="text-gray-700 mt-2">{{ $description }}</p>
        <p class="text-secondary font-semibold mt-2">{{ $price }} € / nuit</p>
        <div class="mt-4">
            {{ $slot }}
        </div>
    </div>
</div>
