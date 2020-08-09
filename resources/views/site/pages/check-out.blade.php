@extends('site.layouts.frontend')

@section('title')
 Checkout | Design Kago Company in Nigeria 
@endsection

@section('description')
Design Kago is specialist in business branding; while our services covers Logo, business card, letterhead, brochure design and website design and many more; and We turn your raw Dreams and Imaginations into creative and awesome Designs.
@endsection

@section('keywords')
Design Kago, design agency, Graphics design, Business cards, luxury business cards, two-sided business cards, Uyo, Nigiera
@endsection


@section('extrastylesheet')

<style type="text/css">

.checkout-payment-method {
    margin: 0px auto 1px;
}

.checkout-payment-method ul {
    text-align: center;
}

.checkout-payment-method ul {
    margin: 0;
    padding: 0;
    list-style: none;
}

.checkout-payment-method ul > li {
    display: inline-block;
    margin: 2px 5px 0 0;
    font-size: 22px;
    color: #aaa;
}

.checkout-payment-method .secure-payment {
    font-size: 11px;
    line-height: 14px;
}

.checkout-payment-method .secure-payment > h6 {
    margin: 0 0 0px;
    font-weight: 700;
}

.checkout-payment-method .secure-payment > h6 span {
    color: #0d3a8d;
}

.pd-checkout-summary-wrap .pd-checkout-btn-row {
    position: relative;
    display: block;
    text-align: center;
}

.pd-checkout-summary-wrap .pd-checkout-btn-row .btn {
    font-family: 'Open Sans', sans-serif;
    font-weight: 500;
    font-size: 18px;
    padding: 12px 20px;
    color: #fffc01;
    line-height: 20px;
    background-color: #22292f;
    border-color: #22292f;
    -webkit-transition: background 0.2s linear;
    -moz-transition: background 0.2s linear;
    -o-transition: background 0.2s linear;
    transition: background 0.2s linear;
}

.pd-checkout-summary-wrap .pd-checkout-btn-row .btn:hover {
    border-color: #000000;
    color: #fff;
    background-color: #000000;
}

.pd-checkout-summary-wrap .pd-checkout-btn-row span {
    font-size: 12px;
    font-weight: 500;
    color: #757575;
    margin-top: 8px;
    position: relative;
    display: block;
}

.checkoutmain .checkimgmain .checktitle span h4 {
    margin: 0!important;
    font-family: 'Quicksand', sans-serif;
    font-weight: 500;
    font-size: 14px;
}

.order-proplus .opp-item .oppitem-info span.opt_title {
    width: 68%!important;
    text-align: left;
    font-family: 'Work Sans', sans-serif;
    font-weight: 500;
    font-size: 14px;
}

.order-proplus .opp-item .oppitem-info .add-btn {
    width: 50px!important;
    text-align: left;
}

.order-proplus .opp-item .oppitem-info span.opt_title span {
    float: none;
    text-align: left;
    font-family: 'Open Sans', sans-serif;
    font-weight: 400;
}

/* responsive start*/

@media (max-width:1199px) {
    .order-proplus .opp-item .oppitem-info .add-btn {
        width: 40px!important;
    }
}

.pd-checkout-section {
    position: relative;
    display: block;
    padding:0;
}

.pd-pkg-custome-wrap {
    position: relative;
    display: block;
}

.pd-pkg-custome-wrap .pd-pkg-custome-summary {
    position: relative;
    display: block;
    margin-bottom: 40px;
    border-bottom: 1px solid #f1f1f1;
    padding-bottom: 40px;
}

.pd-pkg-custome-wrap .pd-pkg-custome-summary .pd-pkg-customize {
    position: relative;
    display: block;
    padding-right: 15px;
}

.pd-pkg-custome-wrap .pd-pkg-custome-summary .pkg-custome-summary-title {
    font-size: 26px;
    font-weight: 400;
    margin: 0 0 22px;
}

.pd-pkg-custome-wrap .pd-pkg-custome-summary .pd-pkg-custome-img {
    position: relative;
    display: block;
    height: 80px;
    width: 80px;
    margin-right: 5px;
}

.pd-pkg-custome-wrap .pd-pkg-custome-summary .pd-pkg-custome-img img {
    height: 100%;
    width: 100%;
}

