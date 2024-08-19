<x-shop-layout>
  <section class="mt-8">
    <div class="container">
       <div class="row">
          <div class="col-12">
             <div class="bg-light d-lg-flex justify-content-between align-items-center py-6 py-lg-3 px-8 text-center text-lg-start rounded">
                <div class="d-lg-flex align-items-center">
                   <img src="#" alt="" class="img-fluid" />

                   <div class="ms-lg-4">
                      <h1 class="fs-2 mb-1">Welcome to Pharmacy Bali</h1>
                      <span>
                         Download the app get free food &
                         <span class="text-primary">$30</span>
                         off on your first order.
                      </span>
                   </div>
                </div>
                <div class="mt-3 mt-lg-0">
                   <a href="#" class="btn btn-dark">Download FreshCart App</a>
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
<x-cart-modal/>
</x-shop-layout>

<script>
  "use strict";

  const quickViewProductModel = $('#quickViewModal');
  const productCube = $(`#product_cube`);

  const openDatailProduct = (product) => {
    const price = product.getAttribute('data-price');
    const productName = product.getAttribute('data-product-name')
    const category = product.getAttribute('data-category');

    $(`#product-price`).text(price);
    quickViewProductModel.modal('show');
  }

  const callbackProducts = (response) => {
    productCube.empty();
    const data = response?.data || [];

    data.forEach(product => {
      const componentProduct = `
        <x-shop-card-product
          category="Paracetamol"
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
