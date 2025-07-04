@props(['image', 'title'])

<div {{ $attributes->merge(['class' => 'bg-cover bg-center rounded-4xl']) }} style="background-image: url('{{ asset($image) }}')">
    <div class="flex flex-col justify-end h-full p-4">
        <div class="flex flex-row items-center gap-2">
            <img class="w-6 h-6" src="/assets/img/psychiatry/arrow-icon.webp" alt="arrow-icon" />
            <p class="text-white font-semibold text-2xl">{{ $title }}</p>
        </div>
    </div>
</div>

