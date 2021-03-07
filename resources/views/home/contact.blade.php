@extends('layouts.app')

@section('content')


<main id="main">
<section id="contact" class="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <div class="section-title">
            <h2>Contact</h2>
            <p>We appreciate your feedback which will surely help us make this web site provide more value able information for you.</p>
          </div>
        </div>

        <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
          <div class="info mt-4">
            <i class="icofont-google-map"></i>
            <h4>Location:</h4>
            <p>{!!__('personal.address')!!}</p>
          </div>
          <div class="row">
            <div class="col-lg-6 mt-4">
              <div class="info">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>{{__('personal.email')}}</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="info w-100 mt-4">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>{{__('personal.phone_number')}}</p>
              </div>
            </div>
          </div>

          <form action="/contact" method="post" role="form" class="php-email-form mt-4">
            @csrf
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validate"></div>
            </div>
            <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>
      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->

@endsection
