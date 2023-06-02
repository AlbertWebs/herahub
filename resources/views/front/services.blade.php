@extends('front.master')

@section('content')
@foreach ($Services as $Service)



      <!-- subheader -->
      <section id="subheader">
        <div class="container-fluid m-5-hor">
          <div class="row">
            <div class="col-md-12">
              <h1 class="big-heading">
                {{$Service->title}}
              </h1>
              <p style="max-width:800px;">{{$Service->meta}}</p>
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
                  <img alt="imgservices" class="img-responsive" src="{{url('/')}}/uploads/services/{{$Service->image}}">
                  <h2 class="big-heading">
                     <span class="color">{{$Service->title}}</span>
                  </h2>

                  <p>
                    <blockquote>
                        {!!html_entity_decode($Service->meta)!!}
                      </blockquote>
                  </p>

                  <p>
                    {!!html_entity_decode($Service->content)!!}
                  </p>
                </div>

              </div>
            </div>

            <div class="col-md-3 onStep" data-animation="fadeInUp" data-time="600">
              <div class="widget">
                <ul id="services-list">
                  <?php
                     $Other = DB::table('services')->get();
                  ?>
                  @foreach ($Other as $other)
                    @if($Service->id == $other->id)

                    @else
                    <li>
                        <a href="{{url('/services')}}/{{$other->slung}}">{{$other->title}}</a>
                    </li>
                    @endif
                  @endforeach
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
                    <span class="shine"></span><a class="link-class" href="#">Go</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- services end -->
@endforeach
@endsection