.pd-pkg-custome-wrap .pd-pkg-custome-summary .pd-pkg-custome-img.check-out-logo-design {
    background-image: none;
}

.pd-pkg-custome-wrap .pd-pkg-custome-summary .pd-pkg-custome-img.check-out-logo-design img {
    display: block;
}

.pd-pkg-custome-wrap .pd-pkg-custome-summary .pd-pkg-custome-img.check-out-stationery-design {
    background-position: -160px 0px;
}

.pd-pkg-custome-wrap .pd-pkg-custome-summary .pd-pkg-custome-img.check-out-banner-design {
    background-position: -480px 0px;
}

.pd-pkg-custome-wrap .pd-pkg-custome-summary .pd-pkg-custome-img.check-out-social-media-design {
    background-position: -80px 0px;
}

.pd-pkg-custome-wrap .pd-pkg-custome-summary .pd-pkg-custome-img.check-out-business-cards-design {
    background-position: -400px 0px;
}

.pd-pkg-custome-wrap .pd-pkg-custome-summary .pd-pkg-custome-img.check-out-book-cover {
    background-position: -320px 0px;
}

.pd-pkg-custome-wrap .pd-pkg-custome-summary .pd-pkg-custome-img.check-out-signage-design {
    background-position: -560px 0px;
}

.pd-pkg-custome-wrap .pd-pkg-custome-summary .pd-pkg-custome-img.check-out-label-design {
    background-position: -640px 0px;
}

.pd-pkg-custome-wrap .pd-pkg-custome-summary .pd-pkg-custome-img.check-out-t-shirt-design {
    background-position: -240px 0px;
}

.pd-pkg-custome-wrap .pd-pkg-custome-summary .pkg-customize-info-wrap {
    position: relative;
    display: block;
    min-height: 60px;
}

.pkg-customize-info-wrap .pkg-customize-info-title {
    position: relative;
    display: block;
    margin-right: 60px;
}

.pkg-customize-info-wrap .pkg-customize-info-title .title {
    font-family: 'Open Sans', sans-serif;
    font-size: 22px;
    margin: 0 0 10px;
    font-weight: 500;
    color: #575757;
}

.pkg-customize-info-wrap .pkg-customize-qty {
    position: absolute;
    right: 0;
    top: 0;
    min-width: 60px;
    text-align: right;
}

.pkg-customize-info-wrap .pkg-customize-qty .pkg-custome-price {
    display: inline-block;
    position: relative;
    width: 55px;
    text-align: right;
    font-size: 18px;
    font-weight: 500;
    margin-left: 5px;
}

.pkg-customize-info-wrap .pd-selected-pkg {
    position: relative;
    display: block;
    font-weight: 600;
}

.pkg-customize-info-wrap .pd-selected-pkg span {
    font-weight: normal;
}

.pkg-customize-info-wrap .pd-pkg-feature-view-link {
    line-height: 20px;
    padding-top: 15px;
    position: relative;
    display: block;
}

.pkg-customize-info-wrap .pd-pkg-feature-view-link a,
.pkg-customize-info-wrap .pd-pkg-feature-view-link a span {
    position: relative;
    display: inline-block;
}

.pkg-customize-info-wrap .pd-pkg-feature-view-link a span:after {
    content: '\f107';
    font-family: FontAwesome;
    position: absolute;
    right: -15px;
}

.pd-pkg-custome-wrap .pd-pkg-custome-summary .pd-pkg-included-feature-wrap {
    position: relative;
}

.pd-pkg-custome-wrap .pd-pkg-custome-summary .pd-pkg-included-feature-wrap .pd-pkg-included-feature-list {
    padding: 20px 0 0;
    margin: 0 auto;
    display: table;
    width: 100%;
    list-style: none;
    font-weight: 400;
    font-family: 'Work Sans', sans-serif;
}

.pd-pkg-custome-wrap .pd-pkg-custome-summary .pd-pkg-included-feature-wrap .pd-pkg-included-feature-list > li {
    position: relative;
    display: block;
    color: #757575;
    padding: 0px 40px 0 18px;
    line-height: 26px;
    width: 33.33%;
    float: left;
    font-size: 14px;
}

