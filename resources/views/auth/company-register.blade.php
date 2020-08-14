@extends('auth.layouts.app')

@section('title')
    PANTHA APP | Company Login
@endsection

@section('description')
 Become a traveller
@endsection

@section('keywords')
    Easy tranvelling, recommended delivery agencies
@endsection

@section('extrastyle')
<link rel="stylesheet" href="{{asset('assets/styles/login.css')}}" />
<style>

</style>
@endsection

@section('content')
<!-- content start -->

 <div class="login-wrapper">
      <section class="login-body">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <div class="top-text">
                <h1>Welcome to Pantha</h1>
                <p>
                  We are Pantha, a peer to peer last mile delivery company using
                  technology to connect senders to travellers journeying to a
                  destination.
                </p>
              </div>
            </div>
          </div>
          <div class="row mid-box">
            <div class="col-sm-12 col-md-10 col-lg-6 mid-form-box">
              <div
                class="d-flex justify-content-between align-items-center p-2 links"
              >
                <h3><a href="#">Register</a></h3>
                <h3><a href="#">Login</a></h3>
              </div>
              <div class="form-box">
                <form>
                  <div class="form-group">
                    <label for="fullName">Company Name</label>
                    <input
                      type="text"
                      class="form-control is-valid"
                      placeholder="Sumec Plc"
                      required
                    />
                  </div>
                  <div class="form-group">
                    <label for="inputEmail">Company Email</label>
                    <input type="email" class="form-control is-valid"
                    id="inputEmail" placeholder=company@example.com" required />
                    <!-- <div class="valid-feedback">
                      Good! Your email address looks valid.
                    </div> -->
                  </div>
                  <div class="form-group">
                    <label for="address">Company Address</label>
                    <input
                      type="text"
                      class="form-control is-valid"
                      placeholder=" 22, Adegbola Street, Oshodi, Lagos."
                      required
                    />
                    <!-- <div class="valid-feedback">
                      Good! Your email address looks valid.
                    </div> -->
                  </div>

                  <div class="forgot-link">
                    <h5><a href="forgot.html">Forgot password?</a></h5>
                  </div>
                  <button type="submit" class="btn btn-lg-frm">Sign Up</button>
                </form>
              </div>
            </div>
            <div class="col-sm-12 col-md-10 col-lg-6 mid-img-box"></div>
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