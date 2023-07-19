@extends('front.master')

@section('content')
@foreach ($Categories as $Category)
{{--  --}}
<div class="product_version">
    <span class="product_verion_link">
        <a href="{{url('/')}}"
            >Home <ion-icon name="chevron-forward-outline"></ion-icon
        ></a>

        <a href="{{url('/')}}">{{$Category->title}}</a>
    </span>

    <h2 class="product_version_h2">{{$Category->title}}</h2>

    <h3 class="product_version_h3">
        {!!html_entity_decode($Category->content)!!}
    </h3>
    <h3 class="product_version_h3_2">
        {!!html_entity_decode($Category->heading_two)!!}
    </h3>

    <div class="product_version_div_one">
        <div class="product_version_div_one_left">
            <img src="{{url('/')}}/uploads/categories/{{$Category->image}}" alt="{{$Category->title}}" />
        </div>
        <div class="product_version_div_one_right">
            <div class="product_version_div_one_right_header">
                <img src="{{asset('version/assets/images/rocky.png')}}" alt="" />
                <h3>
                    {!!html_entity_decode($Category->heading_two_section)!!}
                </h3>
            </div>

            <div class="product_version_div_one_right_body">
                <div class="product_version_div_one_right_body_left">
                    <h4>1</h4>
                </div>
                <div class="product_version_div_one_right_body_right">
                    <h4>
                        Melamine Overlay: The overlayer protects the
                        floor from scratches, abrasion and stain, while
                        providing a realistic look and feel to the
                        floor. This is a protective cover for your floor
                        and a waterproof seal prevents water from
                        penetrating and damaging the floor.
                    </h4>
                </div>
            </div>

            <div class="product_version_div_one_right_body">
                <div class="product_version_div_one_right_body_left">
                    <h4>2</h4>
                </div>
                <div class="product_version_div_one_right_body_right">
                    <h4>
                        Decorative Paper: Just below the overlayer, the
                        decorative layer retains the floor pattern or
                        print. This gives your floor an incredibly
                        realistic and beautiful wood or stone look.
                    </h4>
                </div>
            </div>

            <div class="product_version_div_one_right_body">
                <div class="product_version_div_one_right_body_left">
                    <h4>3</h4>
                </div>
                <div class="product_version_div_one_right_body_right">
                    <h4>
                        HDF Core: Below the decorative paper, decides
                        the quality and stability of the floor. Usually
                        made of High Density Fiberboard, this layer is
                        where the waterproof properties work. The
                        fiberboard in a laminate floor may contain more
                        resin, making it less likely to expand in water.
                    </h4>
                </div>
            </div>

            <div class="product_version_div_one_right_body">
                <div class="product_version_div_one_right_body_left">
                    <h4>4</h4>
                </div>
                <div class="product_version_div_one_right_body_right">
                    <h4>
                        Balance Layer: This layer also helps to provide
                        stability to the floor and helps prevent water
                        from penetrating the floor from below. Backing
                        layer is often used to help seal moisture from
                        the subfloor, and you may encounter moisture in
                        the concrete floor or basement, so that each
                        plank is resistant to moisture from above and
                        below.
                    </h4>
                </div>
            </div>
        </div>
    </div>
    <?php
        $Extras = DB::table('extras')->where('category_id',$Category->id)->get();
        $Order = 1;
    ?>
    @if($Extras->isEmpty())

    @else
    <h3 class="product_version_h_link" style="text-transform: uppercase">
        WHY YOU WOULD LIKE OUR {{$Category->title}}
    </h3>

    @foreach ($Extras as $extra)
      @if($Order % 2 == 0)
      <div class="product_version_before_slider" style="background-color: #ffffff !important">
        <div class="product_version_before_slider_left">
            <div class="great_order">
                <div class="slider-container" id="slider1">
                    <div class="slider">
                        <div class="slides">
                            <img
                                src="{{url('/')}}/uploads/extras/{{$extra->image}}"
                                alt="Image 1"
                            />
                        </div>

                        <!-- Add more slide elements with appropriate images -->
                    </div>

                    <div class="preview">
                        <!-- Preview images will be generated dynamically through JavaScript -->
                    </div>
                </div>
            </div>
        </div>
        <div class="product_version_before_slider_right">
            <h3 class="product_version_before_slider_right_h3">
                {{$extra->title}}
            </h3>
            <p class="text-black">
                {!!html_entity_decode($extra->content)!!}
            </p>
        </div>
      </div>
        @else
        <div class="product_version_before_slider" >
            <div class="product_version_before_slider_left">
                <div class="great_order">
                    <div class="slider-container" id="slider1">
                        <div class="slider">
                            <div class="slides">
                                <img
                                    src="{{url('/')}}/uploads/extras/{{$extra->image}}"
                                    alt="Image 1"
                                />
                            </div>

                            <!-- Add more slide elements with appropriate images -->
                        </div>

                        <div class="preview">
                            <!-- Preview images will be generated dynamically through JavaScript -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="product_version_before_slider_right">
                <h3 class="product_version_before_slider_right_h3">
                    {{$extra->title}}
                </h3>
                <p class="text-black">
                    {!!html_entity_decode($extra->content)!!}
                </p>
            </div>
        </div>
        @endif

        <?php $Order = $Order+1; ?>

    @endforeach
    @endif

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
                        <a href="allproduct.html"
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
                        <a href="allproduct.html"
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
                        <a href="allproduct.html"
                            ><ion-icon name="eye-outline"></ion-icon
                        ></a>
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <div class="preview_laminate_thickness">
        <div class="preview_laminate_thickness_left">
            <h3>The AC Rating</h3>
            <p>
                The AC rating represents the wear rating and is the
                number you should pay attention to. The AC value of a
                product reflects its applicability to a particular level
                of traffic, which will help you find the best floor for
                you. The laminate flooring is subject to a series of
                tests to determine the durability of the flooring and
                the appropriate mounting area. The laminate flooring has
                six AC ratings:
            </p>

            <div>
                <button>More AC Introduction</button>
                <button>Get Free Sample</button>
            </div>
        </div>
        <div class="preview_laminate_thickness_right">
            <div class="preview_laminate_thickness_right_div jan">
                <img src="{{asset('version/assets/images/ac1.png')}}" alt="Image 3" />
                <p>Embossed-in-Register (EIR) Collection E8050</p>
                <div class="preview_laminate_thickness_right_div_div">
                    <h1>
                        <a href="#"
                            ><ion-icon name="eye-outline"></ion-icon
                        ></a>
                    </h1>
                </div>
            </div>
            <div class="preview_laminate_thickness_right_div jan">
                <img src="{{asset('version/assets/images/ac2.png')}}" alt="Image 3" />
                <p>Embossed-in-Register (EIR) Collection E8050</p>
                <div class="preview_laminate_thickness_right_div_div">
                    <h1>
                        <a href="allproduct.html"
                            ><ion-icon name="eye-outline"></ion-icon
                        ></a>
                    </h1>
                </div>
            </div>
            <div class="preview_laminate_thickness_right_div jan">
                <img src="{{asset('version/assets/images/ac3.png')}}" alt="Image 3" />
                <p>Embossed-in-Register (EIR) Collection E8050</p>
                <div class="preview_laminate_thickness_right_div_div">
                    <h1>
                        <a href="allproduct.html"
                            ><ion-icon name="eye-outline"></ion-icon
                        ></a>
                    </h1>
                </div>
            </div>
            <div class="preview_laminate_thickness_right_div jan">
                <img src="{{asset('version/assets/images/ac4.png')}}" alt="Image 3" />
                <p>Embossed-in-Register (EIR) Collection E8050</p>
                <div class="preview_laminate_thickness_right_div_div">
                    <h1>
                        <a href="allproduct.html"
                            ><ion-icon name="eye-outline"></ion-icon
                        ></a>
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <div class="wood_color_species">
        <div class="buttons">
            <button class="slider-btn_version" data-slide="slide1">
                Wood color
            </button>
            <button class="slider-btn_version" data-slide="slide2">
                Species
            </button>
        </div>

        <div class="slider-container_version">
            <div class="slider-content_version" id="slide1">
                <div class="slider-content_version_left">
                    <h3>Selection Of Color</h3>
                    <p>
                        We've prepared a variety of color options, and
                        the tan laminate makes your room look bigger and
                        more open. You'll also get that wonderful, rich
                        warmth from slightly darker tones. In addition
                        to looking chic and stylish, the gray laminate
                        sets the tone for a cool modern home.
                    </p>
                </div>
                <div class="slider-content_version_right">
                    <div>
                        <div>
                            <img src="{{asset('version/assets/images/c1.jpg')}}" alt="" />
                        </div>
                        <p>Black</p>
                    </div>
                    <div>
                        <div>
                            <img src="{{asset('version/assets/images/c2.jpg')}}" alt="" />
                        </div>
                        <p>Brown</p>
                    </div>
                    <div>
                        <div>
                            <img src="{{asset('version/assets/images/c3.jpg')}}" alt="" />
                        </div>
                        <p>Golden</p>
                    </div>
                    <div>
                        <div>
                            <img src="{{asset('version/assets/images/c4.jpg')}}" alt="" />
                        </div>
                        <p>Gray</p>
                    </div>
                    <div>
                        <div>
                            <img src="{{asset('version/assets/images/c5.jpg')}}" alt="" />
                        </div>
                        <p>Red</p>
                    </div>
                    <div>
                        <div>
                            <img src="{{asset('version/assets/images/c6.jpg')}}" alt="" />
                        </div>
                        <p>White</p>
                    </div>
                </div>
            </div>
            <div class="slider-content_version hidden" id="slide2">
                <div class="slider-content_version_left">
                    <h3>Selection Of Color</h3>
                    <p>
                        We've prepared a variety of color options, and
                        the tan laminate makes your room look bigger and
                        more open. You'll also get that wonderful, rich
                        warmth from slightly darker tones. In addition
                        to looking chic and stylish, the gray laminate
                        sets the tone for a cool modern home.
                    </p>
                </div>
                <div class="slider-content_version_right">
                    <div>
                        <div>
                            <img src="{{asset('version/assets/images/w1.jpg')}}" alt="" />
                        </div>
                        <p>Acacia</p>
                    </div>
                    <div>
                        <div>
                            <img src="{{asset('version/assets/images/w2.jpg')}}" alt="" />
                        </div>
                        <p>Cherry</p>
                    </div>
                    <div>
                        <div>
                            <img src="{{asset('version/assets/images/w3.jpg')}}" alt="" />
                        </div>
                        <p>Eucalyptus</p>
                    </div>
                    <div>
                        <div>
                            <img src="{{asset('version/assets/images/w10.jpg')}}" alt="" />
                        </div>
                        <p>Hickory</p>
                    </div>
                    <div>
                        <div>
                            <img src="{{asset('version/assets/images/w7.jpg')}}" alt="" />
                        </div>
                        <p>Mahogany</p>
                    </div>
                    <div>
                        <div>
                            <img src="{{asset('version/assets/images/w6.jpg')}}" alt="" />
                        </div>
                        <p>Murple</p>
                    </div>

                    <div>
                        <div>
                            <img src="{{asset('version/assets/images/w8.jpg')}}" alt="" />
                        </div>
                        <p>Oak</p>
                    </div>

                    <div>
                        <div>
                            <img src="{{asset('version/assets/images/w9.jpg')}}" alt="" />
                        </div>
                        <p>Walnut</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="custom_color">
        <div class="custom_color_content">
            <h3>Are you looking for custom colors?</h3>
            <p>
                We're happy to work with your designer to make the right
                color. Send us contact form and we will contact you!
            </p>
            <a href="#">Get Free Sample</a>
        </div>
    </div>

    <div class="real_scene_title">
        <h3>Real Scene</h3>
    </div>

    <div class="real_scene">
        <div>
            <img src="{{asset('version/assets/images/r1.jpg')}}" alt="" />
        </div>
        <div>
            <img src="{{asset('version/assets/images/r2.jpg')}}" alt="" />
        </div>
        <div>
            <img src="{{asset('version/assets/images/r3.jpg')}}" alt="" />
        </div>
        <div>
            <img src="{{asset('version/assets/images/r4.jpg')}}" alt="" />
        </div>
        <div>
            <img src="{{asset('version/assets/images/r5.jpg')}}" alt="" />
        </div>
        <div>
            <img src="{{asset('version/assets/images/r6.jpg')}}" alt="" />
        </div>
    </div>

    <div class="scene-map">
        <div>
            <img src="{{asset('version/assets/images/shipimp.jpg')}}" alt="" />
        </div>
        <div>
            <h3>Ship to anywhere you want</h3>
        </div>
    </div>
</div>
@include('script.map')
<div id="map"></div>
{{--  --}}
@endforeach
@endsection
