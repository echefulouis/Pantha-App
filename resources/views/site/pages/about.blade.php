@extends('site.layouts.frontend')

@section('title')
    PANTHA APP | About Us
@endsection

@section('description')
 Become a traveller
@endsection

@section('keywords')
    Easy tranvelling, recommended delivery agencies
@endsection

@section('extrastyle')
 <link rel="stylesheet" href="{{asset('assets/styles/about.css')}}" />
<style>

</style>
@endsection

@section('content')
<!-- content start -->

<div class="about-wrap">
      <!-- banner section -->
	<section class="about-banner text-center">
		<div class="container-fluid">
		  <div class="row">
		    <div class="col-sm-12">
		      <div class="bn-container" style="background: linear-gradient(0deg,rgba(4, 23, 42, 0.61),rgba(4, 23, 42, 0.61) ), url({{asset('assets/img/about-bg.svg')}});">
		        <canvas id="canvas1"></canvas>
		        <div class="abt-bn-text">
		          <h1>ABOUT US</h1>
		          <h3>Welcome to the Real World!</h3>
		        </div>
		      </div>
		    </div>
		  </div>
		</div>
	</section>
		<!-- Our vission section -->
	<section>
		<div class="container">
		  <div class="sec-container">
		    <div class="row">
		      <div class="col-sm-12 col-md-10 col-lg-6 vsn-lft text-left">
		        <h2>Our Vision</h2>
		        <p>
		          Our goal is to make shopping for a laptop simple, which is why
		          we provide constantly-updated top pick lists, buying guides
		          and interactive product finders to help narrow your search and
		          avoid buyers’ remorse. We put ourselves in your shoes by going
		          undercover to thoroughly test the tech support of every major
		          brand.
		        </p>
		      </div>
		      <div class="col-sm-12 col-md-10 col-lg-6">
		        <div class="vsn-rgt" style="background-image: url({{asset('assets/img/task.svg')}});"></div>
		      </div>
		    </div>
		  </div>
		</div>
	</section>
		<!-- Our approach section -->
	<section>
		<div class="container">
		  <div class="sec-container">
		    <div class="row">
		      <div class="col-sm-12 col-md-10 col-lg-6 apr-lft" style="background-image: url({{asset('assets/img/creative_thinking.svg')}});"></div>
		      <div class="col-sm-12 col-md-10 col-lg-6 apr-rgt p-5">
		        <h2>
		          Our Approach
		        </h2>
		        <p>
		          Our lab uses a combination of real-world tests and synthetic
		          benchmarks to determine how well laptops perform. We evaluate
		          battery life using our home-grown web surfing test, as well as
		          speed by timing how long a system takes to transfer files and
		          complete a demanding spreadsheet test. In addition, we use
		          tools to tell you how colorful a laptop’s screen and how much
		          travel its keyboard has. Learn more about how we test laptops.
		        </p>
		      </div>
		    </div>
		  </div>
		</div>
	</section>
		<!-- our process section -->
	<section>
		<div class="container">
		  <div class="sec-container">
		    <div class="row">
		      <div class="col-sm-12 col-md-10 col-lg-6 prc-lft">
		        <h2>Our Process</h2>
		        <p>
		          Our lab uses a combination of real-world tests and synthetic
		          benchmarks to determine how well laptops perform. We evaluate
		          battery life using our home-grown web surfing test, as well as
		          speed by timing how long a system takes to transfer files and
		          complete a demanding spreadsheet test. In addition, we use
		          tools to tell you how colorful a laptop’s screen and how much
		          travel its keyboard has. Learn more about how we test laptops.
		        </p>
		      </div>
		      <div class="col-sm-12 col-md-10 col-lg-6 prc-rgt" style="background-image: url({{asset('assets/img/process.png')}});"></div>
		    </div>
		  </div>
		</div>
	</section>
</div>


<!-- content end -->
@endsection

@section('extrascript')
<script src="{{asset('assets/js/particle.js')}}"></script>
<script type="text/javascript">
    
</script>
@endsection