.pd-pkg-custome-wrap .pd-pkg-custome-summary .pd-pkg-included-feature-wrap .pd-pkg-included-feature-list > li:before {
    content: "\f10c";
    display: none;
    font-family: 'FontAwesome';
    position: absolute;
    left: 2px;
    font-size: 8px;
    color: #42ae84;
    line-height: 26px;
}

.pd-pkg-custome-wrap .pd-pkg-custome-summary .pd-pkg-included-feature-wrap .pd-pkg-included-feature-list > li span {
    position: relative;
    z-index: 2;
    padding-right: 7px;
}

.pd-pkg-custome-wrap .pd-pkg-custome-summary .pd-pkg-included-feature-wrap .pd-pkg-included-feature-list > li span.pif-value {
    position: absolute;
    right: 10px;
    width: 30px;
    line-height: 26px;
    text-align: center;
    font-size: 14px;
    padding: 0;
}

.pd-pkg-extra-wrap {
    position: relative;
    display: block;
}

.pd-pkg-extra-wrap .pd-pkg-extra-title {
    font-size: 18px;
    margin: 0 0 5px 15px;
}

.pd-pkg-extra-wrap .pd-pkg-extra-desc {
    margin: 0 0 15px 15px;
}

.pd-pkg-extra-wrap .pd-pkg-extra-feature-wrap {
    position: relative;
    display: block;
}

.pd-pkg-extra-wrap .pd-pkg-extra-feature-wrap ul.pkg-extra-feature-list {
    padding: 0;
    margin: 0;
    list-style: none;
}

ul.pkg-extra-feature-list > li.pkg-extra-feature-item {
    position: relative;
    display: flex;
    margin: -1px 0 0 0;
    padding: 20px 15px;
    border: 1px solid transparent;
}

ul.pkg-extra-feature-list > li.pkg-extra-feature-item:hover,
ul.pkg-extra-feature-list > li.pkg-extra-feature-item.added {
    background: rgba(218, 225, 231, 0.42);
    border: 1px solid #b8c2cc;
    cursor: pointer;
}

ul.pkg-extra-feature-list > li.pkg-extra-feature-item .pkg-extra-feature-check {
    width: 30px;
    position: relative;
    margin-right: 10px;
    padding-right: 0;
    text-align: center;
}

.pkg-extra-feature-item .pkg-extra-feature-check .feature-checkbox {
    opacity: 0;
    position: absolute;
}

.pkg-extra-feature-item .pkg-extra-feature-check .feature-item-check {
    position: relative;
    display: block;
    border: 1px solid #fffc01;
    color: #0d3a8d;
    width: 24px;
    height: 24px;
    border-radius: 50%;
    letter-spacing: 0;
    line-height: 20px;
    text-align: center;
    opacity: 1;
    font-size: 20px;
    transition: all 0.3s;
    -webkit-transition: all 0.3s;
}

.pkg-extra-feature-item:hover .pkg-extra-feature-check .feature-item-check {
    opacity: 1;
}

.pkg-extra-feature-item.added .pkg-extra-feature-check .feature-item-check {
    background-color: transparent;
    border-color: #757575;
    color: #757575;
    opacity: 1;
    transform: rotate(45deg);
}

.pkg-extra-feature-item.added .pkg-extra-feature-check .feature-item-check:hover {
    border-color: #f35c5c;
    color: #f35c5c;
}

.pkg-extra-feature-item.deactive .pkg-extra-feature-check .feature-item-check {
    border-color: #cdcdcd;
    color: #cdcdcd;
}

ul.pkg-extra-feature-list > li.pkg-extra-feature-item .media-body {
    position: relative;
    overflow: visible;
}

ul.pkg-extra-feature-list > li.pkg-extra-feature-item .extra-feature-item-info {
    position: relative;
    display: block;
    margin-right: 155px;
}

ul.pkg-extra-feature-list > li.pkg-extra-feature-item .extra-feature-item-info .title {
    margin: 0 0 5px;
    font-size: 16px;
}

ul.pkg-extra-feature-list > li.pkg-extra-feature-item .extra-feature-item-info p {
    margin: 0;
    color: #757575;
    font-size: 13px;
}

