@extends('website.website_app')
@section('content')

  <style>
  

    .container3 {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: center;
      margin-top: 190px;
    }

    .coupon {
      background: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.2);
      padding: 20px;
      width: 280px;
    }

    .coupon h2 {
      margin-top: 0;
      font-size:20px;
    }

    .coupon p {
      margin: 10px 0;
    }

    .code {
      display: inline-block;
      background-color: #d88027;
      color: white;
      font-weight: bold;
      padding: 10px 20px;
      border-radius: 5px;
      font-size: 18px;
      margin: 10px 0;
    }

    .footer1 {
      max-width: 800px;
      margin: 40px auto;
      text-align: center;
    }

    .footer1 h3 {
      font-size: 20px;
    }

    @media (max-width: 600px) {
      .coupon {
        width: 100%;
      }
   
.container3 {
    width: 100%;
    margin-top: 110px;
    margin-bottom: 80px;
    padding: 0 10px;

}
body.city-home {
    padding: 0!important;
}
.footer1 {
 padding: 0 10px;
}
    }
    
    
    
    
.coupon-container {
    margin-bottom: 10px;
}
.get-code-btn {
    padding: 6px 12px;
    background: #28a745;
    color: white;
    border: none;
    cursor: pointer;
}
.copy-btn {
    background: transparent;
    border: none;
    cursor: pointer;
    font-size: 18px;
}
.expired {
    color: red;
    font-weight: bold;
}

  </style>

  <div class="container3">
@foreach($couponlist as $c_list)
    <div class="coupon">
      <h2>{{$c_list->description}}</h2>
      <p><strong>Min Order {{$c_list->min_order_value}}+</strong></p>
        
        @if($c_list->status == 'active')
            <div class="coupon-container">
                <button class="get-code-btn" data-code="{{ $c_list->code }}">Get Code</button>
        
                <div class="code-container" style="display: none;">
                    <span class="coupon-code">{{ $c_list->code }}</span>
                    <button class="copy-btn" data-clipboard-text="{{ $c_list->code }}">📋</button>
                </div>
            </div>
        @else
            <div class="expired">Expired</div>
        @endif

      <p>Valid Till: {{ \Carbon\Carbon::parse($c_list->end_date)->format('d F Y') }}</p>
    </div>
@endforeach
  </div>

  <div class="footer1">
    <h3>Cake Plaza Offers & Coupons: Indulge in Unbeatable Deals, Just Like Our Cakes</h3>
    <p>
      Best deals / Coupons / Offers on customized gifts, birthday gifts, wedding gifts and additional. 
      Send Gifts online to your lover & Special one and save with the most recent gifts offers with the Cake Plaza only. 
      We have special offers for your every special occasion. Connect us at 9873739058/9873731736 for getting the best deals & offers.
    </p>
  </div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).on('click', '.get-code-btn', function() {
    const container = $(this).closest('.coupon-container');
    container.find('.code-container').show();
    $(this).hide();
});

// Copy to clipboard
$(document).on('click', '.copy-btn', function() {
    const code = $(this).data('clipboard-text');
    navigator.clipboard.writeText(code).then(function() {
        alert('Coupon code copied!');
    }, function(err) {
        alert('Failed to copy code.');
    });
});
</script>


@endsection