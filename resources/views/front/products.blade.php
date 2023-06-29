@extends('front.master-shop')

@section('content')


<main class="margtop">
    <div class="overlay" data-overlay></div>



    <header>
      <div class="header-top">
        <div class="container">
          <ul class="header-social-container">
            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>
          </ul>

          <div class="header-alert-news">
            <p>
              <b>Free Shipping</b>
              This Week Order Over - $55
            </p>
          </div>

          <div class="header-top-actions">
            <select name="currency">
              <option value="usd">USD &dollar;</option>
              <option value="eur">EUR &euro;</option>
            </select>

            <select name="language">
              <option value="en-US">English</option>
              <option value="es-ES">Espa&ntilde;ol</option>
              <option value="fr">Fran&ccedil;ais</option>
            </select>
          </div>
        </div>
      </div>

      <div class="header-main">
        <div class="container">
          <a href="index.html" class="header-logo"> Welcome </a>

          <div class="header-search-container">
            <input
              type="search"
              name="search"
              class="search-field"
              placeholder="Enter your product name..."
            />

            <button class="search-btn">
              <ion-icon name="search-outline"></ion-icon>
            </button>
          </div>

          <div class="header-user-actions">
            <button class="action-btn">
              <ion-icon name="ribbon-outline"></ion-icon>
            </button>

            <button class="action-btn">
              <ion-icon name="heart-outline"></ion-icon>
              <span class="count">0</span>
            </button>

            <button class="action-btn">
              <ion-icon name="bag-handle-outline"></ion-icon>
              <span class="count">0</span>
            </button>
          </div>
        </div>
      </div>

      <nav class="desktop-navigation-menu">
        <div class="container">
          <ul class="desktop-menu-category-list">
            <li class="menu-category">
              <a href="index.html" class="menu-title">Home</a>
            </li>

            <li class="menu-category">
              <a href="#" class="menu-title">Categories</a>

              <div class="dropdown-panel">
                <ul class="dropdown-panel-list">
                  <li class="menu-title">
                    <a href="#">Shop by type</a>
                  </li>

                  <li class="panel-list-item">
                    <a href="#">Engineered Hardwood</a>
                  </li>

                  <li class="panel-list-item">
                    <a href="#">Solid hardwood</a>
                  </li>

                  <li class="panel-list-item">
                    <a href="#">Bamboo</a>
                  </li>

                  <li class="panel-list-item">
                    <a href="#">Cork</a>
                  </li>
                </ul>

                <ul class="dropdown-panel-list">
                  <li class="menu-title">
                    <a href="#">Shop by species</a>
                  </li>

                  <li class="panel-list-item">
                    <a href="#">Oak</a>
                  </li>

                  <li class="panel-list-item">
                    <a href="#">Hickory</a>
                  </li>

                  <li class="panel-list-item">
                    <a href="#">Marple</a>
                  </li>

                  <li class="panel-list-item">
                    <a href="#">Acacia</a>
                  </li>

                  <li class="panel-list-item">
                    <a href="#">Walnut</a>
                  </li>
                </ul>

                <ul class="dropdown-panel-list">
                  <li class="menu-title">
                    <a href="#">Shop by featured brands</a>
                  </li>

                  <li class="panel-list-item">
                    <a href="#">Bruce</a>
                  </li>

                  <li class="panel-list-item">
                    <a href="#">Ecoforest</a>
                  </li>

                  <li class="panel-list-item">
                    <a href="#">Aquaguard wood</a>
                  </li>

                  <li class="panel-list-item">
                    <a href="#">Aquaguard bamboo</a>
                  </li>
                </ul>

                <ul class="dropdown-panel-list">
                  <li class="menu-title">
                    <a href="#">Shop by feature</a>
                  </li>

                  <li class="panel-list-item">
                    <a href="#">Water resistant</a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="menu-category">
              <a href="#" class="menu-title">Wood</a>

              <ul class="dropdown-list">
                <li class="dropdown-item">
                  <a href="#">Oak</a>
                </li>

                <li class="dropdown-item">
                  <a href="#">Hickory</a>
                </li>

                <li class="dropdown-item">
                  <a href="#">Marple</a>
                </li>

                <li class="dropdown-item">
                  <a href="#">Acacia</a>
                </li>
              </ul>
            </li>

            <li class="menu-category">
              <a href="#" class="menu-title">Laminate</a>

              <ul class="dropdown-list">
                <li class="dropdown-item">
                  <a href="#">10mm & above thickness</a>
                </li>

                <li class="dropdown-item">
                  <a href="#">Pet friendly</a>
                </li>

                <li class="dropdown-item">
                  <a href="#">Attached pad</a>
                </li>

                <li class="dropdown-item">
                  <a href="#">Extra long planks</a>
                </li>
              </ul>
            </li>

            <li class="menu-category">
              <a href="#" class="menu-title">Vinyl</a>

              <ul class="dropdown-list">
                <li class="dropdown-item">
                  <a href="#">Waterproof vinyl</a>
                </li>

                <li class="dropdown-item">
                  <a href="#">Stone looklike vinyl</a>
                </li>

                <li class="dropdown-item">
                  <a href="#">Eco resilient flooring</a>
                </li>

                <li class="dropdown-item">
                  <a href="#">Peel and stick vinyl</a>
                </li>
              </ul>
            </li>

            <li class="menu-category">
              <a href="#" class="menu-title">Decoratives</a>

              <ul class="dropdown-list">
                <li class="dropdown-item">
                  <a href="#">Glasses</a>
                </li>

                <li class="dropdown-item">
                  <a href="#">Marple</a>
                </li>

                <li class="dropdown-item">
                  <a href="#">Rectangle</a>
                </li>

                <li class="dropdown-item">
                  <a href="#">Square</a>
                </li>
              </ul>
            </li>

            <li class="menu-category">
              <a href="#" class="menu-title">Fixtures</a>
              <ul class="dropdown-list">
                <li class="dropdown-item">
                  <a href="#">Shower doors</a>
                </li>

                <li class="dropdown-item">
                  <a href="#">Faucets</a>
                </li>

                <li class="dropdown-item">
                  <a href="#">Ligting</a>
                </li>

                <li class="dropdown-item">
                  <a href="#">Mirrors</a>
                </li>
              </ul>
            </li>

            <li class="menu-category">
              <a href="#" class="menu-title">Installation materials</a>
              <ul class="dropdown-list">
                <li class="dropdown-item">
                  <a href="#">Grout</a>
                </li>

                <li class="dropdown-item">
                  <a href="#">Molding</a>
                </li>

                <li class="dropdown-item">
                  <a href="#">Stair parts</a>
                </li>

                <li class="dropdown-item">
                  <a href="#">Trowels and floats</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>

      <div class="mobile-bottom-navigation">
        <button class="action-btn" data-mobile-menu-open-btn>
          <ion-icon name="menu-outline"></ion-icon>
        </button>

        <button class="action-btn">
          <ion-icon name="bag-handle-outline"></ion-icon>

          <span class="count">0</span>
        </button>

        <button class="action-btn">
          <a href="index.html">
            <ion-icon name="home-outline"></ion-icon>
          </a>
        </button>

        <button class="action-btn">
          <ion-icon name="heart-outline"></ion-icon>

          <span class="count">0</span>
        </button>

        <button class="action-btn" data-mobile-menu-open-btn>
          <ion-icon name="grid-outline"></ion-icon>
        </button>
      </div>

      <nav class="mobile-navigation-menu has-scrollbar" data-mobile-menu>
        <div class="menu-top">
          <h2 class="menu-title">Menu</h2>

          <button class="menu-close-btn" data-mobile-menu-close-btn>
            <ion-icon name="close-outline"></ion-icon>
          </button>
        </div>

        <ul class="mobile-menu-category-list">
          <li class="menu-category">
            <a href="index.html" class="menu-title">Home</a>
          </li>

          <li class="menu-category">
            <a href="about.html" class="menu-title">About</a>
          </li>

          <li class="menu-category">
            <a href="contact.html" class="menu-title">Contact us</a>
          </li>

          <li class="menu-category">
            <a href="blog.html" class="menu-title">Blogs</a>
          </li>

          <li class="menu-category">
            <button class="accordion-menu" data-accordion-btn>
              <p class="menu-title">Wood</p>

              <div>
                <ion-icon name="add-outline" class="add-icon"></ion-icon>
                <ion-icon
                  name="remove-outline"
                  class="remove-icon"
                ></ion-icon>
              </div>
            </button>

            <ul class="submenu-category-list" data-accordion>
              <li class="submenu-category">
                <a href="#" class="submenu-title">Oak</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Hickory</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Marple</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Acacia</a>
              </li>
            </ul>
          </li>

          <li class="menu-category">
            <button class="accordion-menu" data-accordion-btn>
              <p class="menu-title">Laminate</p>

              <div>
                <ion-icon name="add-outline" class="add-icon"></ion-icon>
                <ion-icon
                  name="remove-outline"
                  class="remove-icon"
                ></ion-icon>
              </div>
            </button>

            <ul class="submenu-category-list" data-accordion>
              <li class="submenu-category">
                <a href="#" class="submenu-title">10mm & above thickness</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Pet friendly</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Attached pad</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Extra long planks</a>
              </li>
            </ul>
          </li>

          <li class="menu-category">
            <button class="accordion-menu" data-accordion-btn>
              <p class="menu-title">Laminate</p>

              <div>
                <ion-icon name="add-outline" class="add-icon"></ion-icon>
                <ion-icon
                  name="remove-outline"
                  class="remove-icon"
                ></ion-icon>
              </div>
            </button>

            <ul class="submenu-category-list" data-accordion>
              <li class="submenu-category">
                <a href="#" class="submenu-title">10mm & above thickness</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Pet friendly</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Attached pad</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Extra long planks</a>
              </li>
            </ul>
          </li>

          <li class="menu-category">
            <button class="accordion-menu" data-accordion-btn>
              <p class="menu-title">Vinyl</p>

              <div>
                <ion-icon name="add-outline" class="add-icon"></ion-icon>
                <ion-icon
                  name="remove-outline"
                  class="remove-icon"
                ></ion-icon>
              </div>
            </button>

            <ul class="submenu-category-list" data-accordion>
              <li class="submenu-category">
                <a href="#" class="submenu-title">Waterproof vinyl</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Stone looklike vinyl</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Eco resilient flooring</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Peel and stick vinyl</a>
              </li>
            </ul>
          </li>
        </ul>

        <div class="menu-bottom">
          <ul class="menu-category-list">
            <li class="menu-category">
              <button class="accordion-menu" data-accordion-btn>
                <p class="menu-title">Language</p>

                <ion-icon
                  name="caret-back-outline"
                  class="caret-back"
                ></ion-icon>
              </button>

              <ul class="submenu-category-list" data-accordion>
                <li class="submenu-category">
                  <a href="#" class="submenu-title">English</a>
                </li>

                <li class="submenu-category">
                  <a href="#" class="submenu-title">Espa&ntilde;ol</a>
                </li>

                <li class="submenu-category">
                  <a href="#" class="submenu-title">Fren&ccedil;h</a>
                </li>
              </ul>
            </li>

            <li class="menu-category">
              <button class="accordion-menu" data-accordion-btn>
                <p class="menu-title">Currency</p>
                <ion-icon
                  name="caret-back-outline"
                  class="caret-back"
                ></ion-icon>
              </button>

              <ul class="submenu-category-list" data-accordion>
                <li class="submenu-category">
                  <a href="#" class="submenu-title">USD &dollar;</a>
                </li>

                <li class="submenu-category">
                  <a href="#" class="submenu-title">EUR &euro;</a>
                </li>
              </ul>
            </li>
          </ul>

          <ul class="menu-social-container">
            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <!--
  - MAIN
