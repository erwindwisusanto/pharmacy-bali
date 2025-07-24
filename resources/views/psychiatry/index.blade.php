@extends('layouts.psychiatry')

@section('title', 'Psychiatry')

@section('content')
    
{{-- MOBILE (Use For Mobile Only) --}}
{{-- <div class="max-w-md mx-auto block md:hidden">
    <nav class="flex items-center justify-between p-4">
        <img class="w-auto h-10" src="/assets/img/psychiatry/cs-logo.png" alt="cepat sehat logo" />
        <a href="{{ route('order-list') }}"
            id="cart-button"
            class="flex items-center justify-center gap-2 transition-all duration-200">
            <img id="cart-icon" class="w-8 h-8" src="/assets/img/psychiatry/cart-icon.png" alt="cart-icon" />
            <p id="cart-label" class="font-semibold text-xl hidden">My Cart (0)</p>
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

        <form id="search-form">
            <input id="search-input" class="border-2 border-[#1AD0D0] focus:outline-[#1AD0D0] w-full p-2 rounded-full mt-4" placeholder="Search medicines" type="text" name="q">
        </form>

        <div id="scroll-container" class="overflow-x-auto whitespace-nowrap no-scrollbar mt-4">
            <div class="inline-flex gap-2">
                <button data-category="all" 
                    class="category-btn flex items-center gap-2 px-4 py-2 border rounded-full text-sm text-white bg-[#1AD0D0] cursor-pointer">
                    <p>All Medicine</p>
                </button>
                <button data-category="Depression" 
                    class="category-btn flex items-center gap-2 px-4 py-2 rounded-full text-sm text-black bg-[#F3F4F6] cursor-pointer">
                    <p>Depression</p>
                </button>
                <button data-category="Anxiety" 
                    class="category-btn flex items-center gap-2 px-4 py-2 rounded-full text-sm text-black bg-[#F3F4F6] cursor-pointer">
                    <p>Anxiety</p>
                </button>
                <button data-category="Bipolar" 
                    class="category-btn flex items-center gap-2 px-4 py-2 rounded-full text-sm text-black bg-[#F3F4F6] cursor-pointer">
                    <p>Bipolar</p>
                </button>
                <button data-category="ADHD" 
                    class="category-btn flex items-center gap-2 px-4 py-2 rounded-full text-sm text-black bg-[#F3F4F6] cursor-pointer">
                    <p>ADHD</p>
                </button>
            </div>
        </div>

        <div id="medicine-container" class="flex flex-row items-center justify-center gap-4 mt-4 flex-wrap">
            @foreach ($medicines as $med)
            <div class="medicine-card" data-name="{{ strtolower($med['name']) }}" data-category="{{ $med['category'] }}" data-image="{{ $med['image'] }}" data-id="{{ $med['id'] }}">
                <img class="w-[170px] h-auto rounded-3xl" src="{{ $med['image'] }}" alt="" />
                <p class="font-medium text-center mt-2">{{ $med['name'] }}</p>
                <button class="bg-[#1AD0D0] py-2 px-4 rounded-full w-full cursor-pointer">
                    <div class="flex flex-row items-center gap-2 justify-center">
                        <img class="w-6 h-6" src="/assets/img/psychiatry/cart-icon-white.png" alt="cart-icon" />
                        <p class="text-white add-to-cart">Add To Cart</p>
                    </div>
                </button>
            </div>
            @endforeach
        </div>
    </section>

    <section id="couldnt-find" class="px-4 mt-10">
        <h2 class="text-center text-[#1AD0D0] text-3xl font-semibold">Couldn't Find Your Preferred Medicine ?</h2>
        <h4 class="text-center text-lg mt-2">Tell Us What You Need. We'll Handle the Rest.</h4>

        <x-cta-btn class="mt-4" title="Let Us Know"/>
    </section>

    @include('components.mobile.footer')
</div> --}}