ul.pkg-extra-feature-list > li.pkg-extra-feature-item .extra-feature-item-qty {
    position: absolute;
    top: -4px;
    right: 0;
    min-width: 155px;
    text-align: right;
}

ul.pkg-extra-feature-list > li.pkg-extra-feature-item .extra-feature-item-qty .extra-feature-qty-box {
    position: relative;
    display: none;
}

ul.pkg-extra-feature-list > li.pkg-extra-feature-item .extra-feature-item-qty .extra-feature-qty-box label {
    font-weight: 500;
    margin: 0;
}

ul.pkg-extra-feature-list > li.pkg-extra-feature-item .extra-feature-item-qty .extra-feature-qty-box input {
    width: 60px;
    padding-left: 5px;
}

ul.pkg-extra-feature-list > li.pkg-extra-feature-item .extra-feature-item-qty .extra-feature-price {
    position: relative;
    display: inline-block;
    font-family: 'Open Sans', sans-serif;
    width: 45px;
    text-align: right;
    font-weight: 400;
    margin-left: 5px;
}

ul.pkg-extra-feature-list > li.pkg-extra-feature-item.added .extra-feature-item-qty .extra-feature-price {
    font-weight: 600;
}

ul.pkg-extra-feature-list > li.pkg-extra-feature-item.added .extra-feature-item-qty .extra-feature-qty-box {
    display: inline-block;
}

.pd-checkout-section .alert-success.checkout-alert {
    background-color: #e7f2ff;
    border-color: #a4bfe0;
    border-radius: 0;
    border-width: 0 0 0 5px;
    color: #757575;
    font-size: 16px;
    padding: 10px 15px;
    margin-bottom: 30px;
}

.pd-checkout-section .alert-success.checkout-alert .close {
    right: 0;
    top: 0;
    color: #a4bfe0;
    opacity: 1;
    text-shadow: none;
}

.pd-checkout-section .alert-success.checkout-alert .close:focus,
.pd-checkout-section .alert-success.checkout-alert .close:hover,
.pd-checkout-section .alert-success.checkout-alert .close:active {
    outline: none!important;
    text-decoration: none;
}


/* ----------- PD Checkout summary Start --------- */

.pd-checkout-section .pd-checkout-summary-wrap {
    position: relative;
    display: block;
    margin: 0px 0 0 30px;
    font-family: 'Work Sans', sans-serif;
}

.pd-checkout-section .pd-checkout-summary-wrap .pd-checkout-summary-box {
    position: relative;
    margin-bottom: 10px;
    padding: 15px;
    display: block;
    border: 1px solid #eeeeee;
}

.pd-checkout-summary-wrap .pd-checkout-summary-title {
    margin: 0 0 15px;
    font-size: 18px;
    font-weight: 600;
}

.pd-checkout-summary-wrap .pd-checkout-subtotal-box {
    position: relative;
    display: block;
    border-bottom: 1px solid #eee;
    padding-bottom: 5px;
    margin-bottom: 10px;
}

.pd-checkout-summary-wrap .pd-checkout-subtotal-box .pd-checkout-subtotal-list {
    padding: 0;
    margin: 0;
    list-style: none;
    font-size: 14px;
}

.pd-checkout-summary-wrap .pd-checkout-subtotal-box .pd-checkout-subtotal-list > li {
    position: relative;
    display: block;
    margin: 5px 0px 10px;
}

.pd-checkout-summary-wrap .pd-checkout-subtotal-box .pd-checkout-subtotal-list > li span {
    float: right;
}

.pd-checkout-summary-wrap .pd-checkout-total-box {
    position: relative;
    display: block;
    margin-bottom: 14px;
}

.pd-checkout-total-box .pd-checkout-total-list {
    padding: 0;
    margin: 0;
    list-style: none;
    font-size: 14px;
}

.pd-checkout-summary-wrap .pd-checkout-total-box .pd-checkout-total-list > li {
    position: relative;
    display: block;
    margin: 5px 0px 10px;
}

.pd-checkout-summary-wrap .pd-checkout-total-box .pd-checkout-total-list > li:last-child {
    margin-bottom: 0;
}

.pd-checkout-summary-wrap .pd-checkout-total-box .pd-checkout-total-list > li span {
    float: right;
}

