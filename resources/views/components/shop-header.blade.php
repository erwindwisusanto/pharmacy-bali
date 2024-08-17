<div class="border-bottom">
  <div class="py-5">
     <div class="container">
        <div class="row w-100 align-items-center gx-lg-2 gx-0">
           <div class="col-xxl-2 col-lg-3 col-md-6 col-5">
              <a class="navbar-brand d-none d-lg-block" href="{{ route('view_shop') }}">
                 <img src="{{ asset('assets/img/logo.png') }}" alt="pharmacybali" style="width: 95px;"/>
              </a>
              <div class="d-flex justify-content-between w-100 d-lg-none">
                 <a class="navbar-brand" href="{{ route('view_shop') }}">
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
                 <div class="list-inline-item me-5">
                    <a href="#!" class="text-muted" data-bs-toggle="modal" data-bs-target="#userModal">
                       <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="25"
                          height="25"
                          viewBox="0 0 24 24"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          class="feather feather-user">
                          <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                          <circle cx="12" cy="7" r="4"></circle>
                       </svg>
                    </a>
                 </div>
                 <div class="list-inline-item me-5 me-lg-0">
                    <a class="text-muted position-relative" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" href="#offcanvasExample" role="button" aria-controls="offcanvasRight">
                       <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="25"
                          height="25"
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
                       <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                          1
                          <span class="visually-hidden">unread messages</span>
                       </span>
                    </a>
                 </div>
              </div>
           </div>
        </div>
     </div>
  </div>
</div>