@extends('layouts.psychiatry')

@section('title', 'Psychiatry')

@section('content')
    
{{-- MOBILE --}}
<div class="max-w-md mx-auto block md:hidden">
    <nav class="flex items-center justify-between p-4">
        <img class="w-auto h-10" src="/assets/img/psychiatry/cs-logo.png" alt="cepat sehat logo" />
        <a href="{{ route('order-list') }}">
            <img class="w-8 h-8" src="/assets/img/psychiatry/cart-icon.png" alt="cart-icon" />
        </a>
    </nav>

    <section id="hero" class="bg-[url('/assets/img/psychiatry/hero-image.webp')] bg-cover bg-center h-[650px] w-full">
        <div class="flex flex-col justify-end h-full py-10 px-4 text-white">
            <h1 class="font-semibold text-center text-3xl mb-6">Prescribed Psychiatry Medications, Delivered To Your Door</h1>
            <x-cta-btn class="w-full" title="Get Medicine"/>
        </div>
    </section>

    <section id="how-it-works" class="px-4 mt-10">
        <h2 class="text-center text-[#1AD0D0] text-3xl font-semibold">How It Works</h2>
        <h4 class="text-center text-lg mt-2">Simple Steps to Support Your Mental Health</h4>

        <div class="bg-[url('/assets/img/psychiatry/step-one.webp')] bg-cover bg-center h-[125px] w-full rounded-4xl mt-4">
            <div class="flex flex-col justify-end h-full p-4">
                <p class="text-white font-semibold text-lg">Step 1 : <br> <span class="font-medium">Online Doctor Consultation</span></p>
            </div>
        </div>
        <div class="bg-[url('/assets/img/psychiatry/step-two.webp')] bg-cover bg-center h-[125px] w-full rounded-4xl mt-2">
            <div class="flex flex-col justify-end h-full p-4">
                <p class="text-white font-semibold text-lg">Step 2 : <br> <span class="font-medium">Receive Your Prescription</span></p>
            </div>
        </div>
        <div class="bg-[url('/assets/img/psychiatry/step-three.webp')] bg-cover bg-center h-[125px] w-full rounded-4xl mt-2">
            <div class="flex flex-col justify-end h-full p-4">
                <p class="text-white font-semibold text-lg">Step 3 : <br> <span class="font-medium">Medications Delivered To You</span></p>
            </div>
        </div>

        <x-cta-btn class="mt-4" title="Speak To Doctor"/>
    </section>

    <section id="specific-needs" class="px-4 mt-10 py-10 bg-[#F3F4F6]">
        <h2 class="text-center text-[#1AD0D0] text-3xl font-semibold">Targeted Care Medications for Your Specific Needs</h2>
        <h4 class="text-center text-lg mt-2">We are here to support individuals managing a range of conditions.</h4>
    
        <x-specific-needs class="mt-4 h-72 w-full" image="/assets/img/psychiatry/need-one.webp" title="Depression"/>
        <x-specific-needs class="mt-2 h-72 w-full" image="/assets/img/psychiatry/need-two.webp" title="Anxiety"/>
        <x-specific-needs class="mt-2 h-72 w-full" image="/assets/img/psychiatry/need-three.webp" title="Bipolar"/>
        <x-specific-needs class="mt-2 h-72 w-full" image="/assets/img/psychiatry/need-four.webp" title="ADHD"/>
    </section>

    <section id="explore-medicines" class="px-4 mt-10">
        <h2 class="text-center text-[#1AD0D0] text-3xl font-semibold">Explore Our Range of Medicines</h2>
        <h4 class="text-center text-lg mt-2">Browse Our Available Medicines</h4>

        <input class="border-2 border-[#1AD0D0] focus:outline-[#1AD0D0] w-full p-2 rounded-full mt-4" placeholder="Search medicines" type="text">

        <div id="scroll-container" class="overflow-x-auto whitespace-nowrap no-scrollbar mt-4">
            <div class="inline-flex gap-2">
                <button
                    class="flex items-center gap-2 px-4 py-2 border rounded-full text-sm text-white bg-[#1AD0D0] cursor-pointer">
                    <p>All Medicine</p>
                </button>
                <button
                    class="flex items-center gap-2 px-4 py-2 rounded-full text-sm text-black bg-[#F3F4F6] cursor-pointer">
                    <p>Depression</p>
                </button>
                <button
                    class="flex items-center gap-2 px-4 py-2 rounded-full text-sm text-black bg-[#F3F4F6] cursor-pointer">
                    <p>Anxiety</p>
                </button>
                <button
                    class="flex items-center gap-2 px-4 py-2 rounded-full text-sm text-black bg-[#F3F4F6] cursor-pointer">
                    <p>Bipolar</p>
                </button>
                <button
                    class="flex items-center gap-2 px-4 py-2 rounded-full text-sm text-black bg-[#F3F4F6] cursor-pointer">
                    <p>ADHD</p>
                </button>
            </div>
        </div>

        <div class="flex flex-row items-center justify-center gap-4 mt-4 flex-wrap">
            <div>
                <img class="w-[170px] h-auto rounded-3xl" src="/assets/img/psychiatry/medicine-one.webp" alt="" />
                <p class="font-medium text-center mt-2">Obat ABC</p>
                <button class="bg-[#1AD0D0] py-2 px-4 rounded-full w-full cursor-pointer">
                    <div class="flex flex-row items-center gap-2 justify-center">
                        <img class="w-6 h-6" src="/assets/img/psychiatry/cart-icon-white.png" alt="cart-icon" />
                        <p class="text-white">Add To Cart</p>
                    </div>
                </button>
            </div>
            <div>
                <img class="w-[170px] h-auto rounded-3xl" src="/assets/img/psychiatry/medicine-one.webp" alt="" />
                <p class="font-medium text-center mt-2">Obat ABC</p>
                <button class="bg-[#1AD0D0] py-2 px-4 rounded-full w-full cursor-pointer">
                    <div class="flex flex-row items-center gap-2 justify-center">
                        <img class="w-6 h-6" src="/assets/img/psychiatry/cart-icon-white.png" alt="cart-icon" />
                        <p class="text-white">Add To Cart</p>
                    </div>
                </button>
            </div>
        </div>
    </section>

    <section id="couldnt-find" class="px-4 mt-10">
        <h2 class="text-center text-[#1AD0D0] text-3xl font-semibold">Couldn't Find Your Preferred Medicine ?</h2>
        <h4 class="text-center text-lg mt-2">Tell Us What You Need. We'll Handle the Rest.</h4>

        <x-cta-btn class="mt-4" title="Let Us Know"/>
    </section>

    @include('components.mobile.footer')
