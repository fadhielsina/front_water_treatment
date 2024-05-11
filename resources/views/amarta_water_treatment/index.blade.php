@extends('amarta_water_treatment.layouts.app')

@section('content')

<!-- hero area start  -->
<section class="hero__area p-relative section-spacing bg-theme-1 hero__area-3 fix">
    <div class="container container-big">
        <div class="hero__content p-relative">
            <div class="hero__title-wrap">
                <p class="hero__subtitle xsmall uppercase lh-1 wow fadeInUp" data-wow-delay=".3s">Welcome to
                    Amarta Water Treatment
                </p>
                <h1 class="hero__title text-white wow fadeInUp" data-wow-delay=".5s">Amarta Water Treatment</h1>
            </div>
            <p style="color: white;" class="hero__text wow fadeInUp" data-wow-delay=".7s">Merupakan unit layanan jasa instalasi yang berfokus pada penyediaan peralatan dan layanan pengolahan air dari air yang tidak layak untuk dikonsumsi menjadi air layak konsumsi menggunakan sistem reverse osmosis.</p>
        </div>
    </div>
    <div class="hero__img">
        <span class="hero__img-overlay"></span>
        <img src="{{url('water_treatment')}}/assets/img/background/bg_1.jpeg" alt="image not found">
    </div>
</section>
<!-- hero area end  -->

<!-- services area start  -->
<div class="services__area section-spacing">
    <div class="container">
        <div class="row justify-content-center section-title-spacing mb-40 wow fadeInUp" data-wow-delay=".3s">
            <div class="col-xl-8">
                <div class="section__title-wrapper text-center">
                    <h2 class="section__title">Hampir 70% Sumber Air Minum di Indonesia Sudah Tercemar</h2>
                    <br>
                    <p>Air kotor mengancam pertumbuhan kita. Sering pemakaian air yang tidak bersih berbahaya untuk jangka panjang.</p>
                    <p>Bumi terbentuk 4,5 miliar tahun,berasal dari bahan batu yang berasal dari Air. Dengan demikian, bisa dikatakan Air sudah lebih dahulu ada di kehidupan alam semesta.</p>
                </div>
            </div>
        </div>
        <div class="row g-5 gy-50 row-cols-xl-4 row-cols-lg-3 row-cols-sm-2 row-cols-1">
            <div class="col">
                <div class="counter__box">
                    <div class="counter__number-box">
                        <img src="{{url('water_treatment')}}/assets/img/background/kotoran_sumur.webp" style="border-radius: 15%;" alt="">
                    </div>
                    <h3 class="counter__title">Kotoran Sumur Air</h3>
                </div>
            </div>
            <div class="col">
                <div class="counter__box">
                    <div class="counter__number-box">
                        <img src="{{url('water_treatment')}}/assets/img/background/kotoran_limbah.jpg" style="border-radius: 15%;" alt="">
                    </div>
                    <h3 class="counter__title">Air dan Kotoran Limbah</h3>
                </div>
            </div>
            <div class="col">
                <div class="counter__box">
                    <div class="counter__number-box">
                        <img src="{{url('water_treatment')}}/assets/img/background/kaporit.jpg" style="border-radius: 15%;" alt="">
                    </div>
                    <h3 class="counter__title">Kaporit dan Klorin</h3>
                </div>
            </div>
            <div class="col">
                <div class="counter__box">
                    <div class="counter__number-box">
                        <img src="{{url('water_treatment')}}/assets/img/background/polusi_pipa.jpeg" style="border-radius: 15%;" alt="">
                    </div>
                    <h3 class="counter__title">Polusi Pipa dan PDAM</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- services area end  -->

<!-- services area start  -->
<div class="services__area section-spacing bg-theme-4">
    <div class="container">
        <div class="row justify-content-center section-title-spacing mb-40 wow fadeInUp" data-wow-delay=".3s">
            <div class="col">
                <div class="section__title-wrapper text-center">
                    <h2 class="section__title">Proses Pengolahan Air</h2>
                    <br>
                    <p>Proses pengolahan air merupakan proses peningkatan kualitas air yang dilakukan dengan tujuan untuk memusnahkan kontaminasi zat dan partikel entah itu kontaminasi secara fisika, kimia, dan mikrobiologis yang dapat memengaruhi kesehatan masyarakat yang mengkonsumsi air yang tercemar.</p>
                    <p>Pengolahan air biasa digunakan di skala rumah tangga, kawasan terpadu, perkantoran, rumah sakit, real estate, apartemen, hingga industri-industri yang bergerak di bidang pangan, sandang, dan papan.</p>
                    <p>Kami menyediakan jasa instalasi pengolahan air <i>Sea Water Reverse Osmosis</i> (SWRO), <i>Brackish Water Reverse Osmosis</i> (BWRO), <i>Sewage Treatment Plant</i> (STP), <i>Waste Water Treatment Plant</i> (WWTP), dan sebagainya dengan kualitas proses yang efektif dan perawatan yang mudah.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- services area end  -->

<!-- about area start  -->
<section class="df-about__area section-spacing">
    <div class="container">
        <div class="row g-5 gy-50 align-items-center wow fadeInUp" data-wow-delay=".3s">
            <div class="col-lg-6">
                <div class="df-about__content ">
                    <div class="section__title-wrapper">
                        <h2 class="section__title">Reverse Osmosis</h2>
                    </div>
                    <p class="mt-35 mb-35">Reverse Osmosis atau RO adalah suatu metode penyaringan yang dapat menyaring berbagai molekul besar dan ion-ion dari suatu larutan dengan cara memberi tekanan pada larutan ketika larutan itu berada di salah satu sisi membran seleksi (lapisan penyaring).</p>
                    <p>Reverse osmosis merupakan suatu proses pemaksaan sebuah pelarut dari daerah konsentrasi tinggi ke daerah pelarut rendah dengan menggunakan sebuah tekanan melebihi tekanan osmotik.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="df-video__box">
                    <img src="{{url('water_treatment')}}/assets/img/background/bg_2.jpeg" alt="image not found">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about area end  -->

