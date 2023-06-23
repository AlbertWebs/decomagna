<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from decomagna.amosbilly.co.ke/v3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Jun 2023 09:45:19 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Decomagna ltd</title>

    <!--
    - favicon
  -->
    <link
      rel="shortcut icon"
      href="{{asset('theme/assets/images/logo.png')}}"
      type="image/svg+xml"
    />

    <!--
    - custom css link
  -->
    <link rel="stylesheet" href="{{asset('theme/assets/css/style.css')}}" />

    <!--
    - google font link
  -->
    <link rel="preconnect" href="../../fonts.googleapis.com/index.html" />
    <link rel="preconnect" href="../../fonts.gstatic.com/index.html" crossorigin />
    <link
      href="../../fonts.googleapis.com/css26c79.css?family=Nunito:wght@400;600&amp;family=Open+Sans&amp;display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="../../stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      crossorigin="anonymous"
    />
  </head>

  <body>
    <!--
    -#PRELOADING
  -->

    <div class="loading" data-loading>
      <img
        src="{{asset('theme/assets/images/real/823671154b418bc0527747fdd143e511-removebg-preview.png')}}"
        width="55"
        height="55"
        alt="loading"
        class="img circle"
      />
    </div>
    <!--
    - #HEADER
  -->

    <header class="header" data-header>
      <div class="container">
        <div class="overlay" data-overlay></div>

        <a href="index.html" class="logo"> </a>

        <nav class="navbar" data-navbar>
          <ul class="navbar-list">
            <li>
              <a href="index.html" class="navbar-link" data-nav-link>Home</a>
            </li>

            <li>
              <a href="product.html" class="navbar-link" data-nav-link
                >Our products</a
              >
            </li>

            <li>
              <a href="gallery.html" class="navbar-link" data-nav-link
                >Our portfolio</a
              >
            </li>

            <li>
              <a href="about.html" class="navbar-link" data-nav-link
                >About us</a
              >
            </li>

            <li>
              <a href="contact.html" class="navbar-link" data-nav-link
                >Contacts</a
              >
            </li>

            <li>
              <a href="faq.html" class="navbar-link" data-nav-link>FAQ</a>
            </li>

            <a href="blog.html" class="navbar-link" data-nav-link>
              <button><span>Get Inspired</span> <span>BLOG POSTS</span></button>
            </a>
          </ul>
        </nav>

        <div class="header-actions">
          <button
            class="nav-toggle-btn"
            data-nav-toggle-btn
            aria-label="Toggle Menu"
          >
            <span class="one"></span>
            <span class="two"></span>
            <span class="three"></span>
          </button>
        </div>
      </div>
    </header>



    @yield('content')


    <!--
    - #FOOTER
  -->

    <footer>
      <div class="containerary">
        <div class="cardry footerary">
          <div class="sectioneray footer-topery">
            <div class="footer-brandery">
              <a href="#" class="logory">
                <img
                  src="{{asset('theme/assets/images/new-logo-removebg-preview.png')}}"
                  width="119"
                  height="37"
                  loading="lazy"
                  alt="Wren logo"
                />
              </a>

              <p class="footer-text">
                Quick-Step flooring Kenya - Decomagna ltd, Nairobi, Kenya
              </p>

              <p class="footer-list-title">Address</p>

              <address class="footer-text address">
                123 Main Street <br />
                New York, NY 10001
              </address>
            </div>

            <div class="footer-listery">
              <p class="footer-list-title">Useful link</p>

              <ul>
                <li>
                  <a href="#" class="footer-link hover-2">About us</a>
                </li>

                <li>
                  <a href="#" class="footer-link hover-2">Contact us</a>
                </li>

                <li>
                  <a href="#" class="footer-link hover-2">Projects</a>
                </li>

                <li>
                  <a href="#" class="footer-link hover-2">Copyright</a>
                </li>

                <li>
                  <a href="#" class="footer-link hover-2">Services.</a>
                </li>

                <li>
                  <a href="blog.html" class="footer-link hover-2">Blogs</a>
                </li>
              </ul>
            </div>

            <div class="footer-listery">
              <p class="footer-list-title">Newsletter</p>

              <p class="footer-text">
                Sign up to be first to receive the latest stories inspiring us,
                case studies, and industry news.
              </p>

              <div class="input-wrappery">
                <input
                  type="text"
                  name="name"
                  placeholder="Your name"
                  required
                  class="input-field"
                  autocomplete="off"
                />

                <ion-icon name="person-outline" aria-hidden="true"></ion-icon>
              </div>

              <div class="input-wrappery">
                <input
                  type="email"
                  name="email_address"
                  placeholder="Emaill address"
                  required
                  class="input-field"
                  autocomplete="off"
                />

                <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
              </div>

              <a href="#" class="btner btn-primarer">
                <span class="span">Subscribe</span>

                <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
              </a>
            </div>
          </div>

          <div class="footer-bottomery">
            <p class="copyright">
              © 2022 decomagnaltd.
              <a href="#" class="copyright-link">All Rights Reserved</a>
            </p>

            <ul class="social-lister">
              <li>
                <a href="#" class="social-linker">
                  <ion-icon name="logo-twitter"></ion-icon>

                  <span class="span">Twitter</span>
                </a>
              </li>

              <li>
                <a href="#" class="social-linker">
                  <ion-icon name="logo-linkedin"></ion-icon>

                  <span class="span">LinkedIn</span>
                </a>
              </li>

              <li>
                <a href="#" class="social-linker">
                  <ion-icon name="logo-instagram"></ion-icon>

                  <span class="span">Instagram</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="footer-back-background">
        <img src="{{asset('theme/assets/images/solo.jpg')}}" alt="" />
      </div>
    </footer>

    <!--
    - #BACK TO TOP
  -->

    <a
      href="#top"
      class="back-top-btn a"
      aria-label="back to top"
      data-back-top-btn
      >0%</a
    >

    <!--
    - #CUSTOM CURSOR
  -->

    <div class="cursor" data-cursor></div>

    <!--
    - custom js link
  -->
    <script src="{{asset('theme/assets/js/script.js')}}"></script>

    <!--
    - ionicon link
  -->
    <script
      type="module"
      src="../../unpkg.com/ionicons%405.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="../../unpkg.com/ionicons%405.5.2/dist/ionicons/ionicons.js"
    ></script>
  </body>

<!-- Mirrored from decomagna.amosbilly.co.ke/v3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Jun 2023 09:46:07 GMT -->
</html>
