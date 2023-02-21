@extends('front.master')

@section('content')

 <!-- home -->
 <div id="home">
    <!-- revolution slider -->
      <section class="no-top no-bottom" aria-label="section-slider">
            <div class="fullwidthbanner-container">
              <div id="revolution-slider-half">
                  <ul>

                      <li data-transition="parallaxtobottom" data-slotamount="10" data-masterspeed="1200" data-delay="5000">
                          <!--  BACKGROUND IMAGE -->
                          <img src="{{asset('theme/images-slider/img-slide-1.jpg')}}" alt="" data-start="0" data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-bgfit="120" data-bgfitend="100" data-bgpositionend="center center"/>
                          <div class="tp-caption slide-big-heading sft"
                              data-x="center"
                              data-y="300"
                              data-speed="800"
                              data-start="400"
                              data-easing="easeInOutExpo"
                              data-endspeed="450">
                              Amazing Diversity on Travel
                          </div>

                          <div class="tp-caption slide-sub-heading sft"
                              data-x="center"
                              data-y="370"
                              data-speed="1000"
                              data-start="800"
                              data-easing="easeOutExpo"
                              data-endspeed="400">
                              For your vacations
                          </div>

                          <div class="tp-caption sfb"
                              data-x="center"
                              data-y="410"
                              data-speed="400"
                              data-start="800"
                              data-easing="easeInOutExpo">
                              <div class="btn-slider"><span class="shine"></span><a href="#" >More Detail</a></div>
                          </div>

                      </li>

                      <li data-transition="parallaxtobottom" data-slotamount="10" data-masterspeed="1200" data-delay="5000">
                          <!--  BACKGROUND IMAGE -->
                          <img src="{{asset('theme/images-slider/img-slide-2.jpg')}}" alt="" data-start="0" data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-bgfit="120" data-bgfitend="100" data-bgpositionend="center center" />
                          <div class="tp-caption slide-big-heading sft"
                              data-x="center"
                              data-y="300"
                              data-speed="800"
                              data-start="400"
                              data-easing="easeInOutExpo"
                              data-endspeed="450">
                              Perfect Place on Vacation
                          </div>

                          <div class="tp-caption slide-sub-heading sft"
                              data-x="center"
                              data-y="370"
                              data-speed="1000"
                              data-start="800"
                              data-easing="easeOutExpo"
                              data-endspeed="400">
                              Asia, Africa, Australia
                          </div>

                          <div class="tp-caption sfb"
                              data-x="center"
                              data-y="410"
                              data-speed="400"
                              data-start="800"
                              data-easing="easeInOutExpo">
                              <div class="btn-slider"><span class="shine"></span><a href="#" >More Detail</a></div>
                          </div>

                      </li>

                      <li data-transition="parallaxtobottom" data-slotamount="10" data-masterspeed="1200" data-delay="5000">
                          <!--  BACKGROUND IMAGE -->
                          <img src="{{asset('theme/images-slider/img-slide-3.jpg')}}" alt="" data-start="0" data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-bgfit="120" data-bgfitend="100" data-bgpositionend="center center" />
                          <div class="tp-caption slide-big-heading sft"
                              data-x="center"
                              data-y="300"
                              data-speed="800"
                              data-start="400"
                              data-easing="easeInOutExpo"
                              data-endspeed="450">
                              The New Adventure Travel
                          </div>

                          <div class="tp-caption slide-sub-heading sft"
                              data-x="center"
                              data-y="370"
                              data-speed="1000"
                              data-start="800"
                              data-easing="easeOutExpo"
                              data-endspeed="400">
                              Discover hidden places in the world
                          </div>

                          <div class="tp-caption sfb"
                              data-x="center"
                              data-y="410"
                              data-speed="400"
                              data-start="800"
                              data-easing="easeInOutExpo">
                              <div class="btn-slider"><span class="shine"></span><a href="#" >More Detail</a></div>
                          </div>

                      </li>

                  </ul>
                  <div class="tp-bannertimer hide"></div>
              </div>
            </div>
      </section>
      <!-- revolution slider end -->

    </div>
