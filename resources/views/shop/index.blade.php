<x-shop-layout>
  <section class="mt-8">
    <div class="container">
       <div class="row">
          <div class="col-12">
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
              aria-describedby="inputGroup-sizing-default"
              style="background: none; border-left: none;"
              />
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
                    <div>
                       <select class="form-select">
                          <option selected>Sort by: Featured</option>
                          <option value="Low to High">Price: Low to High</option>
                          <option value="High to Low">Price: High to Low</option>
                          <option value="Release Date">Release Date</option>
                          <option value="Avg. Rating">Avg. Rating</option>
                       </select>
                    </div>
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

   	const price = product.getAttribute('data-price');
   	const productName = product.getAttribute('data-product-name')
   	const category = product.getAttribute('data-category');

     const cartItem = {
      product_name: productName,
      product_price: price,
      product_category: category
    };

    let carts = JSON.parse(localStorage.getItem('cart')) || [];

    setTimeout(() => {

      carts.push(cartItem);
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


  const callbackProducts = (response) => {
    productCube.empty();
    const data = response?.data || [];

    data.forEach(product => {
      const componentProduct = `
        <x-shop-card-product
          productId="${product.id}"
          type="${product.type}"
          urlImg=${urlImageByType(product.type)}
          productName="${product.name}"
          price="${formatter.format(product.price)}"
        />
      `;
      productCube.append(componentProduct);
    });
  }

  const products = () => {
    $.ajax({
      url: `{{ route('products') }}`,
      type: 'GET',
      dataType: 'json',
      success: callbackProducts,
      error: (xhr, status, error) => {
        console.error(error);
      }
    });
  }

  $(document).ready(function () {
    products();
  });
</script>
