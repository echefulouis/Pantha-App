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
              <h2>Send a Package</h2>
              <p>Please fill in the details of your package.</p>
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
          <div class="row snd-wrap">
            <div class="snd-lft col-sm-12 col-md-10 col-lg-6">
              <form action="#">
                <div class="form-group">
                  <label for="exampleFormControlTextarea1"
                    >Example textarea</label
                  >
                  <textarea
                    class="form-control"
                    id="exampleFormControlTextarea1"
                    rows="5"
                  ></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlFile1"
                    >Example file input</label
                  >
                  <input
                    type="file"
                    class="form-control-file"
                    id="exampleFormControlFile1"
                  />
                </div>
                <div class="form-row">
                  <div class="col">
                    <input type="text" class="form-control" placeholder="01" />
                  </div>
                  <div class="col">
                    <div class="sm-box"></div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlFile1"
                    >Example file input</label
                  >
                  <select class="form-control">
                    <option>Default select</option>
                  </select>
                </div>
              </form>
            </div>
            <div class="snd-rgt col-sm-12 col-md-10 col-lg-6"></div>
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