-->

    <main>
      <!--
    - BANNER
  -->

      <div class="banner">
        <div class="container">
          <div class="slider-container has-scrollbar">
            <div class="slider-item">
              <img
                src="{{asset('theme/assets/images/real/banner-unilin-evola-2.png')}}"
                alt="sale"
                class="banner-img"
              />

              <div class="banner-content">
                <p class="banner-subtitle">Trending</p>

                <h2 class="banner-title">Wood floors</h2>

                <p class="banner-text">starting at &dollar; <b>20</b>.00</p>

                <a href="#" class="banner-btn">Shop now</a>
              </div>
            </div>

            <div class="slider-item">
              <img
                src="{{asset('theme/assets/images/real/banner-unilin-evola-2.png')}}"
                alt="sale"
                class="banner-img"
              />

              <div class="banner-content">
                <p class="banner-subtitle">Great</p>

                <h2 class="banner-title">Waterproof floors</h2>

                <p class="banner-text">starting at &dollar; <b>15</b>.00</p>

                <a href="#" class="banner-btn">Shop now</a>
              </div>
            </div>

            <div class="slider-item">
              <img
                src="{{asset('theme/assets/images/real/banner-unilin-evola-2.png')}}"
                alt="sale"
                class="banner-img"
              />

              <div class="banner-content">
                <p class="banner-subtitle">Create</p>

                <h2 class="banner-title">Your dream floors</h2>

                <p class="banner-text">starting at &dollar; <b>29</b>.99</p>

                <a href="#" class="banner-btn">Shop now</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--
    - CATEGORY
  -->

      <div class="category">
        <div class="container">
          <div class="category-item-container has-scrollbar">
            <div class="category-item">
              <div class="category-img-box">
                <img
                  src="{{asset('theme/assets/images/walnut-removebg-preview.png')}}"
                  alt="American walnut"
                  width="30"
                />
              </div>

              <div class="category-content-box">
                <div class="category-content-flex">
                  <h3 class="category-item-title">American walnut</h3>

                  <p class="category-item-amount">(53)</p>
                </div>

                <a href="allproduct.html" class="category-btn">Show all</a>
              </div>
            </div>

            <div class="category-item">
              <div class="category-img-box">
                <img
                  src="{{asset('theme/assets/images/bamboo-removebg-preview.png')}}"
                  alt="Bamboo"
                  width="30"
                />
              </div>

              <div class="category-content-box">
                <div class="category-content-flex">
                  <h3 class="category-item-title">Bamboo</h3>

                  <p class="category-item-amount">(58)</p>
                </div>

                <a href="allproduct.html" class="category-btn">Show all</a>
              </div>
            </div>

            <div class="category-item">
              <div class="category-img-box">
                <img
                  src="{{asset('theme/assets/images/cherry-removebg-preview.png')}}"
                  alt="Cherry"
                  width="30"
                />
              </div>

              <div class="category-content-box">
                <div class="category-content-flex">
                  <h3 class="category-item-title">Cherry</h3>

                  <p class="category-item-amount">(68)</p>
                </div>

                <a href="allproduct.html" class="category-btn">Show all</a>
              </div>
            </div>

            <div class="category-item">
              <div class="category-img-box">
                <img
                  src="{{asset('theme/assets/images/maple-removebg-preview.png')}}"
                  alt="Maple"
                  width="30"
                />
              </div>

              <div class="category-content-box">
                <div class="category-content-flex">
                  <h3 class="category-item-title">Maple</h3>

                  <p class="category-item-amount">(84)</p>
                </div>

                <a href="allproduct.html" class="category-btn">Show all</a>
              </div>
            </div>

            <div class="category-item">
              <div class="category-img-box">
                <img
                  src="{{asset('theme/assets/images/ooak-removebg-preview.png')}}"
                  alt="Oak"
                  width="30"
                />
              </div>

              <div class="category-content-box">
                <div class="category-content-flex">
                  <h3 class="category-item-title">Oak</h3>

                  <p class="category-item-amount">(35)</p>
                </div>

                <a href="allproduct.html" class="category-btn">Show all</a>
              </div>
            </div>

            <div class="category-item">
              <div class="category-img-box">
                <img
                  src="{{asset('theme/assets/images/PARQUET-removebg-preview.png')}}"
                  alt="Parquet"
                  width="30"
                />
              </div>

              <div class="category-content-box">
                <div class="category-content-flex">
                  <h3 class="category-item-title">Parquet</h3>

                  <p class="category-item-amount">(16)</p>
                </div>

                <a href="allproduct.html" class="category-btn">Show all</a>
              </div>
            </div>

            <div class="category-item">
              <div class="category-img-box">
                <img
                  src="{{asset('theme/assets/images/pine-removebg-preview.png')}}"
                  alt="Pine"
                  width="30"
                />
              </div>

              <div class="category-content-box">
                <div class="category-content-flex">
                  <h3 class="category-item-title">Pine</h3>

                  <p class="category-item-amount">(27)</p>
                </div>

                <a href="allproduct.html" class="category-btn">Show all</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--
    - PRODUCT
  -->

      <div class="product-container">
        <div class="container">
          <!--
        - SIDEBAR
      -->

          <div class="sidebar has-scrollbar" data-mobile-menu>
            <div class="sidebar-category">
              <div class="sidebar-top">
                <h2 class="sidebar-title">Category</h2>

                <button class="sidebar-close-btn" data-mobile-menu-close-btn>
                  <ion-icon name="close-outline"></ion-icon>
                </button>
              </div>

              <ul class="sidebar-menu-category-list">
                <li class="sidebar-menu-category">
                  <button class="sidebar-accordion-menu" data-accordion-btn>
                    <div class="menu-title-flex">
                      <p class="menu-title">Product type</p>
                    </div>

                    <div>
                      <ion-icon
                        name="add-outline"
                        class="add-icon"
                      ></ion-icon>
                      <ion-icon
                        name="remove-outline"
                        class="remove-icon"
                      ></ion-icon>
                    </div>
                  </button>

                  <ul class="sidebar-submenu-category-list" data-accordion>
                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Solid hardwood</p>
                        <data
                          value="300"
                          class="stock"
                          title="Available Stock"
                          >300</data
                        >
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Engineered hardwood</p>
                        <data value="60" class="stock" title="Available Stock"
                          >60</data
                        >
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Bamboo</p>
                        <data value="50" class="stock" title="Available Stock"
                          >50</data
                        >
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Counter top</p>
                        <data value="87" class="stock" title="Available Stock"
                          >87</data
                        >
                      </a>
                    </li>
                  </ul>
                </li>

                <li class="sidebar-menu-category">
                  <button class="sidebar-accordion-menu" data-accordion-btn>
                    <div class="menu-title-flex">
                      <p class="menu-title">Color</p>
                    </div>

                    <div>
                      <ion-icon
                        name="add-outline"
                        class="add-icon"
                      ></ion-icon>
                      <ion-icon
                        name="remove-outline"
                        class="remove-icon"
                      ></ion-icon>
                    </div>
                  </button>

                  <ul class="sidebar-submenu-category-list" data-accordion>
                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Brown</p>
                        <data value="45" class="stock" title="Available Stock"
                          >45</data
                        >
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Natural</p>
                        <data value="75" class="stock" title="Available Stock"
                          >75</data
                        >
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Gray</p>
                        <data value="35" class="stock" title="Available Stock"
                          >35</data
                        >
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">White</p>
                        <data value="26" class="stock" title="Available Stock"
                          >26</data
                        >
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Multi-coloured</p>
                        <data value="26" class="stock" title="Available Stock"
                          >26</data
                        >
                      </a>
                    </li>
                  </ul>
                </li>

                <li class="sidebar-menu-category">
                  <button class="sidebar-accordion-menu" data-accordion-btn>
                    <div class="menu-title-flex">
                      <p class="menu-title">Shade</p>
                    </div>

                    <div>
                      <ion-icon
                        name="add-outline"
                        class="add-icon"
                      ></ion-icon>
                      <ion-icon
                        name="remove-outline"
                        class="remove-icon"
                      ></ion-icon>
                    </div>
                  </button>

                  <ul class="sidebar-submenu-category-list" data-accordion>
                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Medium</p>
                        <data value="46" class="stock" title="Available Stock"
                          >46</data
                        >
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Light</p>
                        <data value="73" class="stock" title="Available Stock"
                          >73</data
                        >
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Dark</p>
                        <data value="61" class="stock" title="Available Stock"
                          >61</data
                        >
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">High variation</p>
                        <data value="61" class="stock" title="Available Stock"
                          >61</data
                        >
                      </a>
                    </li>
                  </ul>
                </li>

                <li class="sidebar-menu-category">
                  <button class="sidebar-accordion-menu" data-accordion-btn>
                    <div class="menu-title-flex">
                      <p class="menu-title">Species</p>
                    </div>

                    <div>
                      <ion-icon
                        name="add-outline"
                        class="add-icon"
                      ></ion-icon>
                      <ion-icon
                        name="remove-outline"
                        class="remove-icon"
                      ></ion-icon>
                    </div>
                  </button>

                  <ul class="sidebar-submenu-category-list" data-accordion>
                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Hickory</p>
                        <data value="12" class="stock" title="Available Stock"
                          >12 pcs</data
                        >
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">White oak</p>
                        <data value="60" class="stock" title="Available Stock"
                          >60 pcs</data
                        >
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Acacia</p>
                        <data value="50" class="stock" title="Available Stock"
                          >50 pcs</data
                        >
                      </a>
                    </li>
                  </ul>
                </li>

                <li class="sidebar-menu-category">
                  <button class="sidebar-accordion-menu" data-accordion-btn>
                    <div class="menu-title-flex">
                      <p class="menu-title">Approximate width</p>
                    </div>

                    <div>
                      <ion-icon
                        name="add-outline"
                        class="add-icon"
                      ></ion-icon>
                      <ion-icon
                        name="remove-outline"
                        class="remove-icon"
                      ></ion-icon>
                    </div>
                  </button>

                  <ul class="sidebar-submenu-category-list" data-accordion>
                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Plank (3 to 5.99in)</p>
                        <data value="68" class="stock" title="Available Stock"
                          >68</data
                        >
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Extra wide (8in & over)</p>
                        <data value="46" class="stock" title="Available Stock"
                          >46</data
                        >
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Strip (upto 2.99in)</p>
                        <data value="79" class="stock" title="Available Stock"
                          >79</data
                        >
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Multi width</p>
                        <data value="23" class="stock" title="Available Stock"
                          >23</data
                        >
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Wide plank (6 to 7.99in)</p>
                        <data value="23" class="stock" title="Available Stock"
                          >23</data
                        >
                      </a>
                    </li>
                  </ul>
                </li>

                <li class="sidebar-menu-category">
                  <button class="sidebar-accordion-menu" data-accordion-btn>
                    <div class="menu-title-flex">
                      <p class="menu-title">Approximate thickness</p>
                    </div>

                    <div>
                      <ion-icon
                        name="add-outline"
                        class="add-icon"
                      ></ion-icon>
                      <ion-icon
                        name="remove-outline"
                        class="remove-icon"
                      ></ion-icon>
                    </div>
                  </button>

                  <ul class="sidebar-submenu-category-list" data-accordion>
                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">3/4in</p>
                        <data value="50" class="stock" title="Available Stock"
                          >50</data
                        >
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">5/8in</p>
                        <data value="48" class="stock" title="Available Stock"
                          >48</data
                        >
                      </a>
                    </li>
                  </ul>
                </li>

                <li class="sidebar-menu-category">
                  <button class="sidebar-accordion-menu" data-accordion-btn>
                    <div class="menu-title-flex">
                      <p class="menu-title">Installation type</p>
                    </div>

                    <div>
                      <ion-icon
                        name="add-outline"
                        class="add-icon"
                      ></ion-icon>
                      <ion-icon
                        name="remove-outline"
                        class="remove-icon"
                      ></ion-icon>
                    </div>
                  </button>

                  <ul class="sidebar-submenu-category-list" data-accordion>
                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Glue/Nail/Staple</p>
                        <data value="62" class="stock" title="Available Stock"
                          >62</data
                        >
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Glue/Nail</p>
                        <data value="35" class="stock" title="Available Stock"
                          >35</data
                        >
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>

            <div class="product-showcase">
              <h3 class="showcase-heading">Best selling floors</h3>

              <div class="showcase-wrapper">
                <div class="showcase-container">
                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img
                        src="{{asset('theme/assets/images/real/EL1043.jpg')}}"
                        alt="baby fabric shoes"
                        width="75"
                        height="75"
                        class="showcase-img"
                      />
                    </a>

                    <div class="showcase-content">
                      <a href="#">
                        <h4 class="showcase-title">
                          RANIA LOCUST DISTRESSED SOLID HARDWOOD
                        </h4>
                      </a>

                      <div class="showcase-rating">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                      </div>

                      <div class="price-box">
                        <del>$5.00</del>
                        <p class="price">$4.00</p>
                      </div>
                    </div>
                  </div>

                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img
                        src="{{asset('theme/assets/images/real/EL996.jpg')}}"
                        alt="men's hoodies t-shirt"
                        class="showcase-img"
                        width="75"
                        height="75"
                      />
                    </a>

                    <div class="showcase-content">
                      <a href="#">
                        <h4 class="showcase-title">
                          MILANA HARD MAPLE SMOOTH SOLID HARDWOOD
                        </h4>
                      </a>
                      <div class="showcase-rating">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star-half-outline"></ion-icon>
                      </div>

                      <div class="price-box">
                        <del>$17.00</del>
                        <p class="price">$7.00</p>
                      </div>
                    </div>
                  </div>

                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img
                        src="{{asset('theme/assets/images/real/CR3175.jpg')}}"
                        alt="girls t-shirt"
                        class="showcase-img"
                        width="75"
                        height="75"
                      />
                    </a>

                    <div class="showcase-content">
                      <a href="#">
                        <h4 class="showcase-title">
                          BURLYWOOD II LONG LEAF ACACIA DISTRESSED SOLID
                          HARDWOOD
                        </h4>
                      </a>
                      <div class="showcase-rating">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star-half-outline"></ion-icon>
                      </div>

                      <div class="price-box">
                        <del>$5.00</del>
                        <p class="price">$3.00</p>
                      </div>
                    </div>
                  </div>

                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img
                        src="{{asset('theme/assets/images/real/CR3179.jpg')}}"
                        alt="woolen hat for men"
                        class="showcase-img"
                        width="75"
                        height="75"
                      />
                    </a>

                    <div class="showcase-content">
                      <a href="#">
                        <h4 class="showcase-title">
                          GUNSTOCK RED OAK SMOOTH SOLID HARDWOOD
                        </h4>
                      </a>
                      <div class="showcase-rating">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                      </div>

                      <div class="price-box">
                        <del>$15.00</del>
                        <p class="price">$12.00</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="product-box">
            <!--
          - PRODUCT MINIMAL
        -->

            <div class="product-minimal">
              <div class="product-showcase">
                <h2 class="title">New Arrivals</h2>

                <div class="showcase-wrapper has-scrollbar">
                  <div class="showcase-container">
                    <div class="showcase">
                      <a href="#" class="showcase-img-box">
                        <img
                          src="{{asset('theme/assets/images/real/CR3175.jpg')}}"
                          alt="relaxed short full sleeve t-shirt"
                          width="70"
                          class="showcase-img"
                        />
                      </a>

                      <div class="showcase-content">
                        <a href="#">
                          <h4 class="showcase-title">
                            GUNSTOCK SELECT RED OAK HIGH GLOSS SMOOTH SOLID
                            HARDWOOD
                          </h4>
                        </a>

                        <a href="#" class="showcase-category">Oak</a>

                        <div class="price-box">
                          <p class="price">$45.00</p>
                          <del>$12.00</del>
                        </div>
                      </div>
                    </div>

                    <div class="showcase">
                      <a href="#" class="showcase-img-box">
                        <img
                          src="{{asset('theme/assets/images/real/CR3177.jpg')}}"
                          alt="girls pink embro design top"
                          class="showcase-img"
                          width="70"
                        />
                      </a>

                      <div class="showcase-content">
                        <a href="#">
                          <h4 class="showcase-title">
                            PROSPECT ASH WIRE-BRUSHED SOLID HARDWOOD
                          </h4>
                        </a>

                        <a href="#" class="showcase-category">Pine</a>

                        <div class="price-box">
                          <p class="price">$61.00</p>
                          <del>$9.00</del>
                        </div>
                      </div>
                    </div>

                    <div class="showcase">
                      <a href="#" class="showcase-img-box">
                        <img
                          src="{{asset('theme/assets/images/real/CR3179.jpg')}}"
                          alt="black floral wrap midi skirt"
                          class="showcase-img"
                          width="70"
                        />
                      </a>

                      <div class="showcase-content">
                        <a href="#">
                          <h4 class="showcase-title">
                            CHESTNUT HICKORY HAND SCRAPED SOLID HARDWOOD
                          </h4>
                        </a>

                        <a href="#" class="showcase-category">Hickory</a>

                        <div class="price-box">
                          <p class="price">$76.00</p>
                          <del>$25.00</del>
                        </div>
                      </div>
                    </div>

                    <div class="showcase">
                      <a href="#" class="showcase-img-box">
                        <img
                          src="{{asset('theme/assets/images/real/CR3180.jpg')}}"
                          alt="pure garment dyed cotton shirt"
                          class="showcase-img"
                          width="70"
                        />
                      </a>

                      <div class="showcase-content">
                        <a href="#">
                          <h4 class="showcase-title">
                            Gunstock Select Red Oak High Gloss Smooth Solid
                            Hardwood Sample
                          </h4>
                        </a>

                        <a href="#" class="showcase-category">Oak</a>

                        <div class="price-box">
                          <p class="price">$68.00</p>
                          <del>$31.00</del>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="showcase-container">
                    <div class="showcase">
                      <a href="#" class="showcase-img-box">
                        <img
                          src="{{asset('theme/assets/images/real/CR3181.jpg')}}"
                          alt="men yarn fleece full-zip jacket"
                          class="showcase-img"
                          width="70"
                        />
                      </a>

                      <div class="showcase-content">
                        <a href="#">
                          <h4 class="showcase-title">
                            Gunstock Select Red Oak High Gloss Smooth Solid
                            Hardwood Sample
                          </h4>
                        </a>

                        <a href="#" class="showcase-category">Oak</a>

                        <div class="price-box">
                          <p class="price">$61.00</p>
                          <del>$11.00</del>
                        </div>
                      </div>
                    </div>

                    <div class="showcase">
                      <a href="#" class="showcase-img-box">
                        <img
                          src="{{asset('theme/assets/images/real/CR3181.jpg')}}"
                          alt="mens winter leathers jackets"
                          class="showcase-img"
                          width="70"
                        />
                      </a>

                      <div class="showcase-content">
                        <a href="#">
                          <h4 class="showcase-title">
                            GUNSTOCK RED OAK SMOOTH SOLID HARDWOOD
                          </h4>
                        </a>

                        <a href="#" class="showcase-category">Oak</a>

                        <div class="price-box">
                          <p class="price">$32.00</p>
                          <del>$20.00</del>
                        </div>
                      </div>
                    </div>

                    <div class="showcase">
                      <a href="#" class="showcase-img-box">
                        <img
                          src="{{asset('theme/assets/images/real/CR3182.jpg')}}"
                          alt="mens winter leathers jackets"
                          class="showcase-img"
                          width="70"
                        />
                      </a>

                      <div class="showcase-content">
                        <a href="#">
                          <h4 class="showcase-title">
                            RANIA LOCUST DISTRESSED SOLID HARDWOOD
                          </h4>
                        </a>

                        <a href="#" class="showcase-category">Cherry</a>

                        <div class="price-box">
                          <p class="price">$50.00</p>
                          <del>$25.00</del>
                        </div>
                      </div>
                    </div>

                    <div class="showcase">
                      <a href="#" class="showcase-img-box">
                        <img
                          src="{{asset('theme/assets/images/real/CR3182.jpg')}}"
                          alt="better basics french terry sweatshorts"
                          class="showcase-img"
                          width="70"
                        />
                      </a>

                      <div class="showcase-content">
                        <a href="#">
                          <h4 class="showcase-title">
                            MILANA HARD MAPLE SMOOTH SOLID HARDWOOD
                          </h4>
                        </a>

                        <a href="#" class="showcase-category">Acacia</a>

                        <div class="price-box">
                          <p class="price">$20.00</p>
                          <del>$10.00</del>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="product-showcase">
                <h2 class="title">Trending</h2>

                <div class="showcase-wrapper has-scrollbar">
                  <div class="showcase-container">
                    <div class="showcase">
                      <a href="#" class="showcase-img-box">
                        <img
                          src="{{asset('theme/assets/images/real/image.png')}}"
                          alt="running & trekking shoes - white"
                          class="showcase-img"
                          width="70"
                        />
                      </a>

                      <div class="showcase-content">
                        <a href="#">
                          <h4 class="showcase-title">
                            BURLYWOOD II LONG LEAF ACACIA DISTRESSED SOLID
                            HARDWOOD
                          </h4>
                        </a>

                        <a href="#" class="showcase-category">Acacia</a>

                        <div class="price-box">
                          <p class="price">$49.00</p>
                          <del>$15.00</del>
                        </div>
                      </div>
                    </div>

                    <div class="showcase">
                      <a href="#" class="showcase-img-box">
                        <img
                          src="{{asset('theme/assets/images/real/image%20(1).png')}}"
                          alt="trekking & running shoes - black"
                          class="showcase-img"
                          width="70"
                        />
                      </a>

                      <div class="showcase-content">
                        <a href="#">
                          <h4 class="showcase-title">
                            GUNSTOCK RED OAK SMOOTH SOLID HARDWOOD
                          </h4>
                        </a>

                        <a href="#" class="showcase-category">Oak</a>

                        <div class="price-box">
                          <p class="price">$78.00</p>
                          <del>$36.00</del>
                        </div>
                      </div>
                    </div>

                    <div class="showcase">
                      <a href="#" class="showcase-img-box">
                        <img
                          src="{{asset('theme/assets/images/real/image%20(2).png')}}"
                          alt="womens party wear shoes"
                          class="showcase-img"
                          width="70"
                        />
                      </a>

                      <div class="showcase-content">
                        <a href="#">
                          <h4 class="showcase-title">
                            RIVERS EDGE WHITE OAK SMOOTH SOLID HARDWOOD
                          </h4>
                        </a>

                        <a href="#" class="showcase-category">Oak</a>

                        <div class="price-box">
                          <p class="price">$94.00</p>
                          <del>$42.00</del>
                        </div>
                      </div>
                    </div>

                    <div class="showcase">
                      <a href="#" class="showcase-img-box">
                        <img
                          src="{{asset('theme/assets/images/real/image%20(3).png')}}"
                          alt="sports claw women's shoes"
                          class="showcase-img"
                          width="70"
                        />
                      </a>

                      <div class="showcase-content">
                        <a href="#">
                          <h4 class="showcase-title">
                            PROSPECT ASH HERRINGBONE WIRE BRUSHED SOLID
                            HARDWOOD
                          </h4>
                        </a>

                        <a href="#" class="showcase-category">Parquet</a>

                        <div class="price-box">
                          <p class="price">$54.00</p>
                          <del>$65.00</del>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="showcase-container">
                    <div class="showcase">
                      <a href="#" class="showcase-img-box">
                        <img
                          src="{{asset('theme/assets/images/real/unnamed.png')}}"
                          alt="air tekking shoes - white"
                          class="showcase-img"
                          width="70"
                        />
                      </a>

                      <div class="showcase-content">
                        <a href="#">
                          <h4 class="showcase-title">
                            NATURAL WHITE OAK SMOOTH SOLID HARDWOOD
                          </h4>
                        </a>

                        <a href="#" class="showcase-category">Oak</a>

                        <div class="price-box">
                          <p class="price">$52.00</p>
                          <del>$55.00</del>
                        </div>
                      </div>
                    </div>

                    <div class="showcase">
                      <a href="#" class="showcase-img-box">
                        <img
                          src="{{asset('theme/assets/images/real/unnamed%20(1).png')}}"
                          alt="Boot With Suede Detail"
                          class="showcase-img"
                          width="70"
                        />
                      </a>

                      <div class="showcase-content">
                        <a href="#">
                          <h4 class="showcase-title">
                            HONORA RED OAK SMOOTH SOLID HARDWOOD
                          </h4>
                        </a>

                        <a href="#" class="showcase-category">Oak</a>

                        <div class="price-box">
                          <p class="price">$20.00</p>
                          <del>$30.00</del>
                        </div>
                      </div>
                    </div>

                    <div class="showcase">
                      <a href="#" class="showcase-img-box">
                        <img
                          src="{{asset('theme/assets/images/real/unnamed%20(2)%20(1).png')}}"
                          alt="men's leather formal wear shoes"
                          class="showcase-img"
                          width="70"
                        />
                      </a>

                      <div class="showcase-content">
                        <a href="#">
                          <h4 class="showcase-title">
                            BUFORD SHORT LEAF ACACIA WIRE-BRUSHED SOLID
                            HARDWOOD
                          </h4>
                        </a>

                        <a href="#" class="showcase-category">Maple</a>

                        <div class="price-box">
                          <p class="price">$56.00</p>
                          <del>$78.00</del>
                        </div>
                      </div>
                    </div>

                    <div class="showcase">
                      <a href="#" class="showcase-img-box">
                        <img
                          src="{{asset('theme/assets/images/real/unnamed%20(2)%20(1).png')}}"
                          alt="casual men's brown shoes"
                          class="showcase-img"
                          width="70"
                        />
                      </a>

                      <div class="showcase-content">
                        <a href="#">
                          <h4 class="showcase-title">
                            CHERRY II MAHOGANY SMOOTH SOLID HARDWOOD
                          </h4>
                        </a>

                        <a href="#" class="showcase-category">Cherry</a>

                        <div class="price-box">
                          <p class="price">$50.00</p>
                          <del>$55.00</del>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="product-showcase">
                <h2 class="title">Top Rated</h2>

                <div class="showcase-wrapper has-scrollbar">
                  <div class="showcase-container">
                    <div class="showcase">
                      <a href="#" class="showcase-img-box">
                        <img
                          src="{{asset('theme/assets/images/real/unnamed%20(3).png')}}"
                          alt="pocket watch leather pouch"
                          class="showcase-img"
                          width="70"
                        />
                      </a>

                      <div class="showcase-content">
                        <a href="#">
                          <h4 class="showcase-title">
                            HEVEA MERAPI DISTRESSED SOLID HARDWOOD
                          </h4>
                        </a>

                        <a href="#" class="showcase-category"
                          >American walnut</a
                        >

                        <div class="price-box">
                          <p class="price">$50.00</p>
                          <del>$34.00</del>
                        </div>
                      </div>
                    </div>

                    <div class="showcase">
                      <a href="#" class="showcase-img-box">
                        <img
                          src="{{asset('theme/assets/images/real/unnamed%20(4)%20(1).png')}}"
                          alt="silver deer heart necklace"
                          class="showcase-img"
                          width="70"
                        />
                      </a>

                      <div class="showcase-content">
                        <a href="#">
                          <h4 class="showcase-title">
                            FOSSIL HICKORY SOLID HARDWOOD
                          </h4>
                        </a>

                        <a href="#" class="showcase-category">Acacia</a>

                        <div class="price-box">
                          <p class="price">$84.00</p>
                          <del>$30.00</del>
                        </div>
                      </div>
                    </div>

                    <div class="showcase">
                      <a href="#" class="showcase-img-box">
                        <img
                          src="{{asset('theme/assets/images/real/unnamed%20(4)%20(1).png')}}"
                          alt="titan 100 ml womens perfume"
                          class="showcase-img"
                          width="70"
                        />
                      </a>

                      <div class="showcase-content">
                        <a href="#">
                          <h4 class="showcase-title">
                            NATURAL SELECT RED OAK SMOOTH SOLID HARDWOOD
                          </h4>
                        </a>

                        <a href="#" class="showcase-category">Oak</a>

                        <div class="price-box">
                          <p class="price">$42.00</p>
                          <del>$10.00</del>
                        </div>
                      </div>
                    </div>

                    <div class="showcase">
                      <a href="#" class="showcase-img-box">
                        <img
                          src="{{asset('theme/assets/images/real/unnamed%20(5).png')}}"
                          alt="men's leather reversible belt"
                          class="showcase-img"
                          width="70"
                        />
                      </a>

                      <div class="showcase-content">
                        <a href="#">
                          <h4 class="showcase-title">
                            NEWMAN BIRCH WIRE-BRUSHED SOLID HARDWOOD
                          </h4>
                        </a>

                        <a href="#" class="showcase-category">Cherry</a>

                        <div class="price-box">
                          <p class="price">$24.00</p>
                          <del>$10.00</del>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="showcase-container">
                    <div class="showcase">
                      <a href="#" class="showcase-img-box">
                        <img
                          src="{{asset('theme/assets/images/real/unnamed%20(5)%20(1).png')}}"
                          alt="platinum zircon classic ring"
                          class="showcase-img"
                          width="70"
                        />
                      </a>

                      <div class="showcase-content">
                        <a href="#">
                          <h4 class="showcase-title">
                            PETERSBURG ASH HERRINGBONE WIRE BRUSHED SOLID
                            HARDWOOD
                          </h4>
                        </a>

                        <a href="#" class="showcase-category">Parquet</a>

                        <div class="price-box">
                          <p class="price">$62.00</p>
                          <del>$65.00</del>
                        </div>
                      </div>
                    </div>

                    <div class="showcase">
                      <a href="#" class="showcase-img-box">
                        <img
                          src="{{asset('theme/assets/images/real/unnamed%20(6).png')}}"
                          alt="smart watche vital plus"
                          class="showcase-img"
                          width="70"
                        />
                      </a>

                      <div class="showcase-content">
                        <a href="#">
                          <h4 class="showcase-title">
                            SIERRA RED OAK SMOOTH SOLID HARDWOOD
                          </h4>
                        </a>

                        <a href="#" class="showcase-category">Oak</a>

                        <div class="price-box">
                          <p class="price">$56.00</p>
                          <del>$78.00</del>
                        </div>
                      </div>
                    </div>

                    <div class="showcase">
                      <a href="#" class="showcase-img-box">
                        <img
                          src="{{asset('theme/assets/images/real/unnamed%20(6).png')}}"
                          alt="shampoo conditioner packs"
                          class="showcase-img"
                          width="70"
                        />
                      </a>

                      <div class="showcase-content">
                        <a href="#">
                          <h4 class="showcase-title">
                            EMBRY SHORT LEAF ACACIA SMOOTH SOLID HARDWOOD
                          </h4>
                        </a>

                        <a href="#" class="showcase-category">Acacia</a>

                        <div class="price-box">
                          <p class="price">$20.00</p>
                          <del>$30.00</del>
                        </div>
                      </div>
                    </div>

                    <div class="showcase">
                      <a href="#" class="showcase-img-box">
                        <img
                          src="{{asset('theme/assets/images/real/unnamed%20(7)%20(1).png')}}"
                          alt="rose gold peacock earrings"
                          class="showcase-img"
                          width="70"
                        />
                      </a>

                      <div class="showcase-content">
                        <a href="#">
                          <h4 class="showcase-title">
                            HEVEA TRUVA DISTRESSED SOLID HARDWOOD
                          </h4>
                        </a>

                        <a href="#" class="showcase-category">Bamboo</a>

                        <div class="price-box">
                          <p class="price">$20.00</p>
                          <del>$30.00</del>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!--
          - PRODUCT FEATURED
        -->

            <div class="product-featured">
              <h2 class="title">Deal of the day</h2>

              <div class="showcase-wrapper has-scrollbar">
                <div class="showcase-container">
                  <div class="showcase">
                    <div class="showcase-banner">
                      <img
                        src="{{asset('theme/assets/images/real/Laminate.png')}}"
                        alt="shampoo, conditioner & facewash packs"
                        class="showcase-img"
                      />
                    </div>

                    <div class="showcase-content">
                      <div class="showcase-rating">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star-outline"></ion-icon>
                        <ion-icon name="star-outline"></ion-icon>
                      </div>

                      <a href="#">
                        <h3 class="showcase-title">
                          HEVEA TRUVA DISTRESSED SOLID HARDWOOD
                        </h3>
                      </a>

                      <p class="showcase-desc">
                        Lorem ipsum dolor sit amet consectetur Lorem ipsum
                        dolor dolor sit amet consectetur Lorem ipsum dolor
                      </p>

                      <div class="price-box">
                        <p class="price">$150.00</p>

                        <del>$200.00</del>
                      </div>

                      <button class="add-cart-btn">add to cart</button>

                      <div class="showcase-status">
                        <div class="wrapper">
                          <p>already sold: <b>20</b></p>

                          <p>available: <b>40</b></p>
                        </div>

                        <div class="showcase-status-bar"></div>
                      </div>

                      <div class="countdown-box">
                        <p class="countdown-desc">Hurry Up! Offer ends in:</p>

                        <div class="countdown">
                          <div class="countdown-content">
                            <p class="display-number">360</p>

                            <p class="display-text">Days</p>
                          </div>

                          <div class="countdown-content">
                            <p class="display-number">24</p>
                            <p class="display-text">Hours</p>
                          </div>

                          <div class="countdown-content">
                            <p class="display-number">59</p>
                            <p class="display-text">Min</p>
                          </div>

                          <div class="countdown-content">
                            <p class="display-number">00</p>
                            <p class="display-text">Sec</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="showcase-container">
                  <div class="showcase">
                    <div class="showcase-banner">
                      <img
                        src="{{asset('theme/assets/images/real/exploded_wood_engineered_panels.png')}}"
                        alt="Rose Gold diamonds Earring"
                        class="showcase-img"
                      />
                    </div>

                    <div class="showcase-content">
                      <div class="showcase-rating">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star-outline"></ion-icon>
                        <ion-icon name="star-outline"></ion-icon>
                      </div>

                      <h3 class="showcase-title">
                        <a href="#" class="showcase-title"
                          >CARLISLE BIRCH DISTRESSED SOLID HARDWOOD</a
                        >
                      </h3>

                      <p class="showcase-desc">
                        Lorem ipsum dolor sit amet consectetur Lorem ipsum
                        dolor dolor sit amet consectetur Lorem ipsum dolor
                      </p>

                      <div class="price-box">
                        <p class="price">$1990.00</p>
                        <del>$2000.00</del>
                      </div>

                      <button class="add-cart-btn">add to cart</button>

                      <div class="showcase-status">
                        <div class="wrapper">
                          <p>already sold: <b>15</b></p>

                          <p>available: <b>40</b></p>
                        </div>

                        <div class="showcase-status-bar"></div>
                      </div>

                      <div class="countdown-box">
                        <p class="countdown-desc">Hurry Up! Offer ends in:</p>

                        <div class="countdown">
                          <div class="countdown-content">
                            <p class="display-number">360</p>
                            <p class="display-text">Days</p>
                          </div>

                          <div class="countdown-content">
                            <p class="display-number">24</p>
                            <p class="display-text">Hours</p>
                          </div>

                          <div class="countdown-content">
                            <p class="display-number">59</p>
                            <p class="display-text">Min</p>
                          </div>

                          <div class="countdown-content">
                            <p class="display-number">00</p>
                            <p class="display-text">Sec</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!--
          - PRODUCT GRID
        -->

            <div class="product-main">
              <h2 class="title">New Products</h2>

              <div class="product-grid">
                <div class="showcase">
                  <div class="showcase-banner">
                    <img
                      src="{{asset('theme/assets/images/real/unnamed%20(1).png')}}"
                      alt="Mens Winter Leathers Jackets"
                      width="300"
                      class="product-img default"
                    />
                    <img
                      src="{{asset('theme/assets/images/real/unnamed%20(1).png')}}"
                      alt="Mens Winter Leathers Jackets"
                      width="300"
                      class="product-img hover"
                    />

                    <p class="showcase-badge">15%</p>

                    <div class="showcase-actions">
                      <button class="btn-action">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="bag-add-outline"></ion-icon>
                      </button>
                    </div>
                  </div>

                  <div class="showcase-content">
                    <a href="#" class="showcase-category">Oak</a>

                    <a href="#">
                      <h3 class="showcase-title">
                        GUNSTOCK SELECT RED OAK HIGH GLOSS SMOOTH SOLID
                        HARDWOOD
                      </h3>
                    </a>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <p class="price">$48.00</p>
                      <del>$75.00</del>
                    </div>
                  </div>
                </div>

                <div class="showcase">
                  <div class="showcase-banner">
                    <img
                      src="{{asset('theme/assets/images/real/unnamed%20(2).png')}}"
                      alt="Pure Garment Dyed Cotton Shirt"
                      class="product-img default"
                      width="300"
                    />
                    <img
                      src="{{asset('theme/assets/images/real/unnamed%20(2)%20(1).png')}}"
                      alt="Pure Garment Dyed Cotton Shirt"
                      class="product-img hover"
                      width="300"
                    />

                    <p class="showcase-badge angle black">sale</p>

                    <div class="showcase-actions">
                      <button class="btn-action">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="bag-add-outline"></ion-icon>
                      </button>
                    </div>
                  </div>

                  <div class="showcase-content">
                    <a href="#" class="showcase-category">Pine</a>

                    <h3>
                      <a href="#" class="showcase-title"
                        >PROSPECT ASH WIRE-BRUSHED SOLID HARDWOOD</a
                      >
                    </h3>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <p class="price">$45.00</p>
                      <del>$56.00</del>
                    </div>
                  </div>
                </div>

                <div class="showcase">
                  <div class="showcase-banner">
                    <img
                      src="{{asset('theme/assets/images/real/unnamed%20(3).png')}}"
                      alt="MEN Yarn Fleece Full-Zip Jacket"
                      class="product-img default"
                      width="300"
                    />
                    <img
                      src="{{asset('theme/assets/images/real/unnamed%20(3).png')}}"
                      alt="MEN Yarn Fleece Full-Zip Jacket"
                      class="product-img hover"
                      width="300"
                    />

                    <div class="showcase-actions">
                      <button class="btn-action">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="bag-add-outline"></ion-icon>
                      </button>
                    </div>
                  </div>

                  <div class="showcase-content">
                    <a href="#" class="showcase-category">Hickory</a>

                    <h3>
                      <a href="#" class="showcase-title"
                        >CHESTNUT HICKORY HAND SCRAPED SOLID HARDWOOD</a
                      >
                    </h3>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <p class="price">$58.00</p>
                      <del>$65.00</del>
                    </div>
                  </div>
                </div>

                <div class="showcase">
                  <div class="showcase-banner">
                    <img
                      src="{{asset('theme/assets/images/real/unnamed%20(4).png')}}"
                      alt="Black Floral Wrap Midi Skirt"
                      class="product-img default"
                      width="300"
                    />
                    <img
                      src="{{asset('theme/assets/images/real/unnamed%20(4).png')}}"
                      alt="Black Floral Wrap Midi Skirt"
                      class="product-img hover"
                      width="300"
                    />

                    <p class="showcase-badge angle pink">new</p>

                    <div class="showcase-actions">
                      <button class="btn-action">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="bag-add-outline"></ion-icon>
                      </button>
                    </div>
                  </div>

                  <div class="showcase-content">
                    <a href="#" class="showcase-category">Oak</a>

                    <h3>
                      <a href="#" class="showcase-title"
                        >Gunstock Select Red Oak High Gloss Smooth Solid
                        Hardwood Sample</a
                      >
                    </h3>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <div class="price-box">
                      <p class="price">$25.00</p>
                      <del>$35.00</del>
                    </div>
                  </div>
                </div>

                <div class="showcase">
                  <div class="showcase-banner">
                    <img
                      src="{{asset('theme/assets/images/real/unnamed%20(4)%20(1).png')}}"
                      alt="Casual Men's Brown shoes"
                      class="product-img default"
                      width="300"
                    />
                    <img
                      src="{{asset('theme/assets/images/real/unnamed%20(4)%20(1).png')}}"
                      alt="Casual Men's Brown shoes"
                      class="product-img hover"
                      width="300"
                    />

                    <div class="showcase-actions">
                      <button class="btn-action">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="bag-add-outline"></ion-icon>
                      </button>
                    </div>
                  </div>

                  <div class="showcase-content">
                    <a href="#" class="showcase-category">Oak</a>

                    <h3>
                      <a href="#" class="showcase-title"
                        >GUNSTOCK RED OAK SMOOTH SOLID HARDWOOD</a
                      >
                    </h3>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <div class="price-box">
                      <p class="price">$99.00</p>
                      <del>$105.00</del>
                    </div>
                  </div>
                </div>

                <div class="showcase">
                  <div class="showcase-banner">
                    <img
                      src="{{asset('theme/assets/images/real/unnamed%20(6)%20(1).png')}}"
                      alt="Pocket Watch Leather Pouch"
                      class="product-img default"
                      width="300"
                    />
                    <img
                      src="{{asset('theme/assets/images/real/unnamed%20(6)%20(1).png')}}"
                      alt="Pocket Watch Leather Pouch"
                      class="product-img hover"
                      width="300"
                    />

                    <p class="showcase-badge angle black">sale</p>

                    <div class="showcase-actions">
                      <button class="btn-action">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="bag-add-outline"></ion-icon>
                      </button>
                    </div>
                  </div>

                  <div class="showcase-content">
                    <a href="#" class="showcase-category">Cherry</a>

                    <h3>
                      <a href="#" class="showcase-title"
                        >RANIA LOCUST DISTRESSED SOLID HARDWOOD</a
                      >
                    </h3>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <p class="price">$150.00</p>
                      <del>$170.00</del>
                    </div>
                  </div>
                </div>

                <div class="showcase">
                  <div class="showcase-banner">
                    <img
                      src="{{asset('theme/assets/images/real/unnamed%20(6).png')}}"
                      alt="Smart watche Vital Plus"
                      class="product-img default"
                      width="300"
                    />
                    <img
                      src="{{asset('theme/assets/images/real/unnamed%20(6).png')}}"
                      alt="Smart watche Vital Plus"
                      class="product-img hover"
                      width="300"
                    />

                    <div class="showcase-actions">
                      <button class="btn-action">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="bag-add-outline"></ion-icon>
                      </button>
                    </div>
                  </div>

                  <div class="showcase-content">
                    <a href="#" class="showcase-category">Acacia</a>

                    <h3>
                      <a href="#" class="showcase-title"
                        >MILANA HARD MAPLE SMOOTH SOLID HARDWOOD</a
                      >
                    </h3>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <p class="price">$100.00</p>
                      <del>$120.00</del>
                    </div>
                  </div>
                </div>

                <div class="showcase">
                  <div class="showcase-banner">
                    <img
                      src="{{asset('theme/assets/images/real/unnamed%20(7).png')}}"
                      alt="Womens Party Wear Shoes"
                      class="product-img default"
                      width="300"
                    />
                    <img
                      src="{{asset('theme/assets/images/real/unnamed%20(7).png')}}"
                      alt="Womens Party Wear Shoes"
                      class="product-img hover"
                      width="300"
                    />

                    <p class="showcase-badge angle black">sale</p>

                    <div class="showcase-actions">
                      <button class="btn-action">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="bag-add-outline"></ion-icon>
                      </button>
                    </div>
                  </div>

                  <div class="showcase-content">
                    <a href="#" class="showcase-category">Acacia</a>

                    <h3>
                      <a href="#" class="showcase-title"
                        >BURLYWOOD II LONG LEAF ACACIA DISTRESSED SOLID
                        HARDWOOD</a
                      >
                    </h3>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <p class="price">$25.00</p>
                      <del>$30.00</del>
                    </div>
                  </div>
                </div>

                <div class="showcase">
                  <div class="showcase-banner">
                    <img
                      src="{{asset('theme/assets/images/real/unnamed%20(7)%20(1).png')}}"
                      alt="Mens Winter Leathers Jackets"
                      class="product-img default"
                      width="300"
                    />
                    <img
                      src="{{asset('theme/assets/images/real/unnamed%20(7)%20(1).png')}}"
                      alt="Mens Winter Leathers Jackets"
                      class="product-img hover"
                      width="300"
                    />

                    <div class="showcase-actions">
                      <button class="btn-action">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="bag-add-outline"></ion-icon>
                      </button>
                    </div>
                  </div>

                  <div class="showcase-content">
                    <a href="#" class="showcase-category">Oak</a>

                    <h3>
                      <a href="#" class="showcase-title"
                        >GUNSTOCK RED OAK SMOOTH SOLID HARDWOOD</a
                      >
                    </h3>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <p class="price">$32.00</p>
                      <del>$45.00</del>
                    </div>
                  </div>
                </div>

                <div class="showcase">
                  <div class="showcase-banner">
                    <img
                      src="{{asset('theme/assets/images/real/unnamed%20(8).png')}}"
                      alt="Trekking & Running Shoes - black"
                      class="product-img default"
                      width="300"
                    />
                    <img
                      src="{{asset('theme/assets/images/real/unnamed%20(8).png')}}"
                      alt="Trekking & Running Shoes - black"
                      class="product-img hover"
                      width="300"
                    />

                    <p class="showcase-badge angle black">sale</p>

                    <div class="showcase-actions">
                      <button class="btn-action">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="bag-add-outline"></ion-icon>
                      </button>
                    </div>
                  </div>

                  <div class="showcase-content">
                    <a href="#" class="showcase-category">Oak</a>

                    <h3>
                      <a href="#" class="showcase-title"
                        >RIVERS EDGE WHITE OAK SMOOTH SOLID HARDWOOD</a
                      >
                    </h3>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <p class="price">$58.00</p>
                      <del>$64.00</del>
                    </div>
                  </div>
                </div>

                <div class="showcase">
                  <div class="showcase-banner">
                    <img
                      src="{{asset('theme/assets/images/real/unnamed%20(9).png')}}"
                      alt="Men's Leather Formal Wear shoes"
                      class="product-img default"
                      width="300"
                    />
                    <img
                      src="{{asset('theme/assets/images/real/unnamed%20(9).png')}}"
                      alt="Men's Leather Formal Wear shoes"
                      class="product-img hover"
                      width="300"
                    />

                    <div class="showcase-actions">
                      <button class="btn-action">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="bag-add-outline"></ion-icon>
                      </button>
                    </div>
                  </div>

                  <div class="showcase-content">
                    <a href="#" class="showcase-category">Parquet</a>

                    <h3>
                      <a href="#" class="showcase-title"
                        >PROSPECT ASH HERRINGBONE WIRE BRUSHED SOLID
                        HARDWOOD</a
                      >
                    </h3>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <p class="price">$50.00</p>
                      <del>$65.00</del>
                    </div>
                  </div>
                </div>

                <div class="showcase">
                  <div class="showcase-banner">
                    <img
                      src="{{asset('theme/assets/images/real/unnamed%20(10).png')}}"
                      alt="Better Basics French Terry Sweatshorts"
                      class="product-img default"
                      width="300"
                    />
                    <img
                      src="{{asset('theme/assets/images/real/unnamed%20(10).png')}}"
                      alt="Better Basics French Terry Sweatshorts"
                      class="product-img hover"
                      width="300"
                    />

                    <p class="showcase-badge angle black">sale</p>

                    <div class="showcase-actions">
                      <button class="btn-action">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="bag-add-outline"></ion-icon>
                      </button>
                    </div>
                  </div>

                  <div class="showcase-content">
                    <a href="#" class="showcase-category">Oak</a>

                    <h3>
                      <a href="#" class="showcase-title"
                        >NATURAL WHITE OAK SMOOTH SOLID HARDWOOD</a
                      >
                    </h3>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <p class="price">$78.00</p>
                      <del>$85.00</del>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--
    - TESTIMONIALS, CTA & SERVICE
  -->

      <div>
        <div class="container">
          <div class="testimonials-box">
            <!--
          - TESTIMONIALS
        -->

            <div class="testimonial">
              <h2 class="title">testimonial</h2>

              <div class="testimonial-card">
                <img
                  src="{{asset('theme/assets/images/testimonial-1.jpg')}}"
                  alt="alan doe"
                  class="testimonial-banner"
                  width="80"
                  height="80"
                />

                <p class="testimonial-name">Alan Doe</p>

                <p class="testimonial-title">CEO & Founder Invision</p>

                <img
                  src="{{asset('theme/assets/images/icons/quotes.svg')}}"
                  alt="quotation"
                  class="quotation-img"
                  width="26"
                />

                <p class="testimonial-desc">
                  Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor
                  dolor sit amet.
                </p>
              </div>
            </div>

            <!--
          - CTA
        -->

            <div class="cta-container">
              <img
                src="{{asset('theme/assets/images/real/IM1993_01-422x403.jpg')}}"
                alt="summer collection"
                class="cta-banner"
              />

              <a href="#" class="cta-content">
                <p class="discount">25% Discount</p>

                <h2 class="cta-title">Summer collection</h2>

                <p class="cta-text">Starting @ $10</p>

                <button class="cta-btn">Shop now</button>
              </a>
            </div>

            <!--
          - SERVICE
        -->

            <div class="service">
              <h2 class="title">Our Services</h2>

              <div class="service-container">
                <a href="#" class="service-item">
                  <div class="service-icon">
                    <ion-icon name="boat-outline"></ion-icon>
                  </div>

                  <div class="service-content">
                    <h3 class="service-title">Worldwide Delivery</h3>
                    <p class="service-desc">For Order Over $100</p>
                  </div>
                </a>

                <a href="#" class="service-item">
                  <div class="service-icon">
                    <ion-icon name="rocket-outline"></ion-icon>
                  </div>

                  <div class="service-content">
                    <h3 class="service-title">Next Day delivery</h3>
                    <p class="service-desc">UK Orders Only</p>
                  </div>
                </a>

                <a href="#" class="service-item">
                  <div class="service-icon">
                    <ion-icon name="call-outline"></ion-icon>
                  </div>

                  <div class="service-content">
                    <h3 class="service-title">Best Online Support</h3>
                    <p class="service-desc">Hours: 8AM - 11PM</p>
                  </div>
                </a>

                <a href="#" class="service-item">
                  <div class="service-icon">
                    <ion-icon name="arrow-undo-outline"></ion-icon>
                  </div>

                  <div class="service-content">
                    <h3 class="service-title">Return Policy</h3>
                    <p class="service-desc">Easy & Free Return</p>
                  </div>
                </a>

                <a href="#" class="service-item">
                  <div class="service-icon">
                    <ion-icon name="ticket-outline"></ion-icon>
                  </div>

                  <div class="service-content">
                    <h3 class="service-title">30% money back</h3>
                    <p class="service-desc">For Order Over $100</p>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </main>

@endsection
