@extends('Layouts.index')

@section('content')
<main>
  <!-- Start Breadcrumbs Area -->
  <div class="ep-breadcrumbs breadcrumbs-bg background-image"
    style="background-image: url('./assets/images/breadcrumbs-bg.png')">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-6 col-12">
          <div class="ep-breadcrumbs__content">
            <h3 class="ep-breadcrumbs__title">
              Tentang Kami
            </h3>
            <ul class="ep-breadcrumbs__menu">
              <li>
                <a href="index.html">Home</a>
              </li>
              <li>
                <i class="fi-bs-angle-right"></i>
              </li>
              <li class="active">
                <a href="/about-us">Tentang Kami</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Breadcrumbs Area -->
  <!-- Start Event Details Area -->
  <section class="ep-event__details section-gap position-relative">
    <div class="container ep-container">
      <div class="row">
        <div class="col-lg-12 col-xl-12 col-12">
          <div class="ep-event__details-content">
            <div class="ep-event__widget">
              <h3 class="ep-event__widget-title">
                Tentang Kami
              </h3>
              <p class="ep-event__widget-text">
                Platform E-Modul Berjenjang kami dikembangkan untuk memfasilitasi pembelajaran yang lebih terstruktur
                dan efektif. Dengan sistem pembelajaran berbasis fase, kami membagi modul menjadi tiga tahap, yaitu Fase
                A (kelas 1 dan 2), Fase B (kelas 3 dan 4), serta Fase C (kelas 5 dan 6). Setiap fase dirancang khusus
                untuk memenuhi kebutuhan perkembangan siswa, memastikan bahwa materi yang disampaikan relevan dan mudah
                dipahami sesuai tingkatannya. Inisiatif ini adalah wujud dari komitmen kami dalam mendukung tercapainya
                tridharma perguruan tinggi, dengan fokus khusus pada pengabdian kepada masyarakat melalui peningkatan
                kualitas pendidikan dasar.
              </p>
              <br>
              <p class="ep-event__widget-text">
                Dalam pengembangannya, kami bermitra dengan SDN Barkot 5 Pamekasan, sebuah sekolah dasar yang menjadi
                bagian penting dalam penerapan dan uji coba platform ini. Kolaborasi ini bertujuan untuk menguji
                efektivitas e-modul berjenjang dalam lingkungan belajar nyata, sekaligus mendukung pengembangan inovasi
                pendidikan yang dapat diakses oleh lebih banyak sekolah di masa depan. Melalui kerja sama ini, kami
                berharap dapat memberikan dampak positif yang nyata bagi proses belajar-mengajar di tingkat pendidikan
                dasar.
              </p>
              <br>
              <p class="ep-event__widget-text"> E-Modul Berjenjang juga dirancang untuk mendukung pengembangan
                kompetensi guru di SDN Barkot 5 dalam menyediakan layanan pendidikan inklusif. Tujuannya adalah
                menyediakan sumber daya pembelajaran yang terstruktur dan dapat disesuaikan untuk membantu guru
                meningkatkan praktik pengajaran yang mendukung keberagaman siswa di kelas. Platform ini menawarkan
                berbagai konten pembelajaran, seperti panduan praktis, studi kasus, video pembelajaran, serta materi
                yang dapat diunduh. Semua konten tersebut disusun untuk meningkatkan pemahaman guru tentang strategi
                pengajaran inklusif, penyesuaian kurikulum, pengelolaan kelas yang inklusif, dan cara mendukung
                keberagaman siswa. </p> <br>
              <p class="ep-event__widget-text"> Selain itu, berikut beberapa inovasi yang terdapat dalam E-Modul
                Berjenjang: </p>
              <br>
              <ul class="ep-event__widget-list">
                <li>
                  <i class="fi-ss-check-circle"></i>
                  Personalisasi Pembelajaran
                </li>
                <li>
                  <i class="fi-ss-check-circle"></i>
                  Kolaborasi dan Jaringan
                </li>
                <li>
                  <i class="fi-ss-check-circle"></i>
                  Penggunaan Teknologi Canggih
                </li>
                <li>
                  <i class="fi-ss-check-circle"></i>Aksesibilitas dan Keterjangkauan
                </li>
                <li>
                  <i class="fi-ss-check-circle"></i>Dukungan berkelanjutan
                </li>
                <li>
                  <i class="fi-ss-check-circle"></i>Analitik dan Pembelajaran
                </li>
              </ul>
            </div>
            <div class="ep-event__widget">
              <h3 class="ep-event__widget-title">
                Alamat Sekolah
              </h3>
              <ul class="ep-event__widget-meta">
                <li>
                  <i class="fi fi-rs-marker"></i>Pamekasan
                </li>
                <li><i class="fi fi-rr-clock"></i>06:00 AM - 10:00 AM</li>
              </ul>
              <div class="ep-event__location-map">
                <div class="gmap_canvas">
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15834.62729699273!2d113.4847366!3d-7.165612!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd77dcd968d80f5%3A0x463c38f0a22eb90d!2sSDN%20Barurambat%20Kota%20V%20Pamekasan!5e0!3m2!1sen!2sid!4v1726648478922!5m2!1sen!2sid"
                    width="830" height="320" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Event Details Area -->
</main>
@endsection