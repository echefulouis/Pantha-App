<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title> Design Kago | Logo Design Business Card Design in Company </title> 
    <meta name="description" content="Design Kago is specialist in business branding; while our services covers Logo, business card, letterhead, brochure design and website design and many more; and We turn your raw Dreams and Imaginations into creative and awesome Designs.">

    <meta name="keywords" content="Design Kago, design agency, Graphics design, Business cards, luxury business cards, two-sided business cards, Uyo, Nigiera, best business card Printer, luxury business cards, beautiful business cards, paper bags, plastic identity cards, sponsored ads, website design, logo design, stickers, business cards in Lagos, Uyo, Port Harcourt, Nigiera">
    
    <link href="{{ asset('images/favicons/box-icon.png') }}" type="image/x-icon" rel="shortcut icon" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="{{asset('frontend/vendors/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet">

      <style type="text/css">  
     /**
       * The CSS shown here will not be introduced in the Quickstart guide, but shows
       * how you can use CSS to style your Element's container.
       */

       html,body{
          font-family: sans, "Helvetica Neue", Helvetica, sans-serif;
       }
      .StripeElement {
        box-sizing: border-box;

        height: 40px;

        padding: 10px 12px;

        border: 1px solid #cfd7df;
        border-radius: 4px;
        background-color: white;

        box-shadow: 0 1px 3px 0 #e6ebf1;
        -webkit-transition: box-shadow 150ms ease;
        transition: box-shadow 150ms ease;
      }

      .StripeElement--focus {
        box-shadow: 0 1px 3px 0 #cfd7df;
      }

      .StripeElement--invalid {
        border-color: #fa755a;
      }

      .StripeElement--webkit-autofill {
        background-color: #fefde5 !important;
      }

      #card-errors{
        color: #fa755a;
      }

      #complete-order{
            background-color: #232323;
            color: white;
      }
      #complete-order:hover{
        background-color: #000000;
      }
      label {
        display: inline-block;
        margin-bottom: 0rem;
        font-size: 12px;
      }
        .card-header:first-child {
          font-size: 14px;
          font-weight: 600;
        }
      input[type="text"]{
        box-shadow: 0 1px 3px 0 #e6ebf1;
      }
      input[type="text"]::-webkit-input-placeholder {
          color: #aab7c4;
          font-size: 14px;
      }
      input[type="text"]::-moz-placeholder { /* Firefox 19+ */
        color: #aab7c4;
        font-size: 14px;
      }
      input[type="text"]:-ms-input-placeholder { /* IE 10+ */
        color: #aab7c4;
        font-size: 14px;
      }
      input[type="text"]:-moz-placeholder { /* Firefox 18- */
        color: #aab7c4;
        font-size: 14px;
      }

        .Card--shadow--medium {
          box-shadow: 0 7px 14px 0 rgba(60,66,87, 0.08), 0 3px 6px 0 rgba(0,0,0, 0.12);
          }
        .order-amount,.order-details{
          font-family: 'Fira Sans', sans-serif;
        }
        .payments-by-stripe {
            color: #607d98;
            opacity: .5;
            position: relative;
            bottom: -.75em;
        }
        
        .cc-logos {
            color: #607d98;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            font-size: 1.375em;
        }
        .cc-logos i{
          margin-right:5px;
        }
      </style>
    <script src="https://js.stripe.com/v3/"></script>

  </head>

  <body style="background: #e3e8ee">   
      <div class="container">
        <div class="row justify-content-center pt-5">
          <div class="col-md-8  col-lg-6">

              <div class="card border-0 Card--shadow--medium" >
              <div class="card-header d-flex align-items-center justify-content-between">
                Credit / Debit Card
    
              </div>
              <div class="card-block p-md-5">
                @if (session()->has('success_message'))
                    <div class="spacer"></div>
                    <div class="alert alert-success">
                        {{ session()->get('success_message') }}
                    </div>
                @endif

                @if(count($errors) > 0)
                    <div class="spacer"></div>
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                              <li>{!! $error !!}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div >
                  <div class="order-amount">
                    <h4 class="text-center">${{number_format($cart->totalPrice)}} USD</h4>
                    <p  class="text-center">Customer email: {{Auth::user()->email}} </p>
                  </div>
                </div>

               <form action="{{ route('stripe.pay') }}" method="post" id="payment-form">
                @csrf
                  <div class="form-row">
                    <label for="card-element">
                      Card Number
                    </label>
                    <div id="card-element">
                      <!-- A Stripe Element will be inserted here. -->
                    </div>
                    <!-- Used to display form errors. -->
                    <div id="card-errors" role="alert"></div>
                    <div class="form-group mt-3">
                    <label for="name_on_card" >Card Name</label>
                      <input class="form-control" type="text"  placeholder="Card bearer" value="" id="name_on_card">
                  </div>
                  </div>
                  <div class="form-group mt-4">
                    <button id="complete-order" class="btn btn-block">Pay Now</button>
                  </div>
                </form>
                <div class="payments-by-stripe d-flex justify-content-between">
                  <div class="cc-logos">
                    <i class="fa fa-cc-visa"></i>
                    <i class="fa fa-cc-mastercard"></i>
                    <i class="fa fa-cc-amex"></i>
                    <i class="fa fa-cc-discover"></i>
                  </div>
                  <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="104" height="18" viewBox="0 0 104 18"><title>stripe-logo</title><g fill="#607D98" fill-rule="evenodd"><path d="M52.7 14.437h-1.305l1.01-2.494-2.01-5.072h1.379l1.263 3.452 1.273-3.452h1.379L52.7 14.437zm-5.01-2.178c-.452 0-.916-.168-1.336-.495v.369h-1.347V4.566h1.347v2.663c.42-.316.884-.484 1.336-.484 1.41 0 2.378 1.136 2.378 2.757 0 1.62-.968 2.757-2.378 2.757zm-.284-4.357c-.368 0-.737.158-1.052.474v2.252c.315.315.684.473 1.052.473.758 0 1.284-.652 1.284-1.599s-.526-1.6-1.284-1.6zm-7.852 3.862c-.41.327-.873.495-1.336.495-1.4 0-2.378-1.137-2.378-2.757 0-1.621.978-2.757 2.378-2.757.463 0 .926.168 1.336.484V4.566h1.358v7.567h-1.358v-.369zm0-3.388c-.305-.316-.673-.474-1.041-.474-.769 0-1.295.653-1.295 1.6 0 .947.526 1.599 1.295 1.599.368 0 .736-.158 1.041-.473V8.376zM31.535 9.87c.084.8.716 1.347 1.599 1.347.485 0 1.021-.179 1.568-.495v1.127a4.298 4.298 0 0 1-1.789.41c-1.589 0-2.704-1.158-2.704-2.799 0-1.589 1.094-2.715 2.599-2.715 1.379 0 2.315 1.084 2.315 2.63 0 .148 0 .316-.021.495h-3.567zm1.221-2.084c-.653 0-1.158.485-1.221 1.211h2.294c-.042-.716-.473-1.211-1.073-1.211zm-4.768.832v3.515h-1.347V6.871h1.347v.526c.379-.421.842-.652 1.294-.652.148 0 .295.01.442.052v1.2a1.77 1.77 0 0 0-.473-.063c-.442 0-.916.242-1.263.684zM21.979 9.87c.084.8.715 1.347 1.599 1.347.484 0 1.021-.179 1.568-.495v1.127c-.6.273-1.2.41-1.789.41-1.589 0-2.704-1.158-2.704-2.799 0-1.589 1.094-2.715 2.599-2.715 1.378 0 2.315 1.084 2.315 2.63 0 .148 0 .316-.021.495h-3.567zm1.22-2.084c-.652 0-1.157.485-1.22 1.211h2.294c-.042-.716-.474-1.211-1.074-1.211zm-5.925 4.347L16.2 8.555l-1.063 3.578h-1.21l-1.81-5.262h1.347l1.063 3.578 1.063-3.578h1.22l1.063 3.578 1.063-3.578h1.347l-1.799 5.262h-1.21zm-8.231.126c-1.589 0-2.715-1.147-2.715-2.757 0-1.621 1.126-2.757 2.715-2.757s2.705 1.136 2.705 2.757c0 1.61-1.116 2.757-2.705 2.757zm0-4.388c-.789 0-1.336.663-1.336 1.631s.547 1.631 1.336 1.631c.779 0 1.326-.663 1.326-1.631s-.547-1.631-1.326-1.631zM3.128 9.533h-1.21v2.6H.571V4.892h2.557c1.474 0 2.526.958 2.526 2.326S4.602 9.533 3.128 9.533zm-.189-3.546H1.918v2.452h1.021c.779 0 1.326-.495 1.326-1.221 0-.736-.547-1.231-1.326-1.231zm100.177 4.064h-5.559c.127 1.331 1.102 1.723 2.209 1.723 1.127 0 2.015-.238 2.789-.628v2.287c-.771.428-1.79.736-3.147.736-2.766 0-4.704-1.732-4.704-5.156 0-2.892 1.644-5.188 4.345-5.188 2.697 0 4.105 2.295 4.105 5.203 0 .275-.025.87-.038 1.023zM99.031 6.14c-.71 0-1.499.536-1.499 1.815h2.936c0-1.278-.74-1.815-1.437-1.815zm-8.923 8.029c-.994 0-1.601-.419-2.009-.718l-.006 3.213-2.839.604-.001-13.254h2.5l.148.701a3.18 3.18 0 0 1 2.224-.89c1.994 0 3.872 1.796 3.872 5.102 0 3.608-1.858 5.242-3.889 5.242zm-.662-7.829c-.651 0-1.06.238-1.356.563l.017 4.219c.276.299.673.539 1.339.539 1.05 0 1.754-1.143 1.754-2.672 0-1.485-.715-2.649-1.754-2.649zm-8.297-2.326h2.85v9.952h-2.85V4.014zm0-3.178l2.85-.606v2.313l-2.85.606V.836zM78.11 7.219v6.747h-2.838V4.014h2.455l.178.839c.665-1.222 1.992-.974 2.37-.838v2.61c-.361-.117-1.494-.287-2.165.594zm-6.086 3.256c0 1.673 1.792 1.152 2.155 1.007v2.311c-.378.208-1.064.376-1.992.376-1.685 0-2.95-1.241-2.95-2.922l.013-9.109 2.772-.59.002 2.466h2.156v2.421h-2.156v4.04zm-3.539.484c0 2.044-1.627 3.21-3.988 3.21-.979 0-2.049-.19-3.105-.644v-2.711c.953.518 2.167.907 3.108.907.633 0 1.089-.17 1.089-.695 0-1.355-4.316-.845-4.316-3.988 0-2.01 1.535-3.213 3.838-3.213.941 0 1.881.144 2.822.519v2.675c-.864-.467-1.961-.731-2.824-.731-.595 0-.965.172-.965.615 0 1.278 4.341.67 4.341 4.056z"/></g></svg>
                 </div>
            </div>

                <div class="order-details pt-5">
                    <h4></h4>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Description</th>
                          <th>Qty</th>
                          <th>Amount</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>

                          <div class="media pd-pkg-customize">
                              <div class="pull-left">
                                  <div class="pd-pkg-custome-img"><img width="70" height="70" src="{{url('images/products/primary/thumbnails/'.$cart->items['product']->image)}}" /></div>
                              </div>
                              <div class="media-body">
                                  <div class="pkg-customize-info-wrap">
                                      <div class="pkg-customize-info-title ml-2">
                                          <h6 class="title"> {{$cart->items['product']->name}}</h6>
                                          <div class="text-sm" style="font-size:12px;">{{json_decode($cart->items['request']['package'])->package}} package</span></div>
                                      </div>
                                      <div class="pkg-customize-qty">
                                          <div class="pkg-custome-price"></div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          </td>
                          <td>{{$cart->totalQty}}</td>
                          <td>${{number_format($cart->totalPrice)}}</td>
                        </tr>
                      </tbody>
                    </table>
                </div>
              </div>
            </div>
          </div>
        </div> 
       
      </div>
    <script type="text/javascript">
      
              // Create a Stripe client.
        var stripe = Stripe('{{ config('services.stripe.key') }}');
        // Create an instance of Elements.
        var elements = stripe.elements();
        // Custom styling can be passed to options when creating an Element.
        // (Note that this demo uses a wider set of styles than the guide below.)
        var style = {
          base: {
            color: '#32325d',
            fontFamily: '"sans, Helvetica Neue", Helvetica, sans-serif',
            fontSmoothing: 'antialiased',
            fontSize: '14px',
            '::placeholder': {
              color: '#aab7c4'
            }
          },
          invalid: {
            color: '#fa755a',
            iconColor: '#fa755a'
          }
        };

        // Create an instance of the card Element.
        var card = elements.create('card', {style: style,hidePostalCode:true});

        // Add an instance of the card Element into the `card-element` <div>.
        card.mount('#card-element');

        // Handle real-time validation errors from the card Element.
        card.addEventListener('change', function(event) {
          var displayError = document.getElementById('card-errors');
          if (event.error) {
            displayError.textContent = event.error.message;
          } else {
            displayError.textContent = '';
          }
        });

        // Handle form submission.
        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
          event.preventDefault();

          // Disable the submit button to prevent repeated clicks
              document.getElementById('complete-order').disabled = true;

              var options = {
                name: document.getElementById('name_on_card').value,

              }

          stripe.createToken(card, options).then(function(result) {
            if (result.error) {
              // Inform the user if there was an error.
              var errorElement = document.getElementById('card-errors');
              errorElement.textContent = result.error.message;
              document.getElementById('complete-order').disabled = false;

            } else {
              // Send the token to your server.
              stripeTokenHandler(result.token);
            }
          });
        });

        // Submit the form with the token ID.
        function stripeTokenHandler(token) {
          // Insert the token ID into the form so it gets submitted to the server
          var form = document.getElementById('payment-form');
          var hiddenInput = document.createElement('input');
          hiddenInput.setAttribute('type', 'hidden');
          hiddenInput.setAttribute('name', 'stripeToken');
          hiddenInput.setAttribute('value', token.id);
          form.appendChild(hiddenInput);

          // Submit the form
          form.submit();
        }
    </script>
  </body>
</html>