<!-- home end -->

    <!--  milestone -->
    <section aria-label="milestone" class="no-top no-bottom color-page hidden-sm hidden-xs">
      <div class="container-fluid m-5-hor">
        <div class="row">

          <div class="col-md-3 onStep" data-animation="fadeInUp" data-time="0">
              <div class="box-icon">
                  <span class="icon-choose fa fa-plane"></span>
                  <div class="text">
                  <h3><span>300+ DESTINATION</span></h3>
                      <p>Sed ut perspiciatis</p>
                </div>
            </div>
          </div>

          <div class="col-md-3 onStep" data-animation="fadeInUp" data-time="150">
              <div class="box-icon">
                  <span class="icon-choose fa fa-credit-card"></span>
                  <div class="text">
                  <h3><span>AFFORDABLE PRICE</span></h3>
                      <p>Sit voluptatem accusantium</p>
                </div>
            </div>
          </div>

          <div class="col-md-3 onStep" data-animation="fadeInUp" data-time="300">
              <div class="box-icon">
                  <span class="icon-choose fa fa-address-book"></span>
                  <div class="text">
                  <h3><span>GREAT CUSTOMERS</span></h3>
                      <p>perspiciatis unde omnis</p>
                </div>
            </div>
          </div>

          <div class="col-md-3 onStep" data-animation="fadeInUp" data-time="450">
              <div class="box-icon">
                  <span class="icon-choose fa fa-handshake-o"></span>
                  <div class="text">
                  <h3><span>TRUSTED & SAFE</span></h3>
                      <p>Accusantium natus</p>
                </div>
            </div>
          </div>

       </div>
      </div>
    </section>
    <!-- milestone end -->

      <!-- section search -->
      <section class="frm-search">
      <div class="container-fluid m-5-hor m-5-hor-dev">
        <div class="row">

          <h2 class="big-heading">Find your adventure with us</h2>

              <form class="form-inline" id="sform">
                <div class="form-group search-icn">
              <label for="key">Keyword</label>
              <input type="text" class="form-control" required="" id="key">
            </div>
                <div class="form-group">
                  <label>Select your trip</label>
                  <select name="select-trip" required="">
                <option value="">Any</option>
                <option value="#">City Travel</option>
                <option value="#">Cultural Travel</option>
                <option value="#">Family Travel</option>
                <option value="#">Holiday Travel</option>
                <option value="#">Luxury Travel</option>
                <option value="#">Wild &amp; Adventure Travel</option>
              </select>
                </div>
                <div class="form-group">
                  <label>Destination</label>
                  <select name="destination" required="">
                <option value="">Any</option>
                <option value="#">Asia</option>
                <option value="#">Africa</option>
                <option value="#">America</option>
                <option value="#">Australia</option>
                <option value="#">Europe</option>
                <option value="#">Rusia</option>
              </select>
                </div>
                <div class="form-group">
                  <label>Duration</label>
                  <select name="duraion" required="">
                <option value="">Any</option>
                <option value="#">1 Day Travel</option>
                <option value="#">2 Days Travel</option>
                <option value="#">3 Days Travel</option>
                <option value="#">4 Days Travel</option>
                <option value="#">5 Days Travel</option>
                <option value="#">1 week Travel</option>
              </select>
                </div>
                <div class="form-group">
              <label>Date</label>
              <div id="filterDate2">
              <!-- Datepicker as text field -->
              <div class="input-group date" data-date-format="dd/mm/yyyy">
                <input type="text" class="form-control" placeholder="dd/mm/yyyy" required="">
                <div class="input-group-addon" >
                  <span class="fa fa-calendar"></span>
                </div>
              </div>
            </div>
            </div>
                <input class="btn-frm-search" value="FIND NOW" type="submit">
              </form>

        </div>
      </div>
      </section>
      <!-- section search end -->

    <!--  top rated -->
    <section aria-label="top-rated">
           <div class="container-fluid m-5-hor">
              <div class="row">
                <div class="col-md-6 sp-padding ">
                  <img alt="top-rated" class="img-responsive" src="{{asset('theme/img/img-top-rated.jpg')}}">
                </div>
                <div class="col-md-6 p-30">
                  <h3 class="big-heading">Top Rated Our Tours</h3>
                  <span class="sub-heading-content">No mei consectetuer</span>
                  <span class="devider-left"></span>
                  <p>Qui ut ceteros comprehensam. Cu eos sale  sanctus eligendi, id ius elitr saperet,ocurreret  pertinacia pri an. No mei nibh consectetuer</p>
                  <div id="tag-country">
                    <a href="#" class="list-country">
                      Europe <sup>(40)tours</sup>
                    </a>
                    <a href="#" class="list-country">
                      Australia <sup>(40)tours</sup>
                    </a>
                    <a href="#" class="list-country">
                      America <sup>(40)tours</sup>
                    </a>
                    <a href="#" class="list-country">
                      Asia <sup>(40)tours</sup>
                    </a>
                    <a href="#" class="list-country">
                      Africa <sup>(40)tours</sup>
                    </a>
                    <a href="#" class="list-country">
                      Japan <sup>(40)tours</sup>
                    </a>
                    <a href="#" class="list-country">
                      Rusian <sup>(40)tours</sup>
                    </a>
                  </div>
                  <a href="#" class="btn-content">
                      ALL DESTINATION
                    </a>
                </div>
              </div>
           </div>
    </section>
    <!--  top rated end -->

    <!-- section features -->
    <section class="whitepage no-bottom no-top no-padding">
      <div class="container-fluid">
        <div class="row">

          <div class="no-gutter">

              <div class="col-md-4">
               <div class="features no-margin">
               <div class="bg-img">
               <h3 class="big-heading">ASIA <sup class="subtour">7 Tours</sup></h3>
               <p class="content">Qui ut ceteros comprehensam. Cu eos sale
          sanctus eligendi, id ius elitr saperet,ocurreret
          pertinacia pri an. No mei nibh consectetuer</p>
               <a href="#"><span class="shine"></span>View More</a>
               </div>
               </div>
              </div>

              <div class="col-md-4">
               <div class="features no-margin">
               <div class="bg-img-1">
               <h3 class="big-heading">EUROPE <sup class="subtour">9 Tours</sup></h3>
               <p class="content">Qui ut ceteros comprehensam. Cu eos sale
          sanctus eligendi, id ius elitr saperet,ocurreret
          pertinacia pri an. No mei nibh consectetuer</p>
               <a href="#"><span class="shine"></span>View More</a>
               </div>
               </div>
              </div>

              <div class="col-md-4">
               <div class="features no-margin">
               <div class="bg-img-2">
               <h3 class="big-heading">AFRICA <sup class="subtour">12 Tours</sup></h3>
               <p class="content">Qui ut ceteros comprehensam. Cu eos sale
          sanctus eligendi, id ius elitr saperet,ocurreret
          pertinacia pri an. No mei nibh consectetuer</p>
               <a href="#"><span class="shine"></span>View More</a>
               </div>
               </div>
              </div>

          </div>

         </div>
        </div>
    </section>
    <!-- section features end -->

    <!-- testimony -->
    <section id="testimony" class="color-page no-padding">
       <div class="container-fluid">
          <div class="row">

           <div class="image-container autoheight col-lg-6 pull-right hidden-md hidden-sm hidden-xs onStep" data-animation="fadeInRight" data-time="300"></div>

            <div class="col-lg-6 col-md-12 autoheight">

              <div class="p-90">
              <div id="owl-testimonial" class="owl-carousel owl-theme">

                          <div class="item">
                              <blockquote>
                               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                <small>Someone famous in <cite title="Source Title" class="color">Source Title</cite></small>
                              </blockquote>
                              <img alt="imagetesti" class="tal" src="{{asset('theme/img/img-testi-1.png')}}">
                              <h3>Emma Watson</h3>
                          </div>

                          <div class="item">
                              <blockquote>
                               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                <small>Someone famous in <cite title="Source Title" class="color">Source Title</cite></small>
                              </blockquote>
                              <img alt="imagetesti" class="tal" src="{{asset('theme/img/img-testi-1.png')}}">
                              <h3>Emma Watson</h3>
                          </div>

                          <div class="item">
                              <blockquote>
                               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                <small>Someone famous in <cite title="Source Title" class="color">Source Title</cite></small>
                              </blockquote>
                              <img alt="imagetesti" class="tal" src="{{asset('theme/img/img-testi-1.png')}}">
                              <h3>Emma Watson</h3>
                          </div>
              </div>
              </div>
             </div>



          </div>
          </div>
     </section>
     <!-- testimony end -->

    <!--  gallery home -->
    <section aria-label="gallery">
      <div class="container-fluid m-5-hor">
        <div class="row">

         </div>
        </div>

       <div class="onStep" data-animation="fadeInUp" data-time="0">
       <div id="owl-gal" class="owl-carousel">

                   <div class="item">
                    <div class="gal-home">
                      <a href="projects-detail.html">
                      <div class="hovereffect">
                        <img alt="imageportofolio" class="img-responsive" src="{{asset('theme/img/gallery-home/img1.jpg')}}">
                      </div>
                      <div class="gal-home-content">
                        <div class="row">
                             <div class="col-md-9">
                              <h4>Blue Ocean Island</h4>
                              <p>Duration 5 days</p>
                              <div class="star-content">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                               </div>
                               <div class="review-cont big-heading">1 Reviews</div>
                             </div>
                             <div class="col-md-3">
                              <div class="heading-price">From</div>
                              <div class="price big-heading">$ 1200</div>
                             </div>
                       </div>
                      </div>
                      </a>
                    </div>
                    </div>

                    <div class="item">
                    <div class="gal-home">
                      <a href="projects-detail.html">
                      <div class="hovereffect">
                        <img alt="imageportofolio" class="img-responsive" src="{{asset('theme/img/gallery-home/img2.jpg')}}">
                      </div>
                      <div class="gal-home-content">
                        <div class="row">
                             <div class="col-md-9">
                              <h4>Luxury Asia Travel</h4>
                              <p>Duration 5 days</p>
                              <div class="star-content">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                               </div>
                               <div class="review-cont big-heading">1 Reviews</div>
                             </div>
                             <div class="col-md-3">
                              <div class="heading-price">From</div>
                              <div class="price big-heading">$ 1200</div>
                             </div>
                       </div>
                      </div>
                      </a>
                    </div>
                    </div>

                    <div class="item">
                    <div class="gal-home">
                      <a href="projects-detail.html">
                      <div class="hovereffect">
                        <img alt="imageportofolio" class="img-responsive" src="{{asset('theme/img/gallery-home/img3.jpg')}}">
                      </div>
                      <div class="gal-home-content">
                        <div class="row">
                             <div class="col-md-9">
                              <h4>Wild Tour Africa</h4>
                              <p>Duration 5 days</p>
                              <div class="star-content">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                               </div>
                               <div class="review-cont big-heading">1 Reviews</div>
                             </div>
                             <div class="col-md-3">
                              <div class="heading-price">From</div>
                              <div class="price big-heading">$ 1200</div>
                             </div>
                       </div>
                      </div>
                      </a>
                    </div>
                    </div>

                    <div class="item">
                    <div class="gal-home">
                      <a href="projects-detail.html">
                      <div class="hovereffect">
                        <img alt="imageportofolio" class="img-responsive" src="{{asset('theme/img/gallery-home/img4.jpg')}}">
                      </div>
                      <div class="gal-home-content">
                        <div class="row">
                             <div class="col-md-9">
                              <h4>Amazing Diversity Place</h4>
                              <p>Duration 5 days</p>
                              <div class="star-content">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                               </div>
                               <div class="review-cont big-heading">1 Reviews</div>
                             </div>
                             <div class="col-md-3">
                              <div class="heading-price">From</div>
                              <div class="price big-heading">$ 1200</div>
                             </div>
                       </div>
                      </div>
                      </a>
                    </div>
                    </div>

                    <div class="item">
                    <div class="gal-home">
                      <a href="projects-detail.html">
                      <div class="hovereffect">
                        <img alt="imageportofolio" class="img-responsive" src="{{asset('theme/img/gallery-home/img5.jpg')}}">
                      </div>
                      <div class="gal-home-content">
                        <div class="row">
                             <div class="col-md-9">
                              <h4>The Kingdom of West</h4>
                              <p>Duration 5 days</p>
                              <div class="star-content">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                               </div>
                               <div class="review-cont big-heading">1 Reviews</div>
                             </div>
                             <div class="col-md-3">
                              <div class="heading-price">From</div>
                              <div class="price big-heading">$ 1200</div>
                             </div>
                       </div>
                      </div>
                      </a>
                    </div>
                    </div>

                    <div class="item">
                    <div class="gal-home">
                      <a href="projects-detail.html">
                      <div class="hovereffect">
                        <img alt="imageportofolio" class="img-responsive" src="{{asset('theme/img/gallery-home/img6.jpg')}}">
                      </div>
                      <div class="gal-home-content">
                        <div class="row">
                             <div class="col-md-9">
                              <h4>An Asian Temple</h4>
                              <p>Duration 5 days</p>
                              <div class="star-content">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                               </div>
                               <div class="review-cont big-heading">1 Reviews</div>
                             </div>
                             <div class="col-md-3">
                              <div class="heading-price">From</div>
                              <div class="price big-heading">$ 1200</div>
                             </div>
                       </div>
                      </div>
                      </a>
                    </div>
                    </div>

       </div>
       </div>
    </section>
    <!--  gallery home end -->

@endsection
