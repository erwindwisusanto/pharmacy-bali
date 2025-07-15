@extends('layouts.psychiatry')

@section('title', 'Psychiatry - Your Order List')

@section('content')
    
{{-- MOBILE (Use For Mobile Only) --}}
{{-- <div class="max-w-md mx-auto block md:hidden">
    <nav class="flex items-center p-4">
        <img class="w-auto h-10" src="/assets/img/psychiatry/cs-logo.png" alt="cepat sehat logo" />
    </nav>

    <section id="order-list" class="px-4 mt-4">
        <h2 class="text-center text-[#1AD0D0] text-3xl font-semibold">Your Order List</h2>
        <h4 class="text-center text-lg mt-2">Make Sure Your Order Is Correct</h4>

        <div class="product-list">

        </div>
        <div class="flex items-center justify-between border-2 border-[#1AD0D0] rounded-4xl mt-4">
            <div class="flex items-center gap-2">
                <img class="w-[100px] h-auto rounded-4xl" src="/assets/img/psychiatry/medicine-one.webp" alt="">
                <p class="font-medium">Obat DEF</p>
            </div>
            <p class="font-medium mr-2">x 2 item</p>
        </div>
        
        <x-cta-btn class="mt-4" title="Order Now" id="whatsapp-btn"/>
        <a href="#" class="p-2 border-2 border-green-500 rounded-full mx-auto flex items-center justify-center gap-2 mt-4">
            <img class="w-8 h-8" src="/assets/img/psychiatry/close-icon.png" alt="whatsapp-icon" />
            <p class="font-semibold text-xl text-green-500">Cancel</p>
        </a>
    </section>

    @include('components.mobile.footer')
</div> --}}

<div class="max-w-5xl mx-auto">

    <nav class="flex items-center justify-between p-4 max-w-md mx-auto md:max-w-5xl">
        <img class="w-[160px] h-auto" src="/assets/img/psychiatry/pb-logo.png" alt="pharmcay bali logo" />
    </nav>

    <section id="order-list" class="mt-10 px-4 max-w-md mx-auto md:max-w-5xl">
        <h2 class="text-center text-[#1AD0D0] text-3xl font-semibold">Your Order List</h2>
        <h4 class="text-center text-lg mt-2">Make Sure Your Order Is Correct</h4>

        <div class="product-list">
            <div class="flex items-center justify-between border-2 border-[#1AD0D0] rounded-4xl mt-4 mx-auto w-full md:w-[600px]">
                <div class="flex items-center gap-2">
                    <img class="w-[100px] h-auto rounded-4xl" src="/assets/img/psychiatry/medicine-one.webp" alt="">
                    <p class="font-medium">Obat DEF</p>
                </div>
                <p class="font-medium mr-2">x 2 item</p>
            </div>
        </div>
        
        <div id="cta-action">
            <x-cta-btn class="mt-4 w-full md:w-[300px]" id="whatsapp-btn" title="Order Now"/>
            <a href="/psychiatry" class="p-2 border-2 border-green-500 rounded-full mx-auto flex items-center justify-center gap-2 mt-4 w-full md:w-[300px]">
                <img class="w-8 h-8" src="/assets/img/psychiatry/close-icon.png" alt="whatsapp-icon" />
                <p class="font-semibold text-xl text-green-500">Cancel</p>
            </a>
        </div>
        <a id="empty-action" href="/psychiatry" class="px-2 py-3 bg-[#1AD0D0] rounded-full mx-auto flex items-center justify-center gap-2 mt-4 w-full md:w-[300px] hidden">
            <p class="font-semibold text-xl text-white">Explore Medicine</p>
        </a>
    </section>

    <div class="hidden md:block">
        @include('components.desktop.footer')
    </div>
    <div class="max-w-md mx-auto md:hidden">
        @include('components.mobile.footer')
    </div>
    
</div>

<script>
    function removeFromCart(index) {
        const cart = JSON.parse(localStorage.getItem('cartItems')) || [];
        cart.splice(index, 1);
        localStorage.setItem('cartItems', JSON.stringify(cart));
        renderCartProducts();
    }

    function renderCartProducts() {
        const cart = JSON.parse(localStorage.getItem('cartItems')) || [];
        const container = document.querySelector('.product-list');
        const ctaSection = document.getElementById('cta-action');
        const emptySection = document.getElementById('empty-action');

        container.innerHTML = '';

        if (cart.length === 0) {
            container.innerHTML = '<p class="text-center text-gray-500 text-lg mt-4">Your cart is empty. <br/> Explore our medicine and find what you need!</p>';
            emptySection.classList.remove('hidden')
            
            if (ctaSection) {
                ctaSection.classList.add('hidden');
            }
            return;
        }

        if (ctaSection) {
            ctaSection.classList.remove('hidden');
        }

        cart.forEach((item, index) => {
            const productHTML = `
            <div class="flex items-center justify-between border-2 border-[#1AD0D0] rounded-4xl mt-4 mx-auto w-full md:w-[600px]">
                <div class="flex items-center gap-2">
                    <img class="w-[100px] h-auto rounded-4xl" src="/assets/img/psychiatry/${item.image}" alt="${item.name}">
                    <p class="font-medium">${item.name}</p>
                </div>
                <p class="font-medium mr-2">x ${item.quantity} item</p>
                <button onclick="removeFromCart(${index})" class="delete-btn p-2 rounded-full cursor-pointer">
                    <img class="w-6 h-6" src="/assets/img/psychiatry/delete-icon.png" alt="Delete">
                </button>
            </div>  
            `;

            container.insertAdjacentHTML('beforeend', productHTML);
        });
    }

    document.addEventListener('DOMContentLoaded', renderCartProducts);

    function getCartMessage() {
        const cart = JSON.parse(localStorage.getItem('cartItems')) || [];

        if (cart.length === 0) {
            return 'Cart is empty.';
        }

        let message = 'Hello Pharmacy Bali, I want to order this medicine:\n\n';

        cart.forEach((item, index) => {
            message += `- ${item.name} x ${item.quantity}\n`;
        });

        return encodeURIComponent(message);
    }

    document.getElementById('whatsapp-btn').addEventListener('click', function (e) {
        e.preventDefault();

        const message = getCartMessage();
        const phoneNumber = '6281259804025';

        const url = `https://api.whatsapp.com/send?phone=${phoneNumber}&text=${message}`;
        window.open(url, '_blank');
    });

</script>

@endsection