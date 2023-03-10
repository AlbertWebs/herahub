@extends('front.master')

@section('content')

   <!-- subheader -->
   <section id="subheader">
    <div class="container-fluid m-5-hor">
      <div class="row">
        <div class="col-md-12">
          <h1 class="big-heading">
            Contact Us
          </h1>
          <p>Varius blandit sit amet</p>
        </div>
    </div>
   </div>
  </section>
  <!-- subheader end -->

          <!-- map -->
          <section aria-label="map" class="no-bottom">
           <div class="container-fluid m-5-hor">
            <div class="row">
             <div class="onStep" data-animation="fadeIn" data-time="300" id="map-1"></div>
            </div>
           </div>
          </section>
          <!-- map end -->

  <!-- section contact -->
  <section aria-label="contact" class="whitepage">
    <div class="container-fluid m-5-hor">
      <div class="row">

        <div class="col-md-8">
            <form id="form-contact1">
                        <div class="form-group user-name">
                            <input type="text" class="form-control" required="" id="name-contact-1" placeholder="Your Name">
                        </div>

                        <div class="form-group user-email">
                            <input type="email" class="form-control" required="" id="email-contact" placeholder="Your Email">
                        </div>

                        <div class="form-group user-message">
                            <textarea class="form-control" required="" id="message-contact" placeholder="Your Message"></textarea>
                            <div class="success" id="mail_success">Thank you. Your message has been sent</div>
                            <div class="error" id="mail_failed">Error, email not sent</div>
                        </div>
                <button type="submit" id="send-contact-1" class="btn-contact">Send Now</button>
            </form>
        </div>

        <!-- address -->
          <div class="col-md-3 col-md-offset-1">
            <h3 class="heading-cont">Contact Information</h3>
              <address class="cont-1">
                <span>
                129 Park street, New York 10903</span>
                <span><strong>PHONE:</strong> (+6221) 000 888 999</span>
                <span><strong>EMAIL:</strong><a href="mailto:companyname@gmail.com"> youremail@gmail.com</a></span>
                <span><strong>WEB:</strong><a href="#"> www.yourdomain.com</a></span>
              </address>
          </div>
          <!-- address end -->


      </div>
    </div>
  </section>
  <!-- section contact end -->

@endsection