<div class="max-w-5xl mx-auto">
    {{-- Navbar Section --}}
    <nav class="fixed top-0 left-1/2 transform -translate-x-1/2 max-w-screen-sm w-full bg-white p-4 max-w-md md:max-w-5xl">
        <div class="flex items-center justify-between">
            <img width="160" height="24" class="w-[160px] h-auto" src="/assets/img/psychiatry/pb-logo.png" alt="pharmacy bali logo" />
            <a href="{{ route('order-list') }}"
                id="cart-button"
                class="flex items-center justify-center gap-2 transition-all duration-200">
                <img id="cart-icon" class="w-8 h-8" src="/assets/img/psychiatry/cart-icon.png" alt="cart-icon" />
                <p id="cart-label" class="font-semibold text-xl hidden">My Cart (0)</p>
            </a>

        </div>
    </nav>

    {{-- Hero Section --}}
    <section id="hero" class="pt-22 hidden md:block">
        <h1 class="font-semibold text-center text-3xl text-[#1AD0D0]">Prescribed Psychiatry Medications, <br> Delivered To Your Door</h1>
        <img width="600px" height="400px" class="w-[600px] h-auto mx-auto rounded-3xl my-8" src="/assets/img/psychiatry/desktop/hero-image-desktop.webp" alt="cepat sehat logo" />

        <x-cta-btn class="w-[300px]" title="Get Medicine"/>
    </section>
    <section id="hero" class="mt-12 bg-[url('/assets/img/psychiatry/hero-image-new.webp')] bg-cover bg-center h-[650px] w-full block md:hidden max-w-md mx-auto">
        <div class="flex flex-col justify-end h-full pb-20 px-4 text-white">
            <h1 class="font-semibold text-center text-3xl mb-6">Prescribed Psychiatry Medications, Delivered To Your Door</h1>

            <x-cta-btn class="w-full" title="Get Medicine"/>
        </div>
    </section>

    {{-- How It Works Section --}}
    <section id="how-it-works" class="px-4 mt-10 py-10 bg-[#F3F4F6] hidden md:block">
        <h2 class="text-center text-[#1AD0D0] text-3xl font-semibold">How It Works</h2>
        <h4 class="text-center text-lg mt-2">Simple Steps to Support Your Mental Health</h4>

        <x-how-it-works class="w-[600px] h-[225px]" image="https://ik.imagekit.io/j8phzwpsbx/psychiatry/step-one-desktop.webp" step="Step 1 :" description="Online Doctor Consultation"/>
        <x-how-it-works class="w-[600px] h-[225px]" image="https://ik.imagekit.io/j8phzwpsbx/psychiatry/step-two-desktop.webp" step="Step 2 :" description="Receive Your Prescription"/>
        <x-how-it-works class="w-[600px] h-[225px]" image="https://ik.imagekit.io/j8phzwpsbx/psychiatry/step-three-desktop.webp" step="Step 3 :" description="Medications Delivered To You"/>

        <x-cta-btn class="mt-4 w-[300px]" title="Speak To Doctor"/>
    </section>
    <section id="how-it-works" class="px-4 py-10 bg-[#F3F4F6] max-w-md mx-auto md:hidden">
        <h2 class="text-center text-[#1AD0D0] text-3xl font-semibold">How It Works</h2>
        <h4 class="text-center text-lg mt-2">Simple Steps to Support Your Mental Health</h4>

        <x-how-it-works class="w-full h-[125px]" image="/assets/img/psychiatry/step-one.webp" step="Step 1 :" description="Online Doctor Consultation"/>
        <x-how-it-works class="w-full h-[125px]" image="/assets/img/psychiatry/step-two.webp" step="Step 2 :" description="Receiver Your Prescription"/>
        <x-how-it-works class="w-full h-[125px]" image="/assets/img/psychiatry/step-three.webp" step="Step 3 :" description="Medications Delivered To You"/>

        <x-cta-btn class="mt-4" title="Speak To Doctor"/>
    </section>

    {{-- Specific Needs Section --}}
    <section id="specific-needs" class="px-4 mt-10  hidden md:block">
        <h2 class="text-center text-[#1AD0D0] text-3xl font-semibold">Targeted Care Medications <br> For Your Specific Needs</h2>
        <h4 class="text-center text-lg mt-2">We are here to support individuals managing a range of conditions.</h4>
    
        <div class="flex items-center items-center justify-center flex-wrap gap-6 mt-4 w-[600px] mx-auto">
            <x-specific-needs class="w-[280px] h-[280px]" image="https://ik.imagekit.io/j8phzwpsbx/psychiatry/need-one.webp" title="Depression"/>
            <x-specific-needs class="w-[280px] h-[280px]" image="https://ik.imagekit.io/j8phzwpsbx/psychiatry/need-two.webp" title="Anxiety"/>
            <x-specific-needs class="w-[280px] h-[280px]" image="https://ik.imagekit.io/j8phzwpsbx/psychiatry/need-three.webp" title="Bipolar"/>
            <x-specific-needs class="w-[280px] h-[280px]" image="https://ik.imagekit.io/j8phzwpsbx/psychiatry/need-four.webp" title="ADHD"/>
        </div>
    </section>
    <section id="specific-needs" class="px-4 mt-10 max-w-md mx-auto md:hidden">
        <h2 class="text-center text-[#1AD0D0] text-3xl font-semibold">Targeted Care Medications for Your Specific Needs</h2>
        <h4 class="text-center text-lg mt-2">We are here to support individuals managing a range of conditions.</h4>
    
        <x-specific-needs class="mt-4 h-72 w-full" image="/assets/img/psychiatry/need-one.webp" title="Depression"/>
        <x-specific-needs class="mt-2 h-72 w-full" image="/assets/img/psychiatry/need-two.webp" title="Anxiety"/>
        <x-specific-needs class="mt-2 h-72 w-full" image="/assets/img/psychiatry/need-three.webp" title="Bipolar"/>
        <x-specific-needs class="mt-2 h-72 w-full" image="/assets/img/psychiatry/need-four.webp" title="ADHD"/>
    </section>

    {{-- Explore Medicine Section --}}
    <section id="explore-medicines" class="px-4 mt-10">
        <h2 class="text-center text-[#1AD0D0] text-3xl font-semibold max-w-md md:max-w-6xl mx-auto">Explore Our Range of Medicines</h2>
        <h4 class="text-center text-lg mt-2 max-w-md md:max-w-6xl mx-auto">Browse Our Available Medicines</h4>

        <div class="text-center">
            <form id="search-form">
                <input id="search-input" class="border-2 border-[#1AD0D0] focus:outline-[#1AD0D0] md:w-[600px] w-full p-2 rounded-full mt-4 max-w-md md:max-w-6xl mx-auto" placeholder="Search medicines" type="text" name="q">
            </form>
        </div>

        <div id="scroll-container" class="overflow-x-auto whitespace-nowrap no-scrollbar mt-4 text-center max-w-md md:max-w-6xl mx-auto">
            <div class="inline-flex gap-2">
                <button data-category="all" 
                    class="category-btn flex items-center gap-2 px-4 py-2 border rounded-full text-sm text-white bg-[#1AD0D0] cursor-pointer">
                    <p>All Medicine</p>
                </button>
                <button data-category="Depression" 
                    class="category-btn flex items-center gap-2 px-4 py-2 rounded-full text-sm text-black bg-[#F3F4F6] cursor-pointer">
                    <p>Depression</p>
                </button>
                <button data-category="Anxiety" 
                    class="category-btn flex items-center gap-2 px-4 py-2 rounded-full text-sm text-black bg-[#F3F4F6] cursor-pointer">
                    <p>Anxiety</p>
                </button>
                <button data-category="Bipolar" 
                    class="category-btn flex items-center gap-2 px-4 py-2 rounded-full text-sm text-black bg-[#F3F4F6] cursor-pointer">
                    <p>Bipolar</p>
                </button>
                <button data-category="ADHD" 
                    class="category-btn flex items-center gap-2 px-4 py-2 rounded-full text-sm text-black bg-[#F3F4F6] cursor-pointer">
                    <p>ADHD</p>
                </button>
            </div>
        </div>

        <div id="medicine-container" class="flex flex-row items-center justify-center gap-4 mt-4 flex-wrap max-w-md md:max-w-6xl mx-auto md:w-[600px]">
            @foreach ($medicines as $med)
            <div class="medicine-card" data-name="{{ ($med['name']) }}" data-category="{{ $med['category'] }}" data-image="{{ $med['image'] }}" data-id="{{ $med['id'] }}">
                <img class="w-[170px] h-[170px] rounded-3xl" src="{{ $med['image'] }}" alt="">
                <p class="font-medium text-center mt-2">{{ $med['name'] }}</p>
                <button class="bg-[#1AD0D0] py-2 px-4 rounded-full w-full cursor-pointer add-to-cart-container">
                    <div class="flex flex-row items-center gap-2 justify-center">
                        <img class="w-6 h-6" src="/assets/img/psychiatry/cart-icon-white.png" alt="cart-icon" />
                        <p class="text-white add-to-cart">Add To Cart</p>
                    </div>
                </button>
                {{-- When user clicked add to cart activate this counter --}}
                <div id="counter-container" class="flex flex-row items-center justify-between">
                    <button id="decrement" class="bg-[#1AD0D0] rounded-full px-3 py-1 text-white text-xl decrement">
                        -
                    </button>
                    <span class="quantity">0</span>
                    <button id="increment" class="bg-[#1AD0D0] rounded-full px-3 py-1 text-white text-xl increment">
                        +
                    </button>
                </div>
            </div>
            @endforeach
            <div id="no-results-message" class="text-red-500">Medicine not found</div>
        </div>
    </section>

    {{-- Couldnt Find Section --}}
    <section id="couldnt-find" class="px-4 mt-10 hidden md:block">
        <h2 class="text-center text-[#1AD0D0] text-3xl font-semibold">Couldn't Find Your Preferred Medicine ?</h2>
        <h4 class="text-center text-lg mt-2">Tell Us What You Need. We'll Handle the Rest.</h4>

        <x-cta-btn class="mt-4 w-[300px]" title="Let Us Know"/>
    </section>
    <section id="couldnt-find" class="px-4 mt-10 max-w-md mx-auto md:hidden ">
        <h2 class="text-center text-[#1AD0D0] text-3xl font-semibold">Couldn't Find Your Preferred Medicine ?</h2>
        <h4 class="text-center text-lg mt-2">Tell Us What You Need. We'll Handle the Rest.</h4>

        <x-cta-btn class="mt-4" title="Let Us Know"/>
    </section>

    {{-- Footer Section --}}
    <div class="hidden md:block">
        @include('components.desktop.footer')
    </div>
    <div class="max-w-md mx-auto md:hidden">
        @include('components.mobile.footer')
    </div>
