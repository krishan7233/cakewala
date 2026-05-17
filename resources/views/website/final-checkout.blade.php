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
label {
    font-size: .8rem;
    color: #000;
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
    input#product_messages {
    width: 45%!important;
    padding: 0 10px!important;
}


input#modalTime {
    padding-left: 0!important;
}
input#modalDate {
    padding-left: 0!important;
}
div#cartOptionsModal {
    height: 500px;
    width: 40%;
}
.modal input {
    width: 100%!important;
}
a#saveDeliveryInfo {
    background: #000;
    color: #fff;
    margin-right: 40px;
    width: 11%;
}
[type=radio]+span:after, [type=radio]+span:before {
    opacity: 1!important;
}
      @media only screen and (min-width: 601px) {
      .datepicker-date-display {
      display: none !important;
      -webkit-box-flex: 0;
      -webkit-flex: 0 1 270px;
      -ms-flex: 0 1 270px;
      flex: 0 1 270px;
      }
      a.breadcrumb {
    font-size: 12px;
}
.datepicker-date-display {
    padding: 10px!important;
}
.breadcrumb:last-child {
    color: #000000;
    font-size: 12px;
}

.datepicker-modal {
    max-width: 2px !important;
    left: 0% !important;
    top: 0% !important;
    min-width: 100%!important;
    bottom: 0;
}
.modal .modal-content {
    padding: 0px 0px 0px 0px !important;
}
#cartOptionsModal span {
    width: 93%;
    margin-bottom: 0px!important;
}
      }
      .datepicker-clear {
      display: none !important;
      }
      .datepicker-done {
      right: 4%;
      background: #5DA434 !important;
      position: absolute;
      padding: 0px 25px;
      color: white;
      }
      .datepicker-cancel {
      background: red !important;
      padding: 0px 15px;
      color: white;
      }
      .datepicker-calendar-container {
      margin-bottom: 0px !important;
      }
      ::placeholder {
      /* Chrome, Firefox, Opera, Safari 10.1+ */
      color: #333333;
      opacity: 1;
      /* Firefox */
      }
      :-ms-input-placeholder {
      /* Internet Explorer 10-11 */
      color: #333333;
      }
      ::-ms-input-placeholder {
      /* Microsoft Edge */
      color: #333333;
      }
      
      .dateFilter {
      margin-left: 14%;
      }
      #cartOptionsModal p label {
    border: 1px solid #000;
    padding: 8px;
    width: 100%;
    max-width: 100%;
    min-width: 100%;
}
#cartOptionsModal span {
    width: 93%;
    margin-bottom: 10px;
}
div#cartOptionsModal {
    padding: 10px;
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
    margin-top: 60px!important;
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
    
        @media only screen and (max-width: 600px) {
        
              div#cartOptionsModal {
    height: 500px;
    width: 99%;
}
a#saveDeliveryInfo {
    background: #000;
    color: #fff;
    margin-right: 40px;
    width: 20%;
}
    input#deliveryInfo {
width: 88%;
  }
       
       .modal .modal-content {
    padding: 0px;
}     
        }
        
        
  </style>

  <style>
    .checkout-container {
        display: flex;
        flex-wrap: wrap;
        gap: 30px;
    }

    .checkout-container .left, .checkout-container .right {
        flex: 1;
        min-width: 300px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
        width: 100%;
        padding: 8px;
        border-radius: 4px;
        border: 1px solid #ccc;
    }

    .input-field p {
        margin-bottom: 10px;
    }

    .input-field label {
        font-weight: normal;
    }

    .proceed-btn {
        background-color: #28a745;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        width: 100%;
        cursor: pointer;
    }

    .proceed-btn:hover {
        background-color: #218838;
    }

    .summary p {
        display: flex;
        justify-content: space-between;
        margin-bottom: 5px;
    }

    .summary .total {
        font-weight: bold;
        border-top: 1px solid #ccc;
        padding-top: 10px;
        margin-top: 10px;
    }
</style>
</head>
<body>

<div class="checkout-page">
  <div class="container">
        
      
