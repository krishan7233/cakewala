@extends('website.website_app')
@section('content')

  <style>
    .checkout-page * {
      box-sizing: border-box;
      font-family: 'Segoe UI', sans-serif;
    }

    .checkout-page {
    background-color: #f9f9f9;
    padding: 80px 0;
    margin-top: 120px;
}

    .checkout-page .container {
      max-width: 1200px;
      margin: auto;
      padding: 20px;
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }

    .checkout-page .left, 
    .checkout-page .right {
      background: #fff;
      padding: 20px;
      border-radius: 8px;
    }

    .checkout-page .left {
      flex: 2;
      min-width: 300px;
    }

    .checkout-page .right {
      flex: 1;
      min-width: 280px;
      height: fit-content;
    }

    .checkout-page h2, 
    .checkout-page h3 {
      margin-top: 0;
    }

    .checkout-page .location-btn {
      background-color: #d9006c;
      color: #fff;
      border: none;
      padding: 10px 20px;
      margin: 10px 0;
      cursor: pointer;
      border-radius: 4px;
      font-weight: bold;
    }

    .checkout-page .form-group {
      margin-bottom: 15px;
    }

    .checkout-page label {
      display: block;
      margin-bottom: 6px;
      font-weight: 500;
    }

    .checkout-page input, 
    .checkout-page select {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .checkout-page .row {
      display: flex;
      gap: 20px;
      flex-wrap: wrap;
    }

    .checkout-page .row .form-group {
      flex: 1;
    }

    .checkout-page .address-type {
      display: flex;
      gap: 10px;
      margin: 20px 0;
    }

    .checkout-page .address-type button {
      flex: 1;
      padding: 10px;
      border: 1px solid #ccc;
      background-color: #fff;
      cursor: pointer;
      border-radius: 4px;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 5px;
    }

    .checkout-page .address-type .active {
      background-color: #d9006c;
      color: #fff;
      border-color: #d9006c;
    }

    .checkout-page .action-buttons {
      display: flex;
      gap: 20px;
    }

    .checkout-page .action-buttons button {
      flex: 1;
      padding: 14px;
      font-size: 16px;
      border: none;
      border-radius: 4px;
      font-weight: bold;
    }

    .checkout-page .cancel-btn {
      background: #f1f1f1;
      color: #333;
    }

    .checkout-page .save-btn {
      background: #2ecc71;
      color: #fff;
    }

    .checkout-page .summary h3 {
      margin-bottom: 20px;
    }

    .checkout-page .summary p {
      display: flex;
      justify-content: space-between;
      margin: 10px 0;
    }

    .checkout-page .summary .total {
      font-weight: bold;
      border-top: 1px dashed #ccc;
      padding-top: 10px;
      font-size: 18px;
    }
    .checkout-page h2, .checkout-page h3 {
    margin-top: 0;
    font-size: 20px;
}
.checkout-page .summary .proceed-btn {
      display: block;
      width: 100%;
      margin-top: 25px;
      padding: 14px;
      background-color: #d9006c;
      color: white;
      font-size: 16px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-weight: bold;
    }
    @media (max-width: 768px) {
      .checkout-page .container {
        flex-direction: column;
      }

      .checkout-page .row {
        flex-direction: column;
      }
    .checkout-page {
    background-color: #f9f9f9;
    padding: 50px 0;
    margin-top: 0px!important;
}
.checkout-page .container {
  margin: auto;
    padding: 0!important;
 gap: 20px;
   width: 95%;
}
      .checkout-page .action-buttons {
        flex-direction: column;
      }
    }
  </style>
</head>
<body>

<div class="checkout-page">
  <div class="container">
    <!-- Left Side -->
    <div class="left">
      <h2>Add Delivery Address</h2>
      


<form id="deliveryAddressForm">
  @csrf
  <div class="form-group">
    <label for="name">Recipient Name *</label>
    <input type="text" id="name" name="name" required>
  </div>

  <div class="form-group">
    <label for="address">Recipient Address *</label>
    <input type="text" id="address" name="address" required>
  </div>

  <div class="form-group">
    <label for="landmark">Landmark (optional)</label>
    <input type="text" id="landmark" name="landmark">
  </div>

  <div class="row">
    <div class="form-group">
      <label for="pincode">Pin Code *</label>
      <input type="text" id="pincode" name="pincode" required>
    </div>

    <div class="form-group">
      <label for="city">City *</label>
      <input type="text" id="city" name="city" required>
    </div>
  </div>

  <div class="row">
    <div class="form-group">
      <label for="mobile">Recipient Mobile Number *</label>
      <input type="tel" id="mobile" name="mobile" placeholder="+91" required>
    </div>

    <div class="form-group">
      <label for="altMobile">Alternate Mobile Number (optional)</label>
      <input type="tel" id="altMobile" name="altMobile" placeholder="+91">
    </div>
  </div>

  <div class="action-buttons">
    <button type="button" class="cancel-btn">CANCEL</button>
    <button type="submit" class="save-btn">SAVE</button>
  </div>
</form>
    </div>


    <div class="right summary">
      <h3>Delivery Address & Order Summary</h3>
      <p>Latest Address : {{@$latestAddress->name}},{{@$latestAddress->mobile}},{{@$latestAddress->address}},{{@$latestAddress->pincode}}</p>
     
      <p><span>MRP Total</span> <span>₹{{ number_format($mrpTotal, 2) }}</span></p>
      <p><span>MRP Discount</span> <span style="color: green;">- ₹{{ number_format($discount, 2) }}</span></p>
      <p><span>Delivery Charge</span> <span style="color: green;">{{ $deliveryCharge ?? 0 }}</span></p>
      <p><span>Convenience Charge</span> <span>₹{{ number_format($convenienceCharge, 2) }}</span></p>
      <p class="total"><span>Total Amount</span> <span class="total-amount-text">₹{{ number_format($totalAmount, 2) }}</span></p>
      <form action="{{ route('payment.initiate') }}" method="POST" id="paymentForm">
        @csrf
        
          <div class="small">Note for Cake: 
            <span class="add-message-btn" style="color: #f65555; cursor: pointer;">+Add</span>
          </div>
        <div class="cake-message-input" id="cake-message-input" style="display: none; margin-top: 10px;">
          <input type="text" name="order_messages" placeholder="Enter your cake message" style="padding: 8px; width: 100%; border: 1px solid #ccc; border-radius: 5px;">
        </div>
        <div id="couponprocess">
               <div class="small"> 
                    <span class="add-coupon-btn" style="color: #f65555; cursor: pointer;">Apply Coupon</span>
                  </div>
                <div class="coupon_code_input" id="coupon_code_input" style="display: none; margin-top: 10px;">
                  <input type="text" name="coupon_code_value" placeholder="Enter your code" style="padding: 8px; width: 100%; border: 1px solid #ccc; border-radius: 5px;">
                  <span id="apply_coupn_btn">apply</span>
                </div>
        </div>
        

  <!-- Payment Method -->
  <div class="input-field">
    <p>
      <label>
        <input name="payment_mode" type="radio" value="online" checked />
        <span>Online Payment</span>
      </label>
    </p>
    <p>
      <label>
        <input name="payment_mode" type="radio" value="offline" />
        <span>Offline Payment</span>
      </label>
    </p>
  </div>

  <input type="hidden" name="paymentvia" id="paymentvia" value="online">
        <input type="hidden" name="coupon_code" id="coupon_code" value="">
        <input type="hidden" name="address_id" id="address_id" value="{{ @$latestAddress->id }}">
        <input type="hidden" name="total_amount" id="total_amount" value="{{ $totalAmount}}">
        <button type="submit" class="proceed-btn">Proceed to Payment</button>
      </form>
    </div>
    
  </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    
    $(document).ready(function() {
        
    const onlineRoute = "{{ route('payment.initiate') }}";
    const offlineRoute = "{{ route('offlinePayment') }}";

    $('input[name="payment_mode"]').on('change', function () {
      const selected = $(this).val();
      $('#paymentvia').val(selected);

      if (selected === 'online') {
        $('#paymentForm').attr('action', onlineRoute);
      } else {
        $('#paymentForm').attr('action', offlineRoute);
      }
    });
    
    
    $('#apply_coupn_btn').on('click', function() {
        let couponCode = $('input[name="coupon_code_value"]').val();
        let totalAmount = parseFloat($('#total_amount').val()) || 0;

        if (couponCode.trim() === '') {
                    Swal.fire({
                    icon: 'warning',
                    title: 'Please enter a coupon code!',
                    timer: 2000
                });
                return;
        }

        $.ajax({
            url: '{{ route("api.check.coupon") }}', // Laravel route
            method: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                coupon_code: couponCode,
                total_amount: totalAmount
            },
            success: function(response) {
                if (response.status === 'success') {
                    let discount = parseFloat(response.discount) || 0;
                    let newTotal = totalAmount - discount;
                    if (newTotal < 0) newTotal = 0;
                    $('#coupon_code').val(couponCode);
                    $('#total_amount').val(newTotal.toFixed(2)); // Update hidden field
                    $('.total-amount-text').text(`₹ ${newTotal.toFixed(2)}`); // Update UI text if you have a total display
                    
                      Swal.fire({
                        icon: 'success',
                        title: response.message,
                        timer: 2000
                    });
                    $('#couponprocess').remove();

                } else {
                      Swal.fire({
                        icon: 'error',
                        title: response.message,
                        timer: 2000
                    });

                }
            },
            error: function(xhr) {
                alert('Something went wrong. Please try again.');
                console.log(xhr.responseText);
            }
        });
    });
});


  $(document).ready(function() {
     
     
    $('#deliveryAddressForm').on('submit', function(e) {
    e.preventDefault();

    var formData = {
      _token: $('input[name="_token"]').val(),
      name: $('#name').val(),
      address: $('#address').val(),
      landmark: $('#landmark').val(),
      pincode: $('#pincode').val(),
      city: $('#city').val(),
      mobile: $('#mobile').val(),
      altMobile: $('#altMobile').val()
    };

    $.ajax({
      url: "{{ route('delivery.address.store') }}",
      method: 'POST',
      data: formData,
      success: function(response) {
          messageSweetalert(response);
        
          $('#deliveryAddressForm')[0].reset();
      },
      error: function(xhr) {
        if (xhr.responseJSON.errors) {
          let errors = xhr.responseJSON.errors;
          let errorMsg = '';
          for (let key in errors) {
            errorMsg += errors[key][0] + '\n';
          }
          messageSweetalert(errorMsg);
        } else {
          messageSweetalert('Something went wrong!');
        }
      }
    });
  });
  
  
  $('.add-message-btn').on('click', function() {
    var $messageInput = $(this).closest('.small').next('.cake-message-input');
    
    if ($messageInput.length) {
      if ($messageInput.is(':hidden')) {
        $messageInput.show();
        $(this).text('Edit');
      } else {
        $messageInput.hide();
        $(this).text('+Add');
      }
    }
  });
    
      $('.add-coupon-btn').on('click', function() {
        var $couponInput = $(this).closest('.small').next('.coupon_code_input');
        
        if ($couponInput.length) {
          if ($couponInput.is(':hidden')) {
            $couponInput.show();
            $(this).text('Edit');
          } else {
            $couponInput.hide();
            $(this).text('+Add');
          }
        }
      });
  
  
        
        
      $('#paymentForm').on('submit', function(e) {
          e.preventDefault(); // Prevent default form submission
            
          let addressId = $('#address_id').val();
          let totalAmount = $('#total_amount').val(); // Remove commas
                let paymentVia = $('#paymentvia').val();

          if (!addressId || addressId.trim() === '') {
              alert('Please select a valid delivery address before proceeding.');
              return false;
          }
  
          if (!totalAmount || isNaN(totalAmount) || parseFloat(totalAmount) <= 0) {
              alert('Total amount is missing or invalid. Please check your cart.');
              return false;
          }
          if (!paymentVia || (paymentVia !== 'online' && paymentVia !== 'offline')) {
            alert('Please select a payment method (Online or Offline) before proceeding.');
            return false;
        }
        console.log($('#paymentForm').attr('action'));

          
          console.log('sssssss');
  
          // All validations passed, submit the form
        //   this.submit();
        document.getElementById('paymentForm').submit();

      });
  });
  </script>

@endsection