<div class="border-bottom fixed-top" style="z-index: 1030; background-color: #fff">
  <div class="py-5">
     <div class="container">
        <div class="row w-100 align-items-center gx-lg-2 gx-0">
           <div class="col-xxl-2 col-lg-3 col-md-6 col-5">
              <a class="navbar-brand d-none d-lg-block" href="{{ route('index') }}">
                 <img src="{{ asset('assets/img/logo.png') }}" alt="pharmacybali" style="width: 95px;"/>
              </a>
              <div class="d-flex justify-content-between w-100 d-lg-none">
                 <a class="navbar-brand" href="{{ route('index') }}">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="pharmacybali" style="width: 95px;"/>
                 </a>
              </div>
           </div>
           <div class="col-xxl-5 col-lg-5 d-none d-lg-block">
            {{-- KOSONG --}}
           </div>
           <div class="col-md-2 col-xxl-3 d-none d-lg-block">
            {{-- KOSONG --}}
           </div>
           <div class="col-lg-2 col-xxl-2 text-end col-md-6 col-7">
              <div class="list-inline">
                 <div class="list-inline-item me-5">
                  {{-- KOSONG --}}
                 </div>
                 <div class="list-inline-item me-5 me-lg-0">
                    <a class="text-muted position-relative" href="{{ route('cart') }}">
                       <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="29"
                          height="29"
                          viewBox="0 0 24 24"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          class="feather feather-shopping-bag">
                          <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                          <line x1="3" y1="6" x2="21" y2="6"></line>
                          <path d="M16 10a4 4 0 0 1-8 0"></path>
                       </svg>
                       <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill" id="header-cart" style="background-color: #00B2AE;">
                          0
                       </span>
                    </a>
                 </div>
              </div>
           </div>
        </div>
     </div>
  </div>
</div>
