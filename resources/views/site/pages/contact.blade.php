@extends('site.layouts.frontend')

@section('title') <title> Design Agency | Nigeria </title> @endsection

@section('description')
<meta name="description" content="BRANDING BOX is specialist in business branding; while our services covers Logo, business card, letterhead, brochure design and website design and many more; and We turn your raw Dreams and Imaginations into creative and awesome Designs.">
@endsection

@section('extrastyle')
<style>
  
.cpack {
    display: flex;
    position: relative;
    background: #fff;
    font-weight: 400;
    border-width: 1px 0px;
    border-style: solid;
    border-color: #f1f1f1;
    margin-bottom: 30px;
}

.cpack .cpack-points {
    display: inline-block;
    width: 40%;
    float: left;
    border-right: 1px solid #f1f1f1;
}

.cpack .cpack-points .cpack-pkg-head,
.cpack .cpack-pkg .cpack-pkg-head {
    display: block;
    position: relative;
    text-align: center;
    text-transform: uppercase;
    min-height: 60px;
    border-bottom: 1px solid #e1e1e1;
    padding: 15px 0 10px;
}

.cpack .cpack-points .cpack-pkg-head > h4 {
    font-size: 20px;
    letter-spacing: 4px;
    line-height: 34px;
    margin: 0;
    font-weight: 500;
}

.cpack .cpack-pkg .cpack-pkg-head > h4.cp-title {
    font-size: 20px;
    letter-spacing: 3px;
    margin: 0 0 5px;
    font-weight: 500;
}

.cpack .cpack-pkg .cpack-pkg-head .cp-price {
    font-size: 30px;
    line-height: 30px;
    font-weight: 500;
}

.cpack .cpack-pkg .cpack-pkg-head .cp-price sup {
    font-size: 14px;
    font-weight: 500;
    top: -16px;
    right: 2px;
}

.cpack .cpack-pkg.active .cpack-pkg-head {
    color: #111;
}

.cpack .cpack-pkg .cpack-pkg-head .cp-exd {
    font-size: 10px;
    text-transform: capitalize;
    font-weight: 500;
    color: #575757;
    margin-top: 3px;
}

.cpack .cpack-pkg .cpack-pkg-head .cp-exd span {
    line-height: 22px;
}

.cpack .cpack-pkg .cpack-pkg-head .cp-exd.cp-exd-pg {
    max-width: 95px;
    min-width: 70px;
    display: inline-block;
}

.cpack .cpack-pkg .cpack-pkg-head .cp-exd .pg-img + span {
    font-weight: 700;
}

.cpack .cpack-pkg .cpack-pkg-head .pg-img {
    display: block;
    height: 17px;
    width: 17px;
    float: left;
    position: relative;
    margin-right: 5px;
}

.cpack .cpack-pkg .cpack-pkg-head .pg-img img {
    height: 100%;
    width: 100%;
}

.cpack .cpack-pkg.active .cpack-pkg-head .pg-img img {
    -webkit-filter: brightness(100);
    filter: brightness(100);
}

.cpack .cpack-pkg.active .cpack-pkg-head .cp-price,
.cpack .cpack-pkg.active .cpack-pkg-head .cp-exd {
  color: #fff;
}

.cpack .cpack-pkg .cpack-pkg-head .cp-exd .pg-img + span {
    line-height: 22px;
}

.cpack .cpack-pkg {
    display: inline-block;
    width: 20%;
    float: left;
    text-align: center;
    background: #fff;
    border-right: 1px solid #f1f1f1!important;
    transition: all 0.3s;
    -webkit-transition: all 0.3s;
}

.cpack .cpack-pkg:hover{
    cursor: pointer;
}


.cpack .cpack-pkg:last-child {
    border-right: none;
}

.cpack .cpack-pkg.active {
    z-index: 5;
    box-shadow: 4px 0 8px -3px #aaa, -4px 0 8px -3px #aaa;
    -webkit-box-shadow: 4px 0 8px -3px #aaa, -4px 0 8px -3px #aaa;
    -moz-box-shadow: 4px 0 8px -3px #aaa, -4px 0 8px -3px #aaa;
    position: relative;
    border: 0;
}

