@props(['image', 'step', 'description'])

<div {{ $attributes->merge(['class' => 'bg-cover bg-center rounded-4xl mt-4 mx-auto']) }} style="background-image: url('{{ asset($image) }}')">
    <div class="flex flex-col justify-end h-full p-4">
        <p class="text-white font-semibold text-lg">{{ $step }} <br> <span class="font-medium">{{ $description }}</span></p>
    </div>
</div>
