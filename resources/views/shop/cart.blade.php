<x-shop-layout>
    <section class="mb-lg-14 mb-8 mt-8">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div>
                        <div class="mb-4">
                            <h1 class="fw-bold mb-0">Cart</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="row">
                    <div class="col-xl-7 col-lg-6 col-md-12">
                        <div class="py-3">
                            <ul class="list-group list-group-flush" id="cart-items">
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-12 offset-xl-1 col-xl-4 col-lg-6">
                        <div class="mb-5 mt-6">
                            <h2 class="h5 mb-4">Summary</h2>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-start px-0">
                                    <div class="me-auto">
                                        <div>Item Total</div>
                                    </div>
                                    <span class="item-total-quantity fw-bold">0</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start px-0">
                                    <div class="me-auto">
                                        <div class="fw-bold">Subtotal</div>
                                    </div>
                                    <span class="fw-bold checkout-total-price">0</span>
                                </li>
                            </ul>
                            <div class="mt-5 d-flex justify-content-end">
                                <a href="{{ route('view_shop') }}" class="btn btn-outline-gray-400 text-muted w-50">
                                    Add Items
                                </a>
                                <a href="{{ route('loading_screen_shop') }}" class="btn btn-primary ms-2 w-50" style="background: #00B2AE; border: 1px solid #00B2AE;">
                                    Checkout
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
    "use strict";

    const componentItems = (productId, productImg, productName, productType, price, priceNative, quantity) => {
        return `<li class="list-group-item py-3 ps-0 border-bottom" data-product-id="${productId}">
              <div class="row align-items-center">
                  <div class="col-6 col-md-6 col-lg-7">
                    <div class="d-flex align-items-center">
                        <div class="col-2 col-md-2 text-center">
                            <img src="${productImg}" alt="${productName}" class="img-fluid"/>
                        </div>
                        <div class="ms-3">
                          <a class="text-inherit">
                              <h6 class="mb-0">${productName}</h6>
                          </a>
                          <span><small class="text-muted">${productType}</small></span>
                          <div class="mt-2 small lh-1">
                              <a class="text-decoration-none text-inherit remove-item" style="cursor: pointer;">
                                <span class="me-1 align-text-bottom">
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="14"
                                      height="14"
                                      viewBox="0 0 24 24"
                                      fill="none"
                                      stroke="currentColor"
                                      stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                      class="feather feather-trash-2" style="color: red;">
                                      <polyline points="3 6 5 6 21 6"></polyline>
                                      <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                      <line x1="10" y1="11" x2="10" y2="17"></line>
                                      <line x1="14" y1="11" x2="14" y2="17"></line>
                                    </svg>
                                </span>
                                <span style="color: red;">Remove</span>
                              </a>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-3 col-md-3 col-lg-3 p-0">
                    <div class="input-group input-spinner">
                        <input type="button" value="-" class="button-minus btn btn-sm" data-field="quantity" />
                        <input type="number" step="1" max="10" value="${quantity}" name="quantity" class="quantity-field form-control-sm form-input" data-price="${priceNative}"/>
                        <input type="button" value="+" class="button-plus btn btn-sm" data-field="quantity" />
                    </div>
                  </div>
                  <div class="col-3 text-lg-end text-end text-md-end col-md-2">
                    <span class="fw-bold item-total-price">${formatter.format(priceNative)}</span>
                  </div>
              </div>
            </li>`;
    }

    const itemsCube = $(`#cart-items`);
    const getCartItems = () => {
        const cart = localStorage.getItem("cart");

        if (cart) {
            const cartItems = JSON.parse(cart);
            itemsCube.empty();
            cartItems.forEach((item, index) => {
                let component = componentItems(item.product_id, item.product_img, item.product_name, item
                    .product_type, item.product_price, item.product_price_native, item.quantity);
                itemsCube.append(component);
            });
        }

        initQuantitySpinners();
    }

    const updateCart = (productId, quantity) => {
        const cart = JSON.parse(localStorage.getItem("cart"));

        cart.forEach((item) => {
            if (item.product_id === productId) {
                item.quantity = quantity;
            }
        });

        localStorage.setItem("cart", JSON.stringify(cart));
    }

    const removeCartItem = (productId) => {
        console.log(productId);
        let cart = JSON.parse(localStorage.getItem("cart"));
        cart = cart.filter(item => item.product_id !== productId);
        localStorage.setItem("cart", JSON.stringify(cart));
        getCartItems();
    }

    const initQuantitySpinners = () => {
        $(document).on('click', '.button-plus, .button-minus', function(e) {
            const input = $(this).closest('.input-spinner').find('.quantity-field');
            let value = parseInt(input.val(), 10);
            const max = parseInt(input.attr('max'), 10);

            const productId = $(this).closest('li').data('product-id');

            if ($(this).hasClass('button-plus')) {
                if (value < max) {
                    value += 1;
                }
            } else if ($(this).hasClass('button-minus')) {
                if (value > 1) {
                    value -= 1;
                }
            }

            input.val(value);
            updateCart(productId, value);
            updateSummary();
        });

        $(document).on('click', '.remove-item', function(e) {
            e.preventDefault();
            const productId = $(this).closest('li').data('product-id');
            removeCartItem(productId);
            updateSummary();
        });
    };

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
