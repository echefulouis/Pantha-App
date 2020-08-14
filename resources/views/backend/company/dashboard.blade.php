@extends('company.layouts.master')

@section('title')
    PANTHA APP | Dashboard
@endsection

@section('description')

@endsection

@section('keywords')

@endsection

@section('extrastyle')
<style>

</style>
@endsection

@section('content')
<!-- content start -->

<div class="content">
  <main class="cont">
    <div class="container-fluid m-auto">
      <div class="row">
        <div class="col-md-12 my-3 dsh-prf-top text-center">
          <div
            class="bg dsh-top p-3"
            style="
              background: #3f3356;
              background-image: url(assets/img/dash-top.svg);
              background-repeat: no-repeat;
              background-size: 100%;
            "
          ></div>
          <img src="assets/img/profile-pic.svg" alt="" />
          <h3>John Doe</h3>
          <span>Product Designer</span>
        </div>
        <div class="col-md-10 col-lg-4 my-3 m-auto">
          <div class="bg p-3">
            <div class="dsh-links">
              <h5>Instagram</h5>
              <a href="#"> <i class="fa fa-chain">Instagram.com</i></a>
            </div>
            <div class="dsh-links">
              <h5>Twitter</h5>
              <a href="#"> <i class="fa fa-chain">Twitter.com </i></a>
            </div>
            <div class="dsh-links">
              <h5>Facebook</h5>
              <a href="#"> <i class="fa fa-chain">Facebook.com</i></a>
            </div>
            <div class="dsh-links">
              <h5>LinkedIn</h5>
              <a href="#"> <i class="fa fa-chain">Linkedin.com</i></a>
            </div>
          </div>
        </div>
        <div class="col-md-10 col-lg-4 my-3 m-auto">
          <div class="details">
            <h5>Full Name</h5>
            <div class="bg p-3 d-flex">
              <i class="fa fa-industry"></i>
              <h5>John Doe</h5>
            </div>
          </div>
          <div class="details">
            <h5>Email</h5>
            <div class="bg p-3 d-flex">
              <i class="fa fa-envelope-o"></i>
              <h5>Username@Domain.com</h5>
            </div>
          </div>
          <div class="details">
            <h5>Home address</h5>
            <div class="bg p-3 d-flex">
              <i class="fa fa-home"></i>
              <h5>Town Name, Country Name</h5>
            </div>
          </div>
          <div class="details">
            <h5>Phone number</h5>
            <div class="bg p-3 d-flex">
              <i class="fa fa-phone"></i>
              <h5>+2348033333300</h5>
            </div>
          </div>
        </div>
        <div class="col-md-10 col-lg-4 my-3 dsh-txt m-auto">
          <div class="bg p-3">
            <h4 class="m-2">
              Google’s mission is to organize the world‘s information
              and make it universally accessible and useful. Since our
              founding in 1998, Google has grown by leaps and bounds.
              From offering search in a single language we now offer
              dozens of products and services.
            </h4>
          </div>
        </div>
        <div class="col-sm-12 col-md-10 col-lg-10 m-auto">
          <div class="btn-grp d-flex m-auto">
            <button class="btn btn-gld">Send a package</button>
            <button class="btn btn-bl">Become a Traveller</button>
          </div>
        </div>
      </div>
    </div>
  </main>
</div>

<!-- content end -->
@endsection

@section('extrascript')
<script type="text/javascript">
    
</script>
@endsection