.pd-checkout-summary-wrap .pd-checkout-total-box .pd-checkout-total-list > li.pkg-total {
    font-weight: 500;
    font-size: 16px;
}

.pd-checkout-summary-wrap .pd-checkout-total-box .pd-checkout-total-list > li.pkg-total.pd-checkout-inr-total {
    margin: 5px 0 0;
}

.pd-checkout-summary-wrap .pd-checkout-total-box .pd-checkout-total-list > li.pkg-rate.pd-inr-rate {
    margin: 0 0 10px;
    font-size: 12px;
}

.pd-checkout-summary-wrap .checkout-payment-method ul {
    margin-bottom: 5px;
}

.pd-checkout-summary-wrap .checkout-payment-method ul > li:last-child {
    margin-right: 0;
}

.pd-checkout-summary-wrap .checkout-payment-method .secure-payment > h6 {
    margin-bottom: 5px;
    font-weight: 700;
    font-family: 'Open Sans', sans-serif;
}

.pd-checkout-summary-wrap .checkout-payment-method .secure-payment p {
    margin-bottom: 0;
    font-weight: 500;
    color: #757575;
}

.payment-term-condition{
    font-size: 12px;
    text-align: left;
    margin-bottom: 5px;
}

/* ----------- PD Checkout summary End --------- */

@media(max-width:1199px) {
    .pd-pkg-custome-wrap .pd-pkg-custome-summary .pd-pkg-included-feature-wrap .pd-pkg-included-feature-list > li {
        width: 50%;
    }
    .pd-checkout-section .pd-checkout-summary-wrap {
        margin-left: 0px;
    }
}

@media(max-width:991px) {
    .pd-checkout-section .pd-checkout-summary-wrap {
        margin: 30px 0 0 0px;
    }
}

@media(max-width:767px) {
    .pd-pkg-custome-wrap .pd-pkg-custome-summary .pd-pkg-included-feature-wrap .pd-pkg-included-feature-list > li {
        width: 50%;
    }
    .pd-pkg-extra-wrap .pd-pkg-extra-title,
    .pd-pkg-extra-wrap .pd-pkg-extra-desc {
        margin-left: 0;
    }
    .pd-checkout-section .alert-success.checkout-alert {
        font-size: 14px;
        padding: 8px 35px;
        margin-bottom: 30px;
    }
    .pd-checkout-section .alert-success.checkout-alert .close {
        right: -20px;
        position: relative;
    }
}

@media(max-width:560px) {
    ul.pkg-extra-feature-list > li.pkg-extra-feature-item .extra-feature-item-qty {
        position: relative;
        left: 0;
        text-align: left;
        margin-top: 10px;
    }
    ul.pkg-extra-feature-list > li.pkg-extra-feature-item .extra-feature-item-qty .extra-feature-price {
        display: block;
        margin-left: 0;
        text-align: left;
    }
    ul.pkg-extra-feature-list > li.pkg-extra-feature-item .extra-feature-item-info {
        margin-right: 0px;
    }
    ul.pkg-extra-feature-list > li.pkg-extra-feature-item {
        padding: 15px 15px;
    }
    .pd-pkg-custome-wrap .pd-pkg-custome-summary .pd-pkg-included-feature-wrap .pd-pkg-included-feature-list > li {
        width: 100%;
    }
    .pd-pkg-custome-wrap .pd-pkg-custome-summary {
        margin-bottom: 30px;
        padding-bottom: 30px;
    }
}

@media(max-width:460px) {
    .pkg-customize-info-wrap .pkg-customize-qty {
        position: relative;
        text-align: left;
        margin-top: 10px;
    }
    .pkg-customize-info-wrap .pkg-customize-qty .pkg-custome-price {
        width: inherit;
        margin-left: 0;
    }
    ul.pkg-extra-feature-list > li.pkg-extra-feature-item .extra-feature-item-info {
        margin-right: 0px;
    }
}

@media(max-width:391px) {
    .pkg-customize-info-wrap .pkg-customize-info-title {
        margin-right: 0px;
    }
    .pd-pkg-custome-wrap .pd-pkg-custome-summary .pd-pkg-included-feature-wrap .pd-pkg-included-feature-list > li {
        padding: 0 32px 0 0px;
    }
    .pd-pkg-custome-wrap .pd-pkg-custome-summary .pd-pkg-included-feature-wrap .pd-pkg-included-feature-list > li span.pif-value {
        right: 0;
    }
    .pd-checkout-section .alert-success.checkout-alert {
        padding: 8px 15px;
    }
    .pd-checkout-section .alert-success.checkout-alert .close {
        right: -8px;
    }
}

