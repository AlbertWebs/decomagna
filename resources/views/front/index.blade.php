@extends('front.master')

@section('content')
{{--  --}}
<main>
    <article>
      <!--
      - #HERO
    -->

      <div class="container_slider">
        <div class="slideshow">
          <a href="#" class="control prev">
            <i class="bx bx-left-arrow-circle"></i>
          </a>
          <div class="carousel owl-carousel">
            @foreach ($Slider as $slider)
            <div class="slide">
              <img src="{{url('/')}}/uploads/slider/{{$slider->image}}" />
            </div>
            @endforeach
          </div>

          <div class="banner_overview">
            <div class="banner_overview_content">
              <div class="banner_overview_content_image owl-carousel">
                @foreach ($Slider as $slider)
                <img src="{{url('/')}}/uploads/slider/{{$slider->thumbnail}}" alt="" />
                @endforeach

              </div>

              <h1>ELEVATE YOUR SPACE, PREMIUM FLOORS</h1>

              <div class="gotoro">
                <h4 class="wrapper">
                  <strong class="strong" data-letter-effect
                    >Made in Belgium</strong
                  >
                  <strong class="strong" data-letter-effect
                    >Nothing beats the feel of hardwood floors!</strong
                  >
                  <strong class="strong" data-letter-effect
                    >Making your houses more beautiful.</strong
                  >
                  <strong class="strong" data-letter-effect
                    >We provide all kinds of flooring services.</strong
                  >
                  <strong class="strong" data-letter-effect
                    >Quality floors that will remain a lifetime.</strong
                  >
                </h4>
              </div>

              <button>
                Discover more
                <ion-icon name="arrow-forward-outline"></ion-icon>
              </button>
            </div>

            <div class="banner_overview_circle"></div>
          </div>
          <a href="#" class="control next">
            <i class="bx bx-right-arrow-circle"></i>
          </a>
        </div>
      </div>

      <!--
      - #SERVICE
    -->

      {{-- <section class="section service service-white text-center" aria-label="service" style="background-color:#D9D9D9"> --}}
      <section class="section service service-white text-center" aria-label="service">
        <div class="container">
          <h2 class="headline-intro">Quick-Step® Original Product Selections</h2>
          <p>
            <font color="#676767">
                <span style="font-size: 18px; line-height: 1.6;">
                    Our original Quick-Step Laminate flooring is crafted in <strong>Belgium</strong> with the best materials available on the market.

                    The composite nature of <strong>top quality laminates</strong> make them an ideal solution for <strong>high traffic</strong> requirements such as restaurants, hotels, lounges, clubs and even homes.

                    On top of that they come with a warranty ranging from <strong>15 years to a lifetime warranty</strong>. this means you don't have to worry about sunlight, scratches, falling objects and in the case of our Hydroseal collections, water....yes, that's right, our Quick-Step laminate flooring can be installed in bathrooms and kitchens.
                </span>
            </font>
          </p>

          <div class="royaly owl-carousel margin-top-100">
            <?php
                 $Categories = DB::table('categories')->get();
            ?>
            @foreach ($Categories as $cat)
            <div class="royalty_child">
              <img
                src="{{url('/')}}/uploads/categories/{{$cat->image}}"
                alt="{{$cat->title}}" class="w-100"/>

              <a class="category-title" href="{{url('/')}}/products/{{$cat->slung}}">{{$cat->title}}</a>

              <div>
                <a href="{{url('/')}}/products/{{$cat->slung}}"
                  ><ion-icon name="eye-outline"></ion-icon
                ></a>
              </div>
            </div>
            @endforeach


          </div>

          <img
            src="{{asset('version/assets/images/OIP__1_-removebg-preview.png')}}"
            width="246"
            height="412"
            loading="lazy"
            alt="shape"
            class="shape shape-1 move-anim"
          />
        </div>

        <a href="product.html" class="btn btn-primary centy">
          <span class="text text-1">View all products</span>

          <span class="text text-2" aria-hidden="true"
            >View all products</span
          >
        </a>
      </section>

      <!--
      - #ABOUT
    -->
      <?php
          $SectionHome = DB::table('sections')->where('page','home')->where('position','1st_banner')->get();
      ?>
      @foreach ($SectionHome as $sectionhome)
      <section class="section about" aria-labelledby="about-label" id="about" >
        <div class="container">
          <div class="about-content">
            <h3 class="product-intro-title section-title text-center">
                {{$sectionhome->name}}
            </h3>

            <p class="section-text" >
                {!!html_entity_decode($sectionhome->content)!!}
            </p>

            <a href="{{$sectionhome->action}}" class="btn btn-primary">
              <span class="text text-1">{{$sectionhome->action_name}}</span>

              <span class="text text-2" aria-hidden="true">{{$sectionhome->action_name}}</span>
            </a>
          </div>

          <figure class="about-banner">
            <img
              src="{{url('/')}}/uploads/sections/{{$sectionhome->image}}"
              width="670"
              height="570"
              loading="lazy"
              alt="about banner"
              class="w-100"
              data-parallax-item
              data-parallax-speed="1"
            />
          </figure>
        </div>
      </section>
      @endforeach


      <!--
      - #SPECIAL DISH
    -->

      <section class="special-dish text-center" aria-labelledby="dish-label">
        <div class="special-dish-banner">
          <img
            src="{{asset('version/assets/images/pexels-photo-2549018.jpeg')}}"
            width="940"
            height="900"
            loading="lazy"
            alt="special dish"
            class="img-cover"
          />
        </div>

        <div class="special-dish-content bg-black-10">
          <div class="container">
            <img
              src="{{asset('version/assets/images/badge-1.png')}}"
              width="28"
              height="41"
              loading="lazy"
              alt="badge"
              class="abs-img"
            />

            <h2 class="headline-1 section-title">AQUA FLOORING</h2>

            <p class="section-text">
              Decomagna's waterproof aqua flooring provides the appearance and
              texture of real wood flooring without worrying about damage or
              staining due to water and moisture. Aqua flooring is an upgraded
              version of the popular wood-like synthetic flooring, which can
              now resist water damage. Laminate flooring can provide a
              realistic appearance, comparable to real solid wood. People like
              affordable laminate flooring, but its water resistance has never
              been known.
            </p>

            <a href="#" class="btn btn-primary">
              <span class="text text-1">Contact us</span>

              <span class="text text-2" aria-hidden="true">Contact us</span>
            </a>
          </div>
        </div>
      </section>

      <!--
      - #MENU
    -->

      <section class="section menu" aria-label="menu-label" id="menu">
        <h2 class="headline-1 section-title text-center">Our gallery</h2>
        <div class="image-grid">
          <div class="image-grid-col-2 image-grid-row-2 image-curve">
            <div class="containerm">
              <div class="card">
                <div class="front">
                  <img
                    class="image-curve"
                    src="{{asset('version/assets/images/category-wood-type-solid.webp')}}"
                    alt="architecture"
                  />
                </div>
                <div class="back">
                  <h1>Resilient floors</h1>
                </div>
              </div>
            </div>
          </div>
          <div class="image-grid-col-1 image-curve">
            <div class="containerm">
              <div class="card">
                <div class="front">
                  <img
                    class="image-curve"
                    src="{{asset('version/assets/images/category-wood-trend-wide-plank.webp')}}"
                    alt="architecture"
                  />
                </div>
                <div class="back">
                  <h1>Attached pad</h1>
                </div>
              </div>
            </div>
          </div>
          <div class="image-grid-col-1 image-curve">
            <div class="containerm">
              <div class="card">
                <div class="front">
                  <img
                    class="image-curve"
                    src="{{asset('version/assets/images/category-wood-type-engineered.webp')}}"
                    alt="architecture"
                  />
                </div>
                <div class="back">
                  <h1>Stone look</h1>
                </div>
              </div>
            </div>
          </div>
          <div class="image-grid-col-1 image-curve">
            <div class="containerm">
              <div class="card">
                <div class="front">
                  <img
                    class="image-curve"
                    src="{{asset('version/assets/images/category-wood-type-bamboo.webp')}}"
                    alt="architecture"
                  />
                </div>
                <div class="back">
                  <h1>Water resistant</h1>
                </div>
              </div>
            </div>
          </div>
          <div class="image-grid-col-1 image-curve">
            <div class="containerm">
              <div class="card">
                <div class="front">
                  <img
                    class="image-curve"
                    src="{{asset('version/assets/images/610a3de6457a2.png')}}"
                    alt="architecture"
                  />
                </div>
                <div class="back">
                  <h1>Pet friendly</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a href="#" class="btn btn-primary">
          <span class="text text-1">Visit gallery</span>

          <span class="text text-2" aria-hidden="true">Visit gallery</span>
        </a>
      </section>

      <!--
      - #TESTIMONIALS
    -->

      <section
        class="section testi text-center has-bg-image"
        style="background-image: url('{{asset('version/assets/images/people2.jpg')}}')"
        aria-label="testimonials"
      >
        <div class="container">
          <div class="quote trans360">”</div>

          <p class="headline-2 testi-text">
            WOULD YOU LIKE TO GET FREE LAMINATE BEFORE ORDERING?
          </p>

          <div class="quote">”</div>

          <div class="wrapper">
            <div class="separator"></div>
            <div class="separator"></div>
            <div class="separator"></div>
          </div>

          <div class="profile">
            <img
              src="{{asset('version/assets/images/testi-avatar.jpg')}}"
              width="100"
              height="100"
              loading="lazy"
              alt="Lucas"
              class="img"
            />

            <p class="label-2 profile-name">
              Kori Vince <br />
              Customer care
            </p>
          </div>
        </div>
      </section>

      <!--
      - #RESERVATION
    -->

      <section class="reservation">
        <div class="container">
          <div class="form reservation-form bg-black-10">
            <form action="" class="form-left">
              <div class="input-wrapper">
                <input
                  type="text"
                  name="name"
                  placeholder="Your Name"
                  autocomplete="off"
                  class="input-field"
                />

                <input
                  type="tel"
                  name="phone"
                  placeholder="Phone Number"
                  autocomplete="off"
                  class="input-field"
                />
              </div>

              <input
                type="email"
                name="email"
                placeholder="Place your email"
                autocomplete="off"
                class="input-field"
              />

              <textarea
                name="message"
                placeholder="Message"
                autocomplete="off"
                class="input-field"
              ></textarea>

              <button type="submit" class="btn btn-secondary">
                <span class="text text-1">Contact us</span>

                <span class="text text-2" aria-hidden="true">Contact us</span>
              </button>
            </form>

            <div
              class="form-right text-center"
              style="
                background-image: url('{{asset('version/assets/images/pexels-photo-1250283.jpeg')}}');
              "
            >
              <h2 class="headline-1 text-center">Contact Us</h2>

              <p class="contact-label">Make a call</p>

              <a
                href="tel:+88123123456"
                class="body-1 contact-number hover-underline"
                >+88-123-123456</a
              >

              <div class="separator"></div>

              <p class="contact-label">Location</p>

              <address class="body-4">Nairobi, Kenya</address>
            </div>
          </div>
        </div>
      </section>

      <!--
      - #FEATURES
    -->

      <section class="section features text-center" aria-label="features">
        <div class="container">
          <h2 class="headline-1 section-title">Our clients and partners</h2>

          <ul class="grid-list gridme owl-carousel">
            <li class="feature-item">
              <div class="feature-card">
                <div class="card-icon">
                  <img
                    src="{{asset('version/assets/images/clients/2021-09-2911_58_15imageApexPartners-04 1.png')}}"
                    width="100"
                    height="80"
                    loading="lazy"
                    alt="icon"
                  />
                </div>
              </div>
            </li>

            <li class="feature-item">
              <div class="feature-card">
                <div class="card-icon">
                  <img
                    src="{{asset('version/assets/images/clients/2021-09-2911_58_29imageApexPartners-05 1.png')}}"
                    width="100"
                    height="80"
                    loading="lazy"
                    alt="icon"
                  />
                </div>
              </div>
            </li>

            <li class="feature-item">
              <div class="feature-card">
                <div class="card-icon">
                  <img
                    src="{{asset('version/assets/images/clients/2021-09-2912_00_02imageApexPartners-07 1.png')}}"
                    width="100"
                    height="80"
                    loading="lazy"
                    alt="icon"
                  />
                </div>
              </div>
            </li>

            <li class="feature-item">
              <div class="feature-card">
                <div class="card-icon">
                  <img
                    src="{{asset('version/assets/images/clients/2021-09-2912_01_38imageApexPartners-17 1.png')}}"
                    width="100"
                    height="80"
                    loading="lazy"
                    alt="icon"
                  />
                </div>
              </div>
            </li>

            <li class="feature-item">
              <div class="feature-card">
                <div class="card-icon">
                  <img
                    src="{{asset('version/assets/images/clients/Apple-Logo 1.png')}}"
                    width="100"
                    height="80"
                    loading="lazy"
                    alt="icon"
                  />
                </div>
              </div>
            </li>

            <li class="feature-item">
              <div class="feature-card">
                <div class="card-icon">
                  <img
                    src="{{asset('version/assets/images/clients/Bentley-Logo 1.png')}}"
                    width="100"
                    height="80"
                    loading="lazy"
                    alt="icon"
                  />
                </div>
              </div>
            </li>

            <li class="feature-item">
              <div class="feature-card">
                <div class="card-icon">
                  <img
                    src="{{asset('version/assets/images/clients/Fedex-logo 1.png')}}"
                    width="100"
                    height="80"
                    loading="lazy"
                    alt="icon"
                  />
                </div>
              </div>
            </li>

            <li class="feature-item">
              <div class="feature-card">
                <div class="card-icon">
                  <img
                    src="{{asset('version/assets/images/clients/Intel-logo-2022 1.png')}}"
                    width="100"
                    height="80"
                    loading="lazy"
                    alt="icon"
                  />
                </div>
              </div>
            </li>

            <li class="feature-item">
              <div class="feature-card">
                <div class="card-icon">
                  <img
                    src="{{asset('version/assets/images/clients/Microsoft-logo 1.png')}}"
                    width="100"
                    height="80"
                    loading="lazy"
                    alt="icon"
                  />
                </div>
              </div>
            </li>

            <li class="feature-item">
              <div class="feature-card">
                <div class="card-icon">
                  <img
                    src="{{asset('version/assets/images/clients/Nike-Logo 1.png')}}"
                    width="100"
                    height="80"
                    loading="lazy"
                    alt="icon"
                  />
                </div>
              </div>
            </li>

            <li class="feature-item">
              <div class="feature-card">
                <div class="card-icon">
                  <img
                    src="{{asset('version/assets/images/clients/Olympic-logo 1.png')}}"
                    width="100"
                    height="80"
                    loading="lazy"
                    alt="icon"
                  />
                </div>
              </div>
            </li>

            <li class="feature-item">
              <div class="feature-card">
                <div class="card-icon">
                  <img
                    src="{{asset('version/assets/images/clients/PUMA-logo 1.png')}}"
                    width="100"
                    height="80"
                    loading="lazy"
                    alt="icon"
                  />
                </div>
              </div>
            </li>
          </ul>
        </div>
        <a href="#" class="btn btn-primary centy">
          <span class="text text-1">View all clients</span>

          <span class="text text-2" aria-hidden="true">View all clients</span>
        </a>
      </section>

      <!--
      - #EVENT
    -->

      <section class="section event blogd" aria-label="event">
        <div class="container">
          <h2 class="section-title headline-1 text-center">Blogs</h2>

          <ul class="grid-list gridblog owl-carousel">
            <li>
              <div class="event-card has-before hover:shine">
                <div
                  class="card-banner img-holder"
                  style="--width: 350; --height: 450"
                >
                  <a href="singleblog.html" class="nzula">
                    <img
                      src="{{asset('version/assets/images/normal.jpg')}}"
                      width="350"
                      height="450"
                      loading="lazy"
                      alt="Flavour so good you’ll try to eat with your eyes."
                      class="img-cover"
                    />
                  </a>

                  <time class="publish-date label-2" datetime="2022-09-15"
                    >15/09/2022</time
                  >
                </div>

                <div class="card-content">
                  <p class="card-subtitle label-2 text-center">
                    SPC FLOORING
                  </p>

                  <h3 class="card-title title-2 text-center">
                    Different from dated prints and cheap materials in the
                    past...
                  </h3>
                </div>
              </div>
            </li>

            <li>
              <div class="event-card has-before hover:shine">
                <div
                  class="card-banner img-holder"
                  style="--width: 350; --height: 450"
                >
                  <a href="singleblog.html" class="nzula">
                    <img
                      src="{{asset('version/assets/images/normal (1).jpg')}}"
                      width="350"
                      height="450"
                      loading="lazy"
                      alt="Flavour so good you’ll try to eat with your eyes."
                      class="img-cover"
                    />
                  </a>

                  <time class="publish-date label-2" datetime="2022-09-08"
                    >08/09/2022</time
                  >
                </div>

                <div class="card-content">
                  <p class="card-subtitle label-2 text-center">
                    LAMINATE FLOORING
                  </p>

                  <h3 class="card-title title-2 text-center">
                    Faux wood flooring is currently the hottest trend of
                    flooring...
                  </h3>
                </div>
              </div>
            </li>

            <li>
              <div class="event-card has-before hover:shine">
                <div
                  class="card-banner img-holder"
                  style="--width: 350; --height: 450"
                >
                  <a href="singleblog.html" class="nzula">
                    <img
                      src="{{asset('version/assets/images/normal (2).jpg')}}"
                      width="350"
                      height="450"
                      loading="lazy"
                      alt="Flavour so good you’ll try to eat with your eyes."
                      class="img-cover"
                    />
                  </a>

                  <time class="publish-date label-2" datetime="2022-09-03"
                    >03/09/2022</time
                  >
                </div>

                <div class="card-content">
                  <p class="card-subtitle label-2 text-center">
                    Timber FLOORING
                  </p>

                  <h3 class="card-title title-2 text-center">
                    Decomagnas's waterproof aqua flooring provides the
                    appearance and texture...
                  </h3>
                </div>
              </div>
            </li>

            <li>
              <div class="event-card has-before hover:shine">
                <div
                  class="card-banner img-holder"
                  style="--width: 350; --height: 450"
                >
                  <a href="singleblog.html" class="nzula">
                    <img
                      src="{{asset('version/assets/images/normal (2).jpg')}}"
                      width="350"
                      height="450"
                      loading="lazy"
                      alt="Flavour so good you’ll try to eat with your eyes."
                      class="img-cover"
                    />
                  </a>

                  <time class="publish-date label-2" datetime="2022-09-03"
                    >03/11/2022</time
                  >
                </div>

                <div class="card-content">
                  <p class="card-subtitle label-2 text-center">
                    AQUA FLOORING
                  </p>

                  <h3 class="card-title title-2 text-center">
                    For the first time ever, you can install timber everywhere
                    in your home, thanks ...
                  </h3>
                </div>
              </div>
            </li>
          </ul>

          <a href="blog.html" class="btn btn-primary">
            <span class="text text-1">View Our Blog</span>

            <span class="text text-2" aria-hidden="true">View Our Blog</span>
          </a>
        </div>
      </section>
    </article>
  </main>
{{--  --}}
@endsection
