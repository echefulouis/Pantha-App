@extends('auth.layouts.app')

@section('title')
    PANTHA APP | Login
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
  .nav-tabs .nav-link, .nav .nav-tabs{
    border:none !important;
  }

  .nav-tabs .nav-link.active{
    border-bottom: 3px solid #ffa500 !important;
  }
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
                            We are Pantha, a peer to peer last mile delivery company using technology to connect senders to travellers journeying to a destination.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mid-box">
                <div class="col-sm-12 col-md-10 col-lg-6 mid-form-box">
                    <ul class="nav nav-tabs d-flex" id="myTab" role="tablist">
                        <li class="nav-item flex-grow-1">
                            <a class="nav-link" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="false">Login</a>
                        </li>
                        <li class="nav-item flex-grow-1">
                            <a class="nav-link active" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="true">Register</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade" id="login" role="tabpanel" aria-labelledby="login-tab">
                            <div class="form-box">
                                <form method="POST" action="{{ route('login') }}">
                                  @csrf
                                    <div class="form-group">
                                        <label for="loginEmail">Email</label>
                                        <input type="email" class="form-control is-valid @error('email') is-invalid @enderror" id="loginEmail" placeholder="you@example.com" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword">Password</label>
                                        <input type="password" class="form-control is-invalid" id="inputPassword" name="password" placeholder="Password" autocomplete="current-password" required />

                                    </div>

                                    @if (Route::has('password.request'))
                                    <div class="forgot-link">
                                        <h5>
                                            <a href="javascript:void(0)" data-toggle="modal" data-target="#staticBackdrop">Forgot password?</a>
                                        </h5>
                                    </div>
                                    @endif
                                    <button type="submit" class="btn btn-lg-frm">Login</button>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade  show active" id="register" role="tabpanel" aria-labelledby="register-tab">
                            <div class="form-box">
                                <form method="POST" action="{{ route('register') }}">
                                  @csrf
                                    <div class="form-group">
                                      <label for="fullName">Full Name</label>
                                      <input type="text" class="form-control is-valid" placeholder="Enter Your Name" required name="name" value="{{ old('name') }}" required autocomplete="name" autofocus />
                                    </div>
                                    <div class="form-group">
                                      <label for="number">Phone Number</label>
                                      <input type="text" name="phone" value="{{ old('phone') }}" class="form-control is-valid" placeholder="+123-456-789" required autocomplete="phone"/>
                                    </div>

                                    <div class="form-group">
                                      <label for="inputEmail">Email</label>
                                      <input type="email" class="form-control is-valid" id="inputEmail"  value="{{ old('email') }}" name="email" placeholder="you@example.com" required  autocomplete="email"/>
                                    </div>      

                                    <div class="form-group">
                                      <label for="password">Password</label>
                                      <input type="password" class="form-control is-valid" id="password" placeholder="password" name="password" required />
                                    </div> 

                                    <div class="form-group">
                                      <label for="password-confirm">Confirm Password</label>
                                      <input type="password" class="form-control is-valid" id="password-confirm" placeholder="confirm password" name="password_confirmation" required />
                                    </div> 

                                    <button type="submit" class="btn btn-lg-frm">Register</button>
                                </form>

                                <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg text-center">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel"></h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <h3>Forgot Password?</h3>
                                                <p>
                                                    Please enter your registered email address we will get back to you with the reset password link.
                                                </p>
                                                <div class="mod-form">
                                                    <form action="#" method="POST" action="{{ route('password.email') }}">
                                                      @csrf
                                                        <div class="form-group text-center">
                                                          <label for="forgetEmail" class="">{{ __('E-Mail Address') }}</label>
                                                            <input type="email" id="forgetEmail" placeholder=" Enter email" required />
                                                        </div>
                                                        <button type="submit" class="btn btn-mod">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-10 col-lg-6 mid-img-box"></div>
            </div>
        </div>
    </section>
</div>

<!-- content end -->
@endsection @section('extrascript')
<script type="text/javascript">
  
</script>
@endsection
