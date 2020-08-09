@extends('site.layouts.frontend')

@section('title')
 Rave Payment | Design Kago Company in Nigeria 
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
    
@php
$parameters = array(array('metaname' => 'customer_id', 'metavalue' => Auth::guard('web')->user()->id));
@endphp
<!-- <h3>Buy Movie Tickets N500.00</h3> -->
<form method="POST" class="d-none" action="{{ route('pay') }}" id="paymentForm">
    {{ csrf_field() }}
    <input type="hidden" name="amount" value="{{$totalPrice}}" /> <!-- Replace the value with your transaction amount -->
    <input type="hidden" name="payment_method" value="both" /> <!-- Can be card, account, both -->
    <input type="hidden" name="description" value="Order placement" /> <!-- Replace the value with your transaction description -->
    <input type="hidden" name="country" value="NG" /> <!-- Replace the value with your transaction country -->
    <input type="hidden" name="currency" value="USD" /> <!-- Replace the value with your transaction currency -->
    <input type="hidden" name="email" value="{{Auth::guard('web')->user()->email}}" /> <!-- Replace the value with your customer email -->
    <input type="hidden" name="firstname" value="{{Auth::guard('web')->user()->name}}" /> <!-- Replace the value with your customer firstname -->
    <input type="hidden" name="metadata" value="{{ json_encode($parameters) }}" > <!-- Meta data that might be needed to be passed to the Rave Payment Gateway -->
    {{-- <input type="hidden" name="paymentplan" value="362" /> <!-- Ucomment and Replace the value with the payment plan id --> --}}
    <input type="hidden" name="logo" value="{{asset('images/svg/brand box logo.svg')}}" /> <!-- Replace the value with your logo url (Optional, present in .env)-->
       
    <!-- <input type="submit" class="btn hover:text-white bg-black text-yellow" value="Pay Now"  /> -->
</form>


</div>
<!-- content end -->
@endsection

@section('extrascript')

<script type="text/javascript">
    $(function(){
        $('#paymentForm').submit();
    });
</script>
@endsection