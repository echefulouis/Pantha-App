@extends('site.layouts.frontend')

@section('title')
    PANTHA APP | Contact Us
@endsection

@section('description')
 Become a traveller
@endsection

@section('keywords')
    Easy tranvelling, recommended delivery agencies
@endsection

@section('extrastyle')
<link rel="stylesheet" href="{{asset('assets/styles/contact.css')}}" />
<style>


</style>
@endsection

@section('content')
<!-- content start -->
  <div class="cont-wrapper">
      <!-- banner section -->
      <section class="cont-banner" style="background: linear-gradient( 0deg, rgba(10, 10, 11, 0.52),rgba(10, 10, 11, 0.52)),url({{asset('assets/img/contact-bg.png')}});">
        <div class="container">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="row">
              <div class="text">
                <h2>
                  Let’s talk about your Goods
                </h2>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- card section -->
      <section class="card-disp p-4">
        <div class="cotainer">
          <div class="row">
            <div class="inner-card-cont col-12">
              <div class="row">
                <!-- card 1 -->
                <div class="col-sm-12 col-md-12 col-lg-4">
                  <div class="card mb-3">
                    <div class="card-body text-center">
                      <h5 class="card-title">Admin</h5>
                      <p class="card-text">
                        Suscipit libero pretium nullam potenti. Interdum,
                        blandit phasellus
                      </p>
                      <a href="#" class="card-link">Admin@pantha.com</a>
                    </div>
                  </div>
                </div>
                <!-- card 2 -->
                <div class="col-sm-12 col-md-12 col-lg-4">
                  <div class="card mb-3">
                    <div class="card-body text-center">
                      <h5 class="card-title">Head of Interns</h5>
                      <p class="card-text">
                        Suscipit libero pretium nullam potenti. Interdum,
                        blandit phasellus
                      </p>
                      <a href="#" class="card-link">Admin@pantha.com</a>
                    </div>
                  </div>
                </div>
                <!-- card 3 -->
                <div class="col-sm-12 col-md-12 col-lg-4">
                  <div class="card mb-3">
                    <div class="card-body text-center">
                      <h5 class="card-title">Our Office</h5>
                      <p class="card-text">
                        Opening soon
                      </p>
                      <a href="#" class="card-link">Admin@pantha.com</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="contact-form text-center">
        <div class="container">
          <div class="row">
            <div class="form-wrapper text-center col-sm-12 col-lg-6">
              <h4 class="mt-3">Feel free to say hello!</h4>
              <form class="mt-4 mb-3 p-4">
                <div class="form-group">
                  <input
                    type="text"
                    class="form-control"
                    id="exampleFormControlInput1"
                    placeholder="Your name"
                  />
                </div>
                <div class="form-group">
                  <input
                    type="email"
                    class="form-control"
                    id="exampleFormControlInput1"
                    placeholder="Your Email"
                  />
                </div>
                <div class="form-group">
                  <input
                    type="text"
                    class="form-control"
                    id="exampleFormControlInput1"
                    placeholder="Subject"
                  />
                </div>
                <div class="form-group">
                  <textarea
                    class="form-control"
                    id="exampleFormControlTextarea1"
                    rows="5"
                    placeholder="Message"
                  ></textarea>
                </div>
                <button type="submit" class="btn btn-primary mb-2" id="breath">
                  Send Message
                </button>
              </form>
            </div>
          </div>
        </div>
      </section>
    </div>

<!-- content end -->
@endsection

@section('extrascript')
<script type="text/javascript">
    
</script>
@endsection