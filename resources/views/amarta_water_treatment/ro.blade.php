@extends('amarta_water_treatment.layouts.app')

@section('content')

<!-- page title area start  -->
<section class="page-title-area-2 breadcrumb-spacing bg-theme-4 section-spacing">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-9">
                <div class="page-title-wrapper-2 text-center">
                    <h1 class="page__title-2 mb-25">Reverse Osmosis</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- page title area start  -->

<!-- blog area start  -->
<section class="df-blog__area section-spacing fix" style="padding-top: 50px;">
    <div class="container">
        <div class="row g-5">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                <div class="df-blog-details__wrap">
                    <div class="df-blog-details__box mb-30 wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.3">
                        <div class="df-blog-details__thumb p-relative">
                            <div class="df-blog-details__thumb-overlay wow"></div>
                            <img src="{{url('water_treatment')}}/assets/img/background/bg_2.jpeg" alt="image not found">
                        </div>
                        <div class="df-blog-details__content mb-40">
                            <div class="df-blog-details__meta mb-25">
                                <h3>Apa Itu Reverse Osmosis?</h3>
                            </div>
                            <p class="df-blog-details__text mb-20">Reverse osmosis merupakan teknologi yang menggunakan membran sebagai filter dan tekanan untuk mendorong cairan/air dari satu sisi ke sisi lainnya. Air yang menembus membran tersebut adalah air yang bersih dan sudah tersaring dari berbagai kontaminan. Reverse Osmosis merupakan proses pemurnian air yang dilakukan melalui beberapa kali tahapan penyaringan untuk menghilangkan kandungan molekul serta partikel berbahaya yang ada di dalamnya, seperti kontaminan dan sedimen yang meliputi klorin, garam, metal, dan berbagai kotoran lainnya.</p>
                            <div class="df-blog-details__meta mb-25">
                                <h3>Bagaimana Cara Reverse Osmosis Bekerja?</h3>
                            </div>
                            <p class="df-blog-details__text mb-20">Proses pemurnian menggunakan sistem Reverse Osmosis dilakukan dengan cara memberikan tekanan pada air yang memiliki konsentrasi kontamin tinggi ke konsentrasi kontamin rendah, sehingga kontamin yang ada di dalam air bisa tersaring dan hanya menyisakan air bersih yang dapat langsung diminum.</p>
                            <p class="df-blog-details__text mb-20">Pada mesin filter biasanya terdapat empat proses penyaringan yang mencakup filter sedimen, filter pra-carbon, membran inti, dan filter post-carbon. Filter sedimen berfungsi untuk menghilangkan kotoran besar seperti debu, pasir, atau tanah agar tidak menyumbat filter lainnya. Filter pra-carbon bekerja dengan mengaktifkan karbon untuk menyaring kotoran yang seukuran butiran tepung seperti klorin, kloramin, dan senyawa kimia lainnya. Kemudian membran Reverse Osmosis akan menyaring molekul yang lebih berat dari air seperti sodium, flourida, logam berat, dan sebagainya. Lalu filter yang terakhir bertugas untuk memurnikan air yang sudah disaring sebelumnya dari elemen yang masih tersisa sampai benar-benar menjadi H2O murni.</p>
                            <div class="df-blog-details__meta mb-25">
                                <h3>Apa Keuntungan Menggunakan Reverse Osmosis?</h3>
                            </div>
                            <p class="df-blog-details__text mb-20">Berbeda dengan filter karbon yang hanya mampu menyaring partikel berukuran 1 mikron saja, filter air Reverse Osmosis dapat memurnikan air hingga 99,9% dari berbagai jenis kontamin dan sedimen, bahkan juga sampai partikel terkecil yang berukuran 0,01 mikron. Anda mungkin memiliki sumber mata air yang bersih untuk persediaan air di rumah, namun dalam proses perjalanan air tersebut dari sumber mata air hingga sampai ke pipa rumah Anda belum tentu sudah terjamin bebas dari berbagai kontamin yang ada di alam. Tanpa Anda sadari, bisa saja keran rumah Anda menghasilkan air dengan tingkat TDS yang tinggi, yang mana akan sangat berbahaya jika dikonsumsi oleh manusia, terlebih lagi dalam jangka waktu yang panjang. Menurut World Health Organization, air dengan konsentrasi TDS yang mencapai angka 1200ppm atau lebih dikhawatirkan dapat memberikan berbagai gangguan kesehatan berbahaya, seperti kanker dan ginjal.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog area end  -->

@endsection