</div>

<style>
    .no-scrollbar::-webkit-scrollbar {
        display: none;
    }
</style>

<script>
    function updateLocalStorageCart(product, change) {
        const id = product.dataset.id;
        const name = product.dataset.name;
        const category = product.dataset.category;
        const image = product.dataset.image;

        let cart = JSON.parse(localStorage.getItem('cartItems')) || [];
        let item = cart.find(p => p.id === id);

        if (item) {
            item.quantity += change;

            if (item.quantity <= 0) {
                cart = cart.filter(p => p.id !== id);
            }
        } else if (change > 0) {
            cart.push({
                id,
                name,
                category,
                image,
                quantity: 1
            });
        }

        localStorage.setItem('cartItems', JSON.stringify(cart));
        updateCartButton();
        return cart;
    }

    function getItemQuantity(id) {
        const cart = JSON.parse(localStorage.getItem('cartItems')) || [];
        const item = cart.find(p => p.id === id);
        return item ? item.quantity : 0;
    }

    function updateQuantityDisplay(productDiv, quantity) {
        productDiv.querySelector('.quantity').textContent = quantity;

        const counterContainer = productDiv.querySelector('#counter-container');
        const addToCartBtn = productDiv.querySelector('.add-to-cart-container');
        if (quantity > 0) {
            counterContainer.style.display = 'flex'; // tampilkan counter
            addToCartBtn.classList.add('hidden')
        } else {
            counterContainer.style.display = 'none'; // sembunyikan counter
            addToCartBtn.classList.remove('hidden')
        }
    }

    document.querySelectorAll('.medicine-card').forEach(productDiv => {
        const id = productDiv.dataset.id;

        updateQuantityDisplay(productDiv, getItemQuantity(id));

        productDiv.querySelector('.increment').addEventListener('click', () => {
            updateLocalStorageCart(productDiv, 1);
            updateQuantityDisplay(productDiv, getItemQuantity(id));
        });

        productDiv.querySelector('.decrement').addEventListener('click', () => {
            updateLocalStorageCart(productDiv, -1);
            updateQuantityDisplay(productDiv, getItemQuantity(id));
        });

        productDiv.querySelector('.add-to-cart')?.addEventListener('click', () => {
            updateLocalStorageCart(productDiv, 1);
            updateQuantityDisplay(productDiv, getItemQuantity(id));
        });
    });

    function updateCartButton() {
        const cart = JSON.parse(localStorage.getItem('cartItems')) || [];
        const totalQty = cart.reduce((sum, item) => sum + item.quantity, 0);

        const cartBtn = document.getElementById('cart-button');
        const cartIcon = document.getElementById('cart-icon');
        const cartLabel = document.getElementById('cart-label');

        if (totalQty > 0) {
            cartBtn.classList.add('bg-green-500', 'rounded-full', 'py-2', 'px-4', 'text-white');
            cartLabel.textContent = `My Cart (${totalQty})`;
            cartLabel.classList.remove('hidden');
            cartIcon.src = '/assets/img/psychiatry/cart-icon-white.png';
        } else {
            cartBtn.classList.remove('bg-green-500', 'rounded-full', 'py-2', 'px-4');
            cartLabel.classList.add('hidden');
            cartIcon.src = '/assets/img/psychiatry/cart-icon.png';
        }
    }


    document.addEventListener('DOMContentLoaded', function() {
        // For slider
        const slider = document.getElementById('scroll-container');
        if (slider) {
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
                const walk = (x - startX) * 1;
                slider.scrollLeft = scrollLeft - walk;
            });
        }
    
        // For live search
        const searchInput = document.getElementById('search-input');
        const medicineCards = document.querySelectorAll('.medicine-card');
        const categoryButtons = document.querySelectorAll('.category-btn');
        
        if (searchInput && medicineCards.length && categoryButtons.length) {
            // Store all medicines for filtering
            const allMedicines = Array.from(medicineCards).map(card => ({
                element: card,
                name: card.dataset.name.toLowerCase(),
                category: card.dataset.category
            }));
            
            // Filter function
            function filterMedicines() {
                const searchTerm = searchInput.value.toLowerCase();
                const activeCategoryBtn = document.querySelector('.category-btn.active') || 
                                        document.querySelector('.category-btn.bg-\\[\\#1AD0D0\\]');
                const activeCategory = activeCategoryBtn ? activeCategoryBtn.dataset.category : 'all';
                
                let hasVisibleItems = false;
                
                allMedicines.forEach(medicine => {
                    const matchesSearch = medicine.name.includes(searchTerm);
                    const matchesCategory = activeCategory === 'all' || medicine.category === activeCategory;
                    const shouldShow = matchesSearch && matchesCategory;
                    
                    medicine.element.style.display = shouldShow ? 'block' : 'none';
                    if (shouldShow) hasVisibleItems = true;
                });
                
                // Optional: Show "no results" message if needed
                document.getElementById('no-results-message').style.display = hasVisibleItems ? 'none' : 'block';
            }
            
            // Search input event with debounce
            let debounceTimer;
            searchInput.addEventListener('input', () => {
                clearTimeout(debounceTimer);
                debounceTimer = setTimeout(filterMedicines, 300);
            });
            
            // Category buttons events
            categoryButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Update active button using a dedicated class
                    categoryButtons.forEach(btn => {
                        btn.classList.remove('active', 'text-white', 'bg-[#1AD0D0]', 'border');
                        btn.classList.add('text-black', 'bg-[#F3F4F6]');
                    });
                    
                    this.classList.add('active', 'text-white', 'bg-[#1AD0D0]', 'border');
                    this.classList.remove('text-black', 'bg-[#F3F4F6]');
                    
                    filterMedicines();
                });
            });
            
            // Initialize
            filterMedicines();
        }

        updateCartButton();
    });
</script>
  
@endsection