.cpack .cpack-points > ul,
.cpack .cpack-pkg > .cpack-pkg-features > ul {
    display: block;
    position: relative;
    list-style-type: none;
    padding: 0;
    margin: 0;
}

.cpack .cpack-points > ul > li,
.cpack .cpack-pkg > .cpack-pkg-features > ul > li {
    padding: 7px 20px 7px 15px;
    background: #fff;
    color: #555;
    text-align: left;
    position: relative;
    display: block;
    font-size: 13px;
    white-space: nowrap;
    font-weight: 500;
    overflow: hidden;
    text-overflow: ellipsis;
}

.cpack .cpack-pkg > .cpack-pkg-features > ul > li {
    text-align: center;
}

.cpack .cpack-points > ul > li:nth-child(even),
.cpack .cpack-pkg > .cpack-pkg-features > ul > li:nth-child(even) {
    background: #fafafa
}

.cpack .cpack-pkg-footer {
    padding: 7px 0;
    border-top: 1px solid #f1f1f1;
    position: relative;
    display: block;
    text-align: center;
    min-height: 50px;
}

.cpack .cpack-pkg-footer .btn {
    border-width: 1px;
    font-weight: 400;
    font-size: 14px;
    padding: 5px 17px;
    line-height: 20px;
    -webkit-transition: background 0.2s linear;
    -moz-transition: background 0.2s linear;
    -o-transition: background 0.2s linear;
    transition: background 0.2s linear;
    color: #fff;
}


.cpack .cpack-pkg .cpack-pkg-head .cp-oldprice {
    font-weight: 500;
    font-size: 16px;
    line-height: 18px;
    margin-top: 12px;
}

.cpack .cpack-pkg .cpack-pkg-head .cp-oldprice sup {
    font-size: 12px;
    top: 0;
    vertical-align: super;
}

.cpack.special-promotion .cpack-points .cpack-pkg-head > h4 {
    line-height: 102px!important;
}

.cpack.special-promotion .cpack-pkg .cpack-pkg-head .cp-exd {
    margin-top: 0;
}

.cpack.special-promotion .cpack-pkg.active .cpack-pkg-head strike {
    color: #fff;
}

.setup-content .appliedcode {
    text-align: right;
    font-size: 14px;
    font-weight: 400;
    margin: 0;
}

.setup-content .cpack.special-promotion {
    margin: 5px 0 30px;
}

@media screen and (max-width: 967px){
    .cpack .cpack-points {
        width: 34%;
    }
    .cpack .cpack-pkg {
        width: 22%;
    }
    .cpack .cpack-points .cpack-pkg-head > h4,.cpack .cpack-pkg .cpack-pkg-head > h4.cp-title {
        font-size: 16px;
        letter-spacing: 0px;
        line-height: 24px;

    }
    .cpack .cpack-pkg .cpack-pkg-head > h4.cp-title{

    }

}

#mobilePrice .package-list {
    margin-top: 0px;
    padding: 12px 10px 0px 10px;
    background: #fff;
}

#mobilePrice .package-list .media.not-support {
    color: #999;
    cursor: not-allowed;
    text-decoration: line-through;
}


#mobilePrice .package-list .media {
    margin: 5px 10px 0px 13px;
}

#mobilePrice .package-list .media .media-body p {
    margin: 0px 0px 2px 0px;
    font-size: 13px;
    padding-right: 25px;
    position: relative;
}

#mobilePrice .package-list .media .media-body p span {
    width: 68px;
    text-align: center;
    float: right;
    position: absolute;
    right: 0;
}


</style>
@endsection

@section('title') <title> Branding Box | Company </title> @endsection

