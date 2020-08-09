@extends('site.layouts.frontend')

@section('title')
 Payment Fail | Design Kago Company in Nigeria 
@endsection

@section('description')
Design Kago is specialist in business branding; while our services covers Logo, business card, letterhead, brochure design and website design and many more; and We turn your raw Dreams and Imaginations into creative and awesome Designs.
@endsection

@section('keywords')
Design Kago, design agency, Graphics design, Business cards, luxury business cards, two-sided business cards, Uyo, Nigiera
@endsection

@section('content')
<!-- content start -->

<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="alert w-full justify-between items-center bg-black alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <p class="d-flex justify-between">
                    <h5 class="text-yellow"><span class="fa fa-times mr-2"> </span>@if(isset($error)) {{$error}} @endif</h5>
                </p>
            </div>
            <p>
                Please <a href="{{route('rave-pay')}}" class="text-primary underline">try again</a> Or contact us immediately ...
            </p>
        </div>
    </div>
</div>

<!-- content end -->
@endsection