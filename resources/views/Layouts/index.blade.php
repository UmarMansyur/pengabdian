<!DOCTYPE html>
<html class="no-js" lang="ZXX">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="robots" content="all" />
  <meta name="keywords" content="E-Modul Berjenjang, Pendidikan, Kurikulum Merdeka, SDN Barkot 5, Pamekasan" />
  <link rel="icon" type="image/x-icon" href="/assets/images/logo.svg" />
  <title>E-Modul Berjenjang</title>
  <link rel="stylesheet" href="/assets/plugins/css/bootstrap.min.css" />
  <link rel="stylesheet" href="/assets/plugins/css/animate.min.css" />
  <link rel="stylesheet" href="/assets/plugins/css/owl.carousel.min.css" />
  <link rel="stylesheet" href="/assets/plugins/css/maginific-popup.min.css" />
  <link rel="stylesheet" href="/assets/plugins/css/nice-select.min.css" />
  <link rel="stylesheet" href="/assets/plugins/css/icofont.css" />
  <link rel="stylesheet" href="/assets/plugins/css/uicons.css" />
  <link rel="stylesheet" href="/assets/section-css/reset.css" />
  <link rel="stylesheet" href="/assets/section-css/header.css" />
  <link rel="stylesheet" href="/assets/section-css/hero.css" />
  <link rel="stylesheet" href="/assets/section-css/about.css" />
  <link rel="stylesheet" href="/assets/section-css/category.css" />
  <link rel="stylesheet" href="/assets/section-css/course.css" />
  <link rel="stylesheet" href="/assets/section-css/brand.css" />
  <link rel="stylesheet" href="/assets/section-css/team.css" />
  <link rel="stylesheet" href="/assets/section-css/funfact.css" />
  <link rel="stylesheet" href="/assets/section-css/faq.css" />
  <link rel="stylesheet" href="/assets/section-css/testimonial.css" />
  <link rel="stylesheet" href="/assets/section-css/video.css" />
  <link rel="stylesheet" href="/assets/section-css/blog.css" />
  <link rel="stylesheet" href="/assets/section-css/group-study.css" />
  <link rel="stylesheet" href="/assets/section-css/service.css" />
  <link rel="stylesheet" href="/assets/section-css/pricing.css" />
  <link rel="stylesheet" href="/assets/section-css/event.css" />
  <link rel="stylesheet" href="/assets/section-css/footer.css" />
  <link rel="stylesheet" href="/assets/section-css/breadcrumbs.css" />
  <link rel="stylesheet" href="/assets/section-css/contact.css" />
  <link rel="stylesheet" href="/assets/section-css/auth.css" />
  <link rel="stylesheet" href="/assets/section-css/error.css" />
  <link rel="stylesheet" href="/assets/section-css/mobile-menu.css" />

  <script>
    function toElement(elementId) {
      var element = document.getElementById(elementId);
        if ("{{ Request::is('/') }}") {
          if (element) {
                    const elementPosition = element.getBoundingClientRect().top;
                    const offsetPosition = elementPosition - 100;
                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
            } else {
              window.location.href = "/";
            }
        }
  </script>
</head>

<body class="ep-magic-cursor">
  <div id="preloader">
    <div id="ep-preloader" class="ep-preloader">
      <div class="animation-preloader">
        <div class="spinner"></div>
      </div>
    </div>
  </div>
  <div class="cursor"></div>
  <div class="cursor2"></div>
  <div id="magic-cursor">
    <div id="ball"></div>
  </div>
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <div class="modal mobile-menu-modal offcanvas-modal fade" id="offcanvas-modal">
    <div class="modal-dialog offcanvas-dialog">
      <div class="modal-content">
        <div class="modal-header offcanvas-header">
          <div class="offcanvas-logo">
            <a href="" class="d-flex align-items-center">
              <img src="/assets/images/logo.svg" alt="logo" width="100" /> 
              <span class="fw-bold">E-Modul Berjenjang</span>
            </a>
          </div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <i class="fi fi-ss-cross"></i>
          </button>
        </div>
        <div class="mobile-menu-modal-main-body">
          <nav id="offcanvas-menu" class="navigation offcanvas-menu">
            <ul id="nav mobile-nav" class="list-none offcanvas-men-list">
              <li>
                <a class="menu-arrow" href="javascript:void(0)" onclick="toElement('hero')">Beranda</a>
                <ul class="sub-menu">
                  <li>
                    <a href="contact.html">Modul Tersedia</a>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <header class="ep-header ep-header--style2 position-relative">
    <div id="active-sticky" class="ep-header__middle ep-header__middle--style2">
      <div class="container ep-container">
        <div class="ep-header__inner ep-header__inner--style2">
          <div class="row d-flex">
            <div class="col-lg-2 col-6 mt-0 mt-sm-4">
              <div class="ep-logo">
                <a href="" class="d-flex align-items-center">
                  <img
                    src="https://moodle.simantappamekasan.com/pluginfile.php/1/core_admin/logocompact/300x300/1726589152/logo%20%281%29.png"
                    alt="logo" height="200" /> <span class="fw-bold">E-Modul Berjenjang</span>
                </a>
              </div>
            </div>
            <div class="col-lg-10 col-6">
              <div class="ep-header__inner-right">
                <nav class="ep-header__navigation">
                  <ul class="ep-header__menu ep-header__menu--style2">
                    <li>
                      <a href="javascript:void(0)" class="menu-arrow" onclick="toElement('offcanvas-modal')">Beranda</a>
                    </li>
                    <li>
                      <a href="javascript:void(0)" class="menu-arrow" onclick="toElement('about-emodul')">Tentang
                        Kami</a>
                    </li>
                    <li>
                      <a href="javascript:void(0)" class="menu-arrow"
                        onclick="toElement('kebermanfaatan')">Kebermanfaatan dan Kegunaan</a>
                    </li>
                    <li>
                      <a href="javascript:void(0)" class="menu-arrow" onclick="toElement('modul-tersedia')">Modul
                        Tersedia</a>
                    </li>
                  </ul>
                </nav>
                <div class="ep-header__btn">
                  <a href="{{ env('FRONTEND_URL') }}" class="ep-btn ep5-bg">Mulai Belajar <i
                      class="fi fi-rs-arrow-small-right"></i>
                  </a>
                </div>
              </div>
              <!-- Mobile Menu Button -->
              <button type="button" class="mobile-menu-offcanvas-toggler mt-3" data-bs-toggle="modal"
                data-bs-target="#offcanvas-modal">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
              </button>
              <!-- End Mobile Menu Button -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End Header Area -->
  <div id="smooth-wrapper">
    <div id="smooth-content">
      @yield('content')
      <footer class="ep-footer ep-footer--style2 position-relative">
        <div class="ep-footer__overlay"></div>
        <div class="container ep-container">
          <div class="ep-footer__top">
            <div class="row">
              <div class="col-lg-3 col-md-6 col-12">
                <div class="ep-footer__widget footer-about">
                  <div class="ep-footer__logo ep-footer__logo--style2">
                    <a href="index.html">
                      <div class="d-flex">
                        <img src="/assets/images/logo.svg" alt="footer-logo" /> <span class="text-white">E-Modul
                          Berjenjang</span>
                      </div>
                    </a>
                  </div>
                  <p class="ep-footer__text mg-top-46">
                    E-Modul Berjenjang adalah sebuah platform pendidikan yang dirancang untuk
                    membantu guru dan siswa dalam proses pembelajaran.
                  </p>
                  <div class="ep-footer__social mg-top-42">
                    <h5 class="ep-footer__social-title">Follow Us</h5>
                    <ul>
                      <li>
                        <a href="https://www.instagram.com/muhammad_umar_mansyur/" target="_blank">
                          <i class="icofont-instagram"></i>
                        </a>
                      </li>
                      <li>
                        <a href="https://github.com/UmarMansyur" target="_blank">
                          <i class="icofont-github"></i>
                        </a>
                      </li>
                      <li>
                        <a href="https://www.linkedin.com/in/muhammad-umar-mansyur-420b02260" target="_blank">
                          <i class="icofont-linkedin"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-12">
                <div class="ep-footer__widget footer-services--style2">
                  <h4 class="ep-footer__widget-title ep-footer__widget-title--style2">
                    Layanan
                  </h4>
                  <ul class="ep-footer__links-list ep-footer__links-list--style2">
                    <li>
                      <a href="https://dinaspendidikan.pamekasankab.go.id/" target="_blank">
                        <i class="fi fi-br-angle-double-small-right ep6-color"></i>Dinas
                        Pendidikan Kabupaten Pamekasan
                      </a>
                    </li>
                    <li>
                      <a href="https://sekolah.data.kemdikbud.go.id/index.php/chome/profil/A0230A7B-8D18-E111-A7AF-EFBD1439769D"
                        target="_blank">
                        <i class="fi fi-br-angle-double-small-right ep6-color"></i>
                        SDN Barkot 5
                      </a>
                    </li>
                    <li>
                      <a href="https://fkip.unira.ac.id/" target="_blank">
                        <i class="fi fi-br-angle-double-small-right ep6-color"></i>
                        Fakultas Keguruan dan Ilmu Pendidikan Universitas Madura
                      </a>
                    </li>
                    <li>
                      <a href="/#about-emodul">
                        <i class="fi fi-br-angle-double-small-right ep6-color"></i>Tentang Kami
                      </a>
                    </li>
                    <li>
                      <a href="https://pmb.unira.ac.id/login" target="_blank">
                        <i class="fi fi-br-angle-double-small-right ep6-color"></i> Masuk ke
                        E-Modul Berjenjang
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-12">
                <div class="ep-footer__widget footer-contact">
                  <h4 class="ep-footer__widget-title ep-footer__widget-title--style2">
                    Kontak Kami
                  </h4>
                  <div class="ep-footer__contact">
                    <div class="ep-footer__contact-single">
                      <div class="ep-footer__contact-icon">
                        <i class="fi fi-rs-marker ep6-color"></i>
                      </div>
                      <div class="ep-footer__contact-info">
                        <p>Alamat</p>
                        <span>Jl. Purba No. 84, Barurambat Kota, Kec. Pamekasan, Kab. Pamekasan
                          Prov. Jawa Timur</span>
                      </div>
                    </div>
                    <div class="ep-footer__contact-single">
                      <div class="ep-footer__contact-icon">
                        <i class="fi fi-rr-phone-call ep6-color"></i>
                      </div>
                      <div class="ep-footer__contact-info ep-footer__contact-info--style2">
                        <p>Nomor Telepon</p>
                        <a href="tel:012 345 678 9101">-</a>
                      </div>
                    </div>
                    <div class="ep-footer__contact-single">
                      <div class="ep-footer__contact-icon">
                        <i class="fi fi-rr-envelope ep6-color"></i>
                      </div>
                      <div class="ep-footer__contact-info ep-footer__contact-info--style2">
                        <p>Email</p>
                        <a href="mailto:sdnbarkot5@gmail.com">sdnbarkot5@gmail.com</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="ep-footer__bottom">
            <div class="row">
              <div class="col-lg-6 col-12">
                <div class="ep-footer__copyright">
                  <p>
                    ©
                    <a target="_blank" href="https://github.com/UmarMansyur">Tim Pengembang E-Modul
                      Berjenjang</a>
                    2024 | All Rights Reserved
                  </p>
                </div>
              </div>
              <div class="col-lg-6 col-12">
                <div class="ep-footer__bottom-link">
                  <ul>
                    <li>
                      <a href="#">Terms & Condition</a>
                    </li>
                    <li>
                      <a href="#">Privacy Policy</a>
                    </li>
                    <li>
                      <a href="contact.html">Contact Us</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

      </footer>
    </div>
  </div>

  <!-- Jquery JS -->
  <script src="/assets/plugins/js/jquery.min.js"></script>
  <script src="/assets/plugins/js/jquery-migrate.js"></script>

  <!-- Bootstrap JS -->
  <script src="/assets/plugins/js/bootstrap.min.js"></script>
  <!-- Gsap JS -->
  <script src="/assets/plugins/js/gsap/gsap.js"></script>
  <script src="/assets/plugins/js/gsap/gsap-scroll-to-plugin.js"></script>
  <script src="/assets/plugins/js/gsap/gsap-scroll-smoother.js"></script>
  <script src="/assets/plugins/js/gsap/gsap-scroll-trigger.js"></script>
  <script src="/assets/plugins/js/gsap/gsap-split-text.js"></script>
  <!-- Wow JS -->
  <script src="/assets/plugins/js/wow.min.js"></script>
  <!-- Owl Carousel JS -->
  <script src="/assets/plugins/js/owl.carousel.min.js"></script>
  <!-- Magnific Popup JS -->
  <script src="/assets/plugins/js/magnific-popup.min.js"></script>
  <!-- CounterUp  JS -->
  <script src="/assets/plugins/js/jquery.counterup.min.js"></script>
  <script src="/assets/plugins/js/waypoints.min.js"></script>
  <!-- Nice Select JS -->
  <script src="/assets/plugins/js/nice-select.min.js"></script>
  <!-- Cursor JS -->
  <script src="/assets/plugins/js/ep-cursor.js"></script>
  <!-- Back To Top JS -->
  <script src="/assets/plugins/js/backToTop.js"></script>
  <!-- Main JS -->
  <script src="/assets/plugins/js/active.js"></script>
</body>

<!-- Mirrored from edupath-template.vercel.app/edupath/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Sep 2024 01:52:13 GMT -->

</html>