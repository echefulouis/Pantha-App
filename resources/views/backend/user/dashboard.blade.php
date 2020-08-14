@extends('backend.user.layouts.master')

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
              background-image: url({{asset('assets/img/dash-top.svg')}});
              background-repeat: no-repeat;
              background-size: 100%;
            "
          ></div>
          <img src="{{asset('assets/img/profile-pic.svg')}}" alt="" />
          <h3>{{$user->name}}</h3>
          <span>Role: {{$user->role}}</span>
        </div>
        <div class="col-md-10 col-lg-4 my-3 m-auto">
          <div class="bg p-3">
            <div class="dsh-links">
              <h5>Instagram</h5>
              <a href="{{$user->instagram}}"> <i class="fa fa-chain">{{$user->instagram}}</i></a>
            </div>
            <div class="dsh-links">
              <h5>Twitter</h5>
              <a href="{{$user->twitter}}"> <i class="fa fa-chain">{{$user->twitter}}</i></a>
            </div>
            <div class="dsh-links">
              <h5>Facebook</h5>
              <a href="{{$user->facebook}}"> <i class="fa fa-chain">{{$user->facebook}}</i></a>
            </div>
            <div class="dsh-links">
              <h5>LinkedIn</h5>
              <a href="{{$user->linkedin}}"> <i class="fa fa-chain">{{$user->linkedin}}</i></a>
            </div>
          </div>
        </div>
        <div class="col-md-10 col-lg-4 my-3 m-auto">
          <div class="details">
            <h5>Full Name</h5>
            <div class="bg p-3 d-flex">
              <i class="fa fa-industry"></i>
              <h5>{{$user->name}}</h5>
            </div>
          </div>
          <div class="details">
            <h5>Email</h5>
            <div class="bg p-3 d-flex">
              <i class="fa fa-envelope-o"></i>
              <h5>{{$user->email}}</h5>
            </div>
          </div>
          <div class="details">
            <h5>Home address</h5>
            <div class="bg p-3 d-flex">
              <i class="fa fa-home"></i>
              <h5>{{$user->address}}</h5>
            </div>
          </div>
          <div class="details">
            <h5>Phone number</h5>
            <div class="bg p-3 d-flex">
              <i class="fa fa-phone"></i>
              <h5>{{$user->phone}}</h5>
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
            <a href="{{route('user.sender')}}" class="btn btn-gld">Send a package</a>
            <a href="{{route('user.traveller')}}" class="btn btn-bl">Become a Traveller</a>
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