<!-- services area start  -->
<section class="df-services__area section-spacing p-relative x-clip bg-theme-4">
    <div class="area-shapes">
        <div class="df-inner-area__shape1"></div>
        <div class="df-inner-area__shape2"></div>
    </div>
    <div class="container">
        <div class="row justify-content-center section-title-spacing wow fadeInUp" data-wow-delay=".3s">
            <div class="col-xl-8">
                <div class="section__title-wrapper text-center">
                    <h2 class="section__title">Sektor Apa Saja yang dapat dilakukan proses pengolahan air?</h2>
                </div>
            </div>
        </div>
        <div class="row g-5 wow fadeInUp" data-wow-delay=".3s">
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="service__box">
                    <div class="service__content">
                        <div class="service__img">
                            <img src="water_treatment/assets/img/service/redential.jpg" alt="image not found">
                        </div>
                        <h4 class="service__title"><a href="#">Filter Air Rumah Tangga (Residential)</a></h4>
                        <p class="service__text">PT. Jagat Tirta Amarta salah satu Perusahaan Supplier Filter Air menghadirkan Filter air yang digunakan untuk penyaring atau penjernih air di skala rumah tangga.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="service__box">
                    <div class="service__content">
                        <div class="service__img">
                            <img src="water_treatment/assets/img/service/air_limbah.jpg" alt="image not found">
                        </div>
                        <h4 class="service__title"><a href="#">Instalasi Pengolahan Limbah</a></h4>
                        <p class="service__text">Dengan teknologi peralatan beserta perlengkapannya yang dirancang secara khusus untuk memproses atau mengolah cairan sisa proses, sehingga sisa proses tersebut menjadi layak dibuang ke lingkungan.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="service__box">
                    <div class="service__content">
                        <div class="service__img">
                            <img src="water_treatment/assets/img/service/commercial.jpg" alt="image not found">
                        </div>
                        <h4 class="service__title"><a href="#">Filter Air Komersial</a></h4>
                        <p class="service__text">Peralatan pemurnian air komersial yg digunakan untuk mengolah volume air yg besar dengan laju aliran tinggi untuk industri Hotel, Restoran dan Cafe (HORECA) maupun depot air minum isi ulang.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="service__box">
                    <div class="service__content">
                        <div class="service__img">
                            <img src="water_treatment/assets/img/service/industrial.jpg" alt="image not found">
                        </div>
                        <h4 class="service__title"><a href="#">Filter Air Industri</a></h4>
                        <p class="service__text">Penyedia produk dan layanan skala industri mulai dari industri yang bergerak di bidang pangan, sandang, dan papan untuk mempertahankan kualitas dan keberlanjutan penggunaan air dalam proses pengolahan di industri.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- services area end  -->

<!-- testimonial area start  -->
<section class="df-testimonial__area section-spacing bg-theme-4 p-relative x-clip z-index-3">
    <div class="container">
        <div class="df-testimonial__wrapper p-relative wow fadeInUp" data-wow-delay=".3s">
            <div class="swiper testimonial__slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="df-testimonial__box">
                            <div class="df-testimonial__box-content">
                                <div class="df-testimonial__text">
                                    <p>" Menjaga air sama dengan menjaga kehidupan "</p>
                                </div>
                                <div class="df-testimonial__author-meta d-flex justify-content-center">
                                    <div class="df-testimonial__author-review">
                                        <h4 class="df-testimonial__author">Erfan Ramadhan, S.T.</h4>
                                        <p>Co - Founder / CEO</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="df-testimonial__navigation">
                <div class="testimonial__slider-button-prev slider__nav-btn"><i class="icon-022-left"></i>
                </div>
                <div class="testimonial__slider-button-next slider__nav-btn"><i class="icon-021-next"></i>
                </div>
            </div>
            <div class="testimonial__slider-pagination df__pagination mt-60 justify-content-center wow fadeInUp" data-wow-delay=".3s"></div>
        </div>
    </div>
</section>
<!-- testimonial area end  -->

<!-- brands area start  -->
<div class="brand__area section-spacing">
    <div class="container">
        <div class="brands__wrapper wow fadeInUp" data-wow-delay=".3s">
            <div class="swiper brand__slider" style="margin-bottom: 20px;">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="brand__item">
                            <img class="img-fluid" src="{{url('water_treatment')}}/assets/img/client/komando_armada.png" alt="image">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand__item">
                            <img class="img-fluid" src="{{url('water_treatment')}}/assets/img/client/itb.png" alt="image">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand__item">
                            <img class="img-fluid" src="{{url('water_treatment')}}/assets/img/client/iatpi.png" alt="image">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand__item">
                            <img class="img-fluid" src="{{url('water_treatment')}}/assets/img/client/rs_indramayu.png" alt="image">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand__item">
                            <img class="img-fluid" src="{{url('water_treatment')}}/assets/img/client/rs_adjidarmo.png" alt="image">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand__item">
                            <img class="img-fluid" src="{{url('water_treatment')}}/assets/img/client/rs_siloam.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- brands area end  -->

@endsection