<form action="{{ route('payment.initiate') }}" method="POST" id="paymentForm">
    @csrf

    <div class="checkout-container">

        <!-- LEFT SIDE -->
        <div class="left">
            <h2>Order Details</h2>

            <!-- Delivery Info -->
            <div class="form-group">
                <label for="delivery_date">Delivery Date and Time *</label>
                <input type="text" id="deliveryInfo" placeholder="Click To Select Delivery Date/Time & Shipping Type" readonly class="modal-trigger" data-target="cartOptionsModal">
                <small style="color: red;">
                    *Delivery date is only tentative for courier products. Delivery not guaranteed on that date.
                </small>
            </div>
            <div id="occasionSelect" class="form-group">
              <label for="Occasion">Occasion *</label>
                        <select name="occasion" id="occasion" class=" occasion-select browser-default" style="border: 1px solid #dddddd;width: 100%;margin-top: 23px;" data-gtm-form-interact-field-id="0">
                                <option class="option" value="Rakshabandhan">Rakshabandhan</option>
                            
                                <option class="option" value="Birthday">Birthday</option>
                            
                                <option class="option" value="Anniversary">Anniversary</option>
                            
                                <option class="option" value="I am sorry">I am sorry</option>
                            
                                <option class="option" value="Get well soon">Get well soon</option>
                            
                                <option class="option" value="Just like that">Just like that</option>
                            
                                <option class="option" value="Congratulations">Congratulations</option>
                            
                                <option class="option" value="Wedding">Wedding</option>
                            
                                <option class="option" value="New born">New born</option>
                            
                                <option class="option" value="Cheer up">Cheer up</option>
                            
                                <option class="option" value="Appreciation">Appreciation</option>
                            
                                <option class="option" value="Thank You">Thank You</option>
                            
                                <option class="option" value="Other">Other</option>
                            
                                <option class="option" value="Love and Affection">Love and Affection</option>
                            
                                <option class="option" value="Navaratri">Navaratri</option>
                            
                        </select>
            </div>
            <!-- Personal Message -->
            <div class="form-group">
                <label for="message">Personal Message</label>
                <textarea id="ake-message-input" name="order_messages" rows="4" maxlength="250" placeholder="Write your message here..."></textarea>
                <div style="text-align: right; font-size: 12px;">
                    <span id="charCount">0</span>/250
                </div>
            </div>

            <!-- Sender Info -->
            <div class="form-group">
                <label for="sender_name">Sender Name *</label>
                <input type="text" id="sender_name" name="sender_name" value="{{ auth()->user()->name }}" required>
            </div>

            <div class="form-group">
                <label for="sender_phone">Sender Phone Number *</label>
                <div style="display: flex; gap: 5px;">
                    <select name="sender_country_code" style="width: 80px;">
                        <option value="+91" selected>+91</option>
                    </select>
                    <input type="tel" id="sender_phone" name="sender_phone" value="{{ auth()->user()->mobile }}" pattern="[6-9]{1}[0-9]{9}" required>
                </div>
            </div>
        </div>

        <!-- RIGHT SIDE -->
        <div class="right summary">
            <h3>Delivery Address & Order Summary</h3>

            <p><strong>Latest Address:</strong> {{ @$latestAddress->name }}, {{ @$latestAddress->mobile }}, {{ @$latestAddress->address }}, {{ @$latestAddress->pincode }}</p>

            <p><span>MRP Total</span> <span>₹{{ number_format($mrpTotal, 2) }}</span></p>
            <p><span>MRP Discount</span> <span style="color: green;">- ₹{{ number_format($discount, 2) }}</span></p>
            <p><span>Delivery Charge</span> <span id="dlv_charge">₹{{ $deliveryCharge ?? 0 }}</span></p>
            <p><span>Convenience Charge</span> <span>₹{{ number_format($convenienceCharge, 2) }}</span></p>
            <p class="total"><span>Total Amount</span> <span class="total-amount-text">₹{{ number_format($totalAmount, 2) }}</span></p>

            <!-- Coupon -->
            <div id="couponprocess">
                <div class="small">
                    <span class="add-coupon-btn" style="color: #f65555; cursor: pointer;">Apply Coupon</span>
                </div>
                <div class="coupon_code_input" id="coupon_code_input" style="display: none; margin-top: 10px;">
                    <input type="text" name="coupon_code_value" placeholder="Enter your code" style="padding: 8px; width: 100%; border: 1px solid #ccc; border-radius: 5px;">
                    <span id="apply_coupn_btn">apply</span>
                </div>
            </div>

            <!-- Payment Mode -->
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
                        <span>Cash On Delivery</span>
                    </label>
                </p>
            </div>

            <!-- Error Display -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul style="margin: 0; padding-left: 20px;">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Hidden Fields -->
            <input type="hidden" name="paymentvia" id="paymentvia" value="online">
            <input type="hidden" name="coupon_code" id="coupon_code" value="">
            <input type="hidden" name="address_id" id="address_id" value="{{ @$latestAddress->id }}">
            <input type="hidden" name="total_amount" id="total_amount" value="{{ $totalAmount }}">
            <input type="hidden" id="selectedDate" name="selectedDate">
            <input type="hidden" id="selectedDeliveryType" name="selectedDeliveryType">
            <input type="hidden" id="selectdeliveryTypeLabel" name="selectdeliveryTypeLabel">
            <input type="hidden" id="selectedTimeSlot" name="selectedTimeSlot">

            <!-- Submit Button -->
            <button type="submit" class="proceed-btn">Proceed to Payment</button>
        </div>

    </div>
