<x-shop-layout>
    <section class="mb-lg-14 mb-8 mt-8">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div>
                        <div class="mb-8">
                            <h1 class="fw-bold mb-0">Checkout</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="row">
                    <div class="col-xl-7 col-lg-6 col-md-12">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item py-4">
                                <a href="#" class="text-inherit h5" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    <i class="feather-icon icon-shopping-bag me-2 text-muted"></i>
                                    Delivery Detail
                                </a>
                                <div class="row g-2 mt-4 mb-3">
                                    <div class="col-9 col-lg-8 col-md-8">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="name"
                                                placeholder="Budiono Siregar Kapal Lawut" required />
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4 col-md-4">
                                        <div class="mb-3">
                                            <label for="age" class="form-label">Age</label>
                                            <input type="text" class="form-control" id="age" placeholder="23"
                                                required />
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-2 mb-3">
                                    <div class="col-12 col-lg-4 col-md-4">
                                        <div class="mb-3">
                                            <label for="phone-number" class="form-label">Phone number</label>
                                            <input type="text" class="form-control" id="phone-number"
                                                placeholder="628211079XXXX" required />
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-8 col-md-8">
                                        <div class="mb-3">
                                            <label for="current-place" class="form-label">Address</label>
                                            <input type="text" class="form-control" id="current-place" placeholder="Sunrise Villa Canggu"
                                                required />
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-2 mb-3">
                                    <div class="col-12">
                                        <label for="DeliveryInstructions" class="form-label sr-only">Add location
                                            details</label>
                                        <textarea class="form-control" id="DeliveryInstructions" rows="3"
                                            placeholder="Jl. Subak Canggu, Canggu, Kec. Kuta Utara, Kabupaten Badung, Bali 80361"></textarea>
                                    </div>
                                </div>
                                <div class="row g-2 mb-3">
                                    <div class="col-12">
                                        <label for="DeliveryInstructions" class="form-label sr-only">Note</label>
                                        <textarea class="form-control" id="DeliveryInstructions" rows="3"
                                            placeholder="I have diarrhea and nausea"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 offset-xl-1 col-xl-4 col-lg-6">
                        <div class="mt-4 mt-lg-0">
                            <div class="card shadow-sm">
                                <h5 class="px-6 py-4 bg-transparent mb-0">Order Details</h5>
                                <ul class="list-group list-group-flush" id="order-list">
                                </ul>
                                <ul class="list-group list-group-flush" id="order-list">
                                    <li class="list-group-item px-4 py-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>Item Total</div>
                                            <div class="fw-bold item-total-quantity"></div>
                                        </div>
                                    </li>
                                    <li class="list-group-item px-4 py-3">
                                        <div class="d-flex align-items-center justify-content-between fw-bold">
                                            <div>Subtotal</div>
                                            <div class="checkout-total-price">$73.00</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-5 d-flex justify-content-end">
                                <a href="{{ route('cart') }}" class="btn btn-outline-gray-400 text-muted w-25">
                                    Back
                                </a>
                                <a href="#" class="btn btn-primary ms-2 w-75" style="background: #00B2AE; border: 1px solid #00B2AE;">
                                    Pay
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-shop-layout>
<script>
    'use strict';

    const componentItems = (productImg, productName, productType, priceNative, quantity) => {
        return `<li class="list-group-item px-4 py-3">
                    <div class="row align-items-center">
                        <div class="col-2 col-md-2">
                            <img src="${productImg}" alt="Ecommerce"
                                class="img-fluid" />
                        </div>
                        <div class="col-4 col-md-4">
                            <h6 class="mb-0">${productName}</h6>
                            <span><small class="text-muted">${productType}</small></span>
                        </div>
                        <div class="col-2 col-md-2 text-center text-muted">
                            <span>${quantity}</span>
                        </div>
                        <div class="col-4 text-lg-end text-end text-md-end col-md-4">
                            <span class="fw-bold">${formatter.format(priceNative)}</span>
                        </div>
                    </div>
                </li>`;
    }

    let itemsCube = $(`#order-list`);
    const getCartItems = () => {
        const cart = localStorage.getItem("cart");

        if (cart) {
            const cartItems = JSON.parse(cart);
            itemsCube.empty();
            cartItems.forEach((item, index) => {
                let component = componentItems(item.product_img, item.product_name, item.product_type, item.product_price_native, item.quantity);
                itemsCube.append(component);
            });
        }
    }

    const getCartSummary = () => {
        const cart = JSON.parse(localStorage.getItem('cart')) || [];
        let totalQuantity = 0;
        let subtotal = 0;

        cart.forEach(item => {
            totalQuantity += item.quantity;
            subtotal += item.product_price_native * item.quantity;
        });

        return {
            totalQuantity,
            subtotal
        };
    }

    const updateSummary = () => {
        const {
            totalQuantity,
            subtotal
        } = getCartSummary();

        $('.item-total-quantity').text(totalQuantity);
        $('.subtotal-price').text(`${formatter.format(subtotal)}`);
        $('.checkout-total-price').text(`${formatter.format(subtotal)}`);
    };

    $(document).ready(function() {
        getCartItems();
        updateSummary();
    });
</script>
