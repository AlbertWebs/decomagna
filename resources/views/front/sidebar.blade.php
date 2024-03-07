<div class="pq-sidebar-block mCustomScrollbar" data-simplebar>
            <div class="pq-sidebar-header">
               <img src="{{url('/')}}/uploads/logo/decomagna-Logos-Trans-14.jpg" class="pq-sidebar-logo" alt="decomagna-sidebar-logo">
            </div>
            <div class="pq-sidebar-content">
               <p>
                   Decomagna Ltd, the official distributor of Quick-Step flooring in Kenya. We specializing in laminate flooring, engineered wood, and click vinyl, made in Belgum.
               </p>
            </div>
            <div class="pq-sidebars">
               <div class="pq-widget">
                  <div class="wp-block-group">
                     <div class="wp-block-group__inner-container">
                        <h2>Samplea</h2>
                        <div class="row">
                            <?php
                                $Products = DB::table('products')->inRandomOrder()->limit('6')->get();
                            ?>
                            @foreach ($Products as $Pro)
                            <div class="col-lg-4">
                                <img style="width:100%; height:100px; margin-bottom:5px;" src="{{url('/')}}/uploads/products/{{$Pro->image_one}}" alt="">
                             </div>
                            @endforeach
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="pq-sidebar-contact">
               <ul class="pq-contact">
                  <li>
                     <i class="fa fa-map-marker"></i>
                     <span> Tumbili rd. Karen Hardy near the Giraffe Centre off Tumbili rd Navy Blue gate written quick-step , Nairobi, Kenya </span>
                  </li>
                  <li>
                     <a href="tel:+254796110511"><i class="fas fa-phone-alt"></i>
                     <span> +254 79 611 0511</span>
                     </a>
                  </li>
                  <li>
                     <a href="mailto:info@decomagna.com"><i
                        class="fas fa-envelope"></i><span>info@decomagna.com</span>
                     </a>
                  </li>
               </ul>
            </div>
            <div class="pq-sidebar-social">
               <ul>
                  <li><a href="https://www.facebook.com/decomagnaDev/"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="https://www.instagram.com/decomagna_kenya/"><i class="fab fa-instagram"></i></a></li>
                  <li><a href="https://www.instagram.com/decomagna_kenya/"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="https://goo.gl/maps/njDLRodCvupea21D9"><i class="fab fa-map-marker"></i></a></li>
               </ul>
            </div>
         </div>
