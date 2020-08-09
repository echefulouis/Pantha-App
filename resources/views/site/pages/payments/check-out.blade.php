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
@section('content')
<!-- content start -->

<div class="container py-5">
    <div class="row justify-content-center">
        
        <div class="col-md-10 mb-4 ">
            <h1 class="about-header bold-font">Choose your mode of payment</h1>
        </div>
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">
                              <i class="fa fa-text-width"></i>
                              Pay through rave
                            </h5>
                            <img src="{{asset('images/payments/Grayscale-to-Colour.gif')}}">
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            
                            @include('site.transaction.rave')
                                
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">
                              <i class="fa fa-text-width"></i>
                              Transfer and upload transaction detail
                            </h5>
                            <div>
                                <p class="text-green-light">Make payment and get instance approval</p>
                                <div class="py-2">
                                <p> <b> Account Name:</b> {{$contact->acc_name}}</p>
                                <p> <b> Account Number:</b> {{$contact->acc_number}} </p>
                                <p> <b> Bank:</b> {{$contact->bank_name}} </p>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">                  
                            
                            <a href="javascript:void()" data-toggle="modal" data-target="#paymentMobileTransfer" class="btn  hover:text-white bg-black text-yellow">
                                Upload Payment detail
                            </a>
                        
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </div>
 
</div>

<!-- Modal -->
<div class="modal fade" id="paymentMobileTransfer" tabindex="-1" role="dialog" aria-labelledby="paymentMobileTransferTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="paymentMobileTransferTitle">Upload File</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{route('submit.transaction.data')}}" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <label class="text-green-dark">Please upload the screenshot of your completed transaction</label>
                    <div class="custom-file">
                        <input type="file" name="transaction_image" class="custom-file-input" id="validatedCustomFile" required>
                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                        @if ($errors->has('transaction_image'))
                            <label class="error text-danger animated font-12 shake" for="validatedCustomFile">{{ $errors->first('transaction_image')}}</label>
                        @endif
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn  hover:text-white bg-black text-yellow">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- content end -->
@endsection