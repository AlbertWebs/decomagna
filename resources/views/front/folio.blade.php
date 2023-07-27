@extends('front.master')

@section('content')

  <main style="position: relative; clear:both; padding:100px; background-color: #ffffff !important">
    <div class="">

    @foreach ($Folio as $item)
    <div class="product_version_before_slider" style="background-color: #ffffff !important">
        <div class="product_version_before_slider_left">
            <div class="great_order">
                <div class="slider-container" id="slider1">
                    <div class="slider">
                        <div class="slides">
                            <img src="{{url('/')}}/uploads/portfolios/{{$item->image_one}}" alt="{{$item->name}}" />


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
                {{$item->name}}
            </h3>
            <p class="text-black">
                {!!html_entity_decode($item->content)!!}
            </p>
        </div>
      </div>
    @endforeach
    </div>
  </main>

@endsection
