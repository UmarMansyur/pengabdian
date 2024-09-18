@extends('Layouts.index')

@section('content')
<main>
    <!-- Start Hero Area -->
    <section class="ep-hero ep-hero--style2 hero-bg background-image"
        style="background-image: url('/assets/images/hero/home-2/bg.png')">
        <div class="container ep-container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-xl-6 col-12">
                    <div class="ep-hero__content ep-hero__content--style2">
                        <h1 class="ep-hero__title ep-split-text left">
                            E-Modul Berjenjang
                        </h1>
                        <p class="ep-hero__text">
                            E-Modul Berjenjang adalah sebuah platform pendidikan yang berfokus pada
                            pendidikan berjenjang dimana setiap jenjang dibedakan berdasarkan Fase yang
                            telah diatur pada Kurikulum Merdeka.
                        </p>
                        <div class="ep-hero__search">
                            <a href="{{ env('FRONTEND_URL') }}" class="ep-btn ep1-bg">
                                Mulai Belajar
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 offset-xl-1 col-xl-5 col-12 order-top">
                    <div class="ep-hero__widget ep-hero__widget-style2 position-relative">
                        <div class="ep-hero__img">
                            <img src="https://ik.imagekit.io/8zmr0xxik/auth.svg?updatedAt=1726630387421"
                                alt="hero-img" />
                        </div>
                        <div class="ep-hero__overview-card updown-ani">
                            <h4><span>B</span></h4>
                            <p>Skor Akreditasi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Start Hero Area -->
    <!-- Start About Area -->
    <section class="ep-about ep-about--style2 ep-section section-gap position-relative" id="about-emodul">
        <div class="container ep-container">
            <div class="row">
                <div class="col-12">
                    <div class="ep-section-head ep-section-head--style2">
                        <h3 class="ep-section-head__color-title ep1-color ep1-border-color">
                            Tentang Kami
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="ep-section__img ep-section__img--style2 position-relative">
                        <div class="ep-section__img-main">
                            <img src="/assets/images/11.jpg" alt="about-img" />
                        </div>
                        <div class="overview-card updown-ani">
                            <div class="overview-card__icon">
                                <img src="/assets/images/about/about-1/user.svg" alt="user-icon" />
                            </div>
                            <div class="overview-card__info">
                                <h4><span>100</span>+</h4>
                                <p>Siswa Aktif</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="ep-section__content ep-section__content--style2">
                        <h3 class="ep-section__title ep-split-text left">
                            Platform E-Modul Berjenjang <br />
                            SDN Barkot 5 Kabupaten Pamekasan
                        </h3>
                        <p class="ep-section__text">
                            E-Modul Berjenjang adalah platform pembelajaran digital yang dirancang untuk
                            mendukung pengembangan kompetensi guru
                            di SDN Barkot V dalam pemenuhan layanan pendidikan inklusif. Tujuannya adalah
                            menyediakan sumber daya pembelajaran yang terstruktur dan dapat disesuaikan
                            untuk membantu
                            guru meningkatkan praktik dalam mendukung keberagaman siswa di kelas. E-Modul
                            Berjenjang menyediakan beragam konten pembelajaran, seperti panduan praktis,
                            studi kasus,
                            video pembelajaran, dan materi-materi yang dapat diunduh. Konten-konten ini
                            dirancang
                            untuk meningkatkan pemahaman guru tentang strategi pengajaran inklusif,
                            penyesuaian
                            kurikulum, pengelolaan kelas yang inklusif, dan cara mendukung keberagaman
                            siswa. Selain itu berikut beberapa inovasi yang ada di E-Modul Berjenjang:
                        </p>
                        <div class="ep-section__widget ep-section__widget--style2">
                            <ul class="ep-feature-list">
                                <li>
                                    <i class="fi fi-ss-check-circle"></i>Personalisasi Pembelajaran
                                </li>
                                <li>
                                    <i class="fi fi-ss-check-circle"></i>Penggunaan Teknologi Canggih
                                </li>
                                <li>
                                    <i class="fi fi-ss-check-circle"></i>Aksesibilitas dan Keterjangkauan
                                </li>
                            </ul>
                            <ul class="ep-feature-list">
                                <li>
                                    <i class="fi fi-ss-check-circle"></i>Kolaborasi dan Jaringan
                                </li>
                                <li>
                                    <i class="fi fi-ss-check-circle"></i>Analitik dan Pembelajaran
                                </li>
                                <li>
                                    <i class="fi fi-ss-check-circle"></i> Dukungan berkelanjutan
                                </li>
                            </ul>
                        </div>
                        <div class="ep-section__btn">
                            <a href="/about-us" class="ep-btn ep1-bg">
                                Selengkapnya
                                <i class="fi fi-rs-arrow-small-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Start About Area -->
    <!-- Start Funfact Area -->
    <section class="ep-funfact ep-funfact--style2 section-gap pt-0 position-relative">
        <div class="container ep-container">
            <div class="ep-funfact-shape updown-ani">
                <img src="/assets/images/funfact/funfact-2/arrow.svg" alt="arrow-icon" />
            </div>
            <div class="row">
                <!-- Single Funfact Card -->
                <div class="col-lg-4 col-xl-3 col-md-6 col-12">
                    <div class="ep-funfact__card ep-funfact__card--style2 wow fadeInUp" data-wow-delay=".3s"
                        data-wow-duration="1s">
                        <div class="ep-funfact__icon ep5-bg-light">
                            <img src="/assets/images/funfact/funfact-2/1.svg" alt="funfact-icon" />
                        </div>
                        <div class="ep-funfact__info m-0">
                            <h4><span class="counter">3</span></h4>
                            <p>Fase</p>
                        </div>
                    </div>
                </div>
                <!-- Single Funfact Card -->
                <div class="col-lg-4 col-xl-3 col-md-6 col-12">
                    <div class="ep-funfact__card ep-funfact__card--style2 wow fadeInUp" data-wow-delay=".5s"
                        data-wow-duration="1s">
                        <div class="ep-funfact__icon ep1-bg-light">
                            <img src="/assets/images/funfact/funfact-2/2.svg" alt="funfact-icon" />
                        </div>
                        <div class="ep-funfact__info m-0">
                            <h4><span class="counter">6</span></h4>
                            <p>Kelas</p>
                        </div>
                    </div>
                </div>
                <!-- Single Funfact Card -->
                <div class="col-lg-4 col-xl-3 col-md-6 col-12">
                    <div class="ep-funfact__card ep-funfact__card--style2 wow fadeInUp" data-wow-delay=".7s"
                        data-wow-duration="1s">
                        <div class="ep-funfact__icon ep7-bg-light">
                            <img src="/assets/images/funfact/funfact-2/3.svg" alt="funfact-icon" />
                        </div>
                        <div class="ep-funfact__info m-0">
                            <h4><span class="counter">25</span>+</h4>
                            <p>Modul Tersedia</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6 col-12">
                    <div class="ep-funfact__card ep-funfact__card--style2 wow fadeInUp" data-wow-delay=".7s"
                        data-wow-duration="1s">
                        <div class="ep-funfact__icon ep7-bg-light">
                            <img src="/assets/images/funfact/funfact-2/4.svg" alt="funfact-icon" />
                        </div>
                        <div class="ep-funfact__info m-0">
                            <h4><span class="counter">{{ $all_visitor }}</span></h4>
                            <p>Pengunjung</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ep-group-study position-relative section-gap mg-btm-120 pt-0">
        <div class="container ep-container">
            <div class="ep-group-study__inner position-relative">
                <div class="ep-group-study__shape updown-ani">
                    <img src="/assets/images/group-study/shape.svg" alt="arrow-icon" />
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="ep-section-head ep-section-head--style2">
                            <h3 class="ep-section-head__color-title ep9-color ep9-border-color">
                                SDN Barkot 5
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-xl-4 col-12">
                        <div class="ep-section__content ep-section__content--style2">
                            <h3 class="ep-section__title ep-split-text left">
                                SDN Barkot 5 Kabupaten Pamekasan
                            </h3>
                            <p class="ep-section__text">
                                SDN Barkot 5 adalah sekolah dasar yang berlokasi di Kabupaten Pamekasan,
                                Jawa Timur. Sekolah ini berkomitmen untuk menyediakan pendidikan berkualitas
                                tinggi bagi anak-anak sekolah dasar. Tak hanya itu, SDN Barkot 5 juga
                                berusaha untuk menjadi sekolah yang aktif dalam mengembangkan potensi siswa
                                dibidang non akademik.
                            </p>
                            <div class="ep-section__btn mb-3">
                                <a href="/about-us" class="ep-btn border-btn">
                                    Selengkapnya
                                    <i class="fi fi-rs-arrow-small-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 offset-xl-2 col-12">
                        <iframe width="600" height="315" src="https://www.youtube.com/embed/D-nSWHtTcEQ" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen class="ep-video__iframe"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ep-service section-gap pt-0" id="kebermanfaatan">
        <div class="container ep-container">
            <div class="col-12">
                <div class="ep-section-head ep-section-head--style2">
                    <h3 class="ep-section-head__color-title ep1-color ep1-border-color">
                        Kebermanfaatan dan Kegunaan
                    </h3>
                    <h2 class="ep-section-head__big-title ep-split-text left">
                        Kebermanfaatan dan Kegunaan
                    </h2>
                </div>
            </div>
            <div class="row">
                <!-- Single Card -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="ep-service__card service-1 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                        <div class="ep-service__icon">
                            <img src="/assets/images/service/1.svg" alt="service-icon" />
                        </div>
                        <div class="ep-service__info">
                            <h3>Aksesibilitas Fleksibel,</h3>
                            <p>
                                E-Modul Berjenjang dapat diakses dari berbagai perangkat dan
                                lokasi, memungkinkan guru untuk belajar kapan saja dan di mana saja sesuai
                                dengan
                                jadwal
                            </p>

                        </div>
                    </div>
                </div>
                <!-- Single Card -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="ep-service__card service-2 wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                        <div class="ep-service__icon">
                            <img src="/assets/images/service/2.svg" alt="service-icon" />
                        </div>
                        <div class="ep-service__info">
                            <h3>Modul Berbasis Kompetensi</h3>
                            <p>
                                dirancang dengan berbasis pada kompetensi yang harus
                                dimiliki oleh guru untuk memberikan layanan pendidikan inklusif secara
                                efektif.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Single Card -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="ep-service__card service-3 wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                        <div class="ep-service__icon">
                            <img src="/assets/images/service/3.svg" alt="service-icon" />
                        </div>
                        <div class="ep-service__info">
                            <h3>Konten Differensial</h3>
                            <p>
                                Media konten yang dapat diakses dengan tingkat diferensiasi
                                yang sesuai dengan kebutuhan guru dan siswa.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Single Card -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="ep-service__card service-4 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                        <div class="ep-service__icon">
                            <img src="/assets/images/service/4.svg" alt="service-icon" />
                        </div>
                        <div class="ep-service__info">
                            <h3>Pengembangan Profesional Guru</h3>
                            <p>
                                Sebagai sumber daya pembelajaran yang terstruktur
                                dan dapat disesuaikan untuk membantu guru meningkatkan praktik dalam
                                mendukung
                                keberagaman siswa di kelas.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Single Card -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="ep-service__card service-5 wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                        <div class="ep-service__icon">
                            <img src="/assets/images/service/5.svg" alt="service-icon" />
                        </div>
                        <div class="ep-service__info">
                            <h3>Dukungan yang Tepat Waktu</h3>
                            <p>
                                E-Modul Berjenjang memberikan bantuan dan umpan balik real-time,
                                memastikan siswa mendapat dukungan tepat waktu untuk memahami materi.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Single Card -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="ep-service__card service-6 wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                        <div class="ep-service__icon">
                            <img src="/assets/images/service/6.svg" alt="service-icon" />
                        </div>
                        <div class="ep-service__info">
                            <h3>Penyesuaian Berkelanjutan</h3>
                            <p>
                                E-Modul Berjenjang memberikan pembelajaran yang disesuaikan dengan
                                kemampuan, kebutuhan, dan karakteristik siswa, sehingga mereka dapat belajar
                                sesuai dengan kecepatan dan gaya masing-masing.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ep-team ep-team--style2 section-gap position-relative">
        <div class="ep-team__pattern-style2">
            <img class="pattern-1 updown-ani" src="/assets/images/team/team-2/pattern-1.svg" alt="pattern-1" />
            <img class="pattern-2 rotate-ani" src="/assets/images/team/team-2/pattern-2.svg" alt="pattern-2" />
            <img class="pattern-3 updown-ani" src="/assets/images/team/team-2/pattern-3.svg" alt="pattern-3" />
        </div>
        <div class="container ep-container">
            <div class="row">
                <div class="col-12">
                    <div class="ep-section-head ep-section-head--style2">
                        <h3 class="ep-section-head__color-title ep1-color ep1-border-color">
                            Tim Pengembang E-Modul Berjenjang
                        </h3>
                        <h2 class="ep-section-head__big-title ep-split-text left">
                            Tim Pengembang E-Modul Berjenjang
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Single Team -->
                <div class="col-lg-6 col-xl-4 col-md-6 col-12">
                    <div class="ep-team__card ep-team__card--style2 wow fadeInUp" data-wow-delay=".5s"
                        data-wow-duration="1s">
                        <a href="team-details.html" class="ep-team__img">
                            <img src="/assets/images/zayyadi.png" alt="team-img" />
                        </a>
                        <div class="ep-team__content">
                            <div class="ep-team__author">
                                <a href="team-details.html">
                                    <h5>Moh. Zayyadi</h5>
                                </a>
                                <p>Anggota</p>
                            </div>
                            <div class="ep-team__social">
                                <span class="ep-team__social-btn">
                                    <i class="fi-rr-share"></i>
                                </span>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="icofont-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icofont-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icofont-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icofont-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ep-faq ep-faq--style2 section-gap pt-0 position-relative">
        <div class="ep-faq__pattern-3 updown-ani">
            <img src="/assets/images/faq/faq-2/pattern.svg" alt="pattern" />
        </div>
        <div class="container ep-container">
            <div class="row">
                <div class="col-12">
                    <div class="ep-section-head ep-section-head--style2">
                        <h3 class="ep-section-head__color-title ep7-color ep7-border-color">
                            Pertanyaan yang sering diajukan
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row g-0 align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="ep-faq__img">
                        <img src="/assets/images/faq.png" alt="faq-img" />
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="ep-faq__content">
                        <div class="ep-section-head">
                            <h3 class="ep-section-head__big-title fs-28 ep-split-text left">
                                Pertanyaan yang sering diajukan
                            </h3>
                        </div>
                        <div class="ep-faq__accordion faq-inner accordion" id="accordionExample">
                            <!-- Single Faq -->
                            <div class="ep-faq__accordion-item ep-faq__accordion-item--style2">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <span>01</span>Apakah ekombel berjenjang itu?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="ep-faq__accordion-body">
                                        <p class="ep-faq__accordion-text">
                                            E-Modul Berjenjang adalah sebuah platform pendidikan yang
                                            dirancang untuk membantu guru dan siswa dalam proses
                                            pembelajaran.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Faq -->
                            <div class="ep-faq__accordion-item ep-faq__accordion-item--style2">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <span>02</span>Bagaimana cara menggunakan e-modul berjenjang?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="ep-faq__accordion-body">
                                        <p class="ep-faq__accordion-text">
                                            Untuk menggunakan e-modul berjenjang, anda harus menjadi
                                            siswa/guru aktif di SDN Barkot 5 dan telah didaftarkan oleh
                                            Administrator.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Faq -->
                            <div class="ep-faq__accordion-item ep-faq__accordion-item--style2">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <span>03</span> Akun saya tidak bisa masuk?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="ep-faq__accordion-body">
                                        <p class="ep-faq__accordion-text">
                                            Silahkan hubungi administrator untuk mendapatkan bantuan.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ep-blog section-gap pt-0 position-relative" id="modul-tersedia">
        <div class="container ep-container">
            <div class="row">
                <div class="col-12">
                    <div class="ep-section-head ep-section-head--style2">
                        <h3 class="ep-section-head__color-title ep1-color ep1-border-color">
                            Modul Tersedia
                        </h3>
                        <h2 class="ep-section-head__big-title ep-split-text left">
                            Ayo mulai belajar!
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Single Blog Card -->
                <div class="col-lg-6 col-xl-4 col-md-6 col-12">
                    <div class="ep-blog__card ep-blog__card--style2 wow fadeInUp" data-wow-delay=".3s"
                        data-wow-duration="1s">
                        <a href="blog-details.html" class="ep-blog__img">
                            <img src="/assets/images/course.jpg" alt="blog-img" />
                        </a>
                        <div class="ep-blog__info">
                            <div class="ep-blog__date">22 jan</div>
                            <div class="ep-blog__content">
                                <div class="ep-blog__meta">
                                    <ul>
                                        <li><i class="fi-rr-comments"></i>Comments (05)</li>
                                        <li>
                                            <a href="#">
                                                <i class="fi-rr-user"></i>By admin
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <a href="blog-details.html" class="ep-blog__title">
                                    <h5 class="m-0">
                                        Lifelong Learning Endless was Possibilities
                                    </h5>
                                </a>
                                <div class="ep-blog__btn">
                                    <a href="blog-details.html">Read More
                                        <i class="fi fi-rs-arrow-small-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Blog Card -->
                <div class="col-lg-6 col-xl-4 col-md-6 col-12">
                    <div class="ep-blog__card ep-blog__card--style2 wow fadeInUp" data-wow-delay=".5s"
                        data-wow-duration="1s">
                        <a href="blog-details.html" class="ep-blog__img">
                            <img src="/assets/images/course.jpg" alt="blog-img" />
                        </a>
                        <div class="ep-blog__info">
                            <div class="ep-blog__date">22 jan</div>
                            <div class="ep-blog__content">
                                <div class="ep-blog__meta">
                                    <ul>
                                        <li><i class="fi-rr-comments"></i>Comments (05)</li>
                                        <li>
                                            <a href="#">
                                                <i class="fi-rr-user"></i>By admin
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <a href="blog-details.html" class="ep-blog__title">
                                    <h5 class="m-0">
                                        Foundation for a better most tomorrow design
                                    </h5>
                                </a>
                                <div class="ep-blog__btn">
                                    <a href="blog-details.html">Read More
                                        <i class="fi fi-rs-arrow-small-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Blog Card -->
                <div class="col-lg-6 col-xl-4 col-md-6 col-12">
                    <div class="ep-blog__card ep-blog__card--style2 wow fadeInUp" data-wow-delay=".7s"
                        data-wow-duration="1s">
                        <a href="blog-details.html" class="ep-blog__img">
                            <img src="/assets/images/course.jpg" alt="blog-img" />
                        </a>
                        <div class="ep-blog__info">
                            <div class="ep-blog__date">22 jan</div>
                            <div class="ep-blog__content">
                                <div class="ep-blog__meta">
                                    <ul>
                                        <li><i class="fi-rr-comments"></i>Comments (05)</li>
                                        <li>
                                            <a href="#">
                                                <i class="fi-rr-user"></i>By admin
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <a href="blog-details.html" class="ep-blog__title">
                                    <h5 class="m-0">
                                        Empowering Students designer is Transforming Lives
                                    </h5>
                                </a>
                                <div class="ep-blog__btn">
                                    <a href="blog-details.html">Read More
                                        <i class="fi fi-rs-arrow-small-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="ep-brand section-gap pt-0">
        <div class="container ep-container">
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel ep-brand__slider">
                        <!-- Single Brand -->
                        <a href="#" class="ep-brand__logo ep-brand__logo--style2">
                            <img src="https://unira.ac.id/img/logo.png" alt="brand-logo" />
                        </a>
                        <!-- Single Brand -->
                        <a href="#" class="ep-brand__logo ep-brand__logo--style2">
                            <img src="https://pmb.unira.ac.id/img/kampusmerdeka.png" alt="brand-logo" />
                        </a>
                        <!-- Single Brand -->
                        <a href="#" class="ep-brand__logo ep-brand__logo--style2">
                            <img src="https://pmb.unira.ac.id/img/kemendikbud.png" alt="brand-logo" />
                        </a>
                        <!-- Single Brand -->
                        <a href="#" class="ep-brand__logo ep-brand__logo--style2">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/25/Kurikulum_Merdeka.png/800px-Kurikulum_Merdeka.png"
                                alt="brand-logo" />
                        </a>
                        <!-- Single Brand -->
                        <a href="#" class="ep-brand__logo ep-brand__logo--style2">
                            <img src="/assets/images/logo-sendiri.png" alt="brand-logo" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection