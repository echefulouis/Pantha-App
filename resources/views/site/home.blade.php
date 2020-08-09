@extends('site.layouts.frontend')

@section('title')
    PANTHA APP | Pantha Nation Company
@endsection

@section('description')
 Become a traveller
@endsection

@section('keywords')
    Easy tranvelling, recommended delivery agencies
@endsection

@section('extrastyle')
<style>

</style>
@endsection

@section('content')
<!-- content start -->

    <!-- banner section -->

<section class="banner" style="background-image: url({{asset('/frontend/img/banner-bg.png')}});">
  <div class="head-wrap">
    <div cldass="hd-lft">
      <div class="text">
        <h1>
          Limitless<br> Deliveries across Borders
        </h1>
        <p>
          We are Pantha, a peer to peer last mile delivery company using
          technology to connect senders to travellers journeying to a
          destination.
        </p>
        <button class="btn btn-bnr">Sign In</button>
      </div>
    </div>
    <div class="hd-rgt">
      <div class="card text-center">
        <div class="card-header"><span>Sign Up</span></div>
        <div class="card-body">
          <form class="needs-validation" novalidate>
            <div class="form-group text-left">
              <label for="inputFullName">Name</label>
              <input
                type="text"
                class="form-control"
                id="inputFullName"
                placeholder="Full Name"
                required
              />
              <div class="invalid-feedback">
                Please enter your full name.
              </div>
            </div>
            <div class="form-group text-left">
              <label for="inputPassword">Phone Number</label>
              <input
                type="text"
                class="form-control"
                id="inputPassword"
                placeholder="Phone Number"
                required
              />
              <div class="invalid-feedback">
                Please enter your phone number to continue.
              </div>
            </div>
            <div class="form-group text-left">
              <label for="inputEmail pl-5">Email</label>
              <input
                type="email"
                class="form-control"
                id="inputEmail"
                placeholder="Email"
                required
              />
              <div class="invalid-feedback">
                Please enter a valid email address.
              </div>
            </div>

            <button type="submit" class="btn btn-bn-frm" id="glow-btn">Sign Up</button>
          </form>

          <!-- <a href="#" class="btn btn-primary">Know more</a> -->
        </div>
      </div>
    </div>
  </div>
</section>

<!-- How it works -->
<section class="unbaording pt-4">
  <div class="board-wrapper p-3">
    <div class="row">
      <div class="col-12 text-center mb-5 mt-4 show-from-bottom show-on-scroll">
        <h2>How it Works</h2>
      </div>
      <div class="col-sm-12 col-md-8 col-lg-4 text-center mb-5 mt-3 ">
        <img src="{{ asset('frontend/img/box-icon.svg')}}" alt=""  class="show-from-bottom show-on-scroll"/>
        <p class="text show-from-bottom show-on-scroll">
          Transactions is made and carried on one-one basis, with a direct
          contact with the traveller
        </p>
      </div>
      <div class="col-sm-12 col-md-8 col-lg-4 text-center mb-5 mt-3 show-from-bottom show-on-scroll">
        <img src="{{ asset('frontend/img/van-icon.png')}}" alt="" class="show-from-bottom show-on-scroll"/>
        <p class="text show-from-bottom show-on-scroll">
          Travellers recives package and set out to the destination
        </p>
      </div>
      <div class="col-sm-12 col-md-8 col-lg-4 text-center mb-5 mt-3 show-from-bottom show-on-scroll">
        <img src="{{ asset('frontend/img/hand-icon.png')}}" alt="" />
        <p class="text">
          Receiver collects the package and Sign, Traveller receives
          payment.
        </p>
      </div>
    </div>
  </div>
</section>
<!-- Our Mission -->
<section class="mission">
  <div class="row">
    <div class="col-sm-12 col-md-8 col-lg-6 msn-lft" style="background-image: url({{asset('/frontend/img/task.svg')}});"></div>
    <div class="col-sm-12 col-md-8 col-lg-6 msn-rgt">
      <h3 class="text-center">Our Mission</h3>
      <p>
        We are on a mission to disrupt the logistics industry, enable last
        mile delivery & put the ability to make deliveries in the hand of
        the everyday man and not just another established company. We want
        to create another means of income for people to earn with while
        doing what they always did, traveling.
      </p>
    </div>
  </div>
</section>
<!-- features section -->
<section class="features p-5">
  <div class="row">
    <div class="col-sm-12 col-md-8 col-lg-6 ft-lft-tp p-4 mt-1">
      <h3 class="text-left">Reliable Travellers</h3>
      <p>
        We go the extra mile to verify out travellers to confirm their
        trustworthiness and reliability. Every traveller is first a user and
        all our users are family.
      </p>
    </div>
    <div class="col-sm-12 col-md-8 col-lg-6 ft-rgt-tp" style="background-image: url({{asset('/frontend/img/takeout_boxes.svg')}});"></div>
  </div>
  <div class="row">
    <div class="col-sm-12 col-md-8 col-lg-6 ft-lft-btm" style="background-image: url({{asset('/frontend/img/order_delivered.svg')}});"></div>
    <div class="col-sm-12 col-md-8 col-lg-6 ft-rgt-btm p-4" style="background-image: url({{asset('/frontend/img/map.svg')}});" >
      <h3>Care & Real time Tracking</h3>
      <p>
        Everytime you send your package via coureir service or any other
        means you cant be sure how it is taken care of, we offer you real
        time information about the state of your package and its location
        right to its last mile through google map and chats.
      </p>
    </div>
  </div>
</section>
<!-- sign up section -->
<section class="signup p-5 text-center">
  <div class="row">
    <div class="col-12 signup-txt text-center">
      <h3>Sign up for free</h3>
    </div>
  </div>
    <!-- sign up form -->
    <div class="row">
      <div class="col-sm-12 col-md-8 col-lg-8 center">
        <form>
          <div class="form-row">
            <div class="form-group col-sm-10 col-md-12">
              <input
                type="text"
                class="form-control"
                id="inputAddress"
                placeholder="Full Name"
              />
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-sm-10 col-md-6">
              <input
                type="text"
                class="form-control"
                id="inputPassword4"
                placeholder="Phone Number (+234)"
              />
            </div>
            <div class="form-group col-sm-10 col-md-6">
              <input
                type="email"
                class="form-control"
                id="inputEmail4"
                placeholder="Email"
              />
            </div>
          </div>
          <div class="form-row text-center inp-radio">
            <div class="form-group col-sm-10 col-md-10">
              <label class="mr-3">
                <input type="radio" class="mr-1" name="gender" /> Male
              </label>
              <label class="mr-3">
                <input type="radio" class="mr-1" name="gender" /> Female
              </label>
              <label class="mr-3">
                <input type="radio" class="mr-1" name="gender" />Others
              </label>
            </div>
          </div>
          <div class="col-sm-10 col-md-10 text-center">
            <button type="submit" class="btn btn-signup">Sign Up</button>
          </div>
        </form>
      </div>
    </div>
    
  </div>
</section>
<!-- content end -->
@endsection



@section('extrascript')
<script type="text/javascript">
    
</script>
@endsection