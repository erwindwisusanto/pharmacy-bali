@extends('layouts.psychiatry')

@section('title', 'Psychiatry - Your Order List')

@section('content')
    
{{-- MOBILE --}}
<div class="max-w-md mx-auto block md:hidden">
    <nav class="flex items-center p-4">
        <img class="w-auto h-10" src="/assets/img/psychiatry/cs-logo.png" alt="cepat sehat logo" />
    </nav>

    <section id="order-list" class="px-4 mt-4">
        <h2 class="text-center text-[#1AD0D0] text-3xl font-semibold">Your Order List</h2>
        <h4 class="text-center text-lg mt-2">Make Sure Your Order Is Correct</h4>

        <div class="flex items-center justify-between border-2 border-[#1AD0D0] rounded-4xl mt-4">
            <div class="flex items-center gap-2">
                <img class="w-[100px] h-auto rounded-4xl" src="/assets/img/psychiatry/medicine-one.webp" alt="">
                <p class="font-medium">Obat DEF</p>
            </div>
            <p class="font-medium mr-2">x 2 item</p>
        </div>
        
        <x-cta-btn class="mt-4" title="Order Now"/>
        <a href="#" class="p-2 border-2 border-green-500 rounded-full mx-auto flex items-center justify-center gap-2 mt-4">
            <img class="w-8 h-8" src="/assets/img/psychiatry/close-icon.png" alt="whatsapp-icon" />
            <p class="font-semibold text-xl text-green-500">Cancel</p>
        </a>
    </section>

    @include('components.mobile.footer')
</div>

{{-- DESKTOP --}}
<div class="max-w-6xl mx-auto hidden md:block">
    <nav class="flex items-center justify-between p-4">
        <img class="w-auto h-10" src="/assets/img/psychiatry/cs-logo.png" alt="cepat sehat logo" />
    </nav>

    <section id="order-list" class="mt-10 px-4">
        <h2 class="text-center text-[#1AD0D0] text-3xl font-semibold">Your Order List</h2>
        <h4 class="text-center text-lg mt-2">Make Sure Your Order Is Correct</h4>

        <div class="flex items-center justify-between border-2 border-[#1AD0D0] rounded-4xl mt-4 w-[600px] mx-auto">
            <div class="flex items-center gap-2">
                <img class="w-[100px] h-auto rounded-4xl" src="/assets/img/psychiatry/medicine-one.webp" alt="">
                <p class="font-medium">Obat DEF</p>
            </div>
            <p class="font-medium mr-2">x 2 item</p>
        </div>
        
        <x-cta-btn class="mt-4 w-[300px]" title="Order Now"/>
        <a href="#" class="p-2 border-2 border-green-500 rounded-full mx-auto flex items-center justify-center gap-2 mt-4 w-[300px]">
            <img class="w-8 h-8" src="/assets/img/psychiatry/close-icon.png" alt="whatsapp-icon" />
            <p class="font-semibold text-xl text-green-500">Cancel</p>
        </a>
    </section>

    @include('components.desktop.footer')
</div>



  
@endsection