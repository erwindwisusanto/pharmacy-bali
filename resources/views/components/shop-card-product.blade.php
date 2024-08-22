<div class="col">
  <div class="card card-product" style="background-color: #ECF7F7; border: none;">
     <div class="card-body">
        <div class="text-center position-relative">
         <a
          onclick="openDatailProduct(this)"
          data-product-id="{{ $productId }}"
          data-product-name="{{ $productName }}"
          data-type="{{ $type }}"
          data-img="{{ $urlImg }}"
          data-price="{{ $price }}"
          data-price-native="{{ $priceNative }}"
         >
          <img src="{{ $urlImg }}" alt="{{ $productName }}" class="mb-3 img-fluid" />
         </a>
        </div>
        <h2 class="fs-6"><a class="text-inherit text-decoration-none" style="color: #2F2D2C;">{{ $productName }}</a></h2>
        <div class="text-small mb-1">
           <a href="#!" class="text-decoration-none text-muted"><small>{{ $type }}</small></a>
        </div>
        <div class="d-flex justify-content-between align-items-center mt-3">
           <div>
              <span style="color: #464646; font-weight: 600;">{{ $price }}</span>
           </div>
           <div>
              <a onclick="addToCart(this)"
                data-product-id="{{ $productId }}"
                data-product-name="{{ $productName }}"
                data-type="{{ $type }}"
                data-img="{{ $urlImg }}"
                data-price="{{ $price }}"
                data-price-native="{{ $priceNative }}"
                class="btn btn-primary btn-sm d-flex align-items-center" style="background-color: #00B2AE; border: none;">
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
                <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
              </a>
           </div>
        </div>
     </div>
  </div>
</div>
