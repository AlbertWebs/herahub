@extends('front.master')

@section('content')

  <!-- subheader -->
  <section id="subheader">
    <div class="container-fluid m-5-hor">
      <div class="row">
        <div class="col-md-12">
          <h1 class="big-heading">
            Our Destination
          </h1>
          <p>Varius blandit sit amet</p>
        </div>
    </div>
   </div>
  </section>
  <!-- subheader end -->

  <!-- section -->
  <section aria-label="section-blog" id="content">
    <div class="container-fluid m-5-hor">
      <div class="row">

        <!-- left content -->
        <div class="col-md-3">
            <div class="frm-search" style="background: url('{{asset('theme/img/bg-search-ver.jpg')}}');">
            <div class="container-fluid m-5-hor m-5-hor-dev">
              <div class="row">

                <form class="form-inline" id="sform">
                  <div class="form-group">
                   <h3 class="big-heading">Search Results</h3>
                   <span class="result">9 Results Found</span>
                  </div>
                  <div class="form-group search-icn">
                    <label for="key">Keyword</label>
                    <input type="text" class="form-control" required id="key">
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
                      <input type="text" class="form-control" placeholder="dd/mm/yyyy" required>
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
            </div>
            <!-- section search end -->
        </div>
        <!-- left content end -->

        <!-- right content -->
        <div class="col-md-9">
          <div class="row">

            <div class="col-md-6 col-lg-4">
            <div class="gal-home">
              <a href="projects-detail.html">
              <div class="hovereffect">
                <img alt="imageportofolio" class="img-responsive" src="{{asset('theme/img/gallery-home/img1.jpg')}}">
              </div>
              <div class="gal-home-content">
                <div class="row">
                     <div class="col-md-8">
                      <h4 class="autoheight">Blue Ocean Island</h4>
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
                     <div class="col-md-4">
                      <div class="heading-price">From</div>
                      <div class="price big-heading">$ 1200</div>
                     </div>
               </div>
              </div>
              </a>
            </div>
            </div>

            <div class="col-md-6 col-lg-4">
            <div class="gal-home">
                    <a href="projects-detail.html">
                    <div class="hovereffect">
                      <img alt="imageportofolio" class="img-responsive" src="{{asset('theme/img/gallery-home/img2.jpg')}}">
                    </div>
                    <div class="gal-home-content">
                      <div class="row">
                           <div class="col-md-8">
                            <h4 class="autoheight">Luxury Asia Travel</h4>
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
                           <div class="col-md-4">
                            <div class="heading-price">From</div>
                            <div class="price big-heading">$ 1200</div>
                           </div>
                     </div>
                    </div>
                    </a>
                  </div>
            </div>

            <div class="col-md-6 col-lg-4">
              <div class="gal-home">
                    <a href="projects-detail.html">
                    <div class="hovereffect">
                      <img alt="imageportofolio" class="img-responsive" src="{{asset('theme/img/gallery-home/img3.jpg')}}">
                    </div>
                    <div class="gal-home-content">
                      <div class="row">
                           <div class="col-md-8">
                            <h4 class="autoheight">Wild Tour Africa</h4>
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
                           <div class="col-md-4">
                            <div class="heading-price">From</div>
                            <div class="price big-heading">$ 1200</div>
                           </div>
                     </div>
                    </div>
                    </a>
                  </div>
                 </div>

            <div class="col-md-6 col-lg-4">
            <div class="gal-home">
                    <a href="projects-detail.html">
                    <div class="hovereffect">
                      <img alt="imageportofolio" class="img-responsive" src="{{asset('theme/img/gallery-home/img4.jpg')}}">
                    </div>
                    <div class="gal-home-content">
                      <div class="row">
                           <div class="col-md-8">
                            <h4 class="autoheight">Amazing Diversity Place</h4>
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
                           <div class="col-md-4">
                            <div class="heading-price">From</div>
                            <div class="price big-heading">$ 1200</div>
                           </div>
                     </div>
                    </div>
                    </a>
                  </div>
            </div>

            <div class="col-md-6 col-lg-4">
            <div class="gal-home">
              <a href="projects-detail.html">
              <div class="hovereffect">
                <img alt="imageportofolio" class="img-responsive" src="{{asset('theme/img/gallery-home/img1.jpg')}}">
              </div>
              <div class="gal-home-content">
                <div class="row">
                     <div class="col-md-8">
                      <h4 class="autoheight">Blue Ocean Island</h4>
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
                     <div class="col-md-4">
                      <div class="heading-price">From</div>
                      <div class="price big-heading">$ 1200</div>
                     </div>
               </div>
              </div>
              </a>
            </div>
            </div>

            <div class="col-md-6 col-lg-4">
            <div class="gal-home">
                    <a href="projects-detail.html">
                    <div class="hovereffect">
                      <img alt="imageportofolio" class="img-responsive" src="{{asset('theme/img/gallery-home/img5.jpg')}}">
                    </div>
                    <div class="gal-home-content">
                      <div class="row">
                           <div class="col-md-8">
                            <h4 class="autoheight">The Kingdom of West</h4>
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
                           <div class="col-md-4">
                            <div class="heading-price">From</div>
                            <div class="price big-heading">$ 1200</div>
                           </div>
                     </div>
                    </div>
                    </a>
                  </div>
                 </div>

            <div class="col-md-6 col-lg-4">
            <div class="gal-home">
              <a href="projects-detail.html">
              <div class="hovereffect">
                <img alt="imageportofolio" class="img-responsive" src="{{asset('theme/img/gallery-home/img1.jpg')}}">
              </div>
              <div class="gal-home-content">
                <div class="row">
                     <div class="col-md-8">
                      <h4 class="autoheight">Blue Ocean Island</h4>
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
                     <div class="col-md-4">
                      <div class="heading-price">From</div>
                      <div class="price big-heading">$ 1200</div>
                     </div>
               </div>
              </div>
              </a>
            </div>
            </div>

            <div class="col-md-6 col-lg-4">
            <div class="gal-home">
                    <a href="projects-detail.html">
                    <div class="hovereffect">
                      <img alt="imageportofolio" class="img-responsive" src="{{asset('theme/img/gallery-home/img2.jpg')}}">
                    </div>
                    <div class="gal-home-content">
                      <div class="row">
                           <div class="col-md-8">
                            <h4 class="autoheight">Luxury Asia Travel</h4>
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
                           <div class="col-md-4">
                            <div class="heading-price">From</div>
                            <div class="price big-heading">$ 1200</div>
                           </div>
                     </div>
                    </div>
                    </a>
                  </div>
            </div>

            <div class="col-md-6 col-lg-4">
              <div class="gal-home">
                    <a href="projects-detail.html">
                    <div class="hovereffect">
                      <img alt="imageportofolio" class="img-responsive" src="{{asset('theme/img/gallery-home/img3.jpg')}}">
                    </div>
                    <div class="gal-home-content">
                      <div class="row">
                           <div class="col-md-8">
                            <h4 class="autoheight">Wild Tour Africa</h4>
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
                           <div class="col-md-4">
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
        <!-- right content end -->

      </div>
    </div>
  </section>
  <!-- section end -->




@endsection
