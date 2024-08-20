<div class="modal fade" id="quickViewModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
     <div class="modal-content">
        <div class="modal-body p-8">
           <div class="position-absolute top-0 end-0 me-3 mt-3">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
           </div>
           <div class="row">
              <div class="col-lg-6">
                 <div class="product productModal" id="productModal">
                    <div>
                       <img id="product-img" style="width: 45px;"/>
                    </div>
                 </div>
                 <div class="product-tools">
                    <div class="thumbnails row g-3" id="productModalThumbnails">
                       <div class="col-3" class="tns-nav-active">
                          <div class="thumbnails-img">
                             <img src="" alt="" />
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col-lg-6">
                 <div class="ps-lg-8 mt-6 mt-lg-0">
                    <a class="mb-4 d-block" style="color: #00B2AE;" id="product-type"></a>
                    <h2 class="mb-1 h1" id="product-name" style="color: #2F2D2C;"></h2>
                    <div class="fs-4">
                       <span class="fw-bold" id="product-price" style="color: #464646;"></span>
                    </div>
                    <hr class="my-6" />
                    <div>
                       <div class="input-group input-spinner">
                          <input type="button" value="-" class="button-minus btn btn-sm" data-field="quantity" />
                          <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input" />
                          <input type="button" value="+" class="button-plus btn btn-sm" data-field="quantity" />
                       </div>
                    </div>
                    <div class="mt-3 row justify-content-start g-2 align-items-center">
                       <div class="col-lg-4 col-md-5 col-6 d-grid">
                          <button type="button" class="btn btn-primary" style="background-color: #00B2AE; border: none;">
                             <i class="feather-icon icon-shopping-bag me-2"></i>
                             Add to cart
                          </button>
                       </div>
                       <div class="col-md-4 col-5">
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
  </div>
</div>
