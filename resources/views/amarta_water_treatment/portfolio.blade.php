@extends('amarta_water_treatment.layouts.app')

@section('content')

<!-- blog area start  -->
<section class="df-blog__area section-spacing p-relative fix">
    <div class="circle-2"></div>
    <div class="circle-3"></div>
    <div class="container">
        <div class="row align-items-end section-title-spacing wow fadeInUp" data-wow-delay=".3s">
            <div class="col-lg-12">
                <div class="section__title-wrapper text-center">
                    <h2 class="section__title">Explore Our Portofolio</h2>
                </div>
            </div>
        </div>
        <div class="df-portfolio2__item-wrapper">
            <div class="row g-5 grid">
                <div class="col-lg-6 grid-item">
                    <div class="df-portfolio2__item-box">
                        <div class="df-portfolio2__item-thumb">
                            <a href=""><img src="{{ url('water_treatment') }}/assets/img/portfolio/angkatan_laut/1.jpeg" alt="img not found"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 grid-item">
                    <div class="df-portfolio2__item-box">
                        <div class="df-portfolio2__item-thumb">
                            <a href=""><img src="{{ url('water_treatment') }}/assets/img/portfolio/angkatan_laut/2.jpeg" alt="image not found"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 grid-item">
                    <div class="df-portfolio2__item-box">
                        <div class="df-portfolio2__item-thumb">
                            <a href=""><img src="{{ url('water_treatment') }}/assets/img/portfolio/angkatan_laut/3.jpeg" alt="image not found"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 grid-item">
                    <div class="df-portfolio2__item-box">
                        <div class="df-portfolio2__item-thumb">
                            <a href=""><img src="{{ url('water_treatment') }}/assets/img/portfolio/angkatan_laut/4.jpeg" alt="image not found"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 grid-item">
                    <div class="df-portfolio2__item-box">
                        <div class="df-portfolio2__item-thumb">
                            <a href=""><img src="{{ url('water_treatment') }}/assets/img/portfolio/angkatan_laut/5.jpeg" alt="image not found"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 grid-item">
                    <div class="df-portfolio2__item-box">
                        <div class="df-portfolio2__item-thumb">
                            <a href=""><img src="{{ url('water_treatment') }}/assets/img/portfolio/angkatan_laut/6.jpeg" alt="image not found"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 grid-item">
                    <div class="df-portfolio2__item-box">
                        <div class="df-portfolio2__item-thumb">
                            <a href=""><img src="{{ url('water_treatment') }}/assets/img/portfolio/angkatan_laut/7.jpeg" alt="image not found"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 grid-item">
                    <div class="df-portfolio2__item-box">
                        <div class="df-portfolio2__item-thumb">
                            <a href=""><img src="{{ url('water_treatment') }}/assets/img/portfolio/angkatan_laut/8.jpeg" alt="image not found"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog area end  -->

@endsection