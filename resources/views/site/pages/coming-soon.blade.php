<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="{{ asset('assets/fonts/fontawesome/css/font-awesome.min.css')}}"
    />
    <link rel="stylesheet" href="{{ asset('assets/styles/bootstrap-css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/styles/bootstrap-css/animation.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/styles/comingsoon.css')}}" />

    <link rel="stylesheet" href="{{ asset(mix('css/frontend.css')) }}">

    <title>Pantha | Coming Soon</title>
  </head>
  <body>
    <div class="wrap">
      <section>
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-10 col-lg-6 cms-lft">
              <div class="txt">
                <img src="{{ asset('assets/img/newLogo.svg')}}" alt="" />
                <div class="txt-wrap">
                  <h2>Coming Soon!</h2>
                  <h4>Our Product Pantha has two key services :</h4>
                  <p>
                    <span>Peer-to-peer :</span>
                    Empower people to make money while travelling, save people
                    the time & stress they go through to send things to other
                    places through courier services, while also being at peace
                    about the current state of their package all through the
                    jourey via our special features.
                  </p>
                  <p>
                    <span>IntraCity :</span>
                    Enable you find the nearest relaible delivery agency within
                    your city quickly. We are digitalizing the whole experience
                    of finding & sending.
                  </p>
                </div>
                <form action="{{route('subscription')}}" method="POST">
                  @csrf
                  <div class="form-group form-box">
                    <div class="input-group mb-3">
                      <input
                        type="email"
                        required
                        class="form-control"
                        placeholder="Enter Email Address"
                        aria-label="Enter Email Address"
                        aria-describedby="button-addon2"
                        name="email"
                      />
                      <div class="input-group-append">
                        <button class="btn" type="submit" id="button-addon2">
                          Notify Me
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-sm-12 col-md-10 col-lg-6 cms-rgt">
              <div class="cms-rgt-box" style="background-image: url({{asset('/assets/img/under_construction.svg')}});"></div>
              <div id="clockdiv">
                <div>
                  <span class="days" id="day"></span>
                  <span class="dotted">:</span>
                  <div class="smalltext">Days</div>
                </div>
                <div>
                  <span class="hours" id="hour"></span>
                  <span class="dotted">:</span>
                  <div class="smalltext">Hours</div>
                </div>
                <div>
                  <span class="minutes" id="minute"></span>
                  <span class="dotted">:</span>
                  <div class="smalltext">Minutes</div>
                </div>
                <div>
                  <span class="seconds" id="second"></span>

                  <div class="smalltext">Seconds</div>
                </div>
              </div>
              <p id="demo"></p>
            </div>
          </div>
        </div>
      </section>
    </div>
    <script src="{{ asset('assets/js/bootstrap-js/jquery.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap-js/bootstrap.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap-js/popper.js')}}"></script>
    <script src="{{ asset('assets/js/timer.js')}}"></script>

    <script src="{{ asset(mix('js/frontend.js')) }}"></script>
    @include('site.panels.alerts')
  </body>
</html>
