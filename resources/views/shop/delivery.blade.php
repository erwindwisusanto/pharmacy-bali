<x-shop-layout>
    <section class="mb-lg-14 mb-8" style="margin-top: 7rem;">
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
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="Budiono Siregar Kapal Lawut" required />
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4 col-md-4">
                                        <div class="mb-3">
                                            <label for="age" class="form-label">Age</label>
                                            <input type="number" class="form-control" id="age" name="age" placeholder="23" pattern="[0-9]"
                                                required />
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-2 mb-3">
                                    <div class="col-12 col-lg-4 col-md-4">
                                        <div class="mb-3">
                                            <label for="phone-number" class="form-label">Phone number <small style="color: red;">*62821107XXX</small></label>
                                            <input type="text" class="form-control" id="phone-number" name="phone-number"
                                                placeholder="628211079XXXX" pattern="62[0-9]{9,14}" required />
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-8 col-md-8">
                                        <div class="mb-3">
                                            <label for="address" class="form-label">Address</label>
                                            <input type="text" class="form-control" id="address" name="address" placeholder="Sunrise Villa Canggu"
                                                required />
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-2 mb-3">
                                    <div class="col-12">
                                        <label for="location-details" class="form-label sr-only">Add location
                                            details</label>
                                        <textarea class="form-control" id="location-details" name="location-details" rows="3"
                                            placeholder="Jl. Subak Canggu, Canggu, Kec. Kuta Utara, Kabupaten Badung, Bali 80361"></textarea>
                                    </div>
                                </div>
                                <div class="row g-2 mb-3">
                                    <div class="col-12">
                                        <label for="note" class="form-label sr-only">Note</label>
                                        <textarea class="form-control" id="note" name="note" rows="3"
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
                                <a onclick="pay(this)" class="btn btn-primary ms-2 w-75" style="background: #00B2AE; border: 1px solid #00B2AE;">
                                    Pay
                                  <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
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

    const callbackPay = (response) => {
      if (response.success == true) {
        setTimeout(function() {
          window.location.replace('{{ route("success") }}');
        }, 500);
      }
    }

    const validateForm = () => {
      let isValid = true;

      $('.invalid-feedback').remove();
      $('.is-invalid').removeClass('is-invalid');

      const fields = [
        { id: 'name', label: 'Name' },
        { id: 'age', label: 'Age' },
        { id: 'phone-number', label: 'Phone Number' },
        { id: 'address', label: 'Address' },
        { id: 'location-details', label: 'Location Details' }
      ];

      fields.forEach(field => {
        const value = $(`#${field.id}`).val();
        if (!value) {
          isValid = false;

          $(`#${field.id}`).addClass('is-invalid');
          $(`#${field.id}`).after(`
            <div class="invalid-feedback">
              ${field.label} is required.
            </div>
          `);
        }
      });

      return isValid;
    };

    const handleInputChange = (event) => {
      const $input = $(event.target);
      if ($input.val()) {
        $input.removeClass('is-invalid');
        $input.next('.invalid-feedback').remove();
      }
    };

    const pay = (button) => {

      if (!validateForm()) {
        return;
      }

      $(button).attr("disabled", true).css("background-color", "#01918e");
      const spinner = button.querySelector('.spinner-border');
      spinner.classList.remove('d-none');

      const dataRequest = {
        name: $(`#name`).val(),
        age: $(`#age`).val(),
        phoneNumber: $(`#phone-number`).val(),
        address: $(`#address`).val(),
        locationDetails: $(`#location-details`).val(),
        note: $(`#note`).val(),
        items: JSON.parse(localStorage.getItem('cart')) || [],
      }

      const message = TemplateMessage(dataRequest);
      const encodedMessage = encodeURIComponent(message);

      const customerService = '6282221122311';
      const whatsappURL = `https://api.whatsapp.com/send/?phone=${encodeURIComponent(customerService)}&text=${encodedMessage}`;

      setTimeout(() => {
        window.open(whatsappURL);

        $(button).attr("disabled", false).css("background-color", "#00B2AE");
        spinner.classList.add('d-none');
        localStorage.clear();

        window.location.replace('{{ route("success") }}');
      }, 1300);
    }

    const TemplateMessage = (data) => {
      let message = `Hello pharmacybali.com by Cepat Sehat Clinic! I'd like to order as follows:\n\n`;
      message += `1️⃣ Name: *${data.name}*\n`;
      message += `2️⃣ Age: *${data.age}*\n`;
      message += `3️⃣ Address: *${data.address}*\n`;
      message += `4️⃣ Location details: *${data.locationDetails}*\n`;

      let totalPrice = 0;
      let medicineDetails = '';

      data.items.forEach((item, index) => {
        medicineDetails += `     ${String.fromCharCode(97 + index)}. ${item.product_name} ${item.quantity}x ${item.product_price}\n`;
        totalPrice += item.quantity * item.product_price_native;
      });

      message += `5️⃣ Medicine (Total = *${formatter.format(totalPrice)})*:\n`;
      message += medicineDetails;
      message += `\n6️⃣ Note: ${data.note}\n\n`;
      message += `Could you please assist me?`;

      return message;
    };

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

        $('#phone-number').on('input', function() {
          let phoneNumber = $(this).val();

          if (!phoneNumber.startsWith('62')) {
            phoneNumber = '62' + phoneNumber.replace(/^0+/, '');
            $(this).val(phoneNumber);
          }
        });

        $('#name, #age, #phone-number, #address, #location-details').on('input', handleInputChange);
    });
</script>
