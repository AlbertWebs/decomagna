@extends('front.master')

@section('content')
<main>
    <div class="product_version">
        <span class="product_verion_link">
            <a href="index.html"
                >Home <ion-icon name="chevron-forward-outline"></ion-icon
            ></a>
            <a href="index.html">
                Laminate flooring
                <ion-icon name="chevron-forward-outline"></ion-icon
            </a>
            <a href="index.html">7mm Laminate Flooring</a>
        </span>

        <h2 class="product_version_h2">7mm Laminate Flooring</h2>

        <div class="commercial_laminate">
            <div class="">
                <div>
                    <img
                        src="{{asset('version/assets/images/g1.jpg')}}"
                        width="160"
                        height="50"
                        loading="lazy"
                        alt="grilli home"
                    />
                </div>
                <h3>Commercial HDF Embossed Oak V-Grooved Waterproof Laminate Flooring</h3>
                <p>E1606</p>
                <a href="singleproduct.html">More introduction</a>
            </div>
            <div class="">
                <div>
                    <img
                        src="{{asset('version/assets/images/g2.jpg')}}"
                        width="160"
                        height="50"
                        loading="lazy"
                        alt="grilli home"
                    />
                </div>
                <h3>Commercial 8.3mm E0 AC3 Embossed Oak Waterproof</h3>
                <p>E8030</p>
                <a href="singleproduct.html">More introduction</a>
            </div>
            <div class="">
                <div>
                    <img
                        src="{{asset('version/assets/images/g3.jpg')}}"
                        width="160"
                        height="50"
                        loading="lazy"
                        alt="grilli home"
                    />
                </div>
                <h3>12.3mm HDF AC3 Embossed Cherry Waterproof Vinyl Laminate Laminated Flooring</h3>
                <p>E8303</p>
                <a href="singleproduct.html">More introduction</a>
            </div>
            <div class="">
                <div>
                    <img
                        src="{{asset('version/assets/images/pro.jpg')}}"
                        width="160"
                        height="50"
                        loading="lazy"
                        alt="grilli home"
                    />
                </div>
                <h3>Oak laminate flooring</h3>
                <p>E9072</p>
                <a href="singleproduct.html">More introduction</a>
            </div>
            <div class="">
                <div>
                    <img
                        src="{{asset('version/assets/images/g4.jpg')}}"
                        width="160"
                        height="50"
                        loading="lazy"
                        alt="grilli home"
                    />
                </div>
                <h3>V Groove HDF AC4 Imported Paper Vinyl Engineered Wood Wooden Laminated Laminate Flooring</h3>
                <p>E9090</p>
                <a href="singleproduct.html">More introduction</a>
            </div>
            <div class="">
                <div>
                    <img
                        src="{{asset('version/assets/images/g5.png')}}"
                        width="160"
                        height="50"
                        loading="lazy"
                        alt="grilli home"
                    />
                </div>
                <h3>Oak laminate floor</h3>
                <p>E9072</p>
                <a href="singleproduct.html">More introduction</a>
            </div>
            <div class="">
                <div>
                    <img
                        src="{{asset('version/assets/images/g6.jpg')}}"
                        width="160"
                        height="50"
                        loading="lazy"
                        alt="grilli home"
                    />
                </div>
                <h3>HDF waterproof laminate flooring for bathrooms</h3>
                <p>E6072</p>
                <a href="singleproduct.html">More introduction</a>
            </div>
            <div class="">
                <div>
                    <img  src="{{asset('version/assets/images/g7.jpg')}}"
                        width="160"
                        height="50"
                        loading="lazy"
                        alt="grilli home"
                    />
                </div>
                <h3>HDF waterproof laminated floor</h3>
                <p>E9801</p>
                <a href="singleproduct.html">More introduction</a>
            </div>
        </div>

        <div class="preview_laminate_thickness">
            <div class="preview_laminate_thickness_left">
                <h3>The Laminate Thicknesses</h3>
                <p>
                    The laminate has different thicknesses, ranging from 7mm
                    to 12mm, and usually the thicker the laminate, the more
                    likely you are to hear natural wood under your feet.
                </p>

                <div>
                    <button>More Thickness Introduction</button>
                    <button>Get Free Sample</button>
                </div>
            </div>
            <div class="preview_laminate_thickness_right">
                <div class="preview_laminate_thickness_right_div may">
                    <img src="{{asset('version/assets/images/gret.png')}}" alt="Image 3" />
                    <p>7mm</p>
                    <div class="preview_laminate_thickness_right_div_div">
                        <h1>
                            <a href="allproduct.html"
                                ><ion-icon name="eye-outline"></ion-icon
                            ></a>
                        </h1>
                    </div>
                </div>
                <div class="preview_laminate_thickness_right_div may">
                    <img src="{{asset('version/assets/images/gret.png')}}" alt="Image 3" />
                    <p>8mm</p>
                    <div class="preview_laminate_thickness_right_div_div">
                        <h1>
                            <a href="#"
                                ><ion-icon name="eye-outline"></ion-icon
                            ></a>
                        </h1>
                    </div>
                </div>
                <div class="preview_laminate_thickness_right_div may">
                    <img src="{{asset('version/assets/images/gret.png')}}" alt="Image 3" />
                    <p>10mm</p>
                    <div class="preview_laminate_thickness_right_div_div">
                        <h1>
                            <a href="#"
                                ><ion-icon name="eye-outline"></ion-icon
                            ></a>
                        </h1>
                    </div>
                </div>
                <div class="preview_laminate_thickness_right_div may">
                    <img src="{{asset('version/assets/images/gret.png')}}" alt="Image 3" />
                    <p>12mm</p>
                    <div class="preview_laminate_thickness_right_div_div">
                        <h1>
                            <a href="#"
                                ><ion-icon name="eye-outline"></ion-icon
                            ></a>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
