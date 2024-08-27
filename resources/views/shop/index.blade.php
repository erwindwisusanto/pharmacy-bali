<x-shop-layout>
  <section style="margin-top: 7rem;">
    <div class="container">
    </div>
 </section>
 <section class="mt-8">
  <div class="container">
     <div class="row">
        <div class="col-12">
           <div class="bg-light d-lg-flex justify-content-between align-items-center py-6 py-lg-3 px-8 text-center text-lg-start rounded">
              <div class="d-lg-flex align-items-center">
                 <img src="../assets/images/about/about-icons-1.svg" alt="" class="img-fluid" />
                 <div class="ms-lg-4">
                    <h5 class="fs-14 fw-semibold mb-1">Having trouble finding the right medicine?</h5>
                    <span class="fs-14">Connect with our customer service team on WhatsApp for expert guidance and support.
                    </span>
                 </div>
              </div>
              <div class="mt-3 mt-lg-0">
              </div>
           </div>
        </div>
     </div>
  </div>
</section>
 <section class="mt-8 mb-lg-14 mb-8">
  <div class="container">
     <div class="row">
        <div class="col-lg-12">
           <div class="d-lg-flex justify-content-between align-items-center">
              <div class="d-md-flex justify-content-between align-items-center">
                 <div class="d-flex mt-2 mt-lg-0">
                    <div class="me-2 flex-grow-1">
                      <select class="form-select" id="categoryFilter">
                        <option value >All</option>
                        <option value="tablet">Tablet</option>
                        <option value="cream">Cream</option>
                        <option value="syrup">Syrup</option>
                      </select>
                    </div>
                    <div>
                       <select class="form-select" id="sortPrice">
                          <option selected disabled>Sort by Price</option>
                          <option value="low_to_high">Lowest Price</option>
                          <option value="high_to_low">Highest Price</option>
                       </select>
                    </div>
                 </div>
              </div>
           </div>
           <div class="row mt-4">
            <div class="col-12 col-lg-4 col-md-4">
              <div class="input-group form-search">
                <span class="input-group-text" id="basic-addon2"
                  style="background: none; border-right: none;"
                >
                <i class="bi bi-search"></i>
                </span>
                <input
                type="text"
                class="form-control"
                placeholder="Search ..."
                aria-label="Default"
                id="searchInput"
                name="searchInput"
                aria-describedby="inputGroup-sizing-default"
                style="background: none; border-left: none;"
                />
              </div>
            </div>
          </div>
           <div class="row g-4 row-cols-lg-5 row-cols-2 row-cols-md-3 mt-2" id="product_cube">
            @for ($i = 0; $i < 10; $i++)
              <div class="col">
                <div class="skeleton-card">
                  <div class="skeleton-img"></div>
                  <div class="skeleton-text short"></div>
                  <div class="skeleton-text long"></div>
                  <div class="skeleton-text price skeleton-price"></div>
                </div>
              </div>
            @endfor
           </div>
        </div>
     </div>
  </div>
</section>
<x-shop-view-product-modal/>
</x-shop-layout>
<div class="btn-float" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Consult with Our Medical Team"
    data-bs-custom-class="custom-tooltip">
    <div class="btn-circle whatsapp">
        <a onclick="directurlWa()" class="text-white">
          <i class="bi bi-whatsapp" style="font-size: 26px;"></i>
        </a>
    </div>
</div>


<script>
  "use strict";

  const quickViewProductModel = $('#quickViewModal');
  const productCube = $(`#product_cube`);

	const addToCart = (product) => {

    const spinner = product.querySelector('.spinner-border');
    const svgIcon = product.querySelector('svg');

    spinner.classList.remove('d-none');
    svgIcon.classList.add('d-none');
    product.classList.add('disabled');

    const productId = product.getAttribute('data-product-id');
   	const price = product.getAttribute('data-price');
    const priceNative = product.getAttribute('data-price-native');
   	const productName = product.getAttribute('data-product-name')
   	const type = product.getAttribute('data-type');
    const img = product.getAttribute('data-img')

    const cartItem = {
      product_id: productId,
      product_name: productName,
      product_price: price,
      product_price_native: priceNative,
      product_type: type,
      product_img: img,
      quantity: 1
    };

    let carts = JSON.parse(localStorage.getItem('cart')) || [];

    setTimeout(() => {

      const existingProductIndex = carts.findIndex(item => item.product_id === productId);

      if (existingProductIndex !== -1) {
        carts[existingProductIndex].quantity += 1;
      } else {
        carts.push(cartItem);
      }

      localStorage.setItem('cart', JSON.stringify(carts));

      spinner.classList.add('d-none');
      product.classList.remove('disabled');
      svgIcon.classList.remove('d-none');

    }, 700);
  }

  const openDatailProduct = (product) => {
    const price = product.getAttribute('data-price');
    const productName = product.getAttribute('data-product-name')
    const type = product.getAttribute('data-type');
    const img = product.getAttribute('data-img');

    $(`#product-price`).text(price);
    $(`#product-name`).text(productName);
    $(`#product-type`).text(type);
    $('#product-img').attr('src', img);

    quickViewProductModel.modal('show');
  }

  const directurlWa = () => {
    const preWrittenMessage = 'Hi pharmacybali.com by Cepat Sehat Clinic! I’m having trouble finding the medicine I need, so I’m hoping you can assist me.';
    window.open(`https://api.whatsapp.com/send/?phone=${encodeURIComponent('6282221122311')}&text=${encodeURIComponent(preWrittenMessage)}`, '_blank');
  }


  const callbackProducts = (response) => {
    productCube.empty();
    const data = response?.data || [];

    if (data.length !== 0) {
      data.forEach(product => {
        const componentProduct = `
          <x-shop-card-product
            productId="${product.id}"
            type="${product.type}"
            urlImg=${urlImageByType(product.type)}
            productName="${product.name}"
            price="${formatter.format(product.price)}"
            priceNative="${product.price}"
          />
        `;
        productCube.append(componentProduct);
      });
    } else {
      const noProductsMessage = `<p>No products found.</p>`;
      productCube.append(noProductsMessage);
    }

  }

  const products = (filterSearch = '', sortPrice = '', category = '') => {
    $.ajax({
      url: `{{ route('products') }}`,
      type: 'GET',
      dataType: 'json',
      data: { search_products: filterSearch, sort_price: sortPrice, category: category },
      success: callbackProducts,
      error: (xhr, status, error) => {
        console.error(error);
      }
    });
  }

  $(document).ready(function () {
    products();

    $('#searchInput').on('input', debounce(function() {
      const filterValue = $(this).val();
      const sortValue = $('#sortPrice').val();
      const categoryValue = $('#categoryFilter').val();
      products(filterValue, sortValue, categoryValue);
    }, 300));

    $('#sortPrice').change(function() {
      const sortValue = $(this).val();
      const filterValue = $('#searchInput').val();
      const categoryValue = $('#categoryFilter').val();
      products(filterValue, sortValue, categoryValue);
    });

    $('#categoryFilter').change(function() {
      const categoryValue = $(this).val();
      const filterValue = $('#searchInput').val();
      const sortValue = $('#sortPrice').val();
      products(filterValue, sortValue, categoryValue);
    });

    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(
          tooltipTriggerEl));

  });
</script>