@media(max-width:359px) {
    .pd-pkg-custome-wrap .pd-pkg-custome-summary .pd-pkg-customize {
        padding-right: 0px;
    }
    .pd-pkg-custome-wrap .pd-pkg-custome-summary .pd-pkg-customize .pull-left {
        display: block;
        width: 100%;
        margin-right: 0;
        padding-right: 0;
    }
    .pd-pkg-custome-wrap .pd-pkg-custome-summary .pd-pkg-customize .pull-left .pd-pkg-custome-img {
        width: 80px;
        margin: 0 auto 15px;
    }
    .pd-pkg-custome-wrap .pd-pkg-custome-summary .pd-pkg-included-feature-wrap .pd-pkg-included-feature-list {
        padding-top: 10px;
    }
}

.alert-dismissible .close {
    padding: 0.55rem 1.05rem;
}

.promocode-input-group span{
    font-size: 12px;
}
</style>
@endsection

@section('content')
<!-- content start -->

   <div class="container product-single py-3 py-md-5">
        <!-- Checkout Section Start -->
        <section class="pd-checkout-section">
            <div class="">
                <div class="row">
                    <div class="col-md-12">
                        <div class="pd-pkg-custome-wrap">
                            <div class="row">
                                <!-- Checkout Package and Pro PLUS Column Start -->
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-12 ">
                                            <div class="alert alert-success alert-dismissible fade show checkout-alert" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                                Don't worry! We will gather details once order is placed.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pd-pkg-custome-summary">
                                        <!-- <h4 class="pkg-custome-summary-title">Customize Your Order</h4> -->
                                        <div class="media pd-pkg-customize">
                                            <div class="pull-left">
                                                <div class="pd-pkg-custome-img"><img src="{{url('images/products/primary/thumbnails/'.$product->image)}}" /></div>
                                            </div>
                                            <div class="media-body">
                                                <div class="pkg-customize-info-wrap">
                                                    <div class="pkg-customize-info-title">
                                                        <h6 class="title"> {{$product->name}}</h6>
                                                        <div class="pd-selected-pkg">Package: <span>{{$package->package}}</span></div>
                                                    </div>
                                                    <div class="pkg-customize-qty">
                                                        <div class="pkg-custome-price">${{$package->price}}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div id="pkgFeatures" class="pd-pkg-included-feature-wrap">
                                            <ul class="pd-pkg-included-feature-list clearfix">

                                                @php($packName = $package->package)
                                                @foreach($product->product_features as $fpackage)
                                                    @if((json_decode($fpackage->packages)->$packName) == 'checked')
                                                        <li><span>{{$fpackage->feature}}</span><span class="pif-value"><i class="fa fa-check"></i></span></li>

                                                    @elseif((json_decode($fpackage->packages)->$packName) == 'infinity')
                                                         <li><span>{{$fpackage->feature}}</span><span class="pif-value">∞</span></li>
                                                    @elseif((json_decode($fpackage->packages)->$packName) == 'dash')
                                                       
                                                    @else
                                                        <li><span>{{$fpackage->feature}}</span><span class="pif-value">{{json_decode($fpackage->packages)->$packName}}</span></li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pd-pkg-extra-wrap">
                                        <h4 class="pd-pkg-extra-title">Add Extra</h4>
                                        <p class="pd-pkg-extra-desc">Get the best addons that can be combined with your order for the complete branding.</p>
                                        <div class="pd-pkg-extra-feature-wrap">
                                            <ul class="pkg-extra-feature-list">

                                                @if(isset($product->extra_features) && $product->extra_features->count()>0)
                                                @foreach($product->extra_features as $exFeature)
                                                <li class="media pkg-extra-feature-item " data-price="{{$exFeature->charge}}" data-payload="{{json_encode($exFeature, JSON_HEX_TAG)}}">
                                                    <div class="pull-left pkg-extra-feature-check">
                                                        <input class="feature-checkbox" type="checkbox" name="" />
                                                        <div class="feature-item-check">&plus;</div>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="extra-feature-item-info">
                                                            <h6 class="title"> {{$exFeature->name}} </h6>
                                                            <p>{{$exFeature->description}}</p>
                                                        </div>
                                                        <div class="extra-feature-item-qty">
                                                            <div class="extra-feature-price"> ${{$exFeature->charge}}</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                @endforeach
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="pd-checkout-summary-wrap">
                                        <div class="pd-checkout-summary-box">
                                            <h4 class="pd-checkout-summary-title">Summary</h4>
                                            <div class="pd-checkout-subtotal-box">
                                                <ul class="pd-checkout-subtotal-list">
                                                    <li class="pd-checkout-package-price">{{$package->package}} Package <span>${{$package->price}}</span></li>
                                                    
                                                    <li class="pd-checkout-subtotal">Extra addons <span>$0.00</span></li>
                                                </ul>
                                            </div>
                                            <div class="pd-checkout-total-box">
                                                <ul class="pd-checkout-total-list">
                                                    <li class="pkg-total pd-checkout-total">Total <span>${{$package->price}}</span></li>
                                                </ul>
                                            </div>
                                            <div class="pd-checkout-btn-row">
                                                <p class="payment-term-condition">By placing an order, I agree to receive emails from designkago, <a href="/privacy-policy">Privacy Policy</a> and <a href="/user-agreement">User Agreement.</a></p>

                                                @if(Auth::guard('web')->check())
                                                    <a href="javascript:void(0)" id="processPayment" class="btn-block text-center btn text-white bg-dark my-2">Proceed to Payment
                                                    </a>
                                                @else
                                                    <a data-toggle="modal" href="javascript:void(0)" data-target="#login-modal" class="btn-block text-center btn text-white bg-dark">Proceed to Payment</a>
                                                @endif
                                            </div>
                                            <div class="checkout-payment-method">
                                                <ul>
                                                    <li><i class="fa fa-cc-paypal"></i></li>
                                                    <li><i class="fa fa-cc-visa"></i></li>
                                                    <li><i class="fa fa-cc-mastercard"></i></li>
                                                    <li><i class="fa fa-cc-amex"></i></li>
                                                    <li><i class="fa fa-cc-diners-club"></i></li>
                                                    <li><i class="fa fa-cc-discover"></i></li>
                                                    <li><i class="fa fa-cc-jcb"></i></li>
                                                </ul>
                                                <div class="clearfix"></div>
                                                <div class="text-center secure-payment">
                                                    <h6><span><i class="fa fa-lock"></i> SSL</span> SECURED PAYMENT</h6>
                                                    <p>Your information is protected by SHA-2 and 256-bit SSL encryption</p>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<!-- content end -->