@section('content')
<!-- content start -->

    <!-- =======================
    Banner innerpage -->
    <div class="innerpage-banner center bg-overlay-dark-7 py-7" style="background:url({{asset('frontend/img/bg/04.jpg')}}) no-repeat; background-size:cover; background-position: center center;">
        <div class="container">
            <div class="row all-text-white">
                <div class="col-md-12 align-self-center">
                    <h1 class="innerpage-title">Pricing Packages</h1>
                    <h6 class="subtitle">We transform your perception into an excellent website</h6>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active"><a href="{{route('home')}}"><i class="ti-home"></i> Home</a></li>
                            <li class="breadcrumb-item">Pricing</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- =======================
    Banner innerpage -->


    <!-- =======================
    Pricing -->
    {{--<section>
        <div class="row d-none d-md-flex">
            <div class="col-md-12">
                <div class="cpack">
                    <div class="cpack-points">
                        <div class="cpack-pkg-head">
                            <h4>Features</h4></div>
                        <ul class="pkgcom-points">
                            @foreach($product->product_features as $pfeature)
                            <li>{{$pfeature->feature}}</li>
                            @endforeach
                        </ul>
                        <div class="cpack-pkg-footer"></div>
                    </div>

                    @if(isset($product->product_packages) && count($product->product_packages)>0)
                    @php($deter = 1)
                    @foreach($product->product_packages as $pPackage)
                    <div class="cpack-pkg @if($deter == 2) active @endif" data-package='package{{$deter}}'>
                        <div class="cpack-pkg-head">
                            <h4 class="cp-title">{{$pPackage->package}}</h4>
                            <div class="cp-price"><sup class="">$</sup>{{$pPackage->price}}</div>
                            <div class="cp-exd"><span>Expert Designers</span></div>
                        </div>
                        <div class="cpack-pkg-features">
                            <ul>
                            @php($packName = $pPackage->package)
                            @foreach($product->product_features as $fpackage)
                                @if((json_decode($fpackage->packages)->$packName) == 'checked')
                                    <li><span><i class="fa fa-check"></i></span></li>
                                @elseif((json_decode($fpackage->packages)->$packName) == 'infinity')
                                    <li><span class="">∞</span></li>
                                @elseif((json_decode($fpackage->packages)->$packName) == 'dash')
                                    <li class="no-data">-</li>
                                @else
                                    <li><span>{{json_decode($fpackage->packages)->$packName}}</span></li>
                                @endif
                            @endforeach
                            </ul>
                        </div>
                        <div class="cpack-pkg-footer">
                            <a href="{{route('product.checkout',['product'=>$product->slug ,'package'=> strtolower($pPackage->package)])}}" class="btn btn-default text-white btn-md">
                                @if($deter == 2) Selected @else Select @endif
                            </a>
                        </div>
                    </div>
                    @php($deter++)
                    @endforeach
                    @endif
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>--}}

    <section id="pricing-page">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto">
                    <div class="text-center">
                        <h2>Affordable Pricing Packages</h2>
                        <p>All prices are in $ USD. If you need website development, animation or marketing services, kindly reachout to us on <a href="#">Facebook</a></p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center d-none d-md-flex">
                <div class="col-md-10">
                    <div class="cpack">
                        <div class="cpack-points">
                            <div class="cpack-pkg-head">
                                <h4>Features</h4></div>
                            <ul class="pkgcom-points">
                                
                                <li>No. of Initial Concepts</li>
                                <li>High Resolution</li>
                                <li>3D Mockup</li>
                                <li>Vector File</li>
                                <li>Delivery Time</li>                               
                            </ul>
                            <div class="cpack-pkg-footer d-flex align-items-center">
                                <h4 class="text-left pl-3 pt-2">Price</h4>
                            </div>
                        </div>

                        <div class="cpack-pkg" data-package='silver'>
                            <div class="cpack-pkg-head">
                                <h4 class="cp-title">SILVER</h4>
                            </div>
                            <div class="cpack-pkg-features">
                                <ul>
                                    <li><span><i class="fa fa-check"></i></span></li>
                                    <li><span class="">∞</span></li>
                                    <li class="no-data">-</li>
                                    <li><span>3</span></li>
                                    <li><span>3 hours</span></li>                           
                                </ul>
                            </div>
                            <div class="cpack-pkg-footer">
                                <h3>$39</h3>
                                <a href="{{route('order','silver')}}" class="btn bg-grad text-white btn-md">
                                    Order now!
                                </a>
                            </div>
                        </div>
                        <div class="cpack-pkg active pricing position-relative" data-package='gold'>
                            <div class="ribbon"><span>POPULAR</span></div>
                            <div class="cpack-pkg-head">
                                <h4 class="cp-title">GOLD</h4>
                            </div>
                            <div class="cpack-pkg-features">
                                <ul>
                               
                                    <li><span><i class="fa fa-check"></i></span></li>
                                    <li><span class="">∞</span></li>
                                    <li class="no-data">-</li>
                                    <li><span>3</span></li>
                                    <li><span>3 hours</span></li>
                           
                                </ul>
                            </div>
                            <div class="cpack-pkg-footer">
                                <h3>$79</h3>
                                <a href="#" class="btn bg-grad text-white btn-md">
                                    Order now!
                                </a>
                            </div>
                        </div>
                        <div class="cpack-pkg" data-package='platinum'>
                            <div class="cpack-pkg-head">
                                <h4 class="cp-title">PLATINUM</h4>
                            </div>
                            <div class="cpack-pkg-features">
                                <ul>
                               
                                    <li><span><i class="fa fa-check"></i></span></li>
                                    <li><span class="">∞</span></li>
                                    <li class="no-data">-</li>
                                    <li><span>3</span></li>
                                    <li><span>3 hours</span></li>
                           
                                </ul>
                            </div>
                            <div class="cpack-pkg-footer">
                                <h3>$197</h3>
                                <a href="#" class="btn bg-grad text-white btn-md">
                                    Order now!
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-4 d-md-none" id="mobilePrice">
                <div class="col-12">

                    <ul class="nav nav-tabs tab-line">
                        <li class="nav-item flex-grow-1 text-center"> <a class="nav-link" data-toggle="tab" href="#package1" data-key="1"> <h5 class="m-0">SILVER</h5><span class="d-block">$34</span> </a> </li>
                        <li class="nav-item flex-grow-1 text-center"> <a class="nav-link active" data-toggle="tab" href="#package2" data-key="2"><h5 class="m-0">GOLD</h5><span class="d-block">$79</span> </a> </li>
                        <li class="nav-item flex-grow-1 text-center"> <a class="nav-link" data-toggle="tab" href="#package3" data-key="3"> <h5 class="m-0">PLATINUM</h5><span class="d-block">$179</span></a> </li>
                    </ul>
                    <div class="tab-content package-list">
                        <div class="tab-pane" id="package1">
                            <div class="media ">
                                <div class="media-body">
                                    <p>No. of Initial Concepts <span class=""><i class="fa fa-check"></i></span></p>
                                </div>
                            </div>
                            <div class="media not-support">
                              <div class="media-body">
                                  <p>High Resolution<span class="">-</span></p>
                              </div>
                            </div>
                            <div class="media  not-support">
                              <div class="media-body">
                                  <p>3D Mockup<span class="">-</span></p>
                              </div>
                            </div>
                            <div class="media not-support">
                              <div class="media-body">
                                  <p>Vector File<span class="">-</span></p>
                              </div>
                            </div>
                            <div class="media ">
                              <div class="media-body">
                                  <p>Delivery Time<span class="">5 hours</span></p>
                              </div>
                            </div>
                            <div class="mt-3">
                                <a class="btn btn-grad m-auto btn-block" href="#">Order Now!</a>
                            </div>
                        </div>
                        <div class="tab-pane show active" id="package2">
                            <div class="media ">
                                <div class="media-body">
                                    <p>No. of Initial Concepts <span class=""><i class="fa fa-check"></i></span></p>
                                </div>
                            </div>
                            <div class="media">
                              <div class="media-body">
                                  <p>High Resolution<span class="">∞</span></p>
                              </div>
                            </div>
                            <div class="media not-support">
                              <div class="media-body">
                                  <p>3D Mockup<span class="">-</span></p>
                              </div>
                            </div>
                            <div class="media">
                              <div class="media-body">
                                  <p>Vector File<span class="">3</span></p>
                              </div>
                            </div>
                            <div class="media ">
                              <div class="media-body">
                                  <p>Delivery Time<span class="">5 hours</span></p>
                              </div>
                            </div>
                            <div class="mt-3">
                                <a class="btn btn-grad m-auto btn-block" href="#">Order Now!</a>
                            </div>
                        </div>
                        <div class="tab-pane" id="package3">
                           <div class="media">
                                <div class="media-body">
                                    <p>No. of Initial Concepts <span class=""><i class="fa fa-check"></i></span></p>
                                </div>
                            </div>
                            <div class="media">
                              <div class="media-body">
                                  <p>High Resolution<span class="">∞</span></p>
                              </div>
                            </div>
                            <div class="media">
                              <div class="media-body">
                                  <p>3D Mockup<span class="">∞</span></p>
                              </div>
                            </div>
                            <div class="media ">
                              <div class="media-body">
                                  <p>Vector File<span class="">3</span></p>
                              </div>
                            </div>
                            <div class="media ">
                              <div class="media-body">
                                  <p>Delivery Time<span class="">5 hours</span></p>
                              </div>
                            </div>
                            <div class="mt-3">
                                <a class="btn btn-grad m-auto btn-block" href="#">Order Now!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Pricing -->


    <!-- =======================
    Testimonials -->
    <section class="bg-light triangle-down py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h4 class="m-0">Our passion for customer excellence is just one reason why we are the market leader. We've always worked very hard to<strong class="text-primary bold"> give our customers the best experience</strong> in dealing with our company.</h4>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonials testimonials-border pb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel testi-full owl-grab" data-arrow="false" data-dots="false" data-items-xl="3" data-items-md="2" data-items-xs="1" data-autoplay="3800">
                        <!-- testimonial item -->
                        <div class="item">
                            <div class="testimonials-wrap">
                                <div class="testi-text">
                                    <p>Best of the best service i have got so far consectetur adipisicing elit Numquam aliquid neque voluptates <strong>Never seen in my entire life</strong> iusto ipsam eligendi officia repellat ipsum commodi aspernatur quibusdam doloremque nam ullam labore.</p>
                                    <div class="testi-avatar"> <img src="assets/images/thumbnails/avatar-01.jpg" alt="avatar"> </div>
                                    <h6 class="mb-0 mt-3">Adam Ross</h6>
                                    <h6 class="small">Software Developer</h6>
                                </div>
                            </div>
                        </div>
                        <!-- testimonial item -->
                        <div class="item">
                            <div class="testimonials-wrap">
                                <div class="testi-text">
                                    <p>Thanks for the super quick support consectetur adipisicing elit. Numquam aliquid neque voluptates veniam laborum dolore porro totam iusto ipsam eligendi officia repellat ipsum commodi aspernatur quibusdam doloremque nam ullam.</p>
                                    <div class="testi-avatar"> <img src="assets/images/thumbnails/avatar-02.jpg" alt="avatar"> </div>
                                    <h6 class="mb-0 mt-3">Peter Smith</h6>
                                    <h6 class="small">Customer</h6>
                                </div>
                            </div>
                        </div>
                        <!-- testimonial item -->
                        <div class="item">
                            <div class="testimonials-wrap">
                                <div class="testi-text">
                                    <p>So happy to by this template consectetur adipisicing elit Numquam aliquid neque voluptates Never seen in my entire life iusto ipsam eligendi <strong> most amazing template out there!</strong></p>
                                    <div class="testi-avatar"> <img src="assets/images/thumbnails/avatar-03.jpg" alt="avatar"> </div>
                                    <h6 class="mb-0 mt-3">Emma Watson</h6>
                                    <h6 class="small">Human Resource</h6>
                                </div>
                            </div>
                        </div>
                        <!-- testimonial item -->
                        <div class="item">
                            <div class="testimonials-wrap">
                                <div class="testi-text">
                                    <p>You guys did an amazing work for me. Numquam aliquid neque voluptates veniam laborum dolore porro totam iusto ipsam eligendi officia repellat ipsum commodi aspernatur quibusdam, doloremque nam ullam labore.</p>
                                    <div class="testi-avatar"> <img src="assets/images/thumbnails/avatar-04.jpg" alt="avatar"> </div>
                                    <h6 class="mb-0 mt-3">Peter Smith</h6>
                                    <h6 class="small">Web Developer</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Testimonials -->

    <div class="divider m-0"></div>

    <!-- =======================
    FAQ -->
    <section>
        <div class="container px-md-5">
            <div class="row">
                <!-- Job positions -->
                <div class="col-md-8">
                    <h2 class="mb-4">Frequently asked question</h2>
                  
                    <div class="accordion accordion-line toggle-icon-left toggle-icon-round" id="accordion1">
                        <!-- item -->
                        <div class="accordion-item">
                            <div class="accordion-title">
                                <h6><a data-toggle="collapse" href="#collapse-1">Account manager - technologies</a></h6></div>
                            <div class="collapse" id="collapse-1" data-parent="#accordion1">
                                <div class="accordion-content">
                                    <p class="pt-2"> We are excited about an opportunity we have within the Technologies team in London. We’re on the lookout for an Account Manager to join wizixo top performing team for 2 years in a row! We want to hear from talented and ambitious sales professionals who have a passion for work.</p>
                                    <h6 class="mb-2">Location: London</h6>
                                    <a class="d-block" href="careers-single.html">Read More</a>
                                </div>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="accordion-item">
                            <div class="accordion-title">
                                <a class="collapsed" data-toggle="collapse" href="#collapse-2">Recruitment consultant education Sydney</a>
                            </div>
                            <div class="collapse" id="collapse-2" data-parent="#accordion1">
                                <div class="accordion-content">
                                    <p class="pt-2"> Do you enjoy a sales environment with little administration? Enjoy using the latest recruitment technology without losing the ‘Human Touch’? Do you want to work for a company who believes in supporting your career and personal growth? Want to work for a division that has a boutique feel. </p>
                                    <h6 class="mb-2">Location: Sydney</h6>
                                    <a class="d-block" href="careers-single.html">Read More</a>
                                </div>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="accordion-item">
                            <div class="accordion-title">
                                <a class="collapsed" data-toggle="collapse" href="#collapse-3">Senior PHP software developer</a>
                            </div>
                            <div class="collapse" id="collapse-3" data-parent="#accordion1">
                                <div class="accordion-content">
                                    <p class="pt-2"> This is a great opportunity to join a Wizixo start up in the IT industry. We provide a number of services to our clients in both England and Australia. Our services ensures our clients achieves energy efficiencies, accurate reporting whilst saving time. </p>
                                    <h6 class="mb-2">Location: Melbourne</h6>
                                    <a class="d-block" href="careers-single.html">Read More</a>
                                </div>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="accordion-item">
                            <div class="accordion-title">
                                <a class="collapsed" data-toggle="collapse" href="#collapse-4">Digital Marketing Executive</a>
                            </div>
                            <div class="collapse" id="collapse-4" data-parent="#accordion1">
                                <div class="accordion-content">
                                    <p class="pt-2"> We provide a number of services to our clients in both England and Australia. Our services ensures our clients achieves energy efficiencies, accurate reporting whilst saving time. This is a great opportunity to join a Wizixo start up in the IT industry.</p>
                                    <h6 class="mb-2">Location: New York</h6>
                                    <a class="d-block" href="careers-single.html">Read More</a>
                                </div>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="accordion-item">
                            <div class="accordion-title">
                                <a class="collapsed" data-toggle="collapse" href="#collapse-6">Engineering Manager - Android Application Infrastructure</a>
                            </div>
                            <div class="collapse" id="collapse-6" data-parent="#accordion1">
                                <div class="accordion-content">
                                    <p class="pt-2">Join a Wizixo start up in the IT industry. We provide a number of services to our clients in both England and Australia. Our services ensures our clients achieves energy efficiencies, accurate reporting whilst saving time. </p>
                                    <h6 class="mb-2">Location: Los Angeles</h6>
                                    <a class="d-block" href="careers-single.html">Read More</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Sidebar -->
                <div class="col-md-4 sidebar pt-md-5">
                  
                    <div class="widget bg-light border-0 p-3 border-radius-3">
                        <h4>Have any question? </h4>
                        <p>If you need to send us mail regarding job opportunities, please write to us at <a class="text-primary" href="mailto:contact@example.com">career@wizixo.com</a> for more information.</p> or call us <a class="display-8 text-dark primary-hover" href="#">@(251) 854-6308</a>
                    </div>
                </div>
                <!-- Sidebar end-->

            </div>
        </div>
    </section>
    <!-- =======================
    FAQ -->

<!-- content end -->
@endsection



@section('extrascript')
<script type="text/javascript">

$(function(){

    $('.cpack-pkg').click(function() {
        setpackageActive($(this).data('package'));
        $(".pg_" + $(this).data('package')).find('a').trigger('click');
    });

});

function setpackageActive($pkg) {
    $('.cpack-pkg').removeClass('active');
    $ths = $('.cpack-pkg[data-package="' + $pkg + '"]');
    $ths.addClass('active');
}
</script>
@endsection