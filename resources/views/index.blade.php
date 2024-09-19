@php $locale = session()->get('locale'); @endphp
<x-master-layout>
    <div class="content">
        <section class="banner-pages homepage">
            <div class="container">
                <div class="text">
                    <p class="subtitle">{{ __('index.banner_txt_normal') }}</p>
                    <h3 class="fw-bold">
                        {{ __('index.banner_txt_bold') }}
                    </h3>
                    <p>
                        {{ __('index.banner_txt_1') }}
                    </p>
                    <a onclick="directurl('whatsapp')" class="btn btn-warning fs-14">{{ __('index.text_button') }}
                    </a>
                </div>
            </div>

        </section>
        <section class="why">
            <div class="container">
                <div class="text-center">
                    <div class="title-icon">
                        <div class="text">
                            <span>{{ __('index.section_2.header_1') }}</span>
                            <h5>{{ __('index.section_2.header_2') }}</h5>
                        </div>
                        <img src="assets/img/img-hospital.png" alt="">
                    </div>
                </div>
                <div class="row justify-content-center mt-4">
                    <div class="col-md-10">
                        @if ($locale === 'en')
                            <img src="assets/img/why-pharmacy.svg" class="d-none d-md-block w-100" alt="">
                            <img src="assets/img/why-pharmacy-mobile.svg" class="d-block d-md-none w-100"
                                alt="">
                        @elseif($locale === 'id')
                            <img src="assets/img/why-pharmacy-indo.svg" class="d-none d-md-block w-100" alt="">
                            <img src="assets/img/why-pharmacy-mobile-indo.svg" class="d-block d-md-none w-100"
                                alt="">
                        @else
                            <img src="assets/img/why-pharmacy.svg" class="d-none d-md-block w-100" alt="">
                            <img src="assets/img/why-pharmacy-mobile.svg" class="d-block d-md-none w-100"
                                alt="">
                        @endif
                    </div>
                </div>
            </div>
        </section>

        <section class="how" style="border-bottom: 2px solid #fff;">
            <div class="container">
                @if ($locale === 'en')
                    <img src="assets/img/how-work.jpg" class="d-none d-md-block w-100" alt="">
                    <img src="assets/img/how-work-mobile.jpg" class="d-block d-md-none w-100" alt="">
                @elseif($locale === 'id')
                    <img src="assets/img/how-work-indo.jpg" class="d-none d-md-block w-100" alt="">
                    <img src="assets/img/how-work-mobile-indo.jpg" class="d-block d-md-none w-100" alt="">
                @else
                    <img src="assets/img/how-work.jpg" class="d-none d-md-block w-100" alt="">
                    <img src="assets/img/how-work-mobile.jpg" class="d-block d-md-none w-100" alt="">
                @endif
            </div>
        </section>

        {{-- <section class="testimonial">
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
        </section> --}}

    </div>
</x-master-layout>
<script>
    const directurl = (platform) => {
        const currentTime = new Date();
        const jakartaTime = new Date(currentTime.toLocaleString("id-ID", {
            timeZone: "Asia/Jakarta"
        }));

        const locale = "{{ $locale }}";

        const hours = jakartaTime.getHours();
        const minutes = jakartaTime.getMinutes();

        // const hours = 1;
        // const minutes = 4;

        if (locale === 'id') {
          waword = "Halo pharmacybali.com by Klinik Cepat Sehat, saya mau konsultasi";
        } else if (locale === 'en') {
          waword = "Hello pharmacybali.com by Cepat Sehat Clinic, I want a consultation";
        } else {
          waword = "Hello pharmacybali.com by Cepat Sehat Clinic, I want a consultation";
        }

        if ((hours >= 0 && hours < 5) || (hours === 4 && minutes <= 59)) {
            waword = "Hi Pharmacy Bali! I’m looking into your medicine delivery service 💊📦. Could you guide me on how to order and when to expect delivery? Thanks!";
        }

        switch (platform) {
            case _WHATSAPP:
                if (campaignName) {
                    updateCounter(_WHATSAPP);
                    window.open(
                        `https://api.whatsapp.com/send/?phone=${encodeURIComponent(numberphone)}&text=${encodeURIComponent(waword)}`,
                        '_blank');
                    break;
                } else {
                    updateCounter(_WHATSAPP);
                    window.open(
                        `https://api.whatsapp.com/send/?phone=${encodeURIComponent(numberphone)}&text=${encodeURIComponent(waword)}`,
                        '_blank');
                    break;
                }
            case _TELEGRAM:
                updateCounter(_TELEGRAM);
                window.open(`https://t.me/${telegramUsername}?text=${encodeURIComponent(waword)}`, '_blank');
                break;
            default:
                break;
        }

        // switch (platform) {
        //     case _WHATSAPP:
        //         if (campaignName) {
        //             updateCounter(_WHATSAPP);
        //             window.open(`https://api.whatsapp.com/send/?phone=${encodeURIComponent(numberphone)}&text=${encodeURIComponent(waword)}`, '_blank');
        //             break;
        //         } else {
        //             updateCounter(_WHATSAPP);
        //             window.open(`https://api.whatsapp.com/send/?phone=${encodeURIComponent(numberphone)}&text=Hello+pharmacybali.com+by+Cepat+Sehat+Clinic%2C+I+want+a+consultation&type=phone_number&app_absent=0`, '_blank');
        //             break;
        //         }
        //     case _TELEGRAM:
        //         updateCounter(_TELEGRAM);
        //         window.open(`https://t.me/${telegramUsername}?text=${encodeURIComponent(waword)}`, '_blank');
        //         break;
        //     default:
        //         break;
        // }
    }
</script>