@endsection

@section('extrascript')

<script type="text/javascript">

var cart = {};
    cart['items'] = {};
    cart['length'] = 0;
    cart['extraCharge'] = 0;
    cart['totalCharge'] = 0;
var only_once = true;

$(document).on('click','.pkg-extra-feature-item', function(e){
    var itm = $(this);
    if(itm.hasClass('deactive')){
        console.log('called');
        return false;
    }
    var ckbox = itm.find('.feature-checkbox');
    var itmval = JSON.parse(itm.attr('data-payload'));
    if(ckbox.prop('checked')){
        ckbox.prop('checked',false);
        remove_pro_item(itmval);
        itm.removeClass('added');
    }else{
        itm.addClass('added');
        add_pro_item(itmval);
        ckbox.prop('checked',true);
    }
});

function add_pro_item(item) {
    cart['items'][item.id] = item;
    cart['length']++;
    cart['extraCharge'] = cart['extraCharge'] + parseInt(item.charge);

    updateTotal();
}

function remove_pro_item(item) {
    delete cart['items'][item.id];
        cart['length']--;
        cart['extraCharge'] = cart['extraCharge'] - parseInt(item.charge);
    updateTotal();
}

function updateTotal() {
    var packageCharge = {!! json_encode($package->price) !!};
    cart.totalCharge = packageCharge + cart.extraCharge; 
    $('.pd-checkout-subtotal').html('Extra addons <span>$'+cart.extraCharge+'</span>');
    $('.pd-checkout-total').html('Total <span> $'+currencyFormat(cart.totalCharge)+'</span>');
       
}

