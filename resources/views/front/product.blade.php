@extends('front.master')

@section('content')
<main>
    <div class="product_version">
        <div class="sing_single_product">
            <div class="bank_man">
                <div class="slider-container" id="slider1">
                    <div class="slider">
                        <div class="slide">
                            <img
                                src="{{asset('version/assets/images/pro.jpg')}}"
                                alt="Image 1"
                            />
                        </div>
                        <div class="slide">
                            <img
                                src="{{asset('version/assets/images/pexels-photo-2549018.jpeg')}}"
                                alt="Image 2"
                            />
                        </div>
                        <div class="slide">
                            <img
                                src="{{asset('version/assets/images/pexels-photo-2549018.jpeg')}}"
                                alt="Image 3"
                            />
                        </div>
                        <!-- Add more slide elements with appropriate images -->
                    </div>

                    <div class="preview">
                        <!-- Preview images will be generated dynamically through JavaScript -->
                    </div>
                </div>
            </div>

            <div class="sing_single_product_overlay">
                <div>
                    <h4>
                        Commercial HDF Embossed Oak V-Grooved Waterproof
                        Laminate Flooring Laminate Flooring
                    </h4>

                    <div>
                        <img src="{{asset('version/assets/images/email.png')}}" alt="" />
                        <h4>Email us: <span>info@decomana.com</span></h4>
                    </div>

                    <div>
                        <img src="{{asset('version/assets/images/rocky.png')}}" alt="" />
                        <h4>Model: E1601</h4>
                    </div>

                    <h4>Product description</h4>
                    <p>•Size: 1215*196*7mm/8mm/10mm/12mm</p>
                    <p>•Suitable for residential and commercial use</p>
                    <p>•Emboss in Register (EIR)</p>
                    <a href="contact.html" alt="">Contact us</a>
                </div>
            </div>
        </div>

        <div class="left_side_bar_products">
            <div class="left_side_bar_products_left">
                <h5>
                    <a href="index.html"> Home </a>
                    <ion-icon name="chevron-forward-outline"></ion-icon>
                    <a href="index.html">Products</a>
                </h5>

                <div class="sidebar">
                    <span>Laminate flooring</span>
                    <ul class="main-list">
                        <li class="nav-item with-submenu">
                            <a href="#">
                                <ion-icon
                                    name="chevron-forward-outline"
                                ></ion-icon>
                                Thickness
                            </a>
                            <ul class="sub-menu">
                                <li><a href="#">7mm</a></li>
                                <li><a href="#">8mm</a></li>
                                <li><a href="#">10mm</a></li>
                                <li><a href="#">12mm</a></li>
                            </ul>
                        </li>

                        <li class="nav-item with-submenu">
                            <a href="#">
                                <ion-icon
                                    name="chevron-forward-outline"
                                ></ion-icon>
                                Color
                            </a>
                            <ul class="sub-menu">
                                <li><a href="#">Color</a></li>
                                <li><a href="#">Style</a></li>
                            </ul>
                        </li>

                        <li class="nav-item with-submenu">
                            <a href="#">
                                <ion-icon
                                    name="chevron-forward-outline"
                                ></ion-icon>
                                Ac
                            </a>
                            <ul class="sub-menu">
                                <li><a href="#">AC1</a></li>
                                <li><a href="#">AC2</a></li>
                                <li><a href="#">AC3</a></li>
                                <li><a href="#">AC4</a></li>
                                <li><a href="#">AC5</a></li>
                                <li><a href="#">AC6</a></li>
                            </ul>
                        </li>
                    </ul>

                    <span>Aqua flooring</span>
                    <ul class="main-list">
                        <li class="nav-item with-submenu">
                            <a href="#">
                                <ion-icon
                                    name="chevron-forward-outline"
                                ></ion-icon>
                                Thickness
                            </a>
                            <ul class="sub-menu">
                                <li><a href="#">7mm</a></li>
                                <li><a href="#">8mm</a></li>
                                <li><a href="#">10mm</a></li>
                                <li><a href="#">12mm</a></li>
                            </ul>
                        </li>

                        <li class="nav-item with-submenu">
                            <a href="#">
                                <ion-icon
                                    name="chevron-forward-outline"
                                ></ion-icon>
                                Color
                            </a>
                            <ul class="sub-menu">
                                <li><a href="#">Color</a></li>
                                <li><a href="#">Style</a></li>
                            </ul>
                        </li>
                    </ul>

                    <span>Spc flooring</span>
                    <ul class="main-list">
                        <li class="nav-item with-submenu">
                            <a href="#">
                                <ion-icon
                                    name="chevron-forward-outline"
                                ></ion-icon>
                                Thickness
                            </a>
                            <ul class="sub-menu">
                                <li><a href="#">7mm</a></li>
                                <li><a href="#">8mm</a></li>
                                <li><a href="#">10mm</a></li>
                                <li><a href="#">12mm</a></li>
                            </ul>
                        </li>

                        <li class="nav-item with-submenu">
                            <a href="#">
                                <ion-icon
                                    name="chevron-forward-outline"
                                ></ion-icon>
                                Color
                            </a>
                            <ul class="sub-menu">
                                <li><a href="#">Color</a></li>
                                <li><a href="#">Style</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="left_side_bar_products_right">
                <h2>Product overview</h2>

                <p>
                    Embossed -In-Register(EIR)is a manufacturing process
                    that intensifies the depth, texture and authentic look
                    of the flooring by an embossment surface which is
                    totally matching the wooden vein of the decoration paper
                    to indulge you in a feeling of real wood. This amazing
                    technology creates an natural and authentic look, and
                    provides increased traction and improved slip
                    resistance. This EIR collection was created based on
                    this point, it gives an ideal choice for those who want
                    their floor to look as close to real wood as possible
                    and looks fantastic.
                </p>

                <h3>Dimension</h3>

                <p>Length</p>

                <div>
                    <div class="diti">
                        <h4>2250mm</h4>
                    </div>
                    <div class="diti">
                        <h4>2250mm</h4>
                    </div>
                    <div class="diti">
                        <h4>2250mm</h4>
                    </div>
                    <div class="diti">
                        <h4>2250mm</h4>
                    </div>
                </div>

                <p>Width(MM)</p>

                <div>
                    <div class="rifi">
                        <h4>240mm</h4>
                    </div>
                    <div class="rifi">
                        <h4>197mm</h4>
                    </div>
                    <div class="rifi">
                        <h4>165mm</h4>
                    </div>
                    <div class="rifi">
                        <h4>145mm</h4>
                    </div>
                    <div class="rifi">
                        <h4>126mm</h4>
                    </div>
                    <div class="rifi">
                        <h4>101mm</h4>
                    </div>
                </div>

                <p>Thickness(MM)</p>

                <div>
                    <div class="diti">
                        <h4>8mm</h4>
                    </div>
                    <div class="diti">
                        <h4>10mm</h4>
                    </div>
                    <div class="diti">
                        <h4>12mm</h4>
                    </div>
                </div>

                <h3>More details</h3>

                <div class="more_diti">
                    <div>
                        <p>COLOR CODE: E1606</p>
                    </div>
                    <div>
                        <p>SURFACE TEXTURE: Emboss in Register(EIR)</p>
                    </div>
                    <div>
                        <p>COLOR/FINISH FAMILY: Yellow</p>
                    </div>
                    <div>
                        <p>COLOR CODE: E1606</p>
                    </div>
                    <div>
                        <p>SURFACE TEXTURE: Emboss in Register(EIR)</p>
                    </div>
                    <div>
                        <p>COLOR/FINISH FAMILY: Yellow</p>
                    </div>
                    <div>
                        <p>COLOR CODE: E1606</p>
                    </div>
                    <div>
                        <p>SURFACE TEXTURE: Emboss in Register(EIR)</p>
                    </div>
                    <div>
                        <p>COLOR/FINISH FAMILY: Yellow</p>
                    </div>
                    <div>
                        <p>COLOR CODE: E1606</p>
                    </div>
                    <div>
                        <p>SURFACE TEXTURE: Emboss in Register(EIR)</p>
                    </div>
                    <div>
                        <p>COLOR/FINISH FAMILY: Yellow</p>
                    </div>
                    <div>
                        <p>COLOR CODE: E1606</p>
                    </div>
                </div>

                <div class="dra_dagger">
                    <div>
                        <div>
                            <img src="{{asset('version/assets/images/kitten.jpg')}}" alt="" />
                        </div>
                        <p>Kid and pet friendly</p>
                    </div>

                    <div>
                        <div>
                            <img src="{{asset('version/assets/images/fade.jpg')}}" alt="" />
                        </div>
                        <p>Fade and stain resistant</p>
                    </div>

                    <div>
                        <div>
                            <img src="{{asset('version/assets/images/green.jpg')}}" alt="" />
                        </div>
                        <p>Green</p>
                    </div>

                    <div>
                        <div>
                            <img src="{{asset('version/assets/images/scratch.jpg')}}" alt="" />
                        </div>
                        <p>Scratch resistant</p>
                    </div>

                    <div>
                        <div>
                            <img
                                src="{{asset('version/assets/images/spillshiel.jpg')}}"
                                alt=""
                            />
                        </div>
                        <p>Spillshiel plus waterproof technology</p>
                    </div>

                    <div>
                        <div>
                            <img src="{{asset('version/assets/images/fire.jpg')}}" alt="" />
                        </div>
                        <p>Fire prevention</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
