@extends('front.master')

@section('content')


      <!-- subheader -->
      <section id="subheader">
        <div class="container-fluid m-5-hor">
          <div class="row">
            <div class="col-md-12">
              <h1 class="big-heading">
                Our Service
              </h1>
              <p>Varius blandit sit amet</p>
            </div>
        </div>
       </div>
      </section>
      <!-- subheader end -->

      <!-- services -->
      <section class="services whitepage">
        <div class="container-fluid m-5-hor">
          <div class="row">
            <div class="col-md-9">
              <div class="row">
                <div class="col-md-12 onStep" data-animation="fadeInUp" data-time="300">
                  <img alt="imgservices" class="img-responsive" src="{{asset('theme/img/serv.jpg')}}">
                  <h2 class="big-heading">
                    Blue Ocean <span class="color">Island</span>
                  </h2>

                  <p>
                    <em>An international firm of architects, planners and interior designers specialising in a wide range of commercial, residential and public sector projects.</em>
                  </p>

                  <p>
                   Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting
                  </p>
                </div>

                <div class="col-md-12">
                  <blockquote>
                    Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec
                    elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.
                  </blockquote>
                </div>

                <div class="col-md-12">
                  <p>
                    Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Aenean eu leo quam.
                  </p>
                </div>
              </div>
            </div>

            <div class="col-md-3 onStep" data-animation="fadeInUp" data-time="600">
              <div class="widget">
                <ul id="services-list">
                  <li>
                    <a href="#">Luxury Asia Travel</a>
                  </li>

                  <li class="active">
                    <a href="#">Blue Ocean Island</a>
                  </li>

                  <li>
                    <a href="#">Wild Tour</a>
                  </li>

                  <li>
                    <a href="#">The Kingdom of West</a>
                  </li>

                  <li>
                    <a href="#">An Asian Temple</a>
                  </li>
                </ul>
              </div>

              <div class="widget">
                <div class="download-brochure">
                  <h3 class="big-heading onStep" data-animation="fadeInUp" data-time="0">
                    Get A quote
                  </h3>

                  <p class="onStep" data-animation="fadeInUp" data-time="150">
                    With Experts Advice
                  </p>

                  <div class="btn-download onStep" data-animation="fadeInUp" data-time="300">
                    <span class="shine"></span><a class="link-class" href="#">DOWNLOAD NOW</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- services end -->

@endsection
