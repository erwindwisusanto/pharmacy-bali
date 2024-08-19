<x-shop-layout>
  <div class="mt-4">
    <div class="container">
       <div class="row">
          <div class="col-12">
             <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                   <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                   <li class="breadcrumb-item"><a href="{{ route('view_shop') }}">Shop</a></li>
                   <li class="breadcrumb-item active" aria-current="page">Shop Cart</li>
                </ol>
             </nav>
          </div>
       </div>
    </div>
 </div>
  <section class="mb-lg-14 mb-8 mt-8">
    <div class="container">
       <div class="row">
          <div class="col-12">
             <div class="card py-1 border-0 mb-8">
                <div>
                   <h1 class="fw-bold">Cart</h1>
                   <p class="mb-0">Shopping in 382480</p>
                </div>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-lg-8 col-md-7">
             <div class="py-3">
                <ul class="list-group list-group-flush">
                   <li class="list-group-item py-3 ps-0 border-bottom">
                      <div class="row align-items-center">
                         <div class="col-6 col-md-6 col-lg-7">
                            <div class="d-flex">
                               <img src="../assets/images/products/product-img-1.jpg" alt="Ecommerce" class="icon-shape icon-xxl" />
                               <div class="ms-3">
                                  <a href="../pages/shop-single.html" class="text-inherit">
                                     <h6 class="mb-0">Haldiram's Sev Bhujia</h6>
                                  </a>
                                  <span><small class="text-muted">.98 / lb</small></span>
                                  <div class="mt-2 small lh-1">
                                     <a href="#!" class="text-decoration-none text-inherit">
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
                                              class="feather feather-trash-2 text-success">
                                              <polyline points="3 6 5 6 21 6"></polyline>
                                              <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                              <line x1="10" y1="11" x2="10" y2="17"></line>
                                              <line x1="14" y1="11" x2="14" y2="17"></line>
                                           </svg>
                                        </span>
                                        <span class="text-muted">Remove</span>
                                     </a>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="col-4 col-md-4 col-lg-3">
                            <div class="input-group input-spinner">
                               <input type="button" value="-" class="button-minus btn btn-sm" data-field="quantity" />
                               <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input" />
                               <input type="button" value="+" class="button-plus btn btn-sm" data-field="quantity" />
                            </div>
                         </div>
                         <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                            <span class="fw-bold">$5.00</span>
                         </div>
                      </div>
                   </li>
                </ul>
                <div class="d-flex justify-content-between mt-4">
                   <a href="#!" class="btn btn-primary">Continue Shopping</a>
                   <a href="#!" class="btn btn-dark">Update Cart</a>
                </div>
             </div>
          </div>
          <div class="col-12 col-lg-4 col-md-5">
             <div class="mb-5 card mt-6">
                <div class="card-body p-6">
                   <h2 class="h5 mb-4">Summary</h2>
                      <ul class="list-group list-group-flush">
                         <li class="list-group-item d-flex justify-content-between align-items-start px-0">
                            <div class="me-auto">
                               <div>Item Subtotal</div>
                            </div>
                            <span>$70.00</span>
                         </li>
                         <li class="list-group-item d-flex justify-content-between align-items-start px-0">
                            <div class="me-auto">
                               <div>Service Fee</div>
                            </div>
                            <span>$3.00</span>
                         </li>
                         <li class="list-group-item d-flex justify-content-between align-items-start px-0">
                            <div class="me-auto">
                               <div class="fw-bold">Subtotal</div>
                            </div>
                            <span class="fw-bold">$67.00</span>
                         </li>
                      </ul>
                   <div class="d-grid mb-1 mt-4">
                      <button class="btn btn-primary btn-lg d-flex justify-content-between align-items-center" type="submit">
                         Go to Checkout
                         <span class="fw-bold">$67.00</span>
                      </button>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
</x-shop-layout>
