@extends('site.layouts.frontend')

@section('title')
 Payment Successful | Design Kago Company in Nigeria 
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
                    <div class="spacer"></div>
                    <div class="alert alert-success">
                        Thank you! Your payment was successful!
                    </div>
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="bg-grey-light">
                <div class="form-ctn shopping-form product-details">
                <form method="POST" id="design-form" action="{{route('order-desc.update')}}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="order_id" value="{{$createdOrder->id}}">
                    <div class="col-xs-12">
                        <div>
                           <h1 class="about-header bold-font" style="margin:auto auto 10px">
                            Submit a request for design</h1>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="contact-deatils">Please provide the full details for your order <span class="text-danger">*</span>
                        </label>
                        <textarea name="description" required rows="6" class="form-control">{{ old('description')}}</textarea>
                    </div>
                                     
                    <div class="col-xs-12 input-container">
                        <div class="form-group ">
                            <div class="uploader-area" style="width:100%">
                                <div>Upload Sample Images Here</div>
                                <label class="or">-You can select multiple files-</label>
                                <input type="file" class="m-auto form-control w-auto bg-transparent border-0" name="sample_files[]" accept="zip/*" multiple="multiple" title="Click to add Files">
                            </div>
                        </div>
                    </div>
                    <center>
                        <button class="btn bg-black text-yellow hover:text-white proceedButton">
                            Start Order
                        </button>
                    </center>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- content end -->
@endsection