@extends('front.master-category')


@section('content')
@foreach ($Categories as $Category)
 <!-- Breadcrumb -->
<br><br><br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 wow animated fadeInRight">
                <div class="pq-section-title pq-style-1">
                    <h5 class="pq-section-main-title">{{$PageTitle}}</h5>
                </div>
            </div>
            <div class="col-lg-4 wow animated fadeInRight">
                <div class="button-align">
                    <a class="pq-button pq-button-flat" href="{{url('/')}}/products/{{$Category->slung}}">
                        <div class="pq-button-block">
                        <span class="pq-button-text">Explore Options </span>
                        <span class="pq-button-line-right"></span>
                        <i class="ion ion-ios-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="divider pq-right-border pq-45"></div>
            </div>
        </div>
        <div class="row">
            <h5 class="product_version_h3">
                {!!html_entity_decode($Category->meta)!!}
            </h5>
            <br>
            <h6 class="product_version_h3_2">
                {!!html_entity_decode($Category->heading_two)!!}
            </h6>
        </div>
    </div>

<!-- Breadcrumb -->

<!-- About Us -->
    <section class="about-us pq-bg-img-1 py-xl-0 pq-pt-30 pq-pb-30 ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 wow animated fadeInLeft">
                    <div class="pq-contact-imgs">
                        <img  src="{{url('/')}}/uploads/categories/{{$Category->image}}" alt="{{$Category->title}}">
                    </div>
                </div>
                <div class="col-xl-6 mt-4 mt-xl-0 ps-xl-5 pq-pt-30 pq-pb-30   wow animated fadeInRight">
                    <div class="pq-section-title pq-style-1">

                        <h5 class="pq-section-main-titles pq-text-white" style="color:#e4c590 !important"> {!!html_entity_decode($Category->heading_two_section)!!}</h5>
                        <p class="pq-section-description">

                            {!!html_entity_decode($Category->content)!!}
                        </p>
                    </div>

                    <div class="divider pq-my-30"></div>

                </div>
            </div>
        </div>
    </section>


<!-- About Us -->

 <!-- Services -->



  <!-- Flooring -->
  <section class="flooring pq-bg-dark pq-bg-img-2 pq-pb-260">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-8 wow animated fadeInLeft">
                <div class="pq-section-title pq-style-1">
                    <span class="pq-section-sub-title">Portfolio</span>
                    <h5 class="pq-section-main-title pq-text-white">Seen Our Work Yet?</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 wow animated fadeInLeft">
                <div class="button-align">
                    <a class="pq-button pq-button-flat" href="services-1.html">
                        <div class="pq-button-block">
                            <span class="pq-button-text"> Browse Portfolio </span>
                            <span class="pq-button-line-right"></span>
                            <i class="ion ion-ios-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="divider pq-left-border pq-45"></div>
            </div>


        </div>
    </div>
</section>
<!-- Flooring -->
 {{--  --}}

    <!-- Gallery -->
    <div class="gallery">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 pq-mt-130">
                    <div class="pq-me-315 wow animated fadeInRight">
                        <div class="owl-carousel owl-loaded owl-drag" data-dots="false" data-nav="false" data-desk_num="3" data-lap_num="2" data-tab_num="2" data-mob_num="1" data-mob_sm="1" data-autoplay="false" data-loop="true" data-margin="30">
                            <?php
                            $Portfolio = DB::table('portfolios')->limit('6')->get();
                            ?>
                            @foreach ($Portfolio as $Portfolio)
                            <div class="item">
                                <a href="{{url('/')}}/uploads/portfolios/{{$Portfolio->image_one}}">
                                    <img style="width:100%; height:433px;" src="{{url('/')}}/uploads/portfolios/{{$Portfolio->image_one}}" alt="{{$Portfolio->name}}">
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
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
        @foreach ($Extras as $extra)

                <!-- FAQ -->
                <section class="faq">
                    <div class="container">
                        @if($Order % 2 == 0)
                            <div class="row align-items-center">
                                <div class="col-xl-6 pe-xl-90">
                                    <div class="pq-faq-img">
                                        <img src="{{url('/')}}/uploads/extras/{{$extra->image}}" class="img-fluid wow animated fadeInLeft" alt="faq-img">
                                    </div>
                                </div>
                                <div class="col-xl-6 ps-xl-60 mt-4 mt-xl-0 wow animated fadeInRight">
                                    <div class="pq-section-title pq-style-1 pq-mb-30">
                                        @if($Order == "1")
                                            <span class="pq-section-sub-title">WHY YOU WOULD LIKE OUR {{$Category->title}}</span>
                                        @endif
                                        <h5 class="pq-section-main-title">{{$extra->title}}</h5>
                                    </div>
                                    <p>
                                        {!!html_entity_decode($extra->content)!!}
                                    </p>
                                </div>
                            </div>
                        @else
                            <div class="row align-items-center">

                                <div class="col-xl-6 ps-xl-60 mt-4 mt-xl-0 wow animated fadeInRight">
                                    <div class="pq-section-title pq-style-1 pq-mb-30">
                                        @if($Order == "1")
                                        <span class="pq-section-sub-title">WHY YOU WOULD LIKE OUR {{$Category->title}}</span>
                                        @endif
                                        <h5 class="pq-section-main-title">{{$extra->title}}</h5>
                                    </div>
                                    <p>
                                        {!!html_entity_decode($extra->content)!!}
                                    </p>
                                </div>

                                <div class="col-xl-6 pe-xl-90">
                                    <div class="pq-faq-img">
                                        <img src="{{url('/')}}/uploads/extras/{{$extra->image}}" class="img-fluid wow animated fadeInLeft" alt="faq-img">
                                    </div>
                                </div>

                            </div>
                        @endif
                    </div>
                </section>
                <!-- FAQ -->


            <?php $Order = $Order+1; ?>
        @endforeach
    @endif
@endforeach
@endsection
