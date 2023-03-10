@extends('front.master')

@section('content')

     <!-- subheader -->
     <section id="subheader">
        <div class="container-fluid m-5-hor">
          <div class="row">
            <div class="col-md-12">
              <h1 class="big-heading">
                Detail Gallery
              </h1>
              <p>Varius blandit sit amet</p>
            </div>
        </div>
       </div>
      </section>
      <!-- subheader end -->


      <!-- section -->
      <section aria-label="section-blog" id="content">
        <div class="container-fluid">
          <div class="row">

      <div class="v-align">
      <div class="col-md-11 col-xs-12">
      <div class="row">

        <!-- left content -->
        <div class="col-md-8">

        <!-- detail img -->
         <div id="projectsBig" class="owl-carousel">
          <div class="item"><img alt="#" src="{{asset('theme/img/projects-w/projects-detail/fullimage1.jpg')}}"></div>
          <div class="item"><img alt="#" src="{{asset('theme/img/projects-w/projects-detail/fullimage2.jpg')}}"></div>
          <div class="item"><img alt="#" src="{{asset('theme/img/projects-w/projects-detail/fullimage3.jpg')}}"></div>
          <div class="item"><img alt="#" src="{{asset('theme/img/projects-w/projects-detail/fullimage1.jpg')}}"></div>
          <div class="item"><img alt="#" src="{{asset('theme/img/projects-w/projects-detail/fullimage2.jpg')}}"></div>
         </div>
        <!-- detail img end -->

          <div class="grid-item">
          <!-- text detail -->
           <h3 class="big-heading">The Landscape Gallery</h3>
           <p class="intro">Sed do eiusmod tempor incididunt ut labore et dolore magnaaliqua. Ut enim ad minim veniam, quis nstrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. eiusmod tempor incididunt ut labore et dolore magnaaliqua. Ut enim ad minim veniam, quis nstrud exercitation ullamco laboris nisi ut.
           </p>
           <p class="content">incididunt ut labore et dolore magnaaliqua. Ut enim ad minim veniam, quis nstrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. eiusmod tempor incididunt ut labore et dolore magnaaliqua. Ut enim ad minim veniam, quis nstrud exercitation ullamco laboris nisi ut.
           </p>
          <!-- text detail end -->
          </div>

          <div class="grid-item">
          <img alt="#" class="img-responsive" src="{{asset('theme/img/projects-w/projects-detail/fullimage2.jpg')}}">
          <!-- text detail -->
           <h3 class="big-heading">Blue Ocean Australia</h3>
           <p class="content">Sed do eiusmod tempor incididunt ut labore et dolore magnaaliqua. Ut enim ad minim veniam, quis nstrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat.
           </p>
          <!-- text detail end -->
          </div>

          </div>
          <!-- left content end -->

            <!-- right content -->
            <div class="col-md-4">
              <aside>

                <!-- widget -->
                <div class="widget">
                <div class="service-hotel onStep animated fadeInUp" data-animation="fadeInUp" data-time="1200">
                  <div class="price">$900<sub>/ night</sub></div>
                  <p>Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>

                  <!-- spacer -->
                  <div class="space-half"></div>

                  <h3 class="big-heading">Facilities Services</h3>
                  <div class="devider-rooms-detail"></div>
                  <span><i class="ti-check-box"></i> Double Bed</span>
                  <span><i class="ti-check-box"></i> Privacy Beach</span>
                  <span><i class="ti-check-box"></i> Breakfast Include</span>
                  <span><i class="ti-check-box"></i> Private Balcony</span>
                  <span><i class="ti-check-box"></i> Free Wi-Fi</span>
                  <span><i class="ti-check-box"></i> 4 Persons</span>
                </div>
                <a class="btn-book" href="ecommerce-form.html">BOOK NOW</a>
                </div>
                <!-- widget end -->


                <!-- widget -->
                <div class="widget">
                  <h4 class="big-heading">
                    Tags
                  </h4>

                  <div class="devider-widget">
                  </div>

                  <div class="tags">
                    <div>
                      <a href="#">Photography</a>
                    </div>

                    <div>
                      <a href="#">Trends</a>
                    </div>

                    <div>
                      <a href="#">Interactive</a>
                    </div>

                    <div>
                      <a href="#">Personal</a>
                    </div>

                    <div>
                      <a href="#">Responsive</a>
                    </div>

                    <div>
                      <a href="#">Creative</a>
                    </div>

                    <div>
                      <a href="#">Design</a>
                    </div>

                    <div>
                      <a href="#">website</a>
                    </div>

                    <div>
                      <a href="#">application</a>
                    </div>
                  </div>
                </div>
                <!-- widget end -->

              </aside>
            </div>
            <!-- right content end -->

        <!-- spacer -->
        <div class="space-double"></div>

        <!-- button projects -->
        <div class="col-md-6">
        <div class="pro-btn left">
        <a class="link"  href="#">
        <i class='fa fa-long-arrow-left'></i> PREV GALLERY
        </a>
        </div>
        </div>
        <div class="col-md-6">
        <div class="pro-btn right">
        <a class="link"  href="#">
        NEXT GALLERY <i class='fa fa-long-arrow-right'></i>
        </a>
        </div>
        </div>
        <!-- button projects end -->

           </div>
           </div>
           </div>

          </div>
        </div>
      </section>
      <!-- section end -->

@endsection
