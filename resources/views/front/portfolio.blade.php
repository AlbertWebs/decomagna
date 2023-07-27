@extends('front.master')

@section('content')

<main>
    <div class="container">
      <!-- Gallery -->
      <section class="section menu" aria-label="menu-label" id="menu">
        <h2 class="headline-1 section-title text-center">Our Project Gallery</h2>
        <div class="image-grid">


            <?php
                $Portfolio = DB::table('portfolios')->get();
            ?>
            @foreach ($Portfolio as $Portfolio)
            <div class="image-grid-col-1 image-curve ">
                <div class="containerm">
                    <div class="card">
                        <div class="front">
                            <img class="image-curve"
                                src="{{url('/')}}/uploads/portfolios/{{$Portfolio->image_one}}"
                                alt="{{$Portfolio->name}}" />
                        </div>
                        <div class="back" style="max-height: 100%; overflow:scroll;">
                            <h3 class="text-center"><a href="{{url('/')}}/portfolio/{{$Portfolio->slung}}">{{$Portfolio->name}}</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </section>

      {{--  --}}
    </div>
  </main>

@endsection
