@extends('front.master')

@section('content')

<main>
    <div class="container">
      <!-- about section -->
      <section class="about_section">
        <div class="container">
          <h1 class='container_gallery_header'>Decomagna gallery</h1>
          <div class="containeryy">
              @foreach ($Portfolio as $Por)
              <div class="gallery-container w h">
                <div class="gallery-item">
                  <div class="image">
                    <img src="{{url('/')}}/uploads/portfolios/{{$Por->image_one}}" alt="nature">
                  </div>
                  <div class="text">{{$Por->name}}</div>
                </div>
              </div>

              @endforeach

        </div>
      </section>
      <!-- End of about us page -->
    </div>
  </main>

@endsection
