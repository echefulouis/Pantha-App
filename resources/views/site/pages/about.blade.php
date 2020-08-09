@extends('site.layouts.frontend')

@section('title')
 About | Design Kago Company in Nigeria 
@endsection

@section('description')
Design Kago is specialist in business branding; while our services covers Logo, business card, letterhead, brochure design and website design and many more; and We turn your raw Dreams and Imaginations into creative and awesome Designs.
@endsection

@section('keywords')
Design Kago, design agency, Graphics design, Business cards, luxury business cards, two-sided business cards, Uyo, Nigiera
@endsection

@section('content')
<!-- content start -->
<div class="container py-20">
    <div class="row justify-content-center">
        
        <div class="col-12 col-md-10 ">
            <h1 class="about-header bold-font">About Us</h1>
            <div>
                {!! $about->body !!}
            </div>
        </div>
    </div>
</div>
<!-- content end -->
@endsection