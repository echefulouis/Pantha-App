@extends('site.layouts.frontend')

@section('title')
    PANTHA APP | Become a Traveller
@endsection

@section('description')
 Become a traveller
@endsection

@section('keywords')
    Easy tranvelling, recommended delivery agencies
@endsection

@section('extrastyle')
<link rel="stylesheet" href="{{ asset('assets/styles/traveller.css')}}" />
<style>


</style>
@endsection

@section('content')

<!-- content start -->
    <div class="traveller-wrapper">
      <section>
        <div class="container">
          <div class="row trl-top">
            <div class="col-sm-12 col-md-10 col-lg-6 txt-wrap">
              <h2>Become a Traveller</h2>
              <p>Please fill the form accurately to deliver a package.</p>
            </div>

            <div class="col-sm-12 col-md-10 col-lg-6 search">
              <div class="input-group flex-nowrap">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="addon-wrapping">
                    <i class="fa fa-search"></i>
                  </span>
                </div>
                <input
                  type="text"
                  class="form-control"
                  placeholder="Search Location"
                  aria-label="search"
                  aria-describedby="addon-wrapping"
                />
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row mid-wrap">
            <div class="trl-lft col-sm-12 col-md-10 col-lg-6">
              <form class="needs-validation" novalidate>
                <div class="form-group">
                  <label for="exampleFormControlFile1">Select Location</label>
                  <select class="form-control">
                    <option>Select</option>
                    <option>Aba</option>
                    <option>Abuja</option>
                    <option>Lagos</option>
                    <option>Kaduna</option>
                    <option>Kwara</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="exampleFormControlFile1">Select Package</label>
                  <select class="form-control">
                    <option>Select</option>
                    <option>Aba</option>
                    <option>Abuja</option>
                    <option>Lagos</option>
                    <option>Kaduna</option>
                    <option>Kwara</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-travel">
                  Sign in
                </button>
              </form>
            </div>
            <div class="trl-rgt col-sm-12 col-md-10 col-lg-6" style="background-image: url({{asset('assets/img/delivered.svg')}});"></div>
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