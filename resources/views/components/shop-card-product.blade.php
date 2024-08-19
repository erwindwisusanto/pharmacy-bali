<div class="col">
  <div class="card card-product"
    onclick="openDatailProduct(this)"
    data-product-name="{{ $productName }}"
    data-category="{{ $category }}"
    data-price="{{ $price }}"
    >
     <div class="card-body">
        <div class="text-center position-relative">
          <div class="position-absolute top-0 start-0">
            <span class="badge bg-danger">Sale</span>
         </div>
         <a href="shop-single.html">
            <img src="https://freshcart.codescandy.com/assets/images/products/product-img-16.jpg" alt="{{ $productName }}" class="mb-3 img-fluid" />
         </a>
        </div>
        <div class="text-small mb-1">
           <a href="#!" class="text-decoration-none text-muted"><small>{{ $category }}</small></a>
        </div>
        <h2 class="fs-6"><a href="shop-single.html" class="text-inherit text-decoration-none">{{ $productName }}</a></h2>
        <div class="d-flex justify-content-between align-items-center mt-3">
           <div>
              <span class="text-dark">{{ $price }}</span>
              {{-- <span class="text-decoration-line-through text-muted">$24</span> --}}
           </div>
           <div>
              <a href="#!" class="btn btn-primary btn-sm">
                 <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="feather feather-plus">
                    <line x1="12" y1="5" x2="12" y2="19"></line>
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                 </svg>
                 Add
              </a>
           </div>
        </div>
     </div>
  </div>
</div>