</div>


{{-- DESKTOP --}}
<div class="max-w-6xl mx-auto hidden md:block">
    <nav class="flex items-center justify-between p-4">
        <img class="w-auto h-10" src="/assets/img/psychiatry/cs-logo.png" alt="cepat sehat logo" />
        <a href="{{ route('order-list') }}">
            <img class="w-8 h-8" src="/assets/img/psychiatry/cart-icon.png" alt="cart-icon" />
        </a>
    </nav>

    <section id="hero">
        <h1 class="font-semibold text-center text-3xl text-[#1AD0D0]">Prescribed Psychiatry Medications, <br> Delivered To Your Door</h1>
        <img class="w-[600px] h-auto mx-auto rounded-3xl my-8" src="/assets/img/psychiatry/desktop/hero-image-desktop.webp" alt="cepat sehat logo" />
        <x-cta-btn class="w-[300px]" title="Get Medicine"/>
    </section>

    <section id="how-it-works" class="px-4 mt-10">
        <h2 class="text-center text-[#1AD0D0] text-3xl font-semibold">How It Works</h2>
        <h4 class="text-center text-lg mt-2">Simple Steps to Support Your Mental Health</h4>

        <div class="bg-[url('/assets/img/psychiatry/desktop/step-one-desktop.webp')] bg-cover bg-center w-[600px] h-[225px] rounded-4xl mt-4 mx-auto">
            <div class="flex flex-col justify-end h-full p-4">
                <p class="text-white font-semibold text-lg">Step 1 : <br> <span class="font-medium">Online Doctor Consultation</span></p>
            </div>
        </div>
        <div class="bg-[url('/assets/img/psychiatry/desktop/step-two-desktop.webp')] bg-cover bg-center w-[600px] h-[225px] rounded-4xl mt-4 mx-auto">
            <div class="flex flex-col justify-end h-full p-4">
                <p class="text-white font-semibold text-lg">Step 2 : <br> <span class="font-medium">Receive Your Prescription</span></p>
            </div>
        </div>
        <div class="bg-[url('/assets/img/psychiatry/desktop/step-three-desktop.webp')] bg-cover bg-center w-[600px] h-[225px] rounded-4xl mt-4 mx-auto">
            <div class="flex flex-col justify-end h-full p-4">
                <p class="text-white font-semibold text-lg">Step 3 : <br> <span class="font-medium">Medications Delivered To You</span></p>
            </div>
        </div>
        <x-cta-btn class="mt-4 w-[300px]" title="Speak To Doctor"/>
    </section>

    <section id="specific-needs" class="px-4 mt-10 py-10 bg-[#F3F4F6]">
        <h2 class="text-center text-[#1AD0D0] text-3xl font-semibold">Targeted Care Medications <br> For Your Specific Needs</h2>
        <h4 class="text-center text-lg mt-2">We are here to support individuals managing a range of conditions.</h4>
    
        <div class="flex items-center items-center justify-center flex-wrap gap-6 mt-4 w-[600px] mx-auto">
            <x-specific-needs class="w-[280px] h-[280px]" image="/assets/img/psychiatry/desktop/need-one.webp" title="Depression"/>
            <x-specific-needs class="w-[280px] h-[280px]" image="/assets/img/psychiatry/desktop/need-two.webp" title="Anxiety"/>
            <x-specific-needs class="w-[280px] h-[280px]" image="/assets/img/psychiatry/desktop/need-three.webp" title="Bipolar"/>
            <x-specific-needs class="w-[280px] h-[280px]" image="/assets/img/psychiatry/desktop/need-four.webp" title="ADHD"/>
        </div>
    </section>

    <section id="explore-medicines" class="px-4 mt-10">
        <h2 class="text-center text-[#1AD0D0] text-3xl font-semibold">Explore Our Range of Medicines</h2>
        <h4 class="text-center text-lg mt-2">Browse Our Available Medicines</h4>

        <div class="text-center">
            <input class="border-2 border-[#1AD0D0] focus:outline-[#1AD0D0] w-[600px] p-2 rounded-full mt-4 mx-auto" placeholder="Search medicines" type="text">
        </div>

        <div id="scroll-container" class="overflow-x-auto whitespace-nowrap no-scrollbar mt-4 text-center">
            <div class="inline-flex gap-2">
                <button
                    class="flex items-center gap-2 px-4 py-2 border rounded-full text-sm text-white bg-[#1AD0D0] cursor-pointer">
                    <p>All Medicine</p>
                </button>
                <button
                    class="flex items-center gap-2 px-4 py-2 rounded-full text-sm text-black bg-[#F3F4F6] cursor-pointer">
                    <p>Depression</p>
                </button>
                <button
                    class="flex items-center gap-2 px-4 py-2 rounded-full text-sm text-black bg-[#F3F4F6] cursor-pointer">
                    <p>Anxiety</p>
                </button>
                <button
                    class="flex items-center gap-2 px-4 py-2 rounded-full text-sm text-black bg-[#F3F4F6] cursor-pointer">
                    <p>Bipolar</p>
                </button>
                <button
                    class="flex items-center gap-2 px-4 py-2 rounded-full text-sm text-black bg-[#F3F4F6] cursor-pointer">
                    <p>ADHD</p>
                </button>
            </div>
        </div>

        <div class="flex flex-row items-center justify-center gap-4 mt-4 flex-wrap w-[600px] mx-auto">
            <div>
                <img class="w-[170px] h-auto rounded-3xl" src="/assets/img/psychiatry/medicine-one.webp" alt="" />
                <p class="font-medium text-center mt-2">Obat ABC</p>
                <button class="bg-[#1AD0D0] py-2 px-4 rounded-full w-full cursor-pointer">
                    <div class="flex flex-row items-center gap-2 justify-center">
                        <img class="w-6 h-6" src="/assets/img/psychiatry/cart-icon-white.png" alt="cart-icon" />
                        <p class="text-white">Add To Cart</p>
                    </div>
                </button>
            </div>
            <div>
                <img class="w-[170px] h-auto rounded-3xl" src="/assets/img/psychiatry/medicine-one.webp" alt="" />
                <p class="font-medium text-center mt-2">Obat ABC</p>
                <button class="bg-[#1AD0D0] py-2 px-4 rounded-full w-full cursor-pointer">
                    <div class="flex flex-row items-center gap-2 justify-center">
                        <img class="w-6 h-6" src="/assets/img/psychiatry/cart-icon-white.png" alt="cart-icon" />
                        <p class="text-white">Add To Cart</p>
                    </div>
                </button>
            </div>
            <div>
                <img class="w-[170px] h-auto rounded-3xl" src="/assets/img/psychiatry/medicine-one.webp" alt="" />
                <p class="font-medium text-center mt-2">Obat ABC</p>
                <button class="bg-[#1AD0D0] py-2 px-4 rounded-full w-full cursor-pointer">
                    <div class="flex flex-row items-center gap-2 justify-center">
                        <img class="w-6 h-6" src="/assets/img/psychiatry/cart-icon-white.png" alt="cart-icon" />
                        <p class="text-white">Add To Cart</p>
                    </div>
                </button>
            </div>
        </div>
    </section>

    <section id="couldnt-find" class="px-4 mt-10">
        <h2 class="text-center text-[#1AD0D0] text-3xl font-semibold">Couldn't Find Your Preferred Medicine ?</h2>
        <h4 class="text-center text-lg mt-2">Tell Us What You Need. We'll Handle the Rest.</h4>

        <x-cta-btn class="mt-4 w-[300px]" title="Let Us Know"/>
    </section>

    @include('components.desktop.footer')
</div>

<style>
    .no-scrollbar::-webkit-scrollbar {
        display: none;
    }
</style>

<script>
    const slider = document.getElementById('scroll-container');
    let isDown = false;
    let startX;
    let scrollLeft;
  
    slider.addEventListener('mousedown', (e) => {
      isDown = true;
      slider.classList.add('active');
      startX = e.pageX - slider.offsetLeft;
      scrollLeft = slider.scrollLeft;
    });
  
    slider.addEventListener('mouseleave', () => {
      isDown = false;
      slider.classList.remove('active');
    });
  
    slider.addEventListener('mouseup', () => {
      isDown = false;
      slider.classList.remove('active');
    });
  
    slider.addEventListener('mousemove', (e) => {
      if (!isDown) return;
      e.preventDefault();
      const x = e.pageX - slider.offsetLeft;
      const walk = (x - startX) * 1; // Adjust scroll speed if needed
      slider.scrollLeft = scrollLeft - walk;
    });
  </script>
  
@endsection