</form>


  </div>
</div>


<!--- modal -->

  <div id="cartOptionsModal" class="modal">
   <div class="modal-content">
     <h5>Select Delivery Options</h5>
 
         
         <!-- Step 1: Date Selection -->
            <div class="input-field" id="step1">
              <input type="text" id="modalDate" class="datepicker" required>
              <label for="modalDate">Select Delivery Date</label>
            </div>

            <!-- Step 2: Delivery Type (hidden initially) -->
            <div id="step2" style="display: none; margin-top: 20px;">
              <h6>Select Delivery Type</h6>
              
              <p>
                <label>
                  <input name="deliveryType" type="radio" value="99" data-type="fixed" />
                  <span>Fixed Time Delivery (₹99)</span>
                </label>
              </p>
              <div class="time-slots" id="timeSlotsFixed" style="display: none; margin-left: 20px;">
                <p>Select a time slot for Fixed Time Delivery:</p>
                <p>
                  <label>
                    <input name="timeSlot" type="radio" value="10:00 AM - 11:00 AM" />
                    <span>10:00 AM - 11:00 AM</span>
                    </label>
                </p>
                <p>
                  <label>
                    <input name="timeSlot" type="radio" value="11:00 AM - 12:00 PM" />
                     <span>11:00 AM - 12:00 PM</span>
                  </label>
                </p>
                 <p>
                  <label>
                    <input name="timeSlot" type="radio" value="12:00 PM - 01:00 PM" />
                    <span>12:00 PM - 01:00 PM</span>
                  </label>
                </p>
                 <p>
                  <label>
                    <input name="timeSlot" type="radio" value="01:00 PM - 02:00 PM" />
                     <span>01:00 PM - 02:00 PM</span>
                  </label>
                </p>
                 <p>
                  <label>
                    <input name="timeSlot" type="radio" value="02:00 PM - 03:00 PM" />
                     <span>02:00 PM - 03:00 PM</span>
                  </label>
                </p>
                 <p>
                  <label>
                    <input name="timeSlot" type="radio" value="03:00 PM - 04:00 PM" />
                <span>03:00 PM - 04:00 PM</span>
                  </label>
                </p>
                  <p>
                  <label>
                    <input name="timeSlot" type="radio" value="04:00 PM - 05:00 PM" />
               <span>04:00 PM - 05:00 PM</span>
                  </label>
                </p>
                 <p>
                  <label>
                    <input name="timeSlot" type="radio" value="05:00 PM - 06:00 PM" />
                    <span>05:00 PM - 06:00 PM</span>
                  </label>
                </p>
                 <p>
                  <label>
                    <input name="timeSlot" type="radio" value="06:00 PM - 07:00 PM" />
                     <span>06:00 PM - 07:00 PM</span>
                  </label>
                </p>
                  <p>
                  <label>
                    <input name="timeSlot" type="radio" value="07:00 PM - 08:00 PM" />
                      <span>07:00 PM - 08:00 PM</span>
                  </label>
                </p>
                   <p>
                  <label>
                    <input name="timeSlot" type="radio" value="08:00 PM - 09:00 PM" />
                         <span>08:00 PM - 09:00 PM</span>
                  </label>
                </p>
                  <p>
                  <label>
                    <input name="timeSlot" type="radio" value="09:00 PM - 10:00 PM" />
                       
                    <span>09:00 PM - 10:00 PM</span>
                  </label>
                </p>
              </div>
              
              <p>
                <label>
                  <input name="deliveryType" type="radio" value="249" data-type="pre-midnight" />
                  <span>Pre Mid-Night Delivery (₹249)</span>
                </label>
              </p>
              <div class="time-slots" id="timeSlotsPreMidnight" style="display: none; margin-left: 20px;">
                <p>Select a time slot for Pre Mid-Night Delivery:</p>
                <p>
                  <label>
                    <input name="timeSlot" type="radio" value="11:00 PM - 11:59 PM" />
                    <span>11:00 PM - 11:59 PM</span>
                  </label>
                </p>
              </div>
              
                  <p>
                    <label>
                      <input name="deliveryType" type="radio" value="19" data-type="standard" />
                      <span>Standard Delivery (₹19)</span>
                    </label>
                  </p>
                  <div class="time-slots" id="timeSlotsStandard" style="display: none; margin-left: 20px;">
                    <p>Select a time slot for Standard Delivery:</p>
                    <p>
                      <label>
                        <input name="timeSlot" type="radio" value="09:00 AM - 01:00 PM" />
                        <span>09:00 AM - 01:00 PM</span>
                      </label>
                    </p>
                     <p>
                      <label>
                        <input name="timeSlot" type="radio" value="01:00 PM - 05:00 PM" />
                        <span>01:00 PM - 05:00 PM</span>
                      </label>
                    </p>
                     <p>
                      <label>
                        <input name="timeSlot" type="radio" value="05:00 PM - 09:00 PM" />
                        <span>05:00 PM - 09:00 PM</span>
                      </label>
                    </p>
                     <p>
                      <label>
                        <input name="timeSlot" type="radio" value="07:00 PM - 11:00 PM" />
                        <span>07:00 PM - 11:00 PM</span>
                      </label>
                    </p>
                  </div>
                  
                  
                     <p>
                    <label>
                      <input name="deliveryType" type="radio" value="49" data-type="eariest" />
                      <span>Eariest Delivery (₹49)</span>
                    </label>
                  </p>
                  <div class="time-slots" id="timeSlotsEeariest" style="display: none; margin-left: 20px;">
                    <p>Select a time slot for Standard Delivery:</p>
                    <p>
                      <label>
                        <input name="timeSlot" type="radio" value="3:00 PM - 5:00 PM" />
                        <span>3:00 PM - 5:00 PM</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="timeSlot" type="radio" value="7:00 PM - 9:00 PM" />
                        <span>7:00 PM - 9:00 PM</span>
                      </label>
                    </p>
                  </div>
                  
                  
            </div>

         


   </div>
 
   <div class="modal-footer">
     <a href="#!" class="modal-close waves-effect waves-green btn-flat" id="saveDeliveryInfo">Save</a>
   </div>
 </div>


<script>
document.getElementById('mobile').addEventListener('input', function () {
  const mobile = this.value;
  const error = document.getElementById('mobile-error');

  const isValid = /^[6-9]\d{9}$/.test(mobile);
  if (!isValid) {
    this.setCustomValidity("Invalid mobile number");
    error.style.display = 'inline';
  } else {
    this.setCustomValidity("");
    error.style.display = 'none';
  }
});
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    
    $(document).ready(function() {
        
        
        
        
    $('.modal').modal({
        onOpenEnd: function () {
          const $input = $('#modalDate');
          const instance = M.Datepicker.getInstance($input[0]);
          setTimeout(function () {
            $input.focus();
            instance.open();
          }, 100); 
        }
    });
  
  // Initialize Datepicker
  $('.datepicker').datepicker({
    format: 'yyyy-mm-dd',
    minDate: new Date(),
    defaultDate: new Date(),
    setDefaultDate: true,
    autoClose: false,
    onSelect: function() {
      $('#step2').fadeIn(); // Show delivery type options after date selected
      // Reset selections if user changes date
      $('input[name="deliveryType"]').prop('checked', false);
      $('input[name="timeSlot"]').prop('checked', false);
      $('.time-slots').hide();
    },
    onOpen: function() {
    // Show delivery type only when input has value already
     if ($('#modalDate').val() !== '') {
        $('#step2').fadeIn();
      }
    }
  });

  // Show time slots based on delivery type selection
  $('input[name="deliveryType"]').change(function() {
    // Hide all time slot sections first
    $('.time-slots').hide();
    $('input[name="timeSlot"]').prop('checked', false);

    let selectedType = $(this).data('type');

    if (selectedType === 'fixed') {
      $('#timeSlotsFixed').fadeIn();
    } else if (selectedType === 'pre-midnight') {
      $('#timeSlotsPreMidnight').fadeIn();
    } else if (selectedType === 'standard') {
      $('#timeSlotsStandard').fadeIn();
    } else if (selectedType === 'eariest') {
      $('#timeSlotsEeariest').fadeIn();
    }
    
  });
  
    
    // Handle Save Button
  $('#saveDeliveryInfo').click(function() {
    let date = $('#modalDate').val();
    let deliveryType = $('input[name="deliveryType"]:checked').val();
    let deliveryTypeLabel = $('input[name="deliveryType"]:checked').next('span').text();
    let timeSlot = $('input[name="timeSlot"]:checked').val() || '';

    // Validation
    if (!date || !deliveryType || ($('input[name="deliveryType"]:checked').data('type') === 'fixed' && !timeSlot)) {
      M.toast({ html: 'Please complete all steps!' });
      return;
    }

    console.log("Date:", date);
    console.log("Delivery Type:", deliveryTypeLabel);
    console.log("Time Slot:", timeSlot);

    // Populate hidden fields (if any)
    $('#selectdeliveryTypeLabel').val(deliveryTypeLabel);
    $('#selectedDate').val(date);
    $('#selectedDeliveryType').val(deliveryType);
    $('#selectedTimeSlot').val(timeSlot);

    // You can also update a combined field if needed
    $('#deliveryInfo').val(`${date} - ${deliveryTypeLabel} ${timeSlot ? '(' + timeSlot + ')' : ''}`);
    M.updateTextFields();
        $('#dlv_charge').text(deliveryType);

        let deliveryCharge = parseFloat($('#dlv_charge').text()) || 0;

     let originalTotal = parseFloat($('#total_amount').val()) || 0;
    
        let grandTotal = originalTotal + deliveryCharge;
        console.log(deliveryCharge,originalTotal,grandTotal);
        // Update display
        $('.total-amount-text').text('₹' + grandTotal.toFixed(2));
        $('#total_amount').val(grandTotal);
        
    M.toast({ html: 'Delivery options saved!' });
  });
  
  
  
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
          
        let date = $('#selectedDate').val();
        let time = $('#selectedTimeSlot').val();
        let shipping = $('#selectedDeliveryType').val();
        let shipping_type_message = $('#selectdeliveryTypeLabel').val();
        
        if (!date || !time || !shipping || !shipping_type_message) {
            alert('Please select all required fields: Date, Time Slot, Delivery Type, and Delivery Message.');
            return false; // Prevent form submission or further actions
        }
        
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
       
  
          // All validations passed, submit the form
        //   this.submit();
        document.getElementById('paymentForm').submit();

      });
  });
  </script>

@endsection