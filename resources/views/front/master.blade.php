<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--
    - primary meta tags
  -->

    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />

    <!-- *******  Font Awesome Icons Link  ******* -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />

    <!-- *******  Owl Carousel Links  ******* -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    />

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    />

    <title>Decomagna</title>
    <meta name="title" content="Amazing wooden floors" />
    <meta
      name="description"
      content="This is a wooden floor branding website made by designekta studios"
    />

    <!--
    - favicon
  -->
    <link
      rel="shortcut icon"
      href="{{asset('version/assets/images/decomagna N-14.jpg')}}"
      type="image/svg+xml"
    />

    <!--
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap"
      rel="stylesheet"
    />

    <!--
    - custom css link
  -->
    <link rel="stylesheet" href="{{asset('version/assets/css/style.css')}}" />

    <!--
    - preload images
  -->
    <link rel="preload" as="image" href="{{asset('version/assets/images/hero-slider-1.jpg')}}" />
    <link rel="preload" as="image" href="{{asset('version/assets/images/hero-slider-2.jpg')}}" />
    <link rel="preload" as="image" href="{{asset('version/assets/images/hero-slider-3.jpg')}}" />
  </head>

  <body id="top">
    <!--
    - #PRELOADER
  -->

    <div class="preload" data-preaload>
      <div class="circle"></div>
      <p class="text">Decomagna</p>
    </div>

    <!--
    - #HEADER
  -->

    <header class="header" data-header>
      <div class="container">
        {{-- <a href="{{url('/')}}" class="logo">
          <img
            src="{{asset('version/assets/images/decomagna N-14.jpg')}}"
            width="160"
            height="50"
            alt="Grilli - Home"
          />
        </a> --}}

        <a href="{{url('/')}}" class="logo">
            <img
              src="{{url('/')}}/uploads/logo/decomagna-Logos-Trans-14.jpg"
              width="160"
              height="50"
              alt="Decomagna"
            />
          </a>

        <nav class="navbar" data-navbar>
          <button class="close-btn" aria-label="close menu" data-nav-toggler>
            <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
          </button>

          <a href="{{url('/')}}" class="logo">
            <img
              src="{{asset('version/assets/images/decomagna_N-15-removebg-preview2.png')}}"
              width="160"
              height="50"
              alt="Grilli - Home"
            />
          </a>

          <ul class="navbar-list">
            {{-- <li class="navbar-item">
              <a href="{{url('/')}}" class="navbar-link hover-underline active">
                <div class="separator"></div>

                <span class="span">Home</span>
              </a>
            </li> --}}


            <li class="navbar-item">
                <a href="product.html" class="navbar-link hover-underline active">
                  <div class="separator"></div>

                  <span class="span">Laminate Flooring</span>
                </a>
              </li>

            <li class="navbar-item">
              <a href="gallery.html" class="navbar-link hover-underline">
                <div class="separator"></div>

                <span class="span">Doors</span>
              </a>
            </li>

            <li class="navbar-item">
                <a href="gallery.html" class="navbar-link hover-underline">
                  <div class="separator"></div>

                  <span class="span">Accessories</span>
                </a>
              </li>

            <li class="navbar-item">
              <a href="about.html" class="navbar-link hover-underline">
                <div class="separator"></div>

                <span class="span">About us</span>
              </a>
            </li>

            <li class="navbar-item">
              <a href="contact.html" class="navbar-link hover-underline">
                <div class="separator"></div>

                <span class="span">Contact</span>
              </a>
            </li>
          </ul>

          <div class="text-center">
            <p class="headline-1 navbar-title">Visit Us</p>

            <address class="body-4">
              Nairobi <br />
              9578, Kenya
            </address>
          </div>
        </nav>

        <a href="product.html" class="btn btn-secondary">
          <span class="text text-1">Find A Floor</span>

          <span class="text text-2" aria-hidden="true">Find A Floor</span>
        </a>

        <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
          <span class="line line-1"></span>
          <span class="line line-2"></span>
          <span class="line line-3"></span>
        </button>

        <div class="overlay" data-nav-toggler data-overlay></div>
      </div>
    </header>

    @yield('content')

    <!--
    - #FOOTER
  -->

    <footer class="footer section has-bg-image text-center footer_hover">
      <div class="container bg-hue">
        <div class="footer-top grid-list">
          <div class="footer-brand has-before has-after">
            <a href="#" class="logo">
              <img
                src="{{asset('version/assets/images/decomagna N-14.jpg')}}"
                width="160"
                height="50"
                loading="lazy"
                alt="grilli home"
              />
            </a>

            <address class="body-4">
              Quick-Step flooring Kenya - Decomagna ltd, Nairobi, Kenya
            </address>

            <a href="mailto:booking@grilli.com" class="body-4 contact-link"
              >decomagna@gmail.com</a
            >

            <div class="wrapper">
              <div class="separator"></div>
              <div class="separator"></div>
              <div class="separator"></div>
            </div>

            <p class="title-1">Get News & Offers</p>

            <p class="label-1">
              Subscribe us & Get <span class="span">25% Off.</span>
            </p>

            <form action="" class="input-wrapper">
              <div class="icon-wrapper">
                <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>

                <input
                  type="email"
                  name="email_address"
                  placeholder="Your email"
                  autocomplete="off"
                  class="input-field"
                />
              </div>

              <button type="submit" class="btn btn-secondary">
                <span class="text text-1">Subscribe</span>

                <span class="text text-2" aria-hidden="true">Subscribe</span>
              </button>
            </form>
          </div>

          <ul class="footer-list">
            <li>
              <a href="#" class="label-2 footer-link hover-underline">Home</a>
            </li>

            <li>
              <a href="#" class="label-2 footer-link hover-underline"
                >OUR PRODUCTS</a
              >
            </li>

            <li>
              <a href="#" class="label-2 footer-link hover-underline"
                >OUR PORTFOLIO</a
              >
            </li>

            <li>
              <a href="#" class="label-2 footer-link hover-underline"
                >ABOUT US</a
              >
            </li>

            <li>
              <a href="#" class="label-2 footer-link hover-underline"
                >CONTACT</a
              >
            </li>
          </ul>

          <ul class="footer-list">
            <li>
              <a
                href="#"
                class="label-2 footer-link hover-underline flex-flex-flexy"
                >Facebook <ion-icon name="logo-facebook"></ion-icon
              ></a>
            </li>

            <li>
              <a
                href="#"
                class="label-2 footer-link hover-underline flex-flex-flexy"
                >Instagram <ion-icon name="logo-instagram"></ion-icon
              ></a>
            </li>

            <li>
              <a
                href="#"
                class="label-2 footer-link hover-underline flex-flex-flexy"
                >Twitter <ion-icon name="logo-twitter"></ion-icon
              ></a>
            </li>

            <li>
              <a
                href="#"
                class="label-2 footer-link hover-underline flex-flex-flexy"
                >Google Map</a
              >
            </li>
          </ul>
        </div>

        <div class="footer-bottom">
          <p class="copyright">
            &copy; {{date('Y')}} Decomagna. All Rights Reserved | Powered by
            <a
              href="https://github.com/codewithsadee"
              target="_blank"
              class="link"
              >Designekta studios</a
            >
          </p>
        </div>
      </div>
    </footer>

    <!--
      - #BACK TO TOP
    -->

    <a
      href="#top"
      class="back-top-btn active"
      aria-label="back to top"
      data-back-top-btn
    >
      <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
    </a>

    <!--
      - custom js link
    -->

    <script src="{{asset('version/assets/js/script.js')}}"></script>

    <!--   *****   JQuery Link   *****   -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <!--   *****   Owl Carousel js Link  *****  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!--   *****   Link To Custom Script File   *****   -->
    {{-- <script type="text/javascript" src="{{asset('version/script.js')}}"></script> --}}

    <!--
      - ionicon link
    -->

    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>

    <script>
      $(".banner_overview_content_image").owlCarousel({
        margin: 0,
        loop: true,
        autoplay: true,
        autoplayTimeout: 10000,
        autoplayHoverPause: true,
        pagination: false,
        dots: false,
        responsive: {
          0: {
            items: 1,
            nav: false,
          },
          600: {
            items: 1,
            nav: false,
          },
          1000: {
            items: 1,
            nav: false,
          },
        },
      });

      $(".carousel").owlCarousel({
        margin: 0,
        loop: true,
        autoplay: true,
        autoplayTimeout: 10000,
        autoplayHoverPause: true,
        pagination: false,
        dots: false,
        responsive: {
          0: {
            items: 1,
            nav: false,
          },
          600: {
            items: 1,
            nav: false,
          },
          1000: {
            items: 1,
            nav: false,
          },
        },
      });

      $(".royaly").owlCarousel({
        margin: 10,
        loop: true,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        responsive: {
          0: {
            items: 1,
            nav: false,
          },
          600: {
            items: 2,
            nav: false,
          },
          1000: {
            items: 3,
            nav: false,
          },
        },
      });

      $(".gridme").owlCarousel({
        margin: 10,
        loop: true,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        responsive: {
          0: {
            items: 2,
            nav: false,
          },
          600: {
            items: 3,
            nav: false,
          },
          1000: {
            items: 4,
            nav: false,
          },
        },
      });

      $(".gridblog").owlCarousel({
        margin: 10,
        loop: true,
        autoplay: true,
        autoplayTimeout: 10000,
        autoplayHoverPause: true,
        responsive: {
          0: {
            items: 1,
            nav: false,
          },
          600: {
            items: 2,
            nav: false,
          },
          1000: {
            items: 3,
            nav: false,
          },
        },
      });
    </script>
  </body>
</html>
