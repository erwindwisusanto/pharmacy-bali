@php $locale = session()->get('locale'); @endphp
<x-master-layout>
    <div class="content">
        <section class="banner-pages homepage">
            <div class="container">
                <div class="text">
                    <p class="subtitle">{{__('index.banner_txt_normal')}}</p>
                    <h3 class="fw-bold">
                        {{__('index.banner_txt_bold')}}
                    </h3>
                    <p>
                        {{__('index.banner_txt_1')}}
                    </p>
                    <a href="https://api.whatsapp.com/send/?phone=6285212500030" class="btn btn-warning fs-14">{{__('index.text_button')}}
                    </a>
                </div>
            </div>

        </section>

        <section class="why">
            <div class="container">
                <div class="text-center">
                    <div class="title-icon">
                        <div class="text">
                            <span>{{__('index.section_2.header_1')}}</span>
                            <h5>{{__('index.section_2.header_2')}}</h5>
                        </div>
                        <img src="assets/img/img-hospital.png" alt="">
                    </div>
                </div>
                <div class="row justify-content-center mt-4">
                    <div class="col-md-10">
                        @if ($locale === 'en')
                            <img src="assets/img/why-pharmacy.svg" class="d-none d-md-block w-100" alt="">
                            <img src="assets/img/why-pharmacy-mobile.svg" class="d-block d-md-none w-100" alt="">
                        @else
                            <img src="assets/img/why-pharmacy-indo.svg" class="d-none d-md-block w-100" alt="">
                            <img src="assets/img/why-pharmacy-mobile-indo.svg" class="d-block d-md-none w-100" alt="">
                        @endif
                    </div>
                </div>
            </div>
        </section>

        <section class="how">
            <div class="container">
                @if ($locale === 'en')
                    <img src="assets/img/how-work.svg" class="d-none d-md-block w-100" alt="">
                    <img src="assets/img/how-work-mobile.svg" class="d-block d-md-none w-100" alt="">
                @else
                    <img src="assets/img/how-work-indo.svg" class="d-none d-md-block w-100" alt="">
                    <img src="assets/img/how-work-mobile-indo.svg" class="d-block d-md-none w-100" alt="">
                @endif
            </div>
        </section>

        <section class="testimonial">
            <div class="container">
                <div class="text-center">
                    <div class="title-icon">
                        <div class="text">
                            <span>{{__('index.section_testimoni.header_1')}}</span>
                            <h5>{{__('index.section_testimoni.header_2')}}</h5>
                        </div>
                        <img src="assets/img/img-testimonial.png" alt="">
                    </div>
                </div>
                <div class="swiper swiper-article mt-5">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card-slide-testimoni">
                                <div class="top">
                                    <p class="say">
                                        "{{__('index.section_testimoni.sarah')}}"
                                    </p>
                                </div>
                                <div class="name">
                                    <img src="assets/img/avatar/img-user01.png" alt="">
                                    <div class="rate d-flex g-2">
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                    </div>
                                    <h6>Sarah K.</h6>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-slide-testimoni">
                                <div class="top">
                                    <p class="say">
                                        "{{__('index.section_testimoni.jane')}}"
                                    </p>
                                </div>
                                <div class="name">
                                    <img src="assets/img/avatar/img-user02.png" alt="">
                                    <div class="rate d-flex g-2">
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                    </div>
                                    <h6>Jane D.</h6>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-slide-testimoni">
                                <div class="top">
                                    <p class="say">
                                        "{{__('index.section_testimoni.mark')}}"
                                    </p>
                                </div>
                                <div class="name">
                                    <img src="assets/img/avatar/img-user03.png" alt="">
                                    <div class="rate d-flex g-2">
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                    </div>
                                    <h6>Mark T.</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</x-master-layout>