function currencyFormat(num) {
  return num.toFixed(2).replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,');
}

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

function submitToCart(){
    var  html = '<form action="#"> @csrf'
        html += " <input name='exfeatures' type='hidden' value='"+JSON.stringify(cart)+"'>";
        html += " <input name='features' type='hidden' value='{{json_encode($product->product_features)}}'>";
        html += " <input name='package' type='hidden' value='{{json_encode($package)}}'> </form>";
      var product_id = {!! json_encode($product->id) !!};
      var urlPath = '{{ route("addProductToCart", ":id") }}';
            urlPath = urlPath.replace(':id',product_id);
        var powerForm = $(html);
    if(only_once){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $("meta[name='csrf-token']").attr('content')
            }
        });
        $.ajax({
            url: urlPath,
            method:'POST',
            data: new FormData(powerForm[0]),
            contentType: false,
            cache:false,
            processData: false,
            dataType:"json",
            success:function(data){
                if(data.success){
                    only_once = false;
                    window.location = "{{route('checkout.stripe')}}";
                } 
            }
        });
    }
}
$(function(){

    $("#processPayment").click(function() {
         submitToCart();
    });

$('#submitLogin').click(function(e){
        e.preventDefault();
        var form = $(this).closest('form');
        if(form.find("input[name='email']").val().trim() == '' || form.find("input[name='password']").val().trim() == ''){
            toastr.error("<span class='fa fa-exclamation-triangle font-24 mr-2'></span>  Please email and Password  are required!");
            return;
        }
        if(!validateEmail(form.find("input[name='email']").val().trim())){
            toastr.error("<span class='fa fa-exclamation-triangle font-24 mr-2'></span>  Please email is invalid!");
            return;
        }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $("meta[name='csrf-token']").attr('content')
            }
        });
        $.ajax({
            url: "{{ route('customer.login') }}",
            method:'POST',
            data: new FormData(form[0]),
            contentType: false,
            cache:false,
            processData: false,
            dataType:"json",
            success:function(data){
                if(data.success){
                    toastr.success("<span class='fa fa-exclamation-triangle font-24 mr-2'></span>  You are loggin successfully");
                    submitToCart();
                }else{
                    toastr.error("<span class='fa fa-exclamation-triangle font-24 mr-2'></span> Wrong credentials. Try again.");    
                }
            },
            error: function(data) {
                var errors = data.responseJSON;
                $.each(errors.errors, function( key, value ) {
                    toastr.error("<span class='fa fa-exclamation-triangle font-24 mr-2'></span>" + value[0]);
                });
            }
        });
    });

    $('#submitRegistration').click(function(e){
        e.preventDefault();
        var form = $(this).closest('form');
        if(form.find("input[name='email']").val().trim() == ''|| form.find("input[type='text']").val().trim() == '' || form.find("input[name='password']").val().trim() == ''){
            toastr.error("<span class='fa fa-exclamation-triangle font-24 mr-2'></span>  Please all fields  are required!");
            return;
        }
        if(!validateEmail(form.find("input[name='email']").val().trim())){
            toastr.error("<span class='fa fa-exclamation-triangle font-24 mr-2'></span>  Please email is invalid!");
            return;
        }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $("meta[name='csrf-token']").attr('content')
            }
        });
        $.ajax({
            url: "{{ route('customer.register') }}",
            method:'POST',
            data: new FormData(form[0]),
            contentType: false,
            cache:false,
            processData: false,
            dataType:"json",
            success:function(data){
                if(data.success){
                    toastr.success("<span class='fa fa-exclamation-triangle font-24 mr-2'></span>  You're registered and loggin");
                    submitToCart();
                }else{
                    toastr.error("<span class='fa fa-exclamation-triangle font-24 mr-2'></span> Wrong credentials. Try again.");    
                }
            },
            error: function(data) {
                var errors = data.responseJSON;
                $.each(errors.errors, function( key, value ) {
                    toastr.error("<span class='fa fa-exclamation-triangle font-24 mr-2'></span>" + value[0]);
                });
            }
        });
    });
});

</script>

@endsection