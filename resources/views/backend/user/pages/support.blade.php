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

<div class="content support">
  <main class="cont">
    <div class="container-fluid m-auto">
      <div class="row support-box">
        <div
          class="support-head col-md-10 col-sm-12 col-lg-10 text-center" style="background-image: url({{asset('assets/img/suppport-head.svg')}});"
        >
          <h2>How can we help?</h2>
          <div class="form-group">
            <input
              type="text"
              class="form-control"
              placeholder="Ask us anything..."
              required
            />
          </div>
        </div>
        <!-- <div class="support-faq-row"> -->
        <div
          class="faq-card-box text-center col-md-10 col-sm-12 col-lg-4"
        >
          <h3 class="title">Most asked questions</h3>
          <div class="faq-card-list">
            <ul>
              <li><a href="#">How do I get an employee?</a></li>
              <li><a href="#">What are the ways to get started?</a></li>
              <li><a href="#">How do I subscribe for Newsletter?</a></li>
              <li><a href="#">How do I unsubscribe from mailing list?</a></li>
              <li><a href="#">How do I remove a team member?</a></li>
            </ul>
          </div>
        </div>
        <div
          class="faq-card-box text-center col-md-10 col-sm-12 col-lg-4"
        >
          <h3 class="title">TalentHaven Basics</h3>
          <div class="faq-card-list">
            <ul>
              <li><a href="#">User Guide</a></li>
              <li><a href="#">TalentPool Features</a></li>
              <li><a href="#">Account Settings</a></li>
              <li><a href="#">Community help forum</a></li>
              <li><a href="#">Blog content</a></li>
            </ul>
          </div>
        </div>
        <div
          class="faq-card-box text-center col-md-10 col-sm-12 col-lg-4"
        >
          <h3 class="title">Subscription and Payment</h3>
          <div class="faq-card-list">
            <ul>
              <li><a href="#">Business Plan</a></li>
              <li><a href="#">Trial Plan</a></li>
              <li><a href="#">Payment Difficulties</a></li>
              <li><a href="#">Community help forum</a></li>
              <li><a href="#">Terms & Conditions</a></li>
            </ul>
          </div>
        </div>
        <!-- </div> -->
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