<!-- resources/views/components/button.blade.php -->
<button {{ $attributes->merge(['class' => 'bg-primary hover:bg-blue-800 text-white font-bold py-2 px-4 rounded']) }}>
    {{ $